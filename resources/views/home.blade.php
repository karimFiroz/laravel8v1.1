@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
               {{--('You are logged in!')--}}
            <div class="card" align=center>
                <div class="card-header">{{ __('You are logged in!') }}</div>

                <div class="card-body">
                  
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
 <div  align="center"><a href="{{ route('admin') }}"><h2>Dashboard</h2></a></div>
                   
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
