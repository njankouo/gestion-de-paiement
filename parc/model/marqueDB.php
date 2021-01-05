<?php
//le model est un ensemble de classe c7 por ca kon met en majuscule
require_once 'Database.php';

class marqueDB {
	private $db;
	private $tablename;
	private $idname;

	public function __construct() {
		$this->db= new Database();
		$this->tablename= 'marque';
		$this->idname= 'id';
	}







	/*************** Requetes insertion ***********/
	public function create( $nom, $durabilite,$constructeur) {
		$statement= 'insert into ' . $this->tablename . ' set nom=?, durabilite=?, constructeur=?';

		$datas= array(
			
			$nom,
			
			$durabilite,
		
			$constructeur
		
			
			
		);

		$this->db->request($statement, $datas);
	}
	/*************** Fin Requetes insertion ***********/





	/*************** Requetes selection ***********/
	public function read($id) {
		$statement= 'select * from ' . $this->tablename . ' where id=?';

		$datas= array(
			$id
		);

		$requete= $this->db->request($statement, $datas);
		return $this->db->recover($requete, true);//car recupere une information
	}

public function readAll() {
		$statement= 'select * from ' . $this->tablename . ' order by ' . $this->idname . ' desc';

		$requete= $this->db->request($statement);
		return $this->db->recover($requete, false);//recupere plusieur information
	}
	/*************** Fin Requetes selection ***********/



	/*************** Requetes modification ***********/
	public function update($id, $nom, $durabilite, $constructeur) {
		$statement= 'update ' . $this->tablename . ' set nom=?,durabilite=?, constructeur=? where id=?';
    

		$datas= array(
			
			$nom,
			$durabilite,
			$constructeur,
			

			$id
		);

		$this->db->request($statement, $datas);
	}
	/*************** Fin Requetes modification ***********/



	

	/*************** Requetes suppression ***********/
	public function delete($id) {
		$statement= 'delete from ' . $this->tablename . ' where id=?';

		$datas= array(
			$id
		);

		$this->db->request($statement, $datas);
	}
	/*************** Fin Requetes suppression ***********/


}

?>





