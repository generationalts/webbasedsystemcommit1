@extends('dashboards\admin\layouts\admin_layouts')
@section('content')
    @if (session('success'))
        <div class="position-fixed top-0 start-50 translate-middle-x mt-3" style="z-index: 9999;">
            <div class="alert alert-success d-flex align-items-center justify-content-center" role="alert">
                <i class="fas fa-check-circle me-2"></i>
                {{ session('success') }}
            </div>
        </div>
    @endif
    <div class="row">
        <div class="col-md-6 col-lg-4 mb-3">
            <div class="card text-white bg-primary">
                <div class="card-header">User Icon</div>
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <h5 class="card-title">Total Users</h5>
                        <p class="card-text">{{ $user }}</p>
                    </div>
                    <i class="fa fa-users fa-2x"></i>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-3">
            <div class="card text-white bg-primary">
                <div class="card-header">Actions</div>
                <div class="card-body">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                        Add Motivational Quote
                    </button>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#noticeModalLong">
                        Create Notification
                    </button>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-3">
            <div class="card text-white bg-primary">
                <div class="card-header">Actions</div>
                <div class="card-body">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#documentModalLong">
                        Add Document
                    </button>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#noticeModalLong">
                        Create Notification
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id=noticeModalLong tabindex=-1 role=dialog aria-labelledby=exampleModalLongTitle
        aria-hidden=true>
        <div class=modal-dialog role=document>
            <div class=modal-content>
                <div class=modal-header>
                    <h5 class=modal-title id=exampleModalLongTitle>Notices</h5>
                    <button type=button class=close data-dismiss=modal aria-label=Close>
                        <span aria-hidden=true>&times;</span>
                    </button>
                </div>
                <div class=modal-body>
                    <form action="{{ route('notifications.store') }}" method="post" class="form">
                        @csrf
                        <div class="form-group">
                            <label for="recipient" class="form-control-label">Recipient:</label>
                            <select name="recipient" id="recipient" class="form-control">
                                <option value="all">All Users</option>
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="message" class="form-control-label">Message:</label>
                            <textarea name="message" id="message" rows="4" class="form-control"></textarea>
                        </div>



                </div>
                <div class=modal-footer>
                    <button type=button class="btn btn-secondary" data-dismiss=modal>Close</button>
                    <input type="submit" value="Send" class="btn btn-primary">

                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="documentModalLong" tabindex="-1" role="dialog" aria-labelledby="ModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Upload documents</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('document.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="document_name">Document Name:</label>
                            <select class="form-control" name="document_name" required>
                                <option value="minutes">Minutes</option>
                                <option value="strategic_plan">Strategic Plan</option>
                                <option value="constitution">Constitution</option>
                                <option value="others">Others</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="description">Description:</label>
                            <textarea class="form-control" rows="5" name="description" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="document">Upload Document:</label>
                            <input type="file" class="form-control" name="document" required>
                        </div>
                        <div class="form-group">
                            <label for="date">Date:</label>
                            <input type="date" class="form-control" name="date" value="{{ date('Y-m-d') }}" required>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id=exampleModalLong tabindex=-1 role=dialog aria-labelledby=exampleModalLongTitle
        aria-hidden=true>
        <div class=modal-dialog role=document>
            <div class=modal-content>
                <div class=modal-header>
                    <h5 class=modal-title id=exampleModalLongTitle>Motivation Quotes</h5>
                    <button type=button class=close data-dismiss=modal aria-label=Close>
                        <span aria-hidden=true>&times;</span>
                    </button>
                </div>
                <div class=modal-body>

                    <form method="POST" action="{{ route('dailymotive.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="verse">Motiviation Title:</label>
                            <textarea class="form-control" rows="5" name="verse" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="encouragement">Motivation Body:</label>
                            <textarea class="form-control" rows="5" name="encouragement" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="image">Image:</label>
                            <input type="file" class="form-control" name="image" required>
                        </div>



                </div>
                <div class=modal-footer>
                    <button type=button class="btn btn-secondary" data-dismiss=modal>Close</button>
                    <button type="submit" class="btn btn-primary">POST</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
