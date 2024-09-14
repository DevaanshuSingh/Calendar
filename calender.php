<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $montharr = [
        1 => 'January',//31
        2 => 'February', //28 even
        3 => 'March', //31
        4 => 'April', //30 even
        5 => 'May', //31
        6 => 'June', //30 even
        7 => 'July', //31
        8 => 'August', //31
        9 => 'September', //30 even
        10 => 'October', //31
        11 => 'November', //30 even
        12 => 'December'//31
    ];
    $dayarr = [
        1 => 'Sunday',
        2 => 'Monday',
        3 => 'Tuesday',
        4 => 'Wednesday',
        5 => 'Thursday',
        6 => 'Friday',
        7 => 'Saturday'
    ];
    $d = $_GET['day'];//1
    $m = $_GET['month'];//2

    ?>
    <div class="container">
        <table>
            <caption>
                <?php
                echo '<span>!NOT LEAP YEAR!</span><br>';
                echo strtoupper('<u><strong>'.$montharr[$m].'</strong></u>');
                echo '<br>Starts From <u>'.strtoupper($dayarr[$d].'</u>');
                ?>
            </caption>
            <thead>
                <tr>
                    <th>Sun</th>
                    <th>Mon</th>
                    <th>Tue</th>
                    <th>Wed</th>
                    <th>Thu</th>
                    <th>Fri</th>
                    <th>Sat</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $x = 1;
                $check = 0;
                // for ($i = 1; $i <= 5; $i++) {
                //     echo "<tr>";
                //     for ($j = 1; $j <= 7; $j++) {
                //         //break part
                //         if ($m == 9 || $m == 11 || ($m % 2 == 0 && $m!=8 && $m!=10 && $m!=12)) {
                //             if ($m == 2)
                //                 if ($x == 29)
                //                     break;
                //             if ($x == 31)
                //                 break;
                //             //echo part
                //             if ($j != 4) {
                //                 if ($check == 0)
                //                     echo '<td></td>';
                //                 else
                //                     echo "<td>" . $x++ . "</td>";
                //             } else if ($j == 4) {
                //                 $check = 1;
                //                 // if ($x >= 30) {
                //                 //     echo '<td></td>';
                //                 //     break;
                //                 // } else
                //                 echo "<td>" . $x++ . "</td>";
                //             }
                //         } else if ($m == 8 || $m == 10 || $m == 12 || $m%2==!0) {
                //             //break part
                //             if($x==32)
                //                 break;
                //             //echo part
                //             if ($j != $_GET['day']) {
                //                 if ($check == 0)
                //                     echo '<td></td>';
                //                 else
                //                     echo "<td>" . $x++ . "</td>";
                //             } else if ($j == $_GET['day']) {
                //                 $check = 1;
                //                 // if ($x >= 30) {
                //                 //     echo '<td></td>';
                //                 //     break;
                //                 // } else
                //                 echo "<td>" . $x++ . "</td>";
                //             }
                //         }

                //     }
                //     echo "</tr>";
                // }

                //swadeep
                for ($i = 1; $i <= 5; $i++) {
                    echo "<tr>";
                    for ($j = 1; $j <= 7; $j++) {
                        //break part
                        if ($m == 9 || $m == 11 || ($m % 2 == 0 && $m!=8 && $m!=10 && $m!=12)) {
                            if ($m == 2)
                                if ($x == 29)
                                    break;
                            if ($x == 31)
                                break;
                            //echo part
                            if ($j != $d) {
                                if ($check == 0)
                                    echo '<td></td>';
                                else
                                    echo "<td>" . $x++ . "</td>";
                            } else if ($j == $d) {
                                $check = 1;
                                // if ($x >= 30) {
                                //     echo '<td></td>';
                                //     break;
                                // } else
                                echo "<td>" . $x++ . "</td>";
                            }
                        } else if ($m == 8 || $m == 10 || $m == 12 || $m%2==!0) {
                            //break part
                            if($x==32)
                                break;
                            //echo part
                            if ($j != $d) {
                                if ($check == 0)
                                    echo '<td></td>';
                                else
                                    echo "<td>" . $x++ . "</td>";
                            } else if ($j == $d) {
                                $check = 1;
                                // if ($x >= 30) {
                                //     echo '<td></td>';
                                //     break;
                                // } else
                                echo "<td>" . $x++ . "</td>";
                            }
                        }

                    }
                    echo "</tr>";
                }
       //swadeep
                
                ?>
            </tbody>
        </table>
    </div>
</body>



</html>