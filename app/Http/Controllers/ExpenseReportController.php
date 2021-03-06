<?php

namespace App\Http\Controllers;

use App\ExpenseReport;
use Illuminate\Http\Request;

class ExpenseReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('expenseReport.index',[
            'expenseReports' => ExpenseReport::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('expenseReport.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validaData = $request->validate([
            'title' => 'required|min:3'
        ]);
        $report = new ExpenseReport();
        $report->title = $request->get('title');
        $report->save();
        return redirect('expense_reports');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ExpenseReport $expenseReport)
    {
        return view('expenseReport.show',[
            'report' => $expenseReport
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reports = ExpenseReport::findOrFail($id);
        return view('expenseReport.edit',[
            'report' => $reports
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $report = ExpenseReport::find($id);
        $report->title = $request->get('title');
        $report->save();
        return redirect('/expense_reports');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $report = ExpenseReport::find($id);
        $report->delete();
        return redirect('/expense_reports');
    }
    public function confirmDelete($id){
        $reports =ExpenseReport::find($id);
        return view('expenseReport.confirmDelete',[
            'report' => $reports
        ]);
    }
    public function traffik(){
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET','http://localhost/api/prueba'
        //         'proxy' => [
        //             'http'  => 'tcp://10.130.10.9:8080', // Use this proxy with "http"
        //             'https' => 'tcp://10.130.10.9:8080', // Use this proxy with "https",
        //         ]
        // ]
        // [
        //     'headers'=>[
        //         'accept' => 'application/json',
        //         'Authorization' => 'Bearer'.env('TOKEN_TRAFFIK')
        //     ]
        // ]
    );
        return $response;
    }
}
