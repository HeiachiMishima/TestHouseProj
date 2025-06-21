@extends('AdminPanel.Layout.layout')
@section('content')
<main class="mt-5 pt-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h4>News Card</h4>
            </div>
        </div>
        <table border="1" method="POST" action="{{route('table.NewsCard')}}">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Date</th>
                    <th>Heading</th>
                    <th>Paragraph</th>
                    <th>button</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($newscard as $newscard)
                <tr>
                    <td>{{$newscard->id}}</td>
                    <td><img src="{{ asset('image/'.$newscard->image)}}" class="img-fluid" width="100px" height="100px" alt="image"></td>
                    <td>{{$newscard->date}}</td>
                    <td>{{$newscard->heading}}</td>
                    <td>{{$newscard->paragraph}}</td>
                    <td>{{$newscard->button}}</td>
                    <td>
                        <a href="{{route('NewsCard')}}">Add</a>
                        <a href="{{route('edit.NewsCard',$newscard->id)}}">Edit</a>
                        <a href="{{route('delete.NewsCard',$newscard->id)}}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
@endsection