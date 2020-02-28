@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Page</div>
                <div class="card-body">
                    @include('admin.includes.alerts.show_success')
                    @include('admin.includes.alerts.show_errors')
                    
                    {{ Form::model($page, [ 'files'=>true, 'route'=>['pages.update', $page->id], 'method'=>'PUT']) }} 

                        <div class="row">  
                            @include('admin.pages.fields')
                        </div>
                    {{ Form::close() }} 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection