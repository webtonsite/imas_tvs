@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-header">Home</div>

        <div class="card-body">
            @include('admin.includes.exchange_rates')
        </div>
    </div>

</div>
@endsection
