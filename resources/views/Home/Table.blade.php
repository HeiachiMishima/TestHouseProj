@extends('AdminPanel.Layout.layout')
@section('content')
<main class="mt-5 pt-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h4>Home</h4>
            </div>
        </div>
        <table border="1" method="POST" action="{{route('table.Home')}}">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Heading</th>
                    <th>Paragraph</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($home as $home)
                <tr>
                    <td>{{$home->id}}</td>
                    <td><img src="{{ asset('image/'.$home->image)}}" class="img-fluid" width="100px" height="100px" alt="image"></td>
                    <td>{{$home->heading}}</td>
                    <td>{{$home->paragraph}}</td>
                    <td>
                        <a href="{{route('Home')}}">Add</a>
                        <a href="{{route('edit.Home',$home->id)}}">Edit</a>
                        <a href="{{route('delete.Home',$home->id)}}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
@endsection