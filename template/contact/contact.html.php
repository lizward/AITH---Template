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
    
<body id="wrapper">
    
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
                
                <h2>Contact Ace in the Hole Multisport Events</h2>

                <form method="post" action=" " id="inquiryForm">
                    <input type="text" name="honeypot" id="honeypot" value="" alt="if you fill this field out then your email will not be sent"/>
                    <label for="myName">Name:</label>
                    <input type="text" name="myName" id="myName">
                    <label for="myEmail">E-mail:</label>
                    <input type="text" name="myEmail" id="myEmail">
                    <label for="myPart">Type of Involvement:</label>
                        <input type="radio" name="myPart" value="participant" class="radio" checked> Participant<br>
                        <input type="radio" name="myPart" value="volunteer" class="radio"> Volunteer<br>
                        <input type="radio" name="myPart" value="interested" class="radio"> Interested<br>
                    <label for="myQuestion">Question:</label>
                    <textarea form="inquiryForm" rows="10" cols="50" name="myQuestion" id="myQuestion"></textarea>
                    <input id="mySubmit" type="submit" value="Submit">
                </form>
                
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

