@extends('AdminPanel.Layout.layout')
@section('content')
<main class="mt-5 pt-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h4>About</h4>
            </div>
        </div>
        <table border="1" method="POST" action="{{route('table.About')}}">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Heading</th>
                    <th>Heading</th>
                    <th>Paragraph</th>
                    <th>button</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($about as $about)
                <tr>
                    <td>{{$about->id}}</td>
                    <td><img src="{{ asset('image/'.$about->image)}}" class="img-fluid" width="100px" height="100px" alt="image"></td>
                    <td>{{$about->heading1}}</td>
                    <td>{{$about->heading2}}</td>
                    <td>{{$about->paragraph}}</td>
                    <td>{{$about->button}}</td>
                    <td>
                        <a href="{{route('About')}}">Add</a>
                        <a href="{{route('edit.About',$about->id)}}">Edit</a>
                        <a href="{{route('delete.About',$about->id)}}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
@endsection