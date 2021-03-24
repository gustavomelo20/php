<?php

session_start();

require_once "db_connect.php";

$sql = "SELECT * FROM leads";
$resultados = mysqli_query($connect, $sql);

if(mysqli_num_rows($resultados) > 0):

    while($dados = mysqli_fetch_array($resultados)):


?>
<ul>
<li> <?php echo 'Nome: '. $dados['nome'] .' / '.'Email:'.$dados['email'];  ?></li>

</ul>


<?php 
endwhile;
else: ?>

<?php 
endif;
?>
