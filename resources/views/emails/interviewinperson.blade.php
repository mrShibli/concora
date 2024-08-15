<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Job Application Interview Request</title>
</head>

<body
    style="font-family: Arial, sans-serif; line-height: 1.6; margin: 0; padding: 0; background-color: #f4f4f4;margin-top: 5px;">
    <div style="max-width: 600px; margin: 0 auto; padding: 20px; background-color: #ffffff;">

        <p style="color: #333333; margin-bottom: 20px;">Dear {{ $clientname }} {{ $clientnamelast }},</p>

        <p style="color: #333333; margin-bottom: 10px;">Thank you for applying for the Bike Rider Possition under
            Conqueror Services, Dubai.</p>

        <p style="color: #333333; margin-bottom: 10px;">We would like to invite you to interview for the position of
            Bike Rider. </p>

        <h4>Your interview has been scheduled for:</h4>

        <li>Date & Time: <?php echo $interview->time; ?> ( Time Zone by <?php echo $interview->zonecountry; ?> )</li>
        <?php if ($interview->address): ?>
        <li>Location: <?php echo $interview->address; ?></li>
        <?php endif; ?>
        <?php if ($interview->meetingurl): ?>
        <li>Video Interview Link: <?php echo $interview->meetingurl; ?></li>
        <?php endif; ?>
        <?php if ($interview->meetingpass): ?>
        <li>Meeting Pass Code: <?php echo $interview->meetingpass; ?></li>
        <?php endif; ?>
        <li>Contact: <?php echo $interview->contactnumber; ?></li>
        <?php if ($interview->message): ?>
        <br>
        <p style="color: #333333; margin-top: 2px;">Note : <?php echo $interview->message; ?></p>
        <?php endif; ?>

        <br>

        <p style="color: #333333; margin-top: 5px;">Please call us at +971 50 362 0969 or email at
            jobs@conquerorservices.com if you have any questions
            or need to reschedule the interview time/Date.</p>


        <div>
            <a href="{{ route('accept', ['id' => $clientid, 'email' => $clientemail]) }}"
                style="display: inline-block; background-color: #4CAF50; color: white; padding: 7px 20px; text-align: center; text-decoration: none; border-radius: 5px; margin-right: 7px;">Accept</a>
            <a href="{{ route('reject', ['id' => $clientid, 'email' => $clientemail]) }}"
                style="display: inline-block; background-color: #f44336; color: white; padding: 7px 20px; text-align: center; text-decoration: none; border-radius: 5px; margin-right: 7px;">Reject</a>
            <a href="{{ route('reschedule', ['id' => $clientid, 'email' => $clientemail]) }}"
                style="display: inline-block; background-color: #008CBA; color: white; padding: 7px 20px; text-align: center; text-decoration: none; border-radius: 5px; margin-right: 7px;">Reschedule</a>
        </div>


        <p style="color: #333333; margin-bottom: 17px;margin-top: 20px;">Sincerely,</p>
        <p style="color: #333333; margin-bottom: -3px;">Mr Zahid Sultan</p>
        <p style="color: #333333; margin-bottom: -3px;">Regional Manager</p>
        <p style="color: #333333; margin-bottom: -3px;">Conqueror Services LLC</p>
        <p style="color: #333333; margin-bottom: 0;">Sister Concern of Conqueror Group</p>
    </div>
</body>

</html>
