@extends('admin.layouts.master')
@section('title')
Create new products
@endsection

@section('content')
<table class="table">
    <thead>
        <tr>
            <th>name</th>
            <th>Cover</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <tr>

            <td>{{$model->name}}</td>
            <td>{{$model->cover}}</td>
            <td>{{$model->is_active}}</td>
            <td>{{$model->created_at}}</td>
            <td>{{$model->updated_at}}</td>
        </tr>

    </tbody>


</table>
