@extends('cms/layouts/main')
@section('content')
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Add Image
    </button>
    <div class="row my-4">
        @foreach ($data->gallery as $i)
            <div class="col-3">
                <img src="data:image/png;base64,{{ $i->image }}" alt="" class="img-fluid rounded">
            </div>
        @endforeach
    </div>
    <hr>
    <dl class="row">
        <dt class="col-sm-3">Name</dt>
        <dd class="col-sm-9">{{ $data->name }}</dd>

        <dt class="col-sm-3">Client</dt>
        <dd class="col-sm-9">
            <p>{{ $data->client }}</p>
        </dd>

        <dt class="col-sm-3">Project Date</dt>
        <dd class="col-sm-9">{{ $data->project_date }}</dd>

        <dt class="col-sm-3 text-truncate">URL</dt>
        <dd class="col-sm-9">{{ $data->url }}</dd>

        <dt class="col-sm-3">Desc</dt>
        <dd class="col-sm-9">
            <p>{{ $data->desc }}</p>
        </dd>
        <dt class="col-sm-3">Category</dt>
        <dd class="col-sm-9">
            {{ $data->category->name }}
        </dd>
    </dl>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="/cms/portfolio/addImage" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Image</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Id</label>
                            <input type="text" name="portfolio_id" value="{{ $data->id }}" class="form-control"
                                readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Image</label>
                            <input type="file" class="form-control" name="image">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save Image</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
