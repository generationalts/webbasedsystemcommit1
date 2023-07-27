<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Comment Liked</title>
</head>
<body>
    <h2>Notification: Comment Liked</h2>

    <p>Hello {{ $username }},</p>

    <p>Your comment has been {{ $action }} by another user.</p>

    <p>Comment: {{ $comment }}</p>

    <p>Total Likes: {{ $likeCount }}</p>

    <p>Thank you!</p>
</body>
</html>
