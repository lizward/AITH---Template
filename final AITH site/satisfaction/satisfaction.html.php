<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Satisfaction Survey</title>
    
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
    
<body>
    
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
                
                <h2>Your Opinion Matters</h2>
                
                <p>We use your opinion to improve our events. Anything you can tell us to help us make our events the best they can be for you, will be appreciated.
                We care about you and how our events made you feel. Our goal is to make you feel strong, empowered, and included. Let us know how we did!</p>
                
            </aside>

         <section class="form">



                 <h2>Satisfaction Survey</h2>
                 <div id="source">Required fields are marked with an asterisk (*).</div>
                 <div id="reservations">
                     <form method="post" action="satisfaction_index.php">
                         <input type="text" name="honeypot" id="honeypot" value="" alt="if you fill this field out then your email will not be sent"/>
                         <label for="myname">*Full Name:</label>
                         <input type="text" name="myname" id="myname" required>
                         <label for="myemail">*Email:</label>
                         <input type="email" name="myemail" id="myemail" required>
                         <label for="mypart">*Involvement</label>
                         <select size="1" name="mypart" id="mypart">
                             <option>Pick One</option>
                             <option value="participant">Participant</option>
                             <option value="volunteer">Volunteer</option>
                         </select>
                         <label for="event1">March 23rd Event:</label>
                         <select size="1" name="event1" id="event1">
                             <option>Choose Your Event for March 23rd:</option>
                             <option value="long course">Long Course</option>
                             <option value="olympic">Olympic</option>
                             <option value="10k">10k</option>
                             <option value="half">Half Marathon</option>
                             <option value="sprint">Sprint</option>
                             <option value="tri">Try-a-Tri</option>
                         </select>
                         <label for="event2">March 24th Event:</label>
                         <select size="1" name="event2" id="event2">
                             <option>Choose Your Event for March 24th:</option>
                             <option value="long course">Long Course</option>
                             <option value="olympic">Olympic</option>
                             <option value="10k">10k</option>
                             <option value="half">Half Marathon</option>
                             <option value="sprint">Sprint</option>
                             <option value="tri">Try-a-Tri</option>
                         </select>
                         <label for="rateevent">Rate the Event:</label>
                            <input type="radio" name="rateevent" value="awesome" class="radio" checked>
                            <label for="awesome">Awesome!</label><br>
                            <input type="radio" name="rateevent" value="okay">
                            <label for "okay">It was Okay</form><br>
                            <input type="radio" name="rateevent" value="needsimprovement"> Needs Improvement<br>
                         </select>
                         <textarea name="eventcomm" id="eventcomm" rows="2" cols="20">Leave a comment about the event</textarea>
                         <label for="ratevenue">Rate the Course:</label>
                            <input type="radio" name="ratevenue" value="awesome" checked> Awesome!<br>
                            <input type="radio" name="ratevenu" value="okay"> It was Okay<br>
                            <input type="radio" name="ratevenu" value="needsimprovement"> Needs Improvement<br>
                         <textarea name="venuecomm" id="venuecomm" rows="2" cols="20">Leave a comment about the venue</textarea>
                         <label for="rateincl">Did you Feel Included?</label>
                             <input type="radio" name="rateincl" value="yes" checked> Yes!<br>
                             <input type="radio" name="rateincl" value="sortof"> Sort of<br>
                             <input type="radio" name="rateincl" value="no"> No<br>
                         <textarea name="inclcomm" id="inclcomm" rows="2" cols="20">Leave a comment regarding inclusion</textarea>
                         <input id="mysubmit" type="submit" value="Submit">
                     </form>
                 </div>
             
         </section>

         <section class="weather">

             <h2>Weather</h2>

             <iframe src="https://www.powr.io/plugins/weather/view?unique_label=b16fdacc_1551498398&external_type=iframe" width="100%" height="600" frameborder="0"></iframe>
             
         </section>

     </main>
    
    <?php include '../includes/footer.inc.html.php'; ?>

</body>
</html>

