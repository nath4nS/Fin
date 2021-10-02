<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Finanças</title>
	<link href="assets/css/bootstrap.min.css" type="text/css" rel="stylesheet" media="screen">
	<link rel="stylesheet" type="text/css" href="assets/css/menu.css">
	<link rel="stylesheet" href="assets/css/fontawesome.min.css">
</head>
<body>
	<nav class="navbar navbar-expand navbar-dark bg-dark">
		<a class="navbar-brand" href="home.php" style="margin-left: 17px;">
			<!-- <img src=./assets/img/logo1.png style="width: 160px"/> -->
			<h2>Finanças</h2>
		</a>

		<div class="collapse navbar-collapse">
			<ul class="navbar-nav ml-auto">
        		<span class="navbar-text">
        			<a href="form_usuario.php?id=<?= $_SESSION['id_usuario'] ?>">
	              		<strong>
	               			Olá, Nathan!
	              		</strong>
              		<img src="./assets/img/usuario/<?= ($_SESSION['imagem'] != '' && file_exists('assets/img/usuario/'.$_SESSION['imagem']) ? $_SESSION['imagem'] : 'usuario.png' ) ?>" class="rounded-circle user-img-menu">
            		</a>
        			<small><a class="btn btn-outline-danger btn-sm" href="" onclick="return confirm('Deseja realmente sair?')">
        				Sair
        			</a>
        			</small>
      			</span>
			</ul>
		</div>
	</nav>

	<div class="d-flex">

	<nav class="sidebar">

	<div class="container">			
		<a href="home.php">
      		<!-- <img src="./assets/img/pipoca.png" alt="">   -->
    	</a>
	</div>

  	<ul class="list-unstyled">
    	<li>
			<a href=""><i class="fas fa-chart-line"></i> Dashboard</a>
		</li>
        
    <li>
      <a href="controleMensal.php"><i class="fa fa-users"></i> Controle Mensal</a>
    </li>

    <li>
      <a href="cartoes.php"><i class="fa fa-film"></i></i> Meus Cartões</a>
    </li>

    <li>
      <a href="avaliacao.php"><i class="fa fa-star"></i></i> Contas a Vencer</a>
    </li>

    <li>
      <a href=""><i class="fas fa-address-card"></i> Investimentos</a>
    </li>

     </ul>
</nav>


<div class="container">
  <?php 
  if(isset($_GET['msg']) && $_GET['msg'] != '') {
   echo '<div class="alert alert-info">'.$_GET['msg'].'</div>';
  }
?>
</div>
</div>

</body>
</html>