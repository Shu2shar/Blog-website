<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Email</title>
</head>

<body style="margin: 0; padding: 0; background-color: #f4f4f4; font-family: Arial, sans-serif;">

    <div
        style="max-width: 600px; margin: 30px auto; background-color: #ffffff; padding: 30px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);">

        <div style="text-align: center;">
            <h2 style="color: #4CAF50; margin-bottom: 10px;">Welcome to Our Platform, {{ $name }}!</h2>
        </div>

        <hr style="border: none; border-top: 1px solid #ddd; margin: 20px 0;">

        <div style="font-size: 16px; color: #333; line-height: 1.6;">
            <p><strong>Message:</strong></p>
            <p style="background-color: #f9f9f9; padding: 15px; border-left: 4px solid #4CAF50;">We’re excited to have
                you as part of our community. Your account has been successfully created, and you're now ready to
                explore all the features our platform has to offer.

                Whether you're here to share your thoughts, read insightful blogs, or connect with like-minded
                individuals — we’re here to support you every step of the way.

                If you have any questions or need assistance, feel free to reach out to our support team at any time.

                Let’s build something amazing together!</p>

            <p><strong>Email:</strong> <span style="color: #000;">{{ $mailTo }}</span></p>
        </div>

        <p style="text-align: center; font-size: 12px; color: #999; margin-top: 30px;">&copy; {{ date('Y') }}
            MyCompany. All rights reserved.</p>

    </div>

</body>

</html>


</html>
