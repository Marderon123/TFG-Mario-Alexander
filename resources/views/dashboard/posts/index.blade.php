@extends('adminlte::page')

@section('title', 'ConsulTS')

@section('content_header')
<h1>Add New Post</h1>
@stop

@section('content')
<div>
    <form method="POST" action="">
        @csrf

        <div class="form-group col-md-8 offset-2">
            <label for="title" class="col-md-4 col-form-label text-md-left">{{ __('Title') }}</label>

            <div class="col-md-6">
                <input id="title" type="text" class="form-control" placeholder="Title Post">
            </div>
        </div>

        <div class="form-group col-md-8 offset-2">
            <label for="body" class="col-md-4 col-form-label text-md-left">{{ __('Body') }}</label>

            <div class="col-md-6">
                <textarea name="body" class="form-control" rows="10" cols="50" placeholder="Write something here"></textarea>
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Add Post') }}
                </button>
            </div>
        </div>
    </form>
</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop
