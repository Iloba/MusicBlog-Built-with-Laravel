@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        
                    {{ __('You are logged in!') }} <br>
                    <a class="btn btn-success " href="/posts/create">Create Post</a>  <br>
                    <h2 class="text-center">Your Blog Posts</h2> <br>
                    <div class="table table-responsive">
                        @if ( count($posts) > 0)
                            
                       
                        <table class="table table-striped">
                            <tr>
                                <th>Title</th>
                                <th>Artwork</th>
                                <th>heading Text</th>
                                <th>Body Text</th>
                                <th>Audiomack Link</th>
                                <th>Music</th>
                                <th>Youtube Link</th>
                                <th>Artiste Link</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            @foreach ($posts as $post)
                                <tr>
                                     <td>{{$post->title}}</td>
                                     <td>{{$post->cover_image}}</td>
                                     <td>{{$post->heading_text}}</td>
                                     <td>{{$post->body}}</td>
                                     <td>{{$post->audiomack_link}}</td>
                                     <td>{{$post->music}}</td>
                                     <td>{{$post->youtube_link}}</td>
                                     <td>{{$post->artiste_link}}</td>
                                    <td><a class="btn btn-info" href="/posts/{{$post->id}}/edit">Edit</a></td>
                                    <td>
                                        {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST'])!!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                        {!!Form::close()!!}
                                    </td>
                                </tr>
                                
                            @endforeach
                            {{-- {{$posts->links()}}  --}}
                        </table>
                        @else
                            <p>No Posts Found</p>
                        @endif
                       
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
