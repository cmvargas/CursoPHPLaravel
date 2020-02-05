@extends('layouts.base')
@section('content')
<div class="row">
    <div class="col">
      <div class="row">
        <div class="col">
          <h1>Report {{$report->title}}</h1>
        </div>
      </div>
      <div class="row">
        <div class="col">
            <a class="btn btn-secondary" href="/expense_reports">back</a>
        </div>
      </div>
      <div class="row">
        Details...
      </div>
    </div>
</div>
@endsection
