<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You for Contacting Us</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6;">
    <p>Dear {{ $name }},</p>

    <p>Thank you for reaching out to us regarding your mental health concerns. We truly appreciate your trust in us.</p>

    <p>Here's a summary of the information you provided:</p>

    <ul>
        <li><strong>Name:</strong> {{ $name }}</li>
        <li><strong>Email:</strong> {{ $email }}</li>
        <li><strong>Phone:</strong> {{ $phone }}</li>
        <li><strong>Topic:</strong> {{ $topic }}</li>
        <li><strong>Message:</strong> {{ $messages }}</li>
    </ul>

    <p>Our team will review your message and get back to you as soon as possible. Please allow up to 24-48 hours for a response.</p>

    <p>In the meantime, here are some helpful resources:</p>

    <ul>
        <li>Visit our website: <a href="https://www.example.com">https://www.example.com</a> to learn more about our services.</li>
        <li>Read our blog: <a href="https://www.example.com/blog">https://www.example.com/blog</a> for articles and tips on mental well-being.</li>
    </ul>

    <p>If you need immediate assistance or have any urgent concerns, please feel free to contact us directly at <a href="mailto:support@example.com">support@example.com</a> or call us at +123456789.</p>

    <p>Thank you again for reaching out. We look forward to assisting you.</p>

    <p>Warm regards,<br>The Mental Health Consultation Team</p>
</body>
</html>
