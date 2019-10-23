@extends('layouts.app')
@section('title','Detai for '.$customer->name )
@section('content')
<div class="row">
  <div class="col-12">
    <h1>Details For {{ $customer->name }}</h1>
  </div>
</div>
<div class="row">
    <div class="col-12">
        <a href="{{ $customer->id }}/edit">Edit</a>

        <form action="{{ url('customers/'.$customer->id) }}" method="post">
            @method("DELETE")
            @csrf
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <strong>Name: </strong>{{ $customer->name }}
    </div>
    <div class="col-12">
        <strong>Email: </strong>{{ $customer->email }}
    </div>
    <div class="col-12">
        <strong>Company: </strong>{{ $customer->company->name }}
    </div>
</div>
@stop
