<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sentencia Switch</title>
</head>
<body>
    <?php 
    
    $estado= "casado";

    print "Lo invitamos a un viaje por el Amazonas ";

    switch($estado){

  case 'soltero':
    
   print "donde podra conocer a otras personas como usted";

    break;

    case 'casado':
    
        print "convivir con su familia ";
        break;

        case 'divorciado':
    
            print "para que olvide sus problemas";

            break;
            case 'viudo':
    
                print "donde podra reflexionar";

                break;

                case 'es complicado':
    
                    print "donde podra simplificar su vida";
    default:
 print "donde podrá definir su vida";
    break;


    }

    print "en una extraordinaria aventura de dos semanas, todo incluido";

    
    
    ?>
</body>
</html>