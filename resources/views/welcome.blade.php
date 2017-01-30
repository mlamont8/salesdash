@extends('layouts.base')

@section('content')
	<div class="jumbotron">
            <h1>Sales Dash</h1>
            <p>Update and review sales information for sales agents</p>
            <p>
                <a class="btn btn-lg btn-primary" href="{{route('dash')}}" role="button">Your Dashboard</a>
            </p>
        </div>
@endsection