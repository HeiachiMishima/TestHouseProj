@extends('AdminPanel.Layout.layout')
@section('content')
<main class="mt-5 pt-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h4>Contact List</h4>
            </div>
        </div>
        <table border="1" method="POST" action="{{route('table.Contactlist')}}">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contactlist as $contactlist)
                <tr>
                    <td>{{$contactlist->id}}</td>
                    <td>{{$contactlist->name}}</td>
                    <td>{{$contactlist->email}}</td>
                    <td>{{$contactlist->message}}</td>
                    <td>
                        <a href="{{route('Contactlist')}}">Add</a>
                        <a href="{{route('edit.Contactlist',$contactlist->id)}}">Edit</a>
                        <a href="{{route('delete.Contactlist',$contactlist->id)}}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
@endsection