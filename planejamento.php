<?php
$total_ganho=" ";
$total_perda=" ";
$lucro=" ";
$total_ganho = " ";
$total_perda = " ";
$lucro = " ";
$calcular=" ";


if (isset($_POST['btncalcular'])){

  $jan_ganho =$_POST['jan_ganho'];
  $jan_perda =$_POST['jan_perda'];
  $fev_ganho =$_POST['fev_ganho'];
  $fev_perda =$_POST['fev_perda'];
  $mar_ganho =$_POST['mar_ganho'];
  $mar_perda =$_POST['mar_perda'];
  $abr_ganho =$_POST['abr_ganho'];
  $abr_perda =$_POST['abr_perda'];
  $mai_ganho =$_POST['mai_ganho'];
  $mai_perda =$_POST['mai_perda'];
  $jun_ganho =$_POST['jun_ganho'];
  $jun_perda =$_POST['jun_perda'];
  $jul_ganho =$_POST['jul_ganho'];
  $jul_perda =$_POST['jul_perda'];
  $ago_ganho =$_POST['ago_ganho'];
  $ago_perda =$_POST['ago_perda'];
  $set_ganho =$_POST['set_ganho'];
  $set_perda =$_POST['set_perda'];
  $out_ganho =$_POST['out_ganho'];
  $out_perda =$_POST['out_perda'];
  $nov_ganho =$_POST['nov_ganho'];
  $nov_perda =$_POST['nov_perda'];
  $dez_ganho =$_POST['dez_ganho'];
  $dez_perda =$_POST['dez_perda'];
  
  $total_ganho = $jan_ganho + $fev_ganho + $mar_ganho + $abr_ganho + $mai_ganho + $jun_ganho + $jul_ganho + $ago_ganho + $set_ganho + $out_ganho + $nov_ganho + $dez_ganho;
  $total_perda = $jan_perda + $fev_perda + $mar_perda + $abr_perda + $mai_perda + $jun_perda + $jul_perda + $ago_perda + $set_perda + $out_perda + $nov_perda + $dez_perda;

  $lucro = $total_ganho - $total_perda;
  $jan_lucro = $jan_ganho - $jan_perda;
  $fev_lucro = $fev_ganho - $fev_perda;
  $mar_lucro = $mar_ganho - $mar_perda;
  $abr_lucro = $abr_ganho - $abr_perda;
  $mai_lucro = $mai_ganho - $mai_perda;
  $jun_lucro = $jun_ganho - $jun_perda;
  $jul_lucro = $jul_ganho - $jul_perda;
  $ago_lucro = $ago_ganho - $ago_perda;
  $set_lucro = $set_ganho - $set_perda;
  $out_lucro = $out_ganho - $out_perda;
  $nov_lucro = $nov_ganho - $nov_perda;
  $dez_lucro = $dez_ganho - $dez_perda;

  echo 'O ganho anual é:' . $total_ganho . '<hr> O gasto anual é:' . $total_perda . '<hr> O lucro anual foi de:' . $lucro . ' <hr> O lucro de janeiro  é:' .$jan_lucro . ' <br> O lucro de fevereiro  é:' .$fev_lucro . 
  ' <br> O lucro de março  é:' .$mar_lucro .  ' <br> O lucro de abril  é:' .$abr_lucro .  ' <br> O lucro de maio é:' .$mai_lucro . ' <br> O lucro de junho  é:' .$jun_lucro . ' <br> O lucro de julho  é:' .$jul_lucro . 
  ' <br> O lucro de agosto  é:' .$ago_lucro .   ' <br> O lucro de setembro  é:' .$set_lucro .   ' <br> O lucro de outubro é:' .$out_lucro .  ' <br> O lucro de novembro é:' .$nov_lucro .  ' <br> O lucro de dezembroé:' .$dez_lucro ;
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo Financeiro</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
    <form action="planejamento.php" method="post">
        <h3>Calculo Financeiro Anual</h3>

        <label>Janeiro/Ganho:</label>
        <input type="number" name="jan_ganho" value="<?=$jan_ganho?>">
        <label>Janeiro/Perda:</label>
        <input type="number" name="jan_perda" value="<?=$jan_perda?>">
        <br>
        <label>Fevereiro/Ganho:</label>
        <input type="number" name="fev_ganho" value="<?=$fev_ganho ?>">
        <label>Fevereiro/Perda:</label>
        <input type="number" name="fev_perda" value="<?=$fev_perda ?>">
        <br>
        <label>Março/Ganho:</label>
        <input type="number" name="mar_ganho" value="<?=$mar_ganho?>">
        <label>Março/Perda:</label>
        <input type="number" name="mar_perda" value="<?=$mar_perda?>">
        <br>
        <label>Abril/Ganho:</label>
        <input type="number" name="abr_ganho" value="<?=$abri_ganho?>">
        <label>Abril/Perda:</label>
        <input type="number" name="abr_perda" value="<?=$abri_perda?>">
        <br>
        <label>Maio/Ganho:</label>
        <input type="number" name="mai_ganho" value="<?=$mai_ganho?>">
        <label>Maio/Perda:</label>
        <input type="number" name="mai_perda" value="<?=$mai_perda?>">
        <br>
        <label>Junho/Ganho:</label>
        <input type="number" name="jun_ganho" value="<?=$jun_ganho?>">
        <label>Junho/Perda:</label>
        <input type="number" name="jun_perda" value="<?=$jun_perda?>">
        <br>
        <label>Julho/Ganho:</label>
        <input type="number" name="jul_ganho" value="<?=$jul_ganho?>">
        <label>Julho/Perda:</label>
        <input type="number" name="jul_perda" value="<?=$jul_perda?>">
        <br>
        <label>Agosto/Ganho:</label>
        <input type="number" name="ago_ganho" value="<?=$ago_ganho?>">
        <label>Agosto/Perda:</label>
        <input type="number" name="ago_perda" value="<?=$ago_perda?>">
        <br>
        <label>Setembro/Ganho:</label>
        <input type="number" name="set_ganho" value="<?=$set_ganho?>">
        <label>Setembro/Perda:</label>
        <input type="number" name="set_perda" value="<?=$set_perda?>">
        <br>
        <label>Outubro/Ganho:</label>
        <input type="number" name="out_ganho" value="<?=$out_ganho?>">
        <label>Outubro/Perda:</label>
        <input type="number" name="out_perda" value="<?=$out_perda?>">
        <br>
        <label>Novembro/Ganho:</label>
        <input type="number" name="nov_ganho" value="<?=$nov_ganho?>">
        <label>Novembro/Perda:</label>
        <input type="number" name="nov_perda" value="<?=$nov_perda?>">
        <br>
        <label>Dezembro/Ganho:</label>
        <input type="number" name="dez_ganho" value="<?=$dez_ganho?>">
        <label>Dezembro/Perda:</label>
        <input type="number" name="dez_perda" value="<?=$dez_perda?>">

        <button name=btncalcular>Calcular</button>
        <input disabled value="<?= $calcular?>">

</body>

</html>