@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="col-md-5 offset-md-3 card">
                <div class="card-header text-center">{{ __('Brand') }}</div>

                <div class="card-body ">
                    <form action="{{route("postB")}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="brand">Brand Name:</label>
                            <input type="text" class="form-control" id="brand" placeholder="Enter brand name" name="brand">
                        </div>
                        <div class="form-group">
                            <label for="active">Active:</label>
                            <input type="radio" id="html" name="active" value=1>
                            <label for="inactive">Inactive:</label>
                            <input type="radio" id="html" name="active" value=0>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    <script>

    </script>
@endsection
