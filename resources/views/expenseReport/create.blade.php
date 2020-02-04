@extends('layouts.base')
@section('content')
<div class="row">
    <div class="col">
      <div class="row">
        <div class="col">
          <h1>Reports</h1>
        </div>
      </div>
      <div class="row">
        <div class="col">
            <a class="btn btn-secondary" href="/expense_reports">back</a>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <form action="/expense_reports" method="post">
            @csrf
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" class="form-control" id="title" name="title" placeholder="Type a title">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
</div>
@endsection
