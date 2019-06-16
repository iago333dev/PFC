<?php


 // include_once '../View/register_vend.php';
 require_once '../ModelBean/sale_model.php';
 require_once '../ModelDAO/i_pdoconnect.php';

	$conn = new DatabaseUtility();
	$conn->connect();
	$conn->find_encomenda();
	unset($conn);


//Verificar se algum campo solicitado está vazio

	$valortotal = 0;	
	$key = new sale_model();
	$novakey = $key->keygenerate();

	date_default_timezone_set("America/Bahia");
	$data_atual = date("Y/m/d h:i:s");

	
	for ($i = 1; $i <= 8; $i++){
	
if (!empty($_POST['produto'.$i])&& $_POST['quantidade'.$i] != 0 && $_POST['produto'.$i]!= "produto{$i}"){
	$id = $_POST['produto'.$i];
	$qnt = $_POST['quantidade'.$i];
	$valor = $conn->calc_sale($id,$qnt);
	$valortotal = $valor+$valortotal;
	}
	

	
	}
	  
	
for ($i = 1; $i <= 8; $i++){
	
if (!empty($_POST['produto'.$i])&& $_POST['quantidade'.$i] != 0 && $_POST['produto'.$i]!= "produto{$i}"){
	
	$produto = $_POST['produto'.$i];
	$quantidade = $_POST['quantidade'.$i];
	$conn->insert_encom($novakey,1,$produto,$quantidade,$valortotal,$data_atual);
	$produto = null;
	$quantidade = null;

		}	
	}
	unset($conn);

	header("location: ../View/painel.php");
	?>


	
	
	


	
	















