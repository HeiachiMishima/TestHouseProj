@extends('AdminPanel.Layout.layout')
@section('content')
<main class="mt-5 pt-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h4>Stats2</h4>
            </div>
        </div>
        <table border="1" method="POST" action="{{route('table.Stats2')}}">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Counting</th>
                    <th>Info</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($stats2 as $stats2)
                <tr>
                    <td>{{$stats2->id}}</td>
                    <td><img src="{{ asset('image/'.$stats2->image)}}" class="img-fluid" width="100px" height="100px" alt="image"></td>
                    <td>{{$stats2->counting}}</td>
                    <td>{{$stats2->info}}</td>
                    <td>
                        <a href="{{route('Stats2')}}">Add</a>
                        <a href="{{route('edit.Stats2',$stats2->id)}}">Edit</a>
                        <a href="{{route('delete.Stats2',$stats2->id)}}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
@endsection