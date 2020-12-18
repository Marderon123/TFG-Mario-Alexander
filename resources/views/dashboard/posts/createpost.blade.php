@extends('adminlte::page')

@section('title', 'ConsulTS')

@section('content_header')
<h1>Add New Post</h1>
@stop

@section('content')
<div>
    <form method="POST" action="/dashboard/posts">
        @csrf
        <div class="form-group row">
            <label for="title" class="col-md-4 col-form-label text-md-center">{{ __('Title') }}</label>

            <div class="col-md-6">
                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="name" value="{{ old('title') }}" required placeholder="Title" autofocus>

                @error('title')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="body" class="col-md-4 col-form-label text-md-center">{{ __('Body') }}</label>

            <div class="col-md-6">
                <input id="body" type="text" class="form-control @error('body') is-invalid @enderror" name="body" value="{{ old('body') }}" required placeholder="Write something here" autofocus>

                @error('body')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Save User') }}
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
