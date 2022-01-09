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
                                <h1 class="text-center">Create Advert</h1>
                                {!! Form::open(['action' => 'AdsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                                    <div class="form-group">
                                        <b>{{Form::label('title', 'Title')}}</b>
                                        {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'title'])}}
                                    </div>
                                    <div class="form-group">
                                        <b>{{Form::label('ad_image', 'Advert Image')}}</b>
                                        {{Form::file('ad_image', ['class' => 'form-control'])}}
                                    </div>
                                    <div class="form-group">
                                        <b>{{Form::label('body', 'Body')}}</b>
                                        {{Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Body'])}}
                                    </div>
                                    {{Form::submit('submit', ['class' => 'btn btn-success'])}}
                                {!! Form::close() !!}
                               
                            </div>
                        </div> <br>
                    </div>
            </div> <br> <br>
        </div>
  </div>
  
@endsection