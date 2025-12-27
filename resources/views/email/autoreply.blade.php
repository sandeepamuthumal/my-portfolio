<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Thanks for contacting</title>
</head>
<body style="font-family: Arial, sans-serif; background:#f9fafb; padding:20px">

    <h2>Hello {{ $name }}, 👋</h2>

    <p>
        Thank you for reaching out through my portfolio.
        I’ve received your message and will get back to you as soon as possible.
    </p>

    <hr>

    <p><strong>Your Message:</strong></p>
    <blockquote style="background:#fff; padding:10px; border-left:4px solid #3B82F6">
        {{ $user_message }}
    </blockquote>

    <p>
        Best regards,<br>
        <strong>Sandeepa Muthumal</strong><br>
        Full-Stack Developer
    </p>

</body>
</html>
