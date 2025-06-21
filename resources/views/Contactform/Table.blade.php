@extends('AdminPanel.Layout.layout')
@section('content')
<main class="mt-5 pt-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h4>Contact Form</h4>
            </div>
        </div>
        <table border="1" method="POST" action="{{route('table.Contactform')}}">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Heading</th>
                    <th>Text</th>
                    <th>Text</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contactform as $contactform)
                <tr>
                    <td>{{$contactform->id}}</td>
                    <td>{{$contactform->heading}}</td>
                    <td>{{$contactform->text1}}</td>
                    <td>{{$contactform->text2}}</td>
                    <td>
                        <a href="{{route('Contactform')}}">Add</a>
                        <a href="{{route('edit.Contactform',$contactform->id)}}">Edit</a>
                        <a href="{{route('delete.Contactform',$contactform->id)}}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
@endsection