<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Enquiry Form - Thank You</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
        }

        h1 {
            color: #007BFF;
            text-align: center;
            margin-bottom: 20px;
        }

        p {
            margin-bottom: 10px;
            line-height: 1.6;
        }

        strong {
            color: #007BFF;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .message {
            border-top: 2px solid #007BFF;
            padding-top: 15px;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
            color: #888;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Thank You for Your Submission</h1>
        <p>We have received your enquiry and will review it shortly. Thank you for your interest in our school.</p>

        <p><strong>Student Name:</strong> {{ $enquiryInfo['name'] }}</p>
        <p><strong>Parent/Guardian Name(s):</strong> {{ $enquiryInfo['pname'] }}</p>
        <p><strong>Email:</strong> {{ $enquiryInfo['email'] }}</p>
        <p><strong>Phone:</strong> {{ $enquiryInfo['phone'] }}</p>
        <p><strong>Address:</strong> {{ $enquiryInfo['address'] }}</p>

        <div class="message">
            <p><strong>Message:</strong> {!! $enquiryInfo['comment'] !!}</p>
        </div>
    </div>

    <div class="footer">
        <p>&copy; 2024 Your School Name. All rights reserved.</p>
    </div>
</body>
</html>
