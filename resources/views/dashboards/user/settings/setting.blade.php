@extends('dashboards/user/layouts/userlayout')
@section('content')

<section id="profile" class="profile">
    <div class="container" data-aos="fade-up">
        <div class="section-header">
            <h2 style="color: white;">Profile</h2>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <form method="POST" action="{{ route('profile.update') }}">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input id="name" type="text" class="form-control" name="name" value="{{ $user->name }}" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" type="email" class="form-control" name="email" value="{{ $user->email }}" readonly>
                    </div>

                    <div class="form-group">
                        <label for="contact">Contact</label>
                        <input id="contact" type="text" class="form-control" name="contact" value="{{ $user->contact }}" required>
                    </div>

                    <div class="form-group">
                        <label for="password">New Password</label>
                        <input id="password" type="password" class="form-control" name="password" required>
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation">Confirm New Password</label>
                        <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Update Profile</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
