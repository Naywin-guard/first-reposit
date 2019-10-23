@extends('layouts.app')
@section('title','Customers')
@section('content')
<div class="row">
  <div class="col-12">
    <h1>Customers List</h1>
  </div>
</div>
<div class="col-12">
    <form action="customers/create">
        <button class="btn btn-success">Add New Customer</button>
    </form>
</div>
<hr>
<div class="row">
  @foreach ($customers as $customer)
  <div class="col-3">
    {{ $customer->id }}
  </div>
  <div class="col-3">
    <a href="customers/{{ $customer->id }}">{{$customer->name }}</a>
  </div>
  <div class="col-3">
    {{ $customer->company->name }}
  </div>

  {{-- <div class="col-3">
    {{ $customer->active? "Active":"Inactive"}}
  </div> --}}

  <div class="col-3">
    {{ $customer->active }}
  </div>
  @endforeach
</div>
@stop
