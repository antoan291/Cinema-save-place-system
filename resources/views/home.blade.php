@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
             

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h4 style="text-align:center; color:green;">{{ __('You are logged in!') }}<h4>
                    <h1 style="text-align:center">Спорен Ден</h1>              
            </div>
        </div>
    </div>
</div>
@endsection
