@extends('dashboards/user/layouts/userlayout')
@section('content')

<div class="row">
  @foreach($notifications as $notification)
  <div class="col-sm-4">
    <div class="card">
      <div class="card-header">
        Sender: {{ $notification->sender->name }}
      </div>
      <div class="card-body">
        <h5 class="card-title">Notification</h5>
        <p class="card-text">{{ $notification->message }}</p>
        <p class="card-text">Sent at: {{ $notification->created_at }}</p>
      </div>
    </div>
  </div>
  @endforeach
</div>

@endsection
