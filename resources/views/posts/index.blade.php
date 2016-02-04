@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                @foreach($posts as $post)
                <div class="panel panel-default">
                    <div class="panel-heading">{{ $post->title }}</div>

                    <div class="panel-body">
                        {!! $post->body !!}
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
