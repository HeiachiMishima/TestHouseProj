@extends('AdminPanel.Layout.layout')
@section('content')
<main class="mt-5 pt-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h4>Team Heading</h4>
            </div>
        </div>
        <table border="1" method="POST" action="{{route('table.Team')}}">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Heading</th>
                    <th>Heading</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($team as $team)
                <tr>
                    <td>{{$team->id}}</td>
                    <td>{{$team->heading1}}</td>
                    <td>{{$team->heading2}}</td>
                    <td>
                        <a href="{{route('Team')}}">Add</a>
                        <a href="{{route('edit.Team',$team->id)}}">Edit</a>
                        <a href="{{route('delete.Team',$team->id)}}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
@endsection