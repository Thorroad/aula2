<!DOCTYPE html>
<html>
	<head>

		<meta charset="UTF-8">
        <title>Variáveis Referenciadas</title>
        
        <style>
            h2{
                font: 12pt Arial;
                color: #171559;
            }

        </style>

	</head>
	<body style="background-color:#f3f3f3;">
        <div>

            <?PHP
                $a = 3;
                $b = $a;
                $b +=5;
                echo "A variável A vale $a";
                echo "<br> A variável B vale $b";

                $a = 3;
                $b = &$a;
                $b +=5;
                echo "<br><br>A variável A vale $a";
                echo "<br> A variável B vale $b";
            ?>

        </div>
	</body>
</html>	