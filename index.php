<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="logo1.png">
</head>

<body>
    <nav>
        <div class="navbar">
            <div class="logo"></div>
            <li style="font-size: 30px;font-weight:bold;font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; padding-left:0px">
                Enefeti</li>
            <li>Home</li>
            <li>Collectors</li>
            <li>NFT Marketplace</li>
            <li>Features</li>
            <li>Pages</li>
            <li>Help</li>
            <li>Purchases</li>

            <li><a href="/signin.php" style="text-decoration:none; color:white"> Sign in</a></li>

        </div>
    </nav>

    <div id="dvImage">
    </div>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript">
        var images = ["enefti.jpg", "enefti2.png", "enefti3.jpg"];

        function lol() {
            var i = 0;
            $("#dvImage").css("background-image", "url(" + images[i] + ")");
            setInterval(function() {
                i++;
                if (i == images.length) {
                    i = 0;
                }
                $("#dvImage").fadeOut("slow", function() {
                    $(this).css("background-image", "url(" + images[i] + ")");
                    $(this).fadeIn("slow");
                });
            }, 5000);
        };
        document.addEventListener('DOMContentLoaded', () => {
            lol();
        })
    </script>
</body>

</html>