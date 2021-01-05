<?php

class Database {
	private $dsn;
	private $username;
	private $password;

	public function __construct() {
		$this->dsn= 'mysql:host=localhost;dbname=parc';
		$this->username= 'root';
		$this->password= '';
	}

	public function chaine_connexion() {
		$pdo= new PDO($this->dsn, $this->username, $this->password);
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $pdo;
	}

//prepare et execute la requete
	public function request($statement, $datas= null) {
		$pdo= $this->chaine_connexion();
		$requete= $pdo->prepare($statement);

		if($datas == null) {
			$requete->execute();
		}
		else {
			$requete->execute($datas);
		}

		return $requete;
	}

//recupere les donnees requetes
	public function recover($requete, $one= true) {
		$requete->setFetchMode(PDO::FETCH_OBJ);

		if($one == true) {
			return $requete->fetch();
		}
		else {
			return $requete->fetchAll();
		}
	}

	
}














?>