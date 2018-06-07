<!DOCTYPE html>
<html>
	<head>

        <?php

            $txt = isset ( $_POST["t"] ) ? $_POST["t"] : "Texto Genérico";
            $tam = isset ( $_POST["tam"] ) ? $_POST["tam"] : "12pt";
            $cor = isset ( $_POST["cor"] ) ? $_POST["cor"] : "#000000";

        ?>

		<meta charset="UTF-8">
        <title>Formulário e PHP</title>
        
        <style>

            body{
                font-family: fantasy;
            }
            span.texto{
                font-size: <?php echo $tam; ?>;
                    color: <?php echo $cor; ?>;
            }
        
        </style>

	</head>
	<body style="background-color:#f3f3f3;">

        <div>
            <?php

                echo "<span class='texto'>$txt</span>";

            ?>
        </div>

	</body>
</html>	