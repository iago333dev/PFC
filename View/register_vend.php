<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Orquidea - Nova Venda</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    
    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">

    <!-- Main CSS-->


	<link href="css/main.css" rel="stylesheet" media="all">  <!-- -->
</head>

<body>
    <div class="page-wrapper bg-gra-01">
	
	
	<?PHP	
	
	include "../ModelDao/i_pdoconnect.php";
	$este = new DatabaseUtility();
	$este->connect();
	$sql = "select * from produto";
	
	
	
	echo "<div class='wrapper wrapper--w780'>";
	echo "<div class='card card-3'>";
	echo "<div class='card-body'>";
	echo "<center> <h2 class='title'>Orquidea | Nova Compra</h2> </center>";
	
	echo "<form method='POST' action='../Control/new_sale_control.php'>";
	
	for ($i = 1; $i <= 8; $i++){
	$query = $este->pdo->query($sql);	
	
	echo "<div class='input-group'>";	
	echo "<div class='rs-select2 js-select-simple select--no-search'>";
	echo "<select name='produto{$i}'>";
	echo "<option value='produto{$i}' selected='' disable=''>Produto {$i}</option>";
	while ($linha=$query->fetch(PDO::FETCH_ASSOC))                          
		{  
			
			echo "<option value=".$linha['id'].">".$linha['nome'].", ".$linha['marca']." R$ ".$linha['preco_venda']."</option>";
		}
	echo "</select>";
	echo "<div class='select-dropdown'></div>";
		
	echo "</div>";	
	echo "</div>";
	
	echo "<div class='input-group'>";
	echo "<input class='input--style-3' type='number' placeholder='Quantidade' name='quantidade{$i}'>";
	echo "</div>";
	}
	
	

	
	echo "<div class='p-t-10'>";
	echo "<button class='btn btn--pill btn--green' type='submit'>Enviar</button>";
	echo "</div>";
	echo "</form>";

		echo "</div>";
	echo "</div>";
	echo "</div>";
	unset($este);
	
		
	?>
	
 
                               
    
	
	
	
		

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->