<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact us </title>
</head>
<body>

<p><strong>Name:</strong> <?php echo e($contactInfo['name']); ?></p>
<p><strong>Email:</strong> <?php echo e($contactInfo['email']); ?></p>
<p><strong>Phone:</strong> <?php echo e($contactInfo['phone']); ?></p>
<p><strong>Message:</strong> <?php echo $contactInfo['message']; ?></p>

</body>
</html><?php /**PATH /home/sirsorg/public_html/resources/views/emails/contact-us.blade.php ENDPATH**/ ?>