@extends('AdminPanel.Layout.layout')
@section('content')
<main class="mt-5 pt-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h4>Services Heading</h4>
            </div>
        </div>
        <table border="1" method="POST" action="{{route('table.SHeading')}}">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Heading</th>
                    <th>Heading</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sheading as $sheading)
                <tr>
                    <td>{{$sheading->id}}</td>
                    <td>{{$sheading->heading1}}</td>
                    <td>{{$sheading->heading2}}</td>
                    <td>
                        <a href="{{route('SHeading')}}">Add</a>
                        <a href="{{route('edit.SHeading',$sheading->id)}}">Edit</a>
                        <a href="{{route('delete.SHeading',$sheading->id)}}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
@endsection