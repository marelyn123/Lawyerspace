<?php


if(!empty($_POST) && !isset($_SESSION["user_id"])){// aqui evalua la sesion
//	print_r($_POST);
	$ux = UserData::getByEmail($_POST["email"]);//envia al modelo 
	if($ux==null){//si no hay ninguno correo pues te dice que te registres
		$expe= new UserData();//te dice que la nueva variable de USerData es $user
	
		//todo esto es lo que viene de HTML y lo guarda en los nuevos nombres ->name ->lasnamae etc
		$expe->id_expe=$_POST["id_expe"];
		$expe->dui=$_POST["dui"];
		$expe->nombres=$_POST["nombres"];
		$expe->apellidos=$_POST["apellidos"]; 
		$expe->area=$_POST["area"];
		$expe->asunto/delito=$_POST["asunto/delito"];
		$expe->nom_conta=$_POST["nom_conta"];
		$expe->num_conta=$_POST["num_conta"];
		$expe->depa=$_POST["depa"];
		$expe->muni_dire=$_POST["muni_dire"];
		//una vez catptura todo lo de HTML lo envia ala funcion add() que esta en USER DATA
		$user->add();
	
		Core::alert("Expediente Registrado!");
	}else{
		Core::alert("Error al crear un expediente!");

	}
		Core::redir("./");
}

?>