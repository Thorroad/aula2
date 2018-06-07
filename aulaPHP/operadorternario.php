<!DOCTYPE html>
<html>
	<head>

		<meta charset="UTF-8">
        <title>Operador Ternário</title>
        
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
                $v1 = $_GET["x"];
                $v2 = $_GET["y"];
                $maior = $v1>$v2 ? $v1:$v2;
                echo "<h2>O maior valor é: $maior</h2>";
            ?>

        </div>
	</body>
</html>	