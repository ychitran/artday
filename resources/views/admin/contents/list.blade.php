@extends('layout.admin_layout')

@section('tittle')
Content
@endsection

@section('content')
<table class="table table-striped text-center">
    <div class="row">
        <div class="col-md-9 col-9">
            <h4>List Content</h4>
            @if(Session::has('success'))
            <p aria-hidden="true" class="text-success"> {{Session::get('success')}}</p>
            @endif
        </div>
        <div class="col-md-3 col-3 text-center">
            <a href="{{ route('contents.create') }}"><button type="button" class="btn btn-outline-info">Add Content</button></a>
        </div>
    </div>
    <thead class="table-success">

        <tr>
            <th scope="col">#</th>
            <th scope="col">Tittle</th>
            <th scope="col">Parent_id</th>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"></th>

        </tr>
    </thead>
    <tbody class="table-light">
        @foreach($contents as $key => $content)
        <tr>
        <tr>
            <th scope="row">{{++$key}}</th>
            <td>{{$content->tittle}}</td>
            <td>{{$content->content}}</td>
            <td></td>
            <td><a href="{{ route('contents.edit', $content->id) }}"><button type="button" class="btn btn-outline-secondary">Edit</button></a>
            </td>
            <td><a href="{{ route('contents.destroy', $content->id) }}" onclick="return confirm('Do you want to Delete {{$content->name}}')"><button type="button" class="btn btn-outline-dark">Delete</button></a></td>
        </tr>
        </tr>
        @endforeach

    </tbody>
</table>
<br>

@endsection