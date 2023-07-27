<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>New Notification</title>
    <style>
        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #3490dc;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>New Notification</h1>

    <p>Dear {{ $name }},</p>

    <p>You have received a new notification.</p>

    <p>Notification Type: {{ $type }}</p>

    <p>Please login to your account at <a href="https://generationaltransformerssociety.co./login" class="button">Login</a> to check the details.</p>

    <p>Thank you for using our system.</p>

    <p>Best regards,</p>
    <p>GTS ICT Team</p>
</body>
</html>
