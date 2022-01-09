@extends('layouts.app')
@section('content')
<div class="container"><br>
    
</div> <br>
  <div class="container mb-5">
        <div class="row">
            <div class="col-md-12">
                <a class="btn btn-light mb-1" href="/posts">Back</a>  <br>
                    <div class="card card-body shadow">
                        <div class="row">
                            <div id="trending" class="col-md-12"> 
                                <h1 class="text-center">Edit Post</h1>
                                {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                                    <div class="form-group">
                                        <b>{{Form::label('title', 'Title')}}</b>
                                        {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'title'])}}
                                    </div>
                                    <div class="form-group">
                                        <b>{{Form::label('cover_image', 'Cover Image')}}</b>
                                        {{Form::file('cover_image', ['class' => 'form-control', ])}}
                                    </div>
                                    <div class="form-group">
                                        <b>{{Form::label('heading_text', 'Heading Text')}}</b>
                                        {{Form::text('heading_text', $post->heading_text, ['class' => 'form-control', 'placeholder' => 'Heading Text'])}}
                                    </div>
                                    <div class="form-group">
                                        <b>{{Form::label('body', 'Body')}}</b>
                                        {{Form::textarea('body', $post->body, ['class' => 'form-control', 'placeholder' => 'Body'])}}
                                    </div>
                                    <div class="form-group">
                                        <b>{{Form::label('Audiomack Link', 'Audiomack Link')}}</b>
                                        {{Form::text('audiomack_link', $post->audiomack_link, ['class' => 'form-control', 'placeholder' => 'Audio Mack Link'])}}
                                    </div>
                                    <div class="form-group">
                                        <b>{{Form::label('Music', 'Music')}}</b>
                                        {{Form::file('music',  ['class' => 'form-control', 'accept' => 'audio/*'])}}
                                    </div>
                                    <div class="form-group">
                                        <b>{{Form::label('youtube_link', 'Youtube Link')}}</b>
                                        {{Form::text('youtube_link', $post->youtube_link, ['class' => 'form-control', 'placeholder' => 'Youtube Link'])}}
                                    </div>
                                    <div class="form-group">
                                        <b>{{Form::label('Artiste_Link', 'Artiste Link')}}</b>
                                        {{Form::text('artiste_link', $post->artiste_link, ['class' => 'form-control', 'placeholder' => 'Artiste Link'])}}
                                    </div>
                                    {{Form::hidden('_method', 'PUT')}}
                                    {{Form::submit('submit', ['class' => 'btn btn-success'])}}
                                {!! Form::close() !!}
                               
                            </div>
                        </div> <br>
                    </div>
            </div> <br> <br>
        </div>
  </div>
  
@endsection