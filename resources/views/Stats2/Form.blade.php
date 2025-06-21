@extends('AdminPanel.Layout.layout')
@section('content')
<main class="mt-5 pt-3">
    <div class="container-fluid">
        <form method="POST" action="{{ route('store.Stats2') }}" enctype="multipart/form-data">
            @csrf
            <label for="file_name">Image</label>
            <input type="file" name="image" id="image" required>
            <br><br>
            <label for="">Counting</label>
            <input type="text" name="counting" id="counting" required>
            <br><br>
            <label for="">Info</label>
            <input type="text" name="info" id="info" required>
            <br><br>
            <button type="submit"> Submit</button>
        </form>
    </div>
</main>
@endsection
