@extends('layout.admin_layout')

@section('tittle')
Content
@endsection
@section('content')
<div class="row">
    <div class="col-md-9 col-9">
        <h4>Add Content</h4>
    </div>
    <div class="col-md-3 col-3 text-center">
        <a href="{{ route('contents.index') }}"><button type="button" class="btn btn-outline-dark">Return</button></a>
    </div>
</div>
<br>
<form method="POST" action="{{ route('contents.store')}}">
    @csrf
    <div class="form-group">
        <label for="exampleInputName">Tittle</label>
        <input type="text" name="tittle" class="form-control" id="exampleInputName1" aria-describedby="emailHelp" placeholder="Enter name">
    </div>
    <div class="form-group">
        <label for="exampleInputName">Content</label>
        <textarea name="content" class="form-control my-editor"></textarea>
    </div>
    <br>
    <button type="submit" class="btn btn-outline-secondary">Add</button>
</form>



@endsection
@section('js')
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script src="{{ asset('vendor/select2/select2.min.js')}}"></script>
<script src="{{ asset('backend/admin/product/add/add.js')}}"></script>

@endsection