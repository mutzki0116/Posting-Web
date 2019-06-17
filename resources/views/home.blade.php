@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ohayo Gozaimasu!</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        Welcome!! This website is one of our activities made on our internship.
                </div>
            </div>
        </div>
    </div>
       
    
</div>
@endsection
