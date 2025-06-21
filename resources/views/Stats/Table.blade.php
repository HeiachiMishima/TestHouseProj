@extends('AdminPanel.Layout.layout')
@section('content')
<main class="mt-5 pt-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h4>Stats</h4>
            </div>
        </div>
        <table border="1" method="POST" action="{{route('table.Stats')}}">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Heading</th>
                    <th>Heading</th>
                    <th>Paragraph</th>
                    <th>button</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($stats as $stats)
                <tr>
                    <td>{{$stats->id}}</td>
                    <td>{{$stats->heading1}}</td>
                    <td>{{$stats->heading2}}</td>
                    <td>{{$stats->paragraph}}</td>
                    <td>{{$stats->button}}</td>
                    <td>
                        <a href="{{route('Stats')}}">Add</a>
                        <a href="{{route('edit.Stats',$stats->id)}}">Edit</a>
                        <a href="{{route('delete.Stats',$stats->id)}}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
@endsection