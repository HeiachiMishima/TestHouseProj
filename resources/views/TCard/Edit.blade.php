@extends('AdminPanel.Layout.layout')
@section('content')
    <main class="mt-5 pt-3">
        <div class="container-fluid">
            <form method="POST" action="{{ route('update.TCard', $tcard->id) }}" enctype="multipart/form-data">
                @csrf
                <label for="file_name">Image</label>
                <input type="file" name="image" id="image" required value="{{ $tcard->image }}">
                <br><br>
                <h1>Already uploaded image</h1>
                <br><br>
                <img src="{{ asset('image/' . $tcard->image) }}" width="100px" height="100px" alt="image">
                <br><br>
                <label for="">Name</label>
                <input type="text" name="name" id="name" required value="{{ $tcard->name }}">
                <br><br>
                <label for="">Text</label>
                <input type="text" name="text" id="text" required value="{{ $tcard->text }}">
                <br><br>
                <label for="">Paragraph</label>
                <input type="text" name="paragraph" id="paragraph" required value="{{ $tcard->paragraph }}">
                <br><br>
                <button type="submit"> Submit</button>
            </form>
        </div>
    </main>
@endsection
