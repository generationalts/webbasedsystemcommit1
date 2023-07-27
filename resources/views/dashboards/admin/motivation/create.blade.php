<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create New Daily Verse</div>
                <div class="panel-body">
                    <form method="POST" action="{{ route('dailymotive.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="image">Image:</label>
                            <input type="file" class="form-control" name="image" required>
                        </div>
                        <div class="form-group">
                            <label for="verse">Verse:</label>
                            <textarea class="form-control" rows="5" name="verse" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="encouragement">Encouragement:</label>
                            <textarea class="form-control" rows="5" name="encouragement" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
