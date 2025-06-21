@extends('AdminPanel.Layout.layout')
@section('content')
    <main class="mt-5 pt-3">
        <div class="container-fluid">
            <form method="POST" action="{{ route('update.Contact', $contact->id) }}" enctype="multipart/form-data">
                @csrf
                <label for="file_name">Image</label>
                <input type="file" name="image" id="image" required value="{{ $contact->image }}">
                <br><br>
                <h1>Already uploaded image</h1>
                <br><br>
                <img src="{{ asset('image/' . $contact->image) }}" width="100px" height="100px" alt="image">
                <br><br>
                <label for="">Heading</label>
                <input type="text" name="heading1" id="heading1" required value="{{ $contact->heading1 }}">
                <br><br>
                <label for="">Heading</label>
                <input type="text" name="heading2" id="heading2" required value="{{ $contact->heading2 }}">
                <br><br>
                <label for="">Heading</label>
                <input type="text" name="heading3" id="heading3" required value="{{ $contact->heading3 }}">
                <br><br>
                <label for="">Paragraph</label>
                <input type="text" name="paragraph1" id="paragraph1" required value="{{ $contact->paragraph1 }}">
                <br><br>
                <label for="">Heading</label>
                <input type="text" name="heading4" id="heading4" required value="{{ $contact->heading4 }}">
                <br><br>
                <label for="">Paragraph</label>
                <input type="text" name="paragraph2" id="paragraph2" required value="{{ $contact->paragraph2 }}">
                <br><br>
                <label for="">Paragraph</label>
                <input type="text" name="paragraph3" id="paragraph3" required value="{{ $contact->paragraph3 }}">
                <br><br>
                <label for="">Paragraph</label>
                <input type="text" name="paragraph4" id="paragraph4" required value="{{ $contact->paragraph4 }}">
                <br><br>
                <label for="">Heading</label>
                <input type="text" name="heading5" id="heading5" required value="{{ $contact->heading5 }}">
                <br><br>
                <label for="">Button</label>
                <input type="text" name="button" id="button" required value="{{ $contact->button }}">
                <br><br>
                <button type="submit"> Submit</button>
            </form>
        </div>
    </main>
@endsection
