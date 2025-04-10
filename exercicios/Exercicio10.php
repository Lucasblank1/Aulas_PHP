<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 10 - Identificação do mês correspondente a um número</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Resolução do Exercício 10 <p>-Identificação do mês correspondente a um número</h2>

    <?php
       if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $numero = $_POST['numero'];  
        }
     if ($numero < 1 or $numero > 12){
        echo "Erro, digite um número válido!";
     }else{
        switch($numero){
            case 1:
                echo "Janeiro";
                break;
                case 2:
                    echo "Fevereiro";
                    break;
                    case 3:
                        echo "Março";
                        break;
                        case 4:
                            echo "Abril";
                            break;
                            case 5:
                                echo "Maio";
                                break;
                                case 6:
                                    echo "Junho";
                                    break;
                                    case 7:
                                        echo "Julho";
                                        break;
                                        case 8:
                                            echo "Agosto";
                                            break;    
                                            case 9:
                                                echo "Setembro";
                                                break;
                                                case 10:
                                                    echo "Outubro";
                                                    break;
                                                    case 11:
                                                        echo "Novembro";
                                                        break;
                                                        case 12:
                                                            echo "Dezembro";
                                                            break;
        }
     }
       
    ?>
<br><br>
<a href="index.html"><button>🏠 Início</button></a>
<button onclick="history.back()">🔙 Voltar</button>

</body>
</html>
