@extends('layouts.master')
@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
               {{--('You are logged in!')--}}
            <div class="card" align="center">
                <div class="card-header">{{ __('Login First!') }}</div>

                <div class="card-body">
                  
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
 <div  align="center"><a href="{{ route('login') }}">Login</a></div>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection