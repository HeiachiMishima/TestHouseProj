@extends('AdminPanel.Layout.layout')
@section('content')
<main class="mt-5 pt-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h4>Modal1</h4>
            </div>
        </div>
        <table border="1" method="POST" action="{{route('table.Modal1')}}">
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
                @foreach ($modal1 as $modal1)
                <tr>
                    <td>{{$modal1->id}}</td>
                    <td>{{$modal1->heading}}</td>
                    <td><img src="{{ asset('image/'.$modal1->image)}}" class="img-fluid" width="100px" height="100px" alt="image"></td>
                    <td>{{$modal1->paragraph}}</td>
                    <td>
                        <a href="{{route('Modal1')}}">Add</a>
                        <a href="{{route('edit.Modal1',$modal1->id)}}">Edit</a>
                        <a href="{{route('delete.Modal1',$modal1->id)}}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
@endsection