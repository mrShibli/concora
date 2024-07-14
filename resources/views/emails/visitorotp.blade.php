<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your OTP from Conqueror.ae</title>
</head>

<body style="font-family: Arial, sans-serif; background-color: #f9f9f9; color: #333; padding: 20px;">
    <div style="max-width: 600px; margin: 0 auto; background-color: #fff; padding: 20px;">
        <h3 style="background:#4184F3;color:#fff;padding:7px;">Verification Code</h3>
        <p>Dear {{ $fullName }},</p>

        <p> We received a request to access your Conqueror Account {{ $email_address }} through
            your email address. Your OTP verification code is: </p>

        <h1><strong>{{ $otp }}</strong></h1>

        <p>If you did not request this code, it is possible that someone else is trying to access
            the Account {{ $email_address }} Do not forward or give this code to anyone.</p>
        <p>Sincerely yours, <br>
        The Conqueror Support team</p>
    </div>
</body>

</html>
