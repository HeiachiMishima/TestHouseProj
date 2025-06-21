@extends('AdminPanel.Layout.layout')
@section('content')
<main class="mt-5 pt-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h4>Contact</h4>
            </div>
        </div>
        <table border="1" method="POST" action="{{route('table.Contact')}}">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Heading</th>
                    <th>Heading</th>
                    <th>Heading</th>
                    <th>Paragraph</th>
                    <th>Heading</th>
                    <th>Paragraph</th>
                    <th>Paragraph</th>
                    <th>Paragraph</th>
                    <th>Heading</th>
                    <th>button</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contact as $contact)
                <tr>
                    <td>{{$contact->id}}</td>
                    <td><img src="{{ asset('image/'.$contact->image)}}" class="img-fluid" width="100px" height="100px" alt="image"></td>
                    <td>{{$contact->heading1}}</td>
                    <td>{{$contact->heading2}}</td>
                    <td>{{$contact->heading3}}</td>
                    <td>{{$contact->paragraph1}}</td>
                    <td>{{$contact->heading4}}</td>
                    <td>{{$contact->paragraph2}}</td>
                    <td>{{$contact->paragraph3}}</td>
                    <td>{{$contact->paragraph4}}</td>
                    <td>{{$contact->heading5}}</td>
                    <td>{{$contact->button}}</td>
                    <td>
                        <a href="{{route('Contact')}}">Add</a>
                        <a href="{{route('edit.Contact',$contact->id)}}">Edit</a>
                        <a href="{{route('delete.Contact',$contact->id)}}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
@endsection