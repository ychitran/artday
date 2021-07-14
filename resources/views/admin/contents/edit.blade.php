@extends('layout.admin_layout')

@section('tittle')
Content
@endsection
@section('content')
<div class="row">
    <div class="col-md-9 col-9">
        <h4>Edit Content</h4>
    </div>
    <div class="col-md-3 col-3 text-center">
        <a href="{{ route('contents.index') }}"><button type="button" class="btn btn-outline-dark">Return</button></a>
    </div>
</div>
<br>
<form method="POST" action="{{ route('contents.update', $content->id)}}">
    @csrf
    <div class="form-group">
        <label for="exampleInputName">Tittle</label>
        <input type="text" name="tittle" value="{{$content->tittle}}" class="form-control" id="exampleInputName1" aria-describedby="emailHelp" placeholder="Enter name">
    </div>
    <div class="form-group">
        <label for="exampleInputName">Content</label>
        <input type="text" name="content" value="{{$content->content}}" class="form-control my-editor">
    </div>
    <br>
    <button type="submit" class="btn btn-outline-secondary">Submit</button>
</form>



@endsection