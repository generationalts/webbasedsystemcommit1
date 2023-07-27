@extends('dashboards/user/layouts/userlayout')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>my_contributions</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
</head>
<body>
    @if (session('success'))
    <div class="position-fixed top-0 start-50 translate-middle-x mt-3" style="z-index: 9999;">
        <div class="alert alert-success d-flex align-items-center justify-content-center" role="alert">
            <i class="fas fa-check-circle me-2"></i>
            {{ session('success') }}
        </div>
    </div>
@endif
<div class=card-body>
    <button type=button class="btn btn-primary" data-toggle=modal data-target=#exampleModalLong>
ADD Contribution
    </button>
    </div>
    <div class="modal fade" id=exampleModalLong tabindex=-1 role=dialog aria-labelledby=exampleModalLongTitle aria-hidden=true>
        <div class=modal-dialog role=document>
        <div class=modal-content>
        <div class=modal-header>
        <h5 class=modal-title id=exampleModalLongTitle>Donate To Generational Transformers Society</h5>
        <button type=button class=close data-dismiss=modal aria-label=Close>
        <span aria-hidden=true>&times;</span>
        </button>
        </div>
        <div class=modal-body>
            <form action="{{ route('accounts.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label hidden for="name">Name</label>
                    <input type="text" hidden class="form-control" id="name" name="name" value="{{ Auth::user()->name }}" readonly>
                </div>
                <div class="form-group">
                    <label hidden for="email">Email</label>
                    <input type="email" hidden class="form-control" id="email" name="email" value="{{ Auth::user()->email }}" readonly>
                </div>
                <div class="form-group">
                    <label hidden for="contact">Contact</label>
                    <input type="text" class="form-control" hidden id="contact" name="contact" value="{{ Auth::user()->contact }}" readonly>
                </div>
                <div class="form-group">
                    <label  for="number">Send Contibutions to <b>0748406405</b></label>

                </div>
                <div class="form-group">
                    <label for="contributionAmount">Contribution Amount</label>
                    <input type="number" class="form-control" required id="contributionAmount" name="contributionAmount" placeholder="Enter your contribution amount">
                </div>
                <div class="form-group">
                    <label for="activity">Activity</label>
                    <select class="form-control" id="activity" required name="activity">
                        <option>Weekly Contribution</option>
                        <option>Camera Purchase</option>
                        <option>Other Project</option>
                    </select>
                </div>
                <div class="form-group">
                    <label hidden for="date">Date</label>
                    <input type="date" hidden class="form-control" id="date" name="date" value="{{ date('Y-m-d') }}">
                </div>


        </div>
        <div class=modal-footer>
        <button type=button class="btn btn-secondary" data-dismiss=modal>Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
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
        </tr>
    </thead>
    <tbody>
        @foreach ($contributionRequests as $mycontribution )


        <tr>
            <td>{{ $mycontribution->name}}</td>
            <td>{{ $mycontribution->contributionAmount}}</td>
            <td>{{ $mycontribution->activity}}</td>
            <td>{{ $mycontribution->date}}</td>
            <td>
                <button class="btn btn-{{ $mycontribution->status === 'confirmed' ? 'success' : 'dark' }} btn-sm" style="width: 75px;">
                    {{ $mycontribution->status }}
                </button>
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
