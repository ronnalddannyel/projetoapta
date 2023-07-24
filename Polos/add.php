<?php
require_once('../../../db.php');
$upload_dir = '../ArquivosEnviados/Polos/';


if (isset($_POST['Enviar'])) {
   	
	$NomeDoPolo = $_POST['NomeDoPolo'];
	$EnderecoDoPolo = $_POST['EnderecoDoPolo'];


	$NomeDoImagemPolo = $_FILES['ImagemPolo']['name'];
	$NomeTemporarioImagemPolo = $_FILES['ImagemPolo']['tmp_name'];
	$TamanhoDoImagemPolo = $_FILES['ImagemPolo']['size'];



	if($NomeDoImagemPolo){

		$ExtensaoImagemPolo = strtolower(pathinfo($NomeDoImagemPolo, PATHINFO_EXTENSION));
		$PermitirExtensaoImagemPolo  = array('jpg','png','jpeg');
		$NovoNomeImagemPolo = time().'_'.rand(1000,9999).'.'.$ExtensaoImagemPolo;

		if(in_array($ExtensaoImagemPolo, $PermitirExtensaoImagemPolo)){
			if($TamanhoDoImagemPolo < 5000000){
	
					move_uploaded_file($NomeTemporarioImagemPolo ,$upload_dir.$NovoNomeImagemPolo); 
			}else{
				$errorMsg = 'Arquivo muito grande';
				echo $errorMsg;
			}
		}else{
			$errorMsg = 'Selecione um arquivo válido';
			echo $errorMsg;
		}
	}



		if(!isset($errorMsg)){
			$sql = "insert into Polos(NomeDoPolo, EnderecoDoPolo, ImagemPolo)
						values('".$NomeDoPolo."','".$EnderecoDoPolo."', '".$NovoNomeImagemPolo."')";
				$result = mysqli_query($conn, $sql);
			if($result){
				echo $successMsg = 'Cadastro concluído';
				header('Location: ./');
			}else{
				$errorMsg = 'Error '.mysqli_error($conn);
				echo $errorMsg;
			}
		}
}
?>
