<nav class="site-nav">
    <div class="menu-toggle">
        <div class="hamburger"></div>
    </div>
            <ul class="open desktop">
                <li><a href="<?php echo BASE_URL; ?>">Home</a></li>
                <li><a href="<?php echo BASE_URL; ?>">Registration</a></li>
                <li><a href="<?php echo BASE_URL; ?>">Contact</a></li>
                <li><a href="<?php echo BASE_URL; ?>">About</a></li>
            </ul>

</nav>

<script>
    $('.menu-toggle').click(function() {

        $('ul').toggleClass('opening');
        $(this).toggleClass('open');

    });
</script>