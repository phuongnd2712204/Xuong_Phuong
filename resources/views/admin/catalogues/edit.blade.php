@extends('admin.layouts.master')
@section('title')
Create new products
@endsection

@section('content')
<form action="{{route('admin.catalogues.store')}}" method="post">
    @csrf
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3 mt-3">
                <label for="name" class="form-label">name:</label>
                <input type="text" class="form-control"
                id="name" placeholder="Enter name" name="name" value="{{$model->name}}">
            </div>

            <div class="mb-3">
                <label for="cover" class="form-label">File</label>
                <input type="file" class="form-control" id="cover" value=" {{$model->name}}" name="cover">
            </div>
        </div>
    </div>
    <div class="form-check mb-3">
        <label class="form-check-label">
            <input class="form-check-input" type="checkbox" value="1"
            @if($model->is_active)
                checked
            @endif name="is_active"> Remember me
        </label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
