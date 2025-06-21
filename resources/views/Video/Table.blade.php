@extends('AdminPanel.Layout.layout')
@section('content')
    <main class="mt-5 pt-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h4>Video</h4>
                </div>
            </div>
            <div class="table-responsive">
                <table border="1" method="POST" action="{{ route('table.Video') }}">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Video</th>
                            <th>Heading</th>
                            <th>Paragraph</th>
                            <th>button</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($crud as $crud)
                            <tr>
                                <td>{{ $crud->id }}</td>
                                <td><video src="{{ asset('videos/' . $crud->video) }}" width="100px" height="100px"
                                        alt="video"></video></td>
                                <td>{{ $crud->heading }}</td>
                                <td>{{ $crud->paragraph }}</td>
                                <td>{{ $crud->button }}</td>
                                <td>
                                    <a href="{{ route('Video') }}">Add</a>
                                    <a href="{{ route('edit.Video', $crud->id) }}">Edit</a>
                                    <a href="{{ route('delete.Video', $crud->id) }}">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>
@endsection
