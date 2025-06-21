{{-- @extends('AdminPanel.Layout.layout')
@section('content') --}}
<main class="mt-5 pt-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h4>Subscribe List</h4>
            </div>
        </div>
        <table border="1" method="POST" action="{{route('table.Subscribelist')}}">
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
                @foreach ($subscribelist as $subscribelist)
                <tr>
                    <td>{{$subscribelist->id}}</td>
                    <td>{{$subscribelist->name}}</td>
                    <td>{{$subscribelist->email}}</td>
                    <td>{{$subscribelist->message}}</td>
                    <td>
                        <a href="{{route('Subscribelist')}}">Add</a>
                        <a href="{{route('edit.Subscribelist',$subscribelist->id)}}">Edit</a>
                        <a href="{{route('delete.Subscribelist',$subscribelist->id)}}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
{{-- @endsection --}}