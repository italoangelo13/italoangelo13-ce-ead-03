<?php
$num1 = $_REQUEST['num1'];
$num2 = $_REQUEST['num2'];
$mult1 = $_REQUEST['mult1'];
$mult2 = $_REQUEST['mult2'];
?>




<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tabuada</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
    <body>
        <div class="container-fluid">
        	<header class="row">
        		<div class="jumbotron jumbotron-fluid col-lg-12">
				  <div class="container">
				    <h1 class="display-1">Gerador de Tabuadas</h1>
				  </div>
				</div>
        	</header>


        	<div class="row">
        		<div class="col-lg-12">
        			<center><a href="index.html"><button class="btn btn-primary">Gerar Nova Tabuada</button></a></center>
        		</div>
        	</div>

        	<section class="row">
        		<div class="col-lg-12">
        			<div class="container-fluid">
        				<div class="row">
	        				<?php
	        				for ($i= $num1; $i <= $num2 ; $i++) {
	        				?>
	        					<div class="card" style="width: 25rem; margin: 15px;">
								  <div class="card-block">
								    <h4 class="card-title">Tabela do <?php echo $i; ?></h4>
								    <p class="card-text">
								    	<table class="table table-striped">
										  <thead>
										  	<tr>
										      <th>Formula</th>
										      <th>Valor</th>
										    </tr>
										  </thead>
										  <tbody>
										  	<?php
					        					for ($j= $mult1; $j <= $mult2 ; $j++) {
					        				?>
										    <tr>
										      <th scope="row"><?php echo $i; ?> X <?php echo $j; ?></th>
										      <td><?php echo $i*$j; ?></td>
										    </tr>
										    <?php 
										    	}
										     ?>
										  </tbody>
										</table>
								    </p>
								  </div>
								</div>
							<?php
								}
							?>
        				</div>
        			</div>
        		</div>
        	</section>

        </div>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>