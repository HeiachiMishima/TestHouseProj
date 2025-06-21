@extends('AdminPanel.Layout.layout')
@section('content')
    <main class="mt-5 pt-3">
        <div class="container-fluid">
            <form method="POST" action="{{ route('update.SCard', $scard->id) }}" enctype="multipart/form-data">
                @csrf
                <label for="file_name">Image</label>
                <input type="file" name="image" id="image" required value="{{ $scard->image }}">
                <br><br>
                <h1>Already uploaded image</h1>
                <br><br>
                <img src="{{ asset('image/' . $scard->image) }}" width="100px" height="100px" alt="image">
                <br><br>
                <label for="">Heading</label>
                <input type="text" name="heading" id="heading" required value="{{ $scard->heading }}">
                <br><br>
                <label for="">Paragraph</label>
                <input type="text" name="paragraph" id="paragraph" required value="{{ $scard->paragraph }}">
                <br><br>
                <label for="">Button</label>
                <input type="text" name="button" id="button" required value="{{ $scard->button }}">
                <br><br>
                <button type="submit"> Submit</button>
            </form>
        </div>
    </main>
@endsection
