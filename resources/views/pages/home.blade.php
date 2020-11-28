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
 <div  align="center"><a href="{{ route('login') }}">Login | Register</a></div>
                   
                </div>
            </div>
        </div>
    </div>
</div>
<h3>This is my first video in Youtube Channel</h3>
<iframe width="560" height="315" src="https://www.youtube.com/embed/Nvp79iK_rmM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
@endsection