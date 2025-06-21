@extends('AdminPanel.Layout.layout')
@section('content')
    <main class="mt-5 pt-3">
        <div class="container-fluid">
            <form method="POST" action="{{ route('update.Stats2', $stats2->id) }}" enctype="multipart/form-data">
                @csrf
                <label for="file_name">Image</label>
                <input type="file" name="image" id="image" required value="{{ $stats2->image }}">
                <br><br>
                <h1>Already uploaded image</h1>
                <br><br>
                <img src="{{ asset('image/' . $stats2->image) }}" width="100px" height="100px" alt="image">
                <br><br>
                <label for="">Counting</label>
                <input type="text" name="counting" id="counting" required value="{{ $stats2->counting }}">
                <br><br>
                <label for="">Info</label>
                <input type="text" name="info" id="info" required value="{{ $stats2->info }}">
                <br><br>
                <button type="submit"> Submit</button>
            </form>
        </div>
    </main>
@endsection
