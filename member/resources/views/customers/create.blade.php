@extends('layouts.app')
@section('title','Customers')
@section('content')
<div class="row">
  <div class="col-12">
    <h1>Customers List</h1>
  </div>
</div>
<div class="row">
    <div class="col-12">
        <form class="pb-3" action="{{ url('customers') }}" method="post">
            @include('customers.form')
            <button type="submit" name="button" class="btn btn-primary">Save Customers</button>
            @csrf
          </form>
    </div>
</div>
@stop
