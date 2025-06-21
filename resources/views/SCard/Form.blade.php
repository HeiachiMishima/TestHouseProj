@extends('AdminPanel.Layout.layout')
@section('content')
<main class="mt-5 pt-3">
    <div class="container-fluid">
        <form method="POST" action="{{route('store.SCard')}}" enctype="multipart/form-data">
            @csrf
            <label for="file_name">Image</label>
            <input type="file" name="image" id="image" required>
            <br><br>
            <label for="">Heading</label>
            <input type="text" name="heading" id="heading" required>
            <br><br>
            <label for="">Paragraph</label>
            <input type="text" name="paragraph" id="paragraph" required>
            <br><br>
            <label for="">Button</label>
            <input type="text" name="button" id="button" required>
            <br><br>
            <button type="submit"> Submit</button>
        </form>
    </div>
</main>
@endsection