@extends('adminlte::page')

@section('title', 'ConsulTS')

@section('content_header')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">List Posts</h1>
    <a href="/dashboard/posts/create" type="button" class="btn btn-primary btn-lg">
        <i class="fas fa-plus-circle fa-sm text-white-50"></i> Add post
    </a>
</div>
@stop

@section('content')
<table id="datapost" class="table table-dark table-striped table-bordered">
    <thead>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Body</th>
        </tr>
    </thead>
    <tbody>
        @foreach($posts as $post)
        <tr>
            <td>{{ $post->id}}</td>
            <td>{{ $post->title}}</td>
            <td>{{ $post->body}}</td>
            <td>
                <form action="{{ route('posts.destroy',$post->id) }}" method="POST">
                    <a href="/dashboard/posts/{{$post->id}}/edit" class="btn btn-info">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js">
<script>
    $(document).ready(function() {
        $('#datapost').DataTable();
    });
</script>
@stop
