<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>About Ace in the Hole</title>
    
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
                
                <h2>About Ace in the Hole Multisport Events</h2>
                
                <p>Ace in the Hole Multisport Events is proud to offer running and triathlon events to athletes
                    of all shapes and sizes, national origins, sexual orientations and cultural backgrounds.
                    We offer Events for Every Body.</p>

                <h2>About the Event</h2>

                <p>The Annual Ace in the Hole MultiSport Weekend is a legendary event in the Oregon triathlon and
                    running community. It has become a traditional destination race for athletes from across the nation.<br>
                    There is something for every level of athletic ability. The weekend includes a first timer triathlon,
                    a sprint, Olympic, and Half-Iron triathlons and 10K and Half marathon runs. Come to experience your
                    first race or come to compete to win, but make sure you come to have fun!</p>
                
            </aside>

         <section class="form">

             <form>

                 <h2>Register for Ace in the Hole Event</h2>
                 <p>Required fields are marked with an asterisk (*).</p>
                     <form method="post" action="../registration/registration_index.php">
                         <input type="text" name="honeypot" id="honeypot" value="" alt="if you fill this field out then your email will not be sent"/>
                         <label for="event1">March 23rd Event:</label>
                         <select size="1" name="event1" id="event1">
                             <option>Choose Your Event for March 23rd:</option>
                             <option value="long course">Long Course - $240</option>
                             <option value="olympic">Olympic - $110</option>
                             <option value="10k">10k - $50</option>
                             <option value="half">Half Marathon - $75</option>
                         </select>
                         <label for="event2">March 24th Event:</label>
                         <select size="1" name="event2" id="event2">
                             <option>Choose Your Event for March 24th:</option>
                             <option value="sprint">Sprint - $90</option>
                             <option value="tri">Try-a-Tri - $65</option>
                             <option value="splash">Splash n Dash - $25 (or free with adult registration)</option>
                         </select>
                         <label for="part">*Participant or Volunteer:</label>
                         <select size="1" name="part" id="part">
                             <option>Pick One</option>
                             <option value="participant">Participant</option>
                             <option value="volunteer">Volunteer</option>
                         </select>
                         <label for="myname">*Full Name:</label>
                         <input type="text" name="myname" id="myname" required>
                         <label for="myemail">*Email:</label>
                         <input type="email" name="myemail" id="myemail" required>
                         <label for="myphone">*Emergency Contact Phone:</label>
                         <input type="tel" name="myphone" id="myphone">
                         <label for="gender">Gender Identification:</label>
                         <select size="1" name="gender" id="gender">
                             <option>Pick One</option>
                             <option value="female">Female</option>
                             <option value="male">Male</option>
                             <option value="nonbinary">Non-Binary</option>
                         </select>
                         <label for="myage">*Age:</label>
                         <input type="text" name="myage" id="myage" required>
                         <label for="mysize">Unisex Shirt Size:</label>
                         <select size="1" name="mysize" id="mysize">
                             <option>XS</option>
                             <option>S</option>
                             <option>M</option>
                             <option>L</option>
                             <option>XL</option>
                             <option>2XL</option>
                             <option>3XL</option>
                             <option>4XL</option>
                         </select>
                         <label for="myspecial">*Do you require any special accommodations?</label>
                         <textarea name="myspecial" id="myspecial" rows="2" cols="20" required></textarea>
                         <input id="mysubmit" type="submit" value="Submit">
                     </form>
                 


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

