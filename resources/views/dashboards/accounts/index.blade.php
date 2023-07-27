@extends('dashboards\accounts\layouts\accounts_layouts')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>

    <body>
        @if(session('success'))
        <div class="position-fixed top-0 start-50 translate-middle-x mt-3" style="z-index: 9999;">
            <div class="alert alert-success d-flex align-items-center justify-content-center" role="alert">
                <i class="fas fa-check-circle me-2"></i>
                {{ session('success') }}
            </div>
        </div>
    @endif
        <div class="row">s
            <div class="col-md-6 col-xl-3">
                <div class="card text-white bg-primary mb-3">
                    <div class="card-header">User Icon</div>
                    <div class="card-body">
                        <h5 class="card-title">Total Accounts</h5>
                        <p class="card-text">{{ $user }}</p>
                        <i class="fa fa-users fa-2x"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card text-white bg-primary mb-3">
                    <div class="card-header">Accounts Icon</div>
                    <div class="card-body">
                        <h5 class="card-title">Total Amount</h5>
                        <p class="card-text">{{ $contributionAmount }}</p>

                        <i class="fa fa-credit-card fa-2x"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card text-white bg-primary mb-3">
                    <div class="card-header">Actions</div>
                    <div class="card-body">
                        <button type=button class="btn btn-primary" data-toggle=modal data-target=#exampleModalLong>
                            ADD Contribution
                        </button>
                        <button type=button class="btn btn-primary" data-toggle=modal data-target=#noticeModalLong>
                            create notification
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
                        <form action="{{ route('notifications.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="recipient">Recipient:</label>
                                <select class="form-control" name="recipient" id="recipient">
                                    <option value="all">All Users</option>
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="message">Message:</label>
                                <textarea class="form-control" name="message" id="message" rows="4"></textarea>
                            </div>


                    </div>
                    <div class=modal-footer>
                        <button type=button class="btn btn-secondary" data-dismiss=modal>Close</button>
                        <input type="submit" value="Send">
                        </form>
                    </div>
                </div>
            </div>
        </div>
      

        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Contribution Amount</th>
                    <th>Activity</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Update</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contributions_data as $mycontribution)
                    <tr>
                        <td>{{ $mycontribution->name }}</td>
                        <td>{{ $mycontribution->contributionAmount }}</td>
                        <td>{{ $mycontribution->activity }}</td>
                        <td>{{ $mycontribution->date }}</td>
                        <td>
                            <button
                                class="btn btn-{{ $mycontribution->status === 'confirmed' ? 'success' : 'dark' }} btn-sm"
                                style="width: 75px;">
                                {{ $mycontribution->status }}
                            </button>
                        </td>
                        <td>
                            <a class="btn btn-primary" href="/mycontribution/{{ $mycontribution->id }}">Update </a>

                        </td>

                    </tr>
                @endforeach
            </tbody>

        </table>



        <script>
            $(document).ready(function() {
                $('#example').DataTable();
            });
        </script>
    </body>

    </html>
@endsection
