<html>
    <link rel="stylesheet" href="shopping.css">
<body>

<div class="phpcnt">
Hi <?php echo $_POST["Name"]; ?><br>
<br>

<?php echo "Bill Details Are As Follows";?><br><br>
<div class="table">
<table>
    <tr>
        <th>Item Name</th>
        <th>Item Quantity</th>
    </tr>
    <tr>
        <td>Pani Puri</td>
        <td><?php echo $_POST["p1"]?></td>
    </tr>
    <tr>
        <td>Masala Puri</td>
        <td><?php echo $_POST["p2"]?></td>      
    </tr>
    <tr>
        <td>Dahi Puri</td>
        <td><?php echo $_POST["p3"]?></td>       
    </tr>  
    <tr>
        <td>Pav Bhaji</td>
        <td><?php echo $_POST["p4"]?></td>
    </tr>  
    <tr>
        <td>Gobi Manchuri</td>
        <td><?php echo $_POST["p5"]?></td> 
    </tr>
</table>
<br>
</div>
Toatl Quantity :<?php echo $_POST["p1"]+$_POST["p2"]+$_POST["p3"]+$_POST["p4"]+$_POST["p5"] ?><br>
Toatl Bill :<?php echo 30*$_POST["p1"]+35*$_POST["p2"]+40*$_POST["p3"]+50*$_POST["p4"]+60*$_POST["p5"] ?> Rs<br>
<br><br>
</div>

</body>
</html>