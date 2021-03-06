@extends('layouts.admin')

@section('content')
    <h1>Posts</h1>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>User</th>
                <th>Category</th>
                <th>Photo</th>
                <th>Title</th>
                <th>Body</th>
                <th>Created</th>
                <th>Updated</th>
            </tr>
        </thead>
        <tbody>
        @if ($posts)
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td><a href="{{ route('admin.posts.edit', $post->id) }}">{{ $post->user->name }}</a></td>
                    <td>{{ $post->category_id ? $post->category->name : 'Uncategories' }}</td>
                    <td><img height="40" src="{{ $post->photo ? $post->photo->file : 'http://placehold.it/400x400' }}" alt=""></td>
                    <td>{{ $post->title }}</td>
                    <td>{{ str_limit($post->body, 7) }}</td>
                    <td>{{ $post->created_at->diffForHumans() }}</td>
                    <td>{{ $post->updated_at->diffForHumans() }}</td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
@stop