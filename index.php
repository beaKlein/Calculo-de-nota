<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php
      echo '<h1> Calculando a Média </h1>';
    ?> 
    <form action="action.php" method="post">
		  <p>Nome do Aluno: <input type="text" name="nome_aluno" /></p>
		  <p>Nota 1: <input type="text" name="nota1" /></p>
		  <p>Nota 2: <input type="text" name="nota2" /></p>
		  <p>Nota 3: <input type="text" name="nota3" /></p>
		  <p>Nota 4: <input type="text" name="nota4" /></p>
		 <p><input type="submit" /></p>
	</form> 
  </body>
</html>
<?php /*
Digitar o nome do aluno e calcular a média de 4 notas, e se for menor que 6 colocar a mensagem de aluno reprovado e maior ou igual aluno aprovado */
?>
