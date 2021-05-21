@extends('layout') 

@section('content')
    <div class="container">
        <div class="row">
        <h4 class="size-4">Vehicle Offer and Sale Agreement</h4>
            @include('sub-customer')
            
            @include('child')
            
            @include('sub-payment')
            
            @include('sub-terms')
        </div>
    </div>       
@endsection