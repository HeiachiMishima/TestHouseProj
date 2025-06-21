@extends('AdminPanel.Layout.layout')
@section('content')
    <main class="mt-5 pt-3">
        <div class="container-fluid">
            <form method="POST" action="{{ route('update.Subcribelist', $subscribelist->id) }}" enctype="multipart/form-data">
                @csrf
                <label for="">Name</label>
                <input type="text" name="name" id="name" required value="{{ $subscribelist->name }}">
                <br><br>
                <label for="">Email</label>
                <input type="text" name="email" id="email" required value="{{ $subscribelist->email }}">
                <br><br>
                <button type="submit"> Submit</button>
            </form>
        </div>
    </main>
@endsection
