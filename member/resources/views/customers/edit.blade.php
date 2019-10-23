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
        <form class="pb-3" action="{{ url('customers/'.$customer->id) }}" method="post">
            @method("PATCH")
            @include('customers.form')
            <button type="submit" name="button" class="btn btn-primary">Update</button>
            @csrf
          </form>
    </div>
  </div>
@stop
