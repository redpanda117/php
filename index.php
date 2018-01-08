<!DOCTYPE html>
<html lang="en-us">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    <title>PHP practice</title>

</head>

<body>
    <header>
        <h1>
            <?php
            //get person name from URL parameter from the address bar
            //the name will be in the varible
            //use to get name if it is after url main
            //ex localhost:8888/?name=Tina  the varible name will now print Tina in the string.

                $name = htmlspecialchars($_GET['name']);

                $greeting = "Hello $name";

                echo 'Started learning php so, ' . $greeting;
            ?>
        </h1>    
    </header>
</body>

</html>




