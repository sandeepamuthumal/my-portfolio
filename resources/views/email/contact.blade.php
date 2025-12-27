<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>New Contact Message</title>
</head>
<body style="font-family: Arial, sans-serif; background:#f9fafb; padding:20px">

    <h2>New Contact Message</h2>

    <p><strong>Name:</strong> {{ $name }}</p>
    <p><strong>Email:</strong> {{ $email }}</p>

    <hr>

    <p><strong>Message:</strong></p>
    <p>{{ $user_message }}</p>
</body>
</html>
