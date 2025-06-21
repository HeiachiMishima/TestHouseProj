@extends('AdminPanel.Layout.layout')
@section('content')
<main class="mt-5 pt-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h4>CarousalImage</h4>
            </div>
        </div>
        <table border="1" method="POST" action="{{route('table.CarousalImage')}}">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($carousalimage as $carousalimage)
                <tr>
                    <td>{{$carousalimage->id}}</td>
                    <td><img src="{{ asset('image/'.$carousalimage->image)}}" class="img-fluid" width="100px" height="100px" alt="image"></td>
                    <td>
                        <a href="{{route('CarousalImage')}}">Add</a>
                        <a href="{{route('edit.CarousalImage',$carousalimage->id)}}">Edit</a>
                        <a href="{{route('delete.CarousalImage',$carousalimage->id)}}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
@endsection