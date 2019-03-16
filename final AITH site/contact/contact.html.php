<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Contact Ace In the Hole</title>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../styles/justifiedGallery.css">
    <script src="../includes/jquery.justifiedGallery.js"></script>

    <link rel="stylesheet" href="../styles/jquery.justified.images.css">
    <link rel="stylesheet" href=../styles/styles.css>
    <link href="https://fonts.googleapis.com/css?family=Raleway|Roboto" rel="stylesheet" type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
    
<body id="wrapper">
    
    <?php include '../includes/header.inc.html.php'; ?>
    <?php include '../includes/nav.inc.html.php'; ?>

     <main>
         <section id="mygallery">

             <a href="../images/sport-3436358_640.jpg" title="Athlete in wheelchair"> <img src="../images/sport-3436358_640.jpg"
                                                                                           alt="athlete in wheelchair" style="width: 180px; height: 160px"></a>
             <a href="../images/marathon-1649905_640.jpg" title="Road running feet"><img src="../images/marathon-1649905_640.jpg"
                                                                                         alt="road running feet" style="width: 220px; height: 160px"></a>
             <a href="../images/berlin-661468_1920.jpg" title="Marathoners"><img src="../images/berlin-661468_1920.jpg"
                                                                                 alt="marathoners" style="width: 199px; height: 160px"></a>
             <a href="../images/woman-1822459_640.jpg" title="Woman running"><img src="../images/woman-1822459_640.jpg"
                                                                                  alt="woman running" style="width: 239px; height: 160px"></a>
             <a href="../images/jogging-1509003_1920.jpg" title="Women running on a path"><img src="../images/jogging-1509003_1920.jpg"
                                                                                               alt="women running on path" style="width: 185px; height: 160px"></a>
             <a href="../images/triathlon-452572_1920.jpg" title="Swimmers entering water"><img src="../images/triathlon-452572_1920.jpg"
                                                                                                alt="swimmers entering water" style="width: 240px; height: 160px"></a>
             <a href="../images/street-marathon-1149220_640.jpg" title="Half marathon from the sky"><img src="../images/street-marathon-1149220_640.jpg"
                                                                                                         alt="half marathon from the sky" style="width: 269px; height: 160px"></a>
             <a href="../images/track-79600_1920.jpg" title="Feet on the track"><img src="../images/track-79600_1920.jpg"
                                                                                     alt="feet on a track" style="width: 180px; height: 160px"></a>
             <a href="../images/running-573762_640.jpg" title="Runner at sunset"><img src="../images/running-573762_640.jpg"
                                                                                      alt="runner at sunset" style="width: 160px; height: 160px"></a>
             <a href="../images/runner-662825_640.jpg" title="Woman running"><img src="../images/runner-662825_640.jpg"
                                                                                  alt="woman running" style="width: 200px; height: 160px"></a>

         </section>


         <aside>
                
                <h2>We Love Hearing From You</h2>
                
                <p>Whether you want to tell us how much fun you had at one of our events, or you have a suggestion for how we can improve - we would love to hear
                what you have to say. Send us a message through our contact form, and we will get back to you soon!</p>
                
            </aside>

         <section class="form">
                
                <h2>Contact Ace in the Hole Multisport Events</h2>

                <form method="post" action="contact_index.php" id="inquiryForm">
                    <input type="text" name="honeypot" id="honeypot" value="" alt="if you fill this field out then your email will not be sent"/>
                    <label for="myName">Name:</label>
                    <input type="text" name="myName" id="myName" required>
                    <label for="myEmail">E-mail:</label>
                    <input type="email" name="myEmail" id="myEmail" required>
                    <section class="button">
                    <label for="myPart">Type of Involvement:</label>
                        <input type="radio" name="myPart" value="participant" class="radio" checked> Participant<br>
                        <input type="radio" name="myPart" value="volunteer" class="radio"> Volunteer<br>
                        <input type="radio" name="myPart" value="interested" class="radio"> Interested<br>
                    </section>
                    <label for="myQuestion">Question:</label>
                    <textarea form="inquiryForm" rows="10" cols="50" name="myQuestion" id="myQuestion"></textarea>
                    <input id="mySubmit" type="submit" value="Submit">
                </form>
             
         </section>

         <section class="weather">

             <h2>Weather</h2>

             <iframe src="https://www.powr.io/plugins/weather/view?unique_label=b16fdacc_1551498398&external_type=iframe" width="100%" height="600" frameborder="0"></iframe>

         </section>

     </main>
    
    <?php include '../includes/footer.inc.html.php'; ?>

</body>
</html>

