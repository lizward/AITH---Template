<?php

try
{
    $pdo = new PDO('mysql:host=localhost;dbname=mothesq5_aith_db', 'mothesq5_aith_us', 'myP4ssw0rd');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
    $error = 'Unable to connect to the database server.';
    include '../includes/error.html.php';
    exit();
}

if($_POST) { (isset($_POST['name'])) && empty($_POST['honeypot']);

    $myname = $_POST['myname'];
    $myemail = $_POST['myemail'];
    $mypart = $_POST['mypart'];
    $event1 = $_POST['event1'];
    $event2 = $_POST['event2'];
    $rateevent = $_POST['rateevent'];
    $eventcomm = $_POST['eventcomm'];
    $ratevenue = $_POST['ratevenue'];
    $venuecomm = $_POST['venuecomm'];
    $rateincl = $_POST['rateincl'];
    $inclcomm = $_POST['inclcomm'];


    try {
        $sql = 'INSERT INTO satisfaction SET 
          name = :name,
          email =  :email,
          part = :part,  
          event1 = :event1, 
          event2 = :event2,
          rateevent = :rateevent, 
          eventcomm = :eventcomm, 
          ratevenue = :ratevenue, 
          venuecomm = :venuecomm,
          rateincl = :rateincl,
          inclcomm = :inclcomm';

        $s = $pdo->prepare($sql);
        $s->bindValue(':name', $myname);
        $s->bindValue(':email', $myemail);
        $s->bindValue(':part', $mypart);
        $s->bindValue(':event1', $event1);
        $s->bindValue(':event2', $event2);
        $s->bindValue(':rateevent', $rateevent);
        $s->bindValue(':eventcomm', $eventcomm);
        $s->bindValue(':ratevenue', $ratevenue);
        $s->bindValue(':venuecomm', $venuecomm);
        $s->bindValue(':rateincl', $rateincl);
        $s->bindValue(':inclcomm', $inclcomm);
        $s->execute();
    }

    catch (PDOException $e) {
        $error = 'Error adding submitted form: ' . $e->getMessage();
        include '../includes/error.html.php';

        exit();

    }

    include 'success.html.php';
    exit();

}
else {
    include 'satisfaction.html.php';
    exit();
}

include 'satisfaction.html.php';
