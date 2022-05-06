<html>
    <style>
        *{
            padding:0px;
            margin:0px;
        }
        body {
            background-color:skyblue;
        }
        .container{
            width: 30%;
            height: 30%;
            margin: 20px;
            margin: auto;
            text-align: center;
            background-color: darkgoldenrod;
            font-size: 20px;
            padding-top: 20px;
            color: white;
            font-weight: bolder;
        }
    </style>
<body>

<div class="container">
    Welcome <?php echo $_POST["name"]; ?><br>
    Your DOB: <?php echo $_POST["date"]; ?><br>
    <?php
    $bday = new DateTime($_POST["date"]); // Your date of birth
    $today = new Datetime(date('m.d.y'));
    $diff = $today->diff($bday);
    printf(' And Your present age : %d years, %d month, %d days old', $diff->y, $diff->m,  $diff->d);
    printf("\n");
?>

</div>

</body>
</html>