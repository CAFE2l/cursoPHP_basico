<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Análise</title>
</head>
<body>
    <?php
        // Verifica se o parâmetro 'estado' foi enviado, senão define um valor padrão
        $estado = isset($_GET["estado"]) ? $_GET["estado"] : "Nenhum estado selecionado";
        $regiao = "";

        // Estrutura switch para determinar a região com base no estado
        switch ($estado) {
            // Região Norte
            case "AC":
            case "AP":
            case "AM":
            case "PA":
            case "RO":
            case "RR":
            case "TO":
                $regiao = "Norte";
                break;

            // Região Nordeste
            case "MA":
            case "PI":
            case "CE":
            case "RN":
            case "PB":
            case "PE":
            case "AL":
            case "SE":
            case "BA":
                $regiao = "Nordeste";
                break;

            // Região Centro-Oeste
            case "GO":
            case "MT":
            case "MS":
            case "DF":
                $regiao = "Centro-Oeste";
                break;

            // Região Sudeste e Sul (agrupados para simplificar)
            case "SP":
            case "RJ":
            case "MG":
            case "ES":
                $regiao = "Sudeste";
                break;
            
            case "PR":
            case "SC":
            case "RS":
                $regiao = "Sul";
                break;

            default:
                $regiao = "Inválida";
        }

        echo "Você selecionou o estado <strong>$estado</strong>, que pertence à <strong>Região $regiao</strong>.";
    ?>
    <br>
    <a href="index.html">Voltar</a>
</body>
</html>
