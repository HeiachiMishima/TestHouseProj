@extends('AdminPanel.Layout.layout')
@section('content')
<main class="mt-5 pt-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h4>Service Cards</h4>
            </div>
        </div>
        <table border="1" method="POST" action="{{route('table.SCard')}}">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Heading</th>
                    <th>Paragraph</th>
                    <th>button</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($scard as $scard)
                <tr>
                    <td>{{$scard->id}}</td>
                    <td><img src="{{ asset('image/'.$scard->image)}}" class="img-fluid" width="100px" height="100px" alt="image"></td>
                    <td>{{$scard->heading}}</td>
                    <td>{{$scard->paragraph}}</td>
                    <td>{{$scard->button}}</td>
                    <td>
                        <a href="{{route('SCard')}}">Add</a>
                        <a href="{{route('edit.SCard',$scard->id)}}">Edit</a>
                        <a href="{{route('delete.SCard',$scard->id)}}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
@endsection