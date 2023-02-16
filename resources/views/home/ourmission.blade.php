<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="/glightbox/glightbox/dist/css/glightbox.css" />
    <style>
        /* Add Animation */
        .glightbox {
            display: inline-block;
            margin: 0 auto;
            animation: fadeIn 1s;
        }
        /* Keyframes for Animation */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
    </style>
</head>
<section class="ourmission_section" style="filter: drop-shadow(2px 2px 2px gray);">


    <div class="powerImage" >
        <div>
            <a href="images/power.png" class="glightbox">
                <img src="images/power.png" alt="" >
            </a>
        </div>
        <div class="powerImage1">
            <a href="images/power1.png" class="glightbox">
                <img src="images/power1.png" alt="">
            </a>
        </div>
        <div class="powerImage2">
            <a href="images/power2.png" class="glightbox">
                <img src="images/power2.png" alt="">
            </a>
        </div>
    </div>

    <div class="ourmissionImageContainer">
        <div class="ourmissionImage">
            <div>
                <a href="images/ourVision.png" class="glightbox">
                <img src="images/ourVision.png" alt="" style="width: 100%">
                </a>
            </div>
            <div class="ourmissionImage1">
            <a href="images/ourMission.png" class="glightbox">
                <img src="images/ourMission.png" alt="" style="width: 100%">
            </a>
            </div>
        </div>
    </div>

</div>
</section>
<script src="/glightbox/glightbox/dist/js/glightbox.min.js"></script>
<script>
    const glightbox = GLightbox({
  openEffect: 'bounce', // Define that we want the bounce animation on open
  cssEfects: {
    // register our new animation
    bounce: { in: 'bounceIn', out: 'bounceOut' }
  }
});
</script>
