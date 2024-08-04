@extends('admin.layouts.master')
@section('content')
<button><a href="{{route('admin.banners.create')}}">create</a></button>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Image</th>
            <th>ACtion</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($banners as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->title}}</td>
            <td><img src="{{Storage::url($item->image)}}" width="300px" height="200px" alt=""></td>
            <td>
                <a href="{{route('admin.banners.edit', $item)}}"><button>Sửa</button></a>
                <form action="{{route('admin.banners.destroy', $item)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="confirm('Are you sure!')">Xóa</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
