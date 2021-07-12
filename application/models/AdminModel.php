<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminModel extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	/// inicio perfil
	public function TraerTpDocuemt()
	{
		$query = $this->db->query("SELECT * FROM TipoDocument");
		return $query->result();
	}
	public function traerPaises()
	{
		$query = $this->db->query("SELECT * FROM Paises");
		return $query->result();
	}
	public function TraerUser($Id_User)
	{
		$query = $this->db->query("SELECT *FROM Users WHERE Id_User=$Id_User");
		return $query->result();
	}
	public function EditUsers($Nombre, $Apellido, $EmailUsers, $FechaNaci, $Id_TpDocument, $NumeroDocument, $FechaExpedicion, $Id_pais, $ciudad, $Id_User)
	{
		$this->db->query("UPDATE Users
		SET NameUser = '$Nombre',
		  LastNameUser = '$Apellido',
		  EmailUser = '$EmailUsers',
		  Id_TpDocument = '$Id_TpDocument',
		  NumDocumentUsers = '$NumeroDocument',
		  FechaExpedi = '$FechaExpedicion',
		  Id_Pais = '$Id_pais',
		  CityUsers = '$ciudad',
		  FechaNacimentoUsers = '$FechaNaci'
		WHERE Id_User =$Id_User ;");
	}
	public function Editarfoto($foto, $Id)
	{
		$this->db->query("UPDATE Users
		SET Photo='$foto'
		WHERE Id_User =$Id");
	}
	public function ValidarPass($Id_User)
	{
		$query = $this->db->query("SELECT * FROM Users WHERE Id_User=$Id_User");
		return $query->row();
	}
	public function ModiPAss($encrypted_pass, $Id_User)
	{
		$this->db->query("UPDATE Users SET PassUser='$encrypted_pass' WHERE Id_User= $Id_User");
	}
	// finaliza perfil 

	// comienza categoria
	public function AgregarCategori($Categoria)
	{
		$this->db->query("INSERT INTO Categorias(Categoria)
		VALUES ('$Categoria');");
	}
	public function TraerCategoria()
	{
		$query = $this->db->query("SELECT * FROM Categorias");
		return $query->result();
	}
	public function ModicarCatego($Categoria, $Id_categoria)
	{

		$this->db->query("UPDATE Categorias
		SET Categoria = '$Categoria'
		WHERE Id_Categoria = '$Id_categoria'");
	}
	public function Eliminar($Id_categoria)
	{
		$this->db->query("DELETE
		FROM Categorias
		WHERE Id_Categoria = $Id_categoria;");
	}
	// finalisa categoria
	//  Producto

	public function AgregarPro($Nombre, $Marca, $Descripcion, $PrecioPubli, $PrecioAsoci, $tcarga, $Id_Categoria)
	{
		$this->db->query("INSERT INTO Producto(NombrePro,MarcaPro, DescripcionPro,PrecioPro,PreAsociadoPro,FotoPro,Id_Categoria)VALUES ('$Nombre','$Marca','$Descripcion',$PrecioPubli,$PrecioAsoci,'$tcarga',$Id_Categoria)");
	}
	public function TraerPro()
	{
		$query = $this->db->query("SELECT pro.*,ca.Categoria FROM Categorias ca,Producto pro WHERE pro.Id_Categoria=ca.Id_Categoria");
		return $query->result();
	}
	public function EditarPro($Nombre, $Marca, $Descripcion, $PrecioPubli, $PrecioAsoci, $Id_Categoria, $Id_Producto)
	{
		$this->db->query("UPDATE Producto
		SET NombrePro = '$Nombre',
		  MarcaPro = '$Marca',
		  DescripcionPro = '$Descripcion',
		  PrecioPro = $PrecioPubli,
		  PreAsociadoPro = $PrecioAsoci,
		  Id_Categoria = '$Id_Categoria'
		WHERE Id_Producto = '$Id_Producto';");
	}
	public function ModificarFoto($Cagar, $Id_Producto)
	{
		$this->db->query("UPDATE Producto
		SET FotoPro = '$Cagar'
		WHERE Id_Producto = $Id_Producto");
	}
	public function EliminarPro($Id_Producto)
	{
		$this->db->query("DELETE
		FROM Producto
		WHERE Id_Producto = '$Id_Producto'");
	}
	// final el producto 
	// inicio del servicio
	public function TraerTipoServe()
	{
		$query = $this->db->query("SELECT * FROM TipoServicio");
		return $query->result();
	}
	public function AgrgarServi($Nombre,$Id_TipoServicio,$tcarga,$Descripcion)
	{
		$this->db->query("INSERT INTO Servicio
		(NombreServi,
		 Id_TipoServicio,
		 FotoSerci,
		 DescricionServi)
		VALUES ('$Nombre',
				'$Id_TipoServicio',
				'$tcarga',
				'$Descripcion')");
	}
	public function TraerServicio()
	{
		$query = $this->db->query("SELECT S.*,Tps.TipoServicio
		FROM Servicio S,TipoServicio Tps
		WHERE S.Id_TipoServicio=Tps.Id_TipoServicio");
		return $query->result();
	}
	public function EditarServicio($Nombre,$Id_TipoServicio,$Descripcion,$Id_servicio)
	{
		$this->db->query("UPDATE Servicio
		SET NombreServi = '$Nombre',
		  Id_TipoServicio = $Id_TipoServicio,
		  DescricionServi = '$Descripcion'
		WHERE Id_servicio = $Id_servicio;");
	}
	public function EditarFtoServicio($Cagar,$Id_servicio)
	{
		$this->db->query("UPDATE Servicio
		SET FotoSerci = '$Cagar'
		WHERE Id_servicio = $Id_servicio");
	}
	public function Eliminarservi($Id_servicio)
	{
		$this->db->query("DELETE
		FROM Servicio
		WHERE Id_servicio = $Id_servicio");
	}
	// final servicio
	// inicio servicio
	public function AgregarServicio($Servicio)
	{
		$this->db->query("INSERT INTO TipoServicio(TipoServicio)
		VALUES ('$Servicio');");
	}
	public function ModificarTpoServi($TipoServicio,$Id_TipoServicio)
	{
		$this->db->query("UPDATE TipoServicio
		SET TipoServicio = '$TipoServicio'
		WHERE Id_TipoServicio = '$Id_TipoServicio'");
	}
	public function EliminarTpServi($Id_TipoServicio)
	{
		$this->db->query("DELETE
		FROM TipoServicio
		WHERE Id_TipoServicio = $Id_TipoServicio");
	}

}
