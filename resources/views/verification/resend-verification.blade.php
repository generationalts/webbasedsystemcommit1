@extends('layouts.layoutwelcome')

@section('content')
<section id="email-verification" class="email-verification">
    <div class="container" data-aos="fade-up">
        <div class="section-header">
            <h2 style="color: white; text-shadow: 2px 2px 4px #000000;">Email Verification Notice</h2>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <p>Please verify your email address to access the full functionality of our application.</p>
                @if (session('message'))
                    <div class="alert alert-success">{{ session('message') }}</div>
                @endif
                <form method="POST" action="{{ route('verification.resend') }}">
                    @csrf
                    <button type="submit" class="btn btn-primary">Resend Verification Email</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
