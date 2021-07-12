<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginModel extends CI_Model {
    function __construct()
	{
		parent::__construct();
	}
    public function ContarUser($Name,$LastName,$Email,$Id_rol)
    {
        $query=$this->db->query("SELECT COUNT(*) AS contar
        FROM Users WHERE NameUser='$Name' 
        AND LastNameUser='$LastName'
        AND EmailUser='$Email'
        AND Id_rol='$Id_rol'");
        return $query->row();
    }
    public function AgregarUser($Name,$LastName,$Email,$foto,$encrypted_pass,$Id_rol)
    {
        
		$this->db->query("INSERT INTO Users(NameUser,LastNameUser,EmailUser,Photo,PassUser,Id_rol)	
		VALUES('$Name','$LastName','$Email','$foto','$encrypted_pass',$Id_rol)");
    }
    public function consulta_cuenta($users)
    {
        $query=$this->db->query("SELECT * FROM Users WHERE EmailUser='$users'");
        return $query->row();
    }
    public function Traer_datos($users,$pass)
    {
        //echo 'camilo';
        $query=$this->db->query("SELECT U.Id_User,U.NameUser,U.LastNameUser,U.Photo,U.EmailUser,U.PassUser,R.Rol 
        FROM Users U,Rol R 
        WHERE  U.Id_rol=R.Id_rol
        AND EmailUser='$users'
        AND PassUser='$pass'");
        return $query->row();
    }
    public function contarId($Email)
    {
        $query=$this->db->query("SELECT COUNT(*) AS contar
        FROM Users WHERE EmailUser='$Email'");
        return $query->row();
    }
    public function TraerIdemail($Email)
    {
        $query=$this->db->query("SELECT *
        FROM Users WHERE EmailUser='$Email'");
        return $query->row();
    }
    public function ModiPAss($encrypted_pass,$Id_user)
    {
        $this->db->query("UPDATE Users SET PassUser='$encrypted_pass' WHERE Id_User= $Id_user");
    }
}
