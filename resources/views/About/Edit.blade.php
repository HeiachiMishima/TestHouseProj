@extends('AdminPanel.Layout.layout')
@section('content')
    <main class="mt-5 pt-3">
        <div class="container-fluid">
            <form method="POST" action="{{ route('update.About', $about->id) }}" enctype="multipart/form-data">
                @csrf
                <label for="file_name">Image</label>
                <input type="file" name="image" id="image" required value="{{ $about->image }}">
                <br><br>
                <h1>Already uploaded image</h1>
                <br><br>
                <img src="{{ asset('image/' . $about->image) }}" width="100px" height="100px" alt="image">
                <br><br>
                <label for="">Heading</label>
                <input type="text" name="heading1" id="heading1" required value="{{ $about->heading1 }}">
                <br><br>
                <label for="">Heading</label>
                <input type="text" name="heading2" id="heading2" required value="{{ $about->heading2 }}">
                <br><br>
                <label for="">Paragraph</label>
                <input type="text" name="paragraph" id="paragraph" required value="{{ $about->paragraph }}">
                <br><br>
                <label for="">Button</label>
                <input type="text" name="button" id="button" required value="{{ $about->button }}">
                <br><br>
                <button type="submit"> Submit</button>
            </form>
        </div>
    </main>
@endsection
