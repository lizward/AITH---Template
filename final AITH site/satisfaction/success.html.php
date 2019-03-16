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
            Name: <?php echo htmlspecialchars($myname, ENT_QUOTES, 'UTF-8'); ?><br>
            Email: <?php echo html_entity_decode($myemail, ENT_QUOTES, 'UTF-8'); ?><br>
            Participant or Volunteer: <?php echo htmlspecialchars($mypart, ENT_QUOTES, 'UTF-8'); ?><br>
            Event 3/23: <?php echo htmlspecialchars($event1, ENT_QUOTES, 'UTF-8'); ?><br>
            Event 3/24: <?php echo htmlspecialchars($event2, ENT_QUOTES, 'UTF-8'); ?><br>
            Rated Event: <?php echo htmlspecialchars($rateevent, ENT_QUOTES, 'UTF-8'); ?><br>
            Event Comment: <?php echo htmlspecialchars($eventcomm, ENT_QUOTES, 'UTF-8'); ?><br>
            Rated Venue: <?php echo htmlspecialchars($ratevenue, ENT_QUOTES, 'UTF-8'); ?><br>
            Venue Comment: <?php echo htmlspecialchars($venuecomm, ENT_QUOTES, 'UTF-8'); ?><br>
            Rated Inclusion: <?php echo htmlspecialchars($rateincl, ENT_QUOTES, 'UTF-8'); ?><br>
            Inclusion Comment: <?php echo htmlspecialchars($inclcomm, ENT_QUOTES, 'UTF-8'); ?><br>
        </p>
    </main>
    <?php include '../includes/footer.inc.html.php'; ?>
</div>
</body>
</html>