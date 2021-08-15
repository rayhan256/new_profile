@extends('cms/layouts/main')
@section('content')
    <h1>Add Portfolio</h1>
    <form action="/cms/portfolio/post" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Client</label>
            <input type="text" name="client" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Date</label>
            <input type="date" name="project_date" id="" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Url</label>
            <input type="text" name="url" id="" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Desc</label>
            <textarea name="desc" id="" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="">Thumbnail</label>
            <input type="file" name="thumbnail" id="" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Category</label>
            <select name="category_id" id="" class="form-control">
                @foreach ($categories as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
        </div>
        <input type="submit" value="Submit" class="btn btn-primary">
    </form>
@endsection
