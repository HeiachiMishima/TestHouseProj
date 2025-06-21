@extends('AdminPanel.Layout.layout')
@section('content')
<main class="mt-5 pt-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h4>News</h4>
            </div>
        </div>
        <table border="1" method="POST" action="{{route('table.News')}}">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Heading</th>
                    <th>Heading</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($news as $news)
                <tr>
                    <td>{{$news->id}}</td>
                    <td>{{$news->heading1}}</td>
                    <td>{{$news->heading2}}</td>
                    <td>
                        <a href="{{route('News')}}">Add</a>
                        <a href="{{route('edit.News',$news->id)}}">Edit</a>
                        <a href="{{route('delete.News',$news->id)}}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
@endsection