<!DOCTYPE html>
<html>
	<head>

		<meta charset="UTF-8">
		<title>Concatenação</title>

	</head>
	<body style="background-color:#f3f3f3;">
        <div style="width: 300px; margin: 100px auto; background-color:azure; padding: 30px;">

            <?PHP
                $nome = isset ( $_POST["nome"] ) ? $_POST["nome"] : "[não foi informado]" ;
                $ano = isset ( $_POST["ano"] ) ? $_POST["ano"] : 0 ;
                $sexo = isset ( $_POST["sexo"] ) ? $_POST["sexo"] : "[não foi informado]" ;

                $idade = date("Y") - $ano;

                echo "$nome é $sexo e tem $idade anos!";
            ?>
            <a href="html5.html">Voltar</a>

        </div>
	</body>
</html>	