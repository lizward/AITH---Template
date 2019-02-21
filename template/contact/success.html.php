<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact Form Template</title>
    <meta name="description" content="Contact Us with any questions regarding our events">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=../styles/styles.css>
    <link href="https://fonts.googleapis.com/css?family=Raleway|Roboto" rel="stylesheet" type='text/css'>
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
<div id="wrapper">
    <?php include '../includes/header.inc.html.php'; ?>
    <?php include '../includes/nav.inc.html.php'; ?>
    <main>
        <h1>Thank you!</h1>
        <p>Our records show you submitted the following:<br>
            Name: <?php echo htmlspecialchars($myname, ENT_QUOTES, 'UTF-8'); ?><br>
            Email: <?php echo htmlspecialchars($myemail, ENT_QUOTES, 'UTF-8'); ?><br>
            Question: <?php echo htmlspecialchars($myquestion, ENT_QUOTES, 'UTF-8'); ?><br>
        </p>
    </main>
    <?php include '../includes/footer.inc.html.php'; ?>
</div>
</body>
</html>