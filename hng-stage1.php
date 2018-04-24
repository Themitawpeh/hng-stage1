<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Current Local Time</title>
    </head>
    <style>
        body{
            padding: 0;
            margin: 0;
            width: auto;
            height: auto;
            background-image: url("hng-stage1.png");
            background-size: cover;
        }

        h3{
            color: #fff;
            text-align: center;
            font-size: 52px;
            padding: 60px 0 0 0;
            font-weight: 100;
            font-family: CeraGR-Regular;
        }

        h1{
            color: #fff;
            text-align: center;
            font-family: CeraGR-Bold;
            font-size: 7.7em;
            margin: -35px;

        }
        p{
            color:#53af7e;
            font-family: CeraGR-Regular;
            text-align: center;
            font-size: 30px;
            padding: 250px 0 0 0;
        }
    </style>
    <body>
        <h3>Current Local Time In</h3>
        <h1>Nigeria</h1>
        <p>
        <?php
        date_default_timezone_set("Africa/Lagos");
        echo "Time: " . date("h:ia") ."<br>";
        echo " ". date("l");
        echo " ". date("d");
        echo " ". date("F").",";
        echo " ". date("o");
        ?>
        </p>
    </body>
</html>