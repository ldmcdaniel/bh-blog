@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <form action="/post" method="post">{{ csrf_field() }}
                        <div class="panel-heading">
                            <input name="title" type="text" class="form-control" placeholder="Blog Title Here">
                        </div>

                        <div class="panel-body">
                            <div class="form-group">
                                <textarea name="body" class="form-control" rows="10"
                                          placeholder="Enter post body here..."></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Submit Post</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
