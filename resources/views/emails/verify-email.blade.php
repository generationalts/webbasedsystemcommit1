<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Email Verification</title>
</head>
<body>
    <h2>Verify Your Email Address</h2>
    <p>
        Thank you for registering! Please click the link below to verify your email address:
        <br>
        <a href="{{ $verificationUrl }}">{{ $verificationUrl }}</a>
    </p>
    <p>
        If you didn't create an account, you can safely ignore this email.
    </p>
</body>
</html>
