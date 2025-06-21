@extends('AdminPanel.Layout.layout')
@section('content')
<main class="mt-5 pt-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h4>Gallery Buttons</h4>
            </div>
        </div>
        <table border="1" method="POST" action="{{route('table.GButton')}}">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Heading</th>
                    <th>Heading</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($gbutton as $gbutton)
                <tr>
                    <td>{{$gbutton->id}}</td>
                    <td>{{$gbutton->heading1}}</td>
                    <td>{{$gbutton->heading2}}</td>
                    <td>
                        <a href="{{route('GButton')}}">Add</a>
                        <a href="{{route('edit.GButton',$gbutton->id)}}">Edit</a>
                        <a href="{{route('delete.GButton',$gbutton->id)}}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
@endsection