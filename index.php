<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table > tbody > tr >td{
            padding: 10px;
            text-align: center;
        }
        table > tbody > tr >td:nth-child(1){
            color: red;
        }
    </style>
</head>
<body>
    <?php
        $arr=array(4,5,6,7);
    ?>
    <form action="calender.php" method="get">
        <label for="name">Enter Month:</label>
        <input type="text"  name="month" required>
        <label for="name">Day Number</label>
        <input type="number" max="7" min="1"  name="day" required>
        <input type="Submit" value="Submit">
    </form>
</body>
</html>