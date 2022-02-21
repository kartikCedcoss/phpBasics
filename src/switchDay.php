<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php  
    
    $day= 3;
     switch($day){
         case 1:
            echo "MONDAY";
            break;
            
            case 2:
                echo "TUESDAY";
                break; 
                case 3:
                    echo "WEDNESDAY";
                    break; 
                    case 4:
                        echo "THURDAY";
                        break; 
                        case 5:
                            echo "FRIDAY";
                            break; 
                            case 6:
                                echo "SATURDAY";
                                break; 
                                case 7:
                                    echo "SUNDAY";
                                    break; 
                                    default :
                                        echo "Invalid number";
                                        break; 



     }
    
    ?>
</body>
</html>