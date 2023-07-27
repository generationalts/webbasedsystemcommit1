@extends('dashboards\user\layouts\userlayout')
@section('content')
<form action="/mycontributionupdate/{{ $accounts->id }} " method="post" enctype="multipart/form-data">
    @csrf
    @method("put")
    <div class="form-group">
    <label class=form-label for=Name>select Status</label>
    <select class=form-control name=status>

    <option value="{{ $accounts->status}}" selected=selected hidden=hidden>{{ $accounts->status}}</option>
    <option></option>
    <option>confirmed</option>
    <option>pending</option>
    </select>
    </div>
    <div class="form-group">
        <label for="name" hidden>Name</label>
        <input type="text" hidden class="form-control" id="name" name="name" value="{{ $accounts->name}}" readonly>
    </div>
    <div class="form-group">
        <label hidden for="email">Email</label>
        <input type="email" hidden class="form-control" id="email" name="email" value="{{ $accounts->email}}" readonly>
    </div>
    <div class="form-group">
        <label hidden for="contact">Contact</label>
        <input type="text" class="form-control" hidden id="contact" name="contact" value="{{ $accounts->contact}}" readonly>
    </div>
    <div class="form-group">
        <label hidden for="contributionAmount">Contribution Amount</label>
        <input type="number" class="form-control" id="contributionAmount" hidden value="{{ $accounts->contributionAmount}}" name="contributionAmount" placeholder="Enter your contribution amount">
    </div>
    <div class="form-group">
        <label hidden for="activity">Activity</label>
        <select class="form-control" hidden id="activity" name="activity">
            <option>Weekly Contribution</option>
            <option>Camera Purchase</option>
            <option>Other Project</option>
        </select>
    </div>
    <div class="form-group">
        <label hidden for="date">Date</label>
        <input type="date" class="form-control" id="date" name="date" hidden value="{{ date('Y-m-d') }}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
