@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-header">Home</div>

        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            You are logged in!

            <div>
                Go to: 
                <a href="{{ route('pages.index') }}"> Pages</a>
            </div>
            
        </div>
    </div>

</div>
@endsection
