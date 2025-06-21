@extends('AdminPanel.Layout.layout')
@section('content')
<main class="mt-5 pt-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h4>Service Cards</h4>
            </div>
        </div>
        <table border="1" method="POST" action="{{route('table.TCard')}}">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Text</th>
                    <th>Paragraph</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tcard as $tcard)
                <tr>
                    <td>{{$tcard->id}}</td>
                    <td><img src="{{ asset('image/'.$tcard->image)}}" class="img-fluid" width="100px" height="100px" alt="image"></td>
                    <td>{{$tcard->name}}</td>
                    <td>{{$tcard->text}}</td>
                    <td>{{$tcard->paragraph}}</td>
                    <td>
                        <a href="{{route('TCard')}}">Add</a>
                        <a href="{{route('edit.TCard',$tcard->id)}}">Edit</a>
                        <a href="{{route('delete.TCard',$tcard->id)}}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
@endsection