<?php
ob_start('ob_gzhandler');
?>
    <html>

    <head>
        <title>TrueSmart Activity</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <script type="text/javascript" src="js/jquery-1.11.3.min.js?v=1001"></script>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <script src="js/foundation.min.js?v=1001"></script>
        <script src="js/vendor/modernizr.js?v=1001"></script>
        <script src="js/vendor/fastclick.js?v=1001"></script>
        <link rel="stylesheet" href="css/normalize.css?v=1001">
        <link rel="stylesheet" href="css/foundation.css?v=1001">
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <div id="wrapper">
            <?php include("views/header.php"); ?>
                <?php include("views/content.php"); ?>
                    <?php include("views/footer.php"); ?>
                        <script type="text/javascript" src="js/main.js"></script>
        </div>
    </body>

    </html>
