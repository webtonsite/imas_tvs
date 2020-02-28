@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">Pages</div>
        <div class="card-body">
            @include('admin.includes.alerts.show_success')
            @include('admin.includes.alerts.show_errors') 

            <a href="{{ route('pages.create') }}" class="btn btn-primary mb-3">Add New Page</a>

            @include('admin.pages.table')
        </div>
    </div>
@endsection