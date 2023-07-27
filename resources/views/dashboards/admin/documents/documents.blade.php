@extends('dashboards.admin.layouts.admin_layouts')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>All Documents</h4>
                </div>
                <div class="card-body">

                    <table id="myDataTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>File</th>
                                <th>Date</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($documents as $document)
                            <tr>
                                <td>{{ $document->id }}</td>
                                <td>{{ $document->document_name }}</td>
                                <td>{{ $document->description }}</td>
                                <td><a href="{{ Storage::url('documents/' . $document->document) }}">{{ $document->document }}</a></td>
                                <td>{{ $document->date }}</td>
                                <td><a href="{{ route('document.edit', $document->id) }}" class="btn btn-outline-primary">Edit</a></td>

                                <td>
                                    <form action="{{ route('document.destroy', $document->id) }}" method="post">
                                        <button class="btn btn-outline-danger" onclick="return confirm('Are you sure?');" type="submit">Delete</button>
                                        @csrf
                                        @method('delete')
                                    </form>

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        $('#myDataTable').DataTable();
    });
</script>
@endsection
