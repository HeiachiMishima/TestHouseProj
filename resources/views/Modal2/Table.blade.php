@extends('AdminPanel.Layout.layout')
@section('content')
<main class="mt-5 pt-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h4>Modal2</h4>
            </div>
        </div>
        <table border="1" method="POST" action="{{route('table.Modal2')}}">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Heading</th>
                    <th>Image</th>
                    <th>Paragraph</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($modal2 as $modal2)
                <tr>
                    <td>{{$modal2->id}}</td>
                    <td>{{$modal2->heading}}</td>
                    <td><img src="{{ asset('image/'.$modal2->image)}}" class="img-fluid" width="100px" height="100px" alt="image"></td>
                    <td>{{$modal2->paragraph}}</td>
                    <td>
                        <a href="{{route('Modal2')}}">Add</a>
                        <a href="{{route('edit.Modal2',$modal2->id)}}">Edit</a>
                        <a href="{{route('delete.Modal2',$modal2->id)}}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
@endsection