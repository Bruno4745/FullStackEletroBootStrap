<?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "fullstackeletro";

        $conn = mysqli_connect($servername, $username, $password, $database);

        if(!$conn){
            die("A conexao com o BD falhou.".mysqli_connect_error());
		} else {
			//echo "CONECTADO";
		}			
?>