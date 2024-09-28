<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p> this is php</p>
    <?php 
    $weekname = "monday"
    switch($weekname== "monday"){


        case "monday";
        case "tuesday";
        case "wednesday";
        case "thursday";
        case "friday";
        case "saturday";
        case "sunday";

        /*case "monday":
            echo"weekdays";
            break;
        case "Tuesday":
             echo"weekdays";
                break;
        case "Wednesday":
             echo"weekdays";
                break;
        case "Thursday":
             echo"weekdays";
                break;
        case "Friday":
             echo"weekdays";
                break;
        case "Saturday":
             echo"weekends";
                break;
        case "Sunday":
         echo"weekends";
                break; */

                    default 
                    echo "not valid day";
                    break;
    }
    
    

    ?>
</body>
</html>