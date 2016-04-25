<!-- 2) Tamanho de um texto: valida_comprimento_texto($texto, $tam) deve retornar true ou false. Se o comprimento do texto passado no parâmetro 1 é menor ou igual ao número inteiro passado no parâmetro 2, retorna true. Caso contrário, retorna false. -->

<?php

function valida_comprimento_texto($texto, $tam)
{
	$length = strlen($texto);
	if ($length == $tam)
	{
		echo "correto";
		return true;
	}
	else
	{
		echo "inválido";
		return false;
	}
}

valida_comprimento_texto("texto", 5);
?>