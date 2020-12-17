@extends('adminlte::page')

@section('title', 'ConsulTS')

@section('content_header')
<h1>Edit Post</h1>
@stop

@section('content')
<div>
    <form method="POST" action="/dashboard/posts/{{$post->id}}">
        @csrf
        @method('PUT')
        <div class="form-group col-md-8 offset-2">
            <label for="title" class="col-md-4 col-form-label text-md-left">{{ __('Title') }}</label>

            <div class="col-md-6">
                <input id="title" type="text" class="form-control" value="{{$post->title}}">
            </div>
        </div>

        <div class="form-group col-md-8 offset-2">
            <label for="body" class="col-md-4 col-form-label text-md-left">{{ __('Body') }}</label>

            <div class="col-md-6 ">
                <input  name="body" class="form-control"  value="{{$post->body}}"></input>
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Save Post') }}
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
