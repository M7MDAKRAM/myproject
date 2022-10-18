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
                <form method="post" action="{{url('/admin/stoore')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="facebook">Facebook :</label>
                        <input type="text" class="form-control" name="facebook_s" />
                    </div>
                    <div class="form-group">
                        <label for="twitter">twitter :</label>
                        <input type="text" class="form-control" name="twitter_s" />
                    </div>
                    <div class="form-group">
                        <label for="instagram">Instagram :</label>
                        <input type="text" class="form-control" name="instagram_s" />
                    </div>
                    <button type="submit" class="btn btn-primary">submit</button>
                </form>
            </div>
        </div>
    </div>

@endsection
