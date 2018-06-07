<!--Escrever um algoritmo que leia o nome e as três notas obtidas por um aluno durante o semestre. Calcular a sua média (aritmética), informar o nome e sua menção aprovado (media >= 7), Reprovado (media <= 5) e Recuperação (media entre 5.1 a 6.9). -->
<?php
	echo "$cont <br><br>";
	$nome = $_POST["nome"];
	$nota1 = $_POST["nota1"];
	$nota2 = $_POST["nota2"];
	$nota3 = $_POST["nota3"];

	$media = ( $nota1 + $nota2 + $nota3 ) / 3

?>

	<h1>Ficha de Status do Aluno</h1>

	<span>O Aluno </span>
	
	<?php echo $nome;

	if( $media >= 7 ){

		echo " está aprovado.";

}
	else{

		if( $media <= 5 ){
		echo "  está reprovado.";
	}

	else{
		echo "  está em recuperação.";
	}
}
	

?>
	