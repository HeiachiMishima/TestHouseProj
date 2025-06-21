@extends('AdminPanel.Layout.layout')
@section('content')
    <main class="mt-5 pt-3">
        <div class="container-fluid">
            <form method="POST" action="{{ route('update.Contactlist', $contactlist->id) }}" enctype="multipart/form-data">
                @csrf
                <label for="">Name</label>
                <input type="text" name="name" id="name" required value="{{ $contactlist->name }}">
                <br><br>
                <label for="">Email</label>
                <input type="text" name="email" id="email" required value="{{ $contactlist->email }}">
                <br><br>
                <label for="">Message</label>
                <input type="text" name="message" id="message" required value="{{ $contactlist->message }}">
                <br><br>
                <button type="submit"> Submit</button>
            </form>
        </div>
    </main>
@endsection
