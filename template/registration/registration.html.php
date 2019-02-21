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
                 <p>Required fields are marked with an asterisk (*).</p><br>
                     <form method="post" action=" ">
                         <input type="text" name="honeypot" id="honeypot" value="" alt="if you fill this field out then your email will not be sent"/>
                         <label for="event">*Event:</label>
                         <select size="1" name="event" id="event">
                             <option>Choose Your Event</option>
                             <option value="long course">Long Course - $240</option>
                             <option value="olympic">Olympic - $110</option>
                             <option value="10k">10k - $50</option>
                             <option value="half">Half Marathon - $75</option>
                             <option value="sprint">Sprint - $90</option>
                             <option value="tri">Try-a-Tri - $65</option>
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

                <h3><a href="../satisfaction/satisfaction.html.php">Click here to take our Satisfaction Survey after the event!</a></h3>
             
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

