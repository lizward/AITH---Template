<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Template</title>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href=../styles/styles.css>
    <link href="https://fonts.googleapis.com/css?family=Raleway|Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
</head>
    
<body>
    
    <?php include '../includes/header.inc.html.php'; ?>
    <?php include '../includes/nav.inc.html.php'; ?>

     <main>
         <section class="collage">
             
             <p>Image Collage goes here</p>
             
         </section>
         
            <aside>
                
                <h2>Heading 2 (h2)</h2>
                
                <p>paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text
                    paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text
                    paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text
                    paragraph text</p>
                
            </aside>

         <section class="form">

             <form>

                 <h2>Register for Ace in the Hole Event</h2>
                 <div id="source">Required fields are marked with an asterisk (*).</div>
                 <div id="reservations">
                     <form method="post" action=" ">
                         <input type="text" name="honeypot" id="honeypot" value="" alt="if you fill this field out then your email will not be sent"/>
                         <label for="myname">*Full Name:</label>
                         <input type="text" name="myname" id="myname" required>
                         <label for="myemail">*Email:</label>
                         <input type="email" name="myemail" id="myemail" required>
                         <label for="mypart">*Involvement</label>
                         <select size="1" name="mypart" id="mypart">
                             <option>Pick One</option>
                             <option value="athlete">Athlete</option>
                             <option value="volunteer">Volunteer</option>
                         </select>
                         <label for="myevent">*Event:</label>
                         <select size="1" name="myevent" id="myevent">
                             <option>Choose Your Event</option>
                             <option value="long course">Long Course - $240</option>
                             <option value="olympic">Olympic - $110</option>
                             <option value="10k">10k - $50</option>
                             <option value="half">Half Marathon - $75</option>
                             <option value="sprint">Sprint - $90</option>
                             <option value="tri">Try-a-Tri - $65</option>
                         </select>
                         <label for="rateevent">Rate the Event:</label>
                            <input type="radio" name="rateevent" value="awesome" class="radio" checked> Awesome!<br>
                            <input type="radio" name="rateevent" value="okay"> It was Okay<br>
                            <input type="radio" name="rateevent" value="needsimprovement"> Needs Improvement<br>
                         </select>
                         <textarea name="eventcomm" id="eventcomm" rows="2" cols="20">Leave a comment about the event</textarea>
                         <label for="ratevenue">Rate the Course:</label>
                            <input type="radio" name="eventcomm" value="awesome" checked> Awesome!<br>
                            <input type="radio" name="eventcomm" value="okay"> It was Okay<br>
                            <input type="radio" name="eventcomm" value="needsimprovement"> Needs Improvement<br>
                         <textarea name="venuecomm" id="venuecomm" rows="2" cols="20">Leave a comment about the venue</textarea>
                         <label for="rateincl">Did you Feel Included?</label>
                             <input type="radio" name="rateincl" value="yes" checked> Yes!<br>
                             <input type="radio" name="rateincl" value="sortof"> Sort of<br>
                             <input type="radio" name="rateincl" value="no"> No<br>
                         <textarea name="inclcomm" id="inclcomm" rows="2" cols="20">Leave a comment regarding inclusion</textarea>
                         <input id="mysubmit" type="submit" value="Submit">
                     </form>
                 </div>


             </form>
             
         </section>

         <section class="weather">
             
             <h2>Heading 2 (h2)</h2>
             
             <p>Weather feed goes here</p>
             
             <iframe>
                 width="600"
                 height="450"
                 frameboarder="0" style="border:0"
             </iframe>
             
         </section>

     </main>
    
    <?php include '../includes/footer.inc.html.php'; ?>

</body>
</html>

