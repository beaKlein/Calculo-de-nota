
<?php
  $nota1 = (float)($_POST['nota1']);
  $nota2 = (float)($_POST['nota2']);
  $nota3 = (float)($_POST['nota3']);
  $nota4 = (float)($_POST['nota4']);
  $media = ($nota1 + $nota2 + $nota3 + $nota4)/4.;
?>
<?php
  echo $_POST['nome_aluno']."<br>";
  echo " Media = ".$media."<br>";
  if ($media >= 6.){
    echo "<h2>Aluno Aprovado</h2>";
  }
  else {
    echo "Aluno Reprovado";
  }
?>
