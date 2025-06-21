@extends('AdminPanel.Layout.layout')
@section('content')
<main class="mt-5 pt-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h4>Gallery Heading</h4>
            </div>
        </div>
        <table border="1" method="POST" action="{{route('table.Gallery')}}">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Heading</th>
                    <th>Heading</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($gallery as $gallery)
                <tr>
                    <td>{{$gallery->id}}</td>
                    <td>{{$gallery->heading1}}</td>
                    <td>{{$gallery->heading2}}</td>
                    <td>
                        <a href="{{route('Gallery')}}">Add</a>
                        <a href="{{route('edit.Gallery',$gallery->id)}}">Edit</a>
                        <a href="{{route('delete.Gallery',$gallery->id)}}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
@endsection