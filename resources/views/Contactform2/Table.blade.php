@extends('AdminPanel.Layout.layout')
@section('content')
<main class="mt-5 pt-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h4>Contact Form</h4>
            </div>
        </div>
        <table border="1" method="POST" action="{{route('table.Contactform2')}}">
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
                @foreach ($contactform2 as $contactform2)
                <tr>
                    <td>{{$contactform2->id}}</td>
                    <td>{{$contactform2->heading}}</td>
                    <td>{{$contactform2->text1}}</td>
                    <td>{{$contactform2->text2}}</td>
                    <td>
                        <a href="{{route('Contactform2')}}">Add</a>
                        <a href="{{route('edit.Contactform2',$contactform2->id)}}">Edit</a>
                        <a href="{{route('delete.Contactform2',$contactform2->id)}}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
@endsection