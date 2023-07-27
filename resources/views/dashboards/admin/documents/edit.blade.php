@extends('dashboards.admin.layouts.admin_layouts')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Edit Document</h4>
                </div>
                <div class="card-body">

                    <form method="POST" action="{{ route('document.update', $document->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="document_name">Document Name:</label>
                            <input type="text" class="form-control" name="document_name" value="{{ $document->document_name }}" required>
                        </div>

                        <div class="form-group">
                            <label for="description">Description:</label>
                            <textarea class="form-control" rows="5" name="description" required>{{ $document->description }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="document">Current Document:</label>
                            <a href="{{ asset('storage/documents/' . $document->document) }}" target="_blank">{{ $document->document }}</a>
                        </div>

                        <div class="form-group">
                            <label for="new_document">New Document:</label>
                            <input type="file" class="form-control" name="new_document">
                        </div>

                        <div class="form-group">
                            <label for="date">Date:</label>
                            <input type="date" class="form-control" name="date" value="{{ $document->date }}" required>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
