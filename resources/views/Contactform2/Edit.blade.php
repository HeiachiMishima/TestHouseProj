@extends('AdminPanel.Layout.layout')
@section('content')
    <main class="mt-5 pt-3">
        <div class="container-fluid">
            <form method="POST" action="{{ route('update.Contactform2', $contactform2->id) }}" enctype="multipart/form-data">
                @csrf
                <label for="">Heading</label>
                <input type="text" name="heading" id="heading" required value="{{ $contactform2->heading }}">
                <br><br>
                <label for="">Text</label>
                <input type="text" name="text1" id="text1" required value="{{ $contactform2->text1 }}">
                <br><br>
                <label for="">Text</label>
                <input type="text" name="text2" id="text2" required value="{{ $contactform2->text2 }}">
                <br><br>
                <button type="submit"> Submit</button>
            </form>
        </div>
    </main>
@endsection
