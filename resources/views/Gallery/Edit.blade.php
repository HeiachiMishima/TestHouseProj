@extends('AdminPanel.Layout.layout')
@section('content')
    <main class="mt-5 pt-3">
        <div class="container-fluid">
            <form method="POST" action="{{ route('update.Gallery', $gallery->id) }}" enctype="multipart/form-data">
                @csrf
                <label for="">Heading</label>
                <input type="text" name="heading1" id="heading1" required value="{{ $gallery->heading1 }}">
                <br><br>
                <label for="">Heading</label>
                <input type="text" name="heading2" id="heading2" required value="{{ $gallery->heading2 }}">
                <br><br>
                <button type="submit"> Submit</button>
            </form>
        </div>
    </main>
@endsection
