<nav class="site-nav">
    <div class="menu-toggle">
        <div class="hamburger"></div>
    </div>
            <ul class="open desktop">
                <li><a href="../home/home.html.php">Home</a></li>
                <li><a href="../registration/registration.html.php">Registration</a></li>
                <li><a href="../contact/contact.html.php">Contact</a></li>
                <li><a href="../about/about.html.php">About</a></li>
            </ul>

</nav>

<script>
    $('.menu-toggle').click(function() {

        $('ul').toggleClass('opening');
        $(this).toggleClass('open');

    });
</script>