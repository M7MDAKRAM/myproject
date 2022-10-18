@extends('layouts.admin')
@section('content')
    <div class="container">
        <style>
            .uper {
                margin-top: 10px;
                margin-left: 150px;
            }
        </style>
        <div class="card uper">
            <div class="card-header">
                <h1>Social Media</h1>
            </div>
            <div class="card-body">
                <form method="post"  action="{{url('uupdate/'.$about->id)}}" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="facebook">Facebook:</label>
                        <input type="text" class="form-control" value="{{$about->facebook}}" name="facebook_s" />
                    </div>
                    <div class="form-group">
                        <label for="twitter">Twitter:</label>
                        <input type="text" class="form-control" value="{{$about->twitter}}" name="twitter_s" />
                    </div>
                    <div class="form-group">
                        <label for="instagram">Instagram :</label>
                        <input type="text" class="form-control" value="{{$about->instagram}}" name="instagram_s" />
                    </div>
                    <button type="submit" class="btn btn-primary">update</button>
                </form>
            </div>
        </div>
    </div>

@endsection
