@extends('layouts.master')
  @section('content')
        <!-- Blog Post -->
        <div class="card mb-4">
          <div class="card-body">
            <h2 class="card-title">{{$blog->title}}</h2>
            <p class="card-text">{{$blog->body}}</p>
          </div>
          <div class="card-footer text-muted">
            Posted on {{$blog->created_at->diffForHumans()}} by
            <a href="#">{{$blog->author}}</a>
          </div>
        </div>


    @endsection
