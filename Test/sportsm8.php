<!DOCTYPE html>

<html>
    <?php include 'session.php' ?>
    <script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
    <!-- CSS-Styles -->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <meta charset="UTF-8">
    
    <head>
        
        <title>M8 Web-App</title>
    </head>


    <body>        
        <h1 id="welcome">Welcome, <?php echo $login_session; ?></h1>
        <div id="title-box" class="title-box">
            blabla
            <div id = "signout">
                <a href = "logout.php">Sign Out</a>
            </div>
        </div>
        
        <form action="" method="post" id="week">
        <div id="weekbox" class="flex-container" name="Woche">
            <div class="col mark">
                <div class="row mark">
                    <?php echo date('l, F jS, Y'); ?>
                </div>
                <div class="row mark">Montag</div>
            </div>
            
            <!-- Javascript -->
            <script src="js/main.js"></script>
            
        </div>          
        </form>
    </body>

</html>
