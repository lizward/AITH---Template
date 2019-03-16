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

    $event1 = $_POST['event1'];
    $event2 = $_POST['event2'];
    $part = $_POST['part'];
    $myname = $_POST['myname'];
    $myemail = $_POST['myemail'];
    $myphone = $_POST['myphone'];
    $gender = $_POST['gender'];
    $myage = $_POST['myage'];
    $mysize = $_POST['mysize'];
    $myspecial = $_POST['myspecial'];


    try {
        $sql = 'INSERT INTO registration SET 
          event1 = :event1,
          event2 = :event2,
          part =  :part,
          name = :name,  
          email = :email, 
          phone = :phone, 
          gender = :gender, 
          age = :age,
          size = :size,
          special = :special';

        $s = $pdo->prepare($sql);
        $s->bindValue(':event1', $event1);
        $s->bindValue(':event2', $event2);
        $s->bindValue(':part', $part);
        $s->bindValue(':name', $myname);
        $s->bindValue(':email', $myemail);
        $s->bindValue(':phone', $myphone);
        $s->bindValue(':gender', $gender);
        $s->bindValue(':age', $myage);
        $s->bindValue(':size', $mysize);
        $s->bindValue(':special', $myspecial);
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
    include 'registration.html.php';
    exit();
}

include 'registration.html.php';
