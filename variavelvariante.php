<!DOCTYPE html>
<html>
	<head>

		<meta charset="UTF-8">
        <title>Variáveis Referenciadas</title>
        
        <style>
            h2{
                font: 12pt Arial;
                color: #171553;
            }

        </style>

	</head>
	<body style="background-color:#f3f3f3;">
        <div>

            <?PHP
                $nome = "gabriel";
                $$nome = "branco";

                echo "$nome";
                echo "<br>$gabriel";?>

        </div>
	</body>
</html>	