@extends('layout')
  
@section('content')
<div class="cotainer">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <center><div class="card-header">Here is Han's web!</div></center>
                <div class="card-body">
                    
                    <center><a class="navbar-brand" href="{{ route('login') }}">Please login!</a></center>
                </div>  
            </div>
        </div>
    </div>
</div>
@endsection