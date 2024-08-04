@extends('admin.layouts.master')
@section('content')
<form action="{{route('admin.banners.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3 mt-3">
                <label for="title" class="form-label">title:</label>
                <input type="text" class="form-control" id="title" placeholder="Enter title" name="title">
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">File</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
