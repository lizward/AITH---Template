<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ace in the Hole Event Registration</title>
    <meta name="description" content="Register for an Ace in the Hole Multisport Event.">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=../styles/styles.css>
    <link href='https://fonts.googleapis.com/css?family=Cinzel' rel='stylesheet' type='text/css'>
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
            Event: <?php echo htmlspecialchars($event, ENT_QUOTES, 'UTF-8'); ?><br>
            Participant or Volunteer: <?php echo html_entity_decode($part, ENT_QUOTES, 'UTF-8'); ?><br>
            Name: <?php echo htmlspecialchars($myname, ENT_QUOTES, 'UTF-8'); ?><br>
            Email: <?php echo htmlspecialchars($myemail, ENT_QUOTES, 'UTF-8'); ?><br>
            Emergency Contact: <?php echo htmlspecialchars($myphone, ENT_QUOTES, 'UTF-8'); ?><br>
            Gender Identification: <?php echo htmlspecialchars($gender, ENT_QUOTES, 'UTF-8'); ?><br>
            Age: <?php echo htmlspecialchars($myage, ENT_QUOTES, 'UTF-8'); ?><br>
            Size: <?php echo htmlspecialchars($mysize, ENT_QUOTES, 'UTF-8'); ?><br>
            Accommodations: <?php echo htmlspecialchars($myspecial, ENT_QUOTES, 'UTF-8'); ?><br>
        </p>
    </main>
    <?php include '../includes/footer.inc.html.php'; ?>
</div>
</body>
</html>