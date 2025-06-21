@extends('AdminPanel.Layout.layout')
@section('content')
<main class="mt-5 pt-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h4>GCard</h4>
            </div>
        </div>
        <table border="1" method="POST" action="{{route('table.GCard')}}">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($gcard as $gcard)
                <tr>
                    <td>{{$gcard->id}}</td>
                    <td><img src="{{ asset('image/'.$gcard->image)}}" class="img-fluid" width="100px" height="100px" alt="image"></td>
                    <td>{{$gcard->name}}</td>
                    <td>
                        <a href="{{route('GCard')}}">Add</a>
                        <a href="{{route('edit.GCard',$gcard->id)}}">Edit</a>
                        <a href="{{route('delete.GCard',$gcard->id)}}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
@endsection