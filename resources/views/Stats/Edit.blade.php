@extends('AdminPanel.Layout.layout')
@section('content')
    <main class="mt-5 pt-3">
        <div class="container-fluid">
            <form method="POST" action="{{ route('update.Stats', $stats->id) }}" enctype="multipart/form-data">
                @csrf
                <label for="">Heading</label>
                <input type="text" name="heading1" id="heading1" required value="{{ $stats->heading1 }}">
                <br><br>
                <label for="">Heading</label>
                <input type="text" name="heading2" id="heading2" required value="{{ $stats->heading2 }}">
                <br><br>
                <label for="">Paragraph</label>
                <input type="text" name="paragraph" id="paragraph" required value="{{ $stats->paragraph }}">
                <br><br>
                <label for="">Button</label>
                <input type="text" name="button" id="button" required value="{{ $stats->button }}">
                <br><br>
                <button type="submit"> Submit</button>
            </form>
        </div>
    </main>
@endsection
