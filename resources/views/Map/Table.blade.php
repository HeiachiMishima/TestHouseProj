@extends('AdminPanel.Layout.layout')
@section('content')
<main class="mt-5 pt-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h4>Map</h4>
            </div>
        </div>
     <div class="table-responsive">
        <table border="1" method="POST" action="{{route('table.Map')}}">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Text</th>
                    <th>Text</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($map as $map)
                <tr>
                    <td>{{$map->id}}</td>
                    <td>{{$map->text1}}</td>
                    <td>{{$map->text2}}</td>
                    <td>
                        <a href="{{route('Map')}}">Add</a>
                        <a href="{{route('edit.Map',$map->id)}}">Edit</a>
                        <a href="{{route('delete.Map',$map->id)}}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
     </div>
    </div>
</main>
@endsection