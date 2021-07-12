<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TienedaModel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    public function TraerCategoria()
    {
        $query = $this->db->query("SELECT * FROM Categorias");
        return $query->result();
    }
    public function TraerProductoCatego($Id)
    {
        $query = $this->db->query("SELECT pro.*,ca.Categoria FROM Categorias ca,Producto pro WHERE pro.Id_Categoria=ca.Id_Categoria AND pro.Id_Categoria=$Id");
        return $query->result();
    }
    public function Traerprodu()
    {
        $query = $this->db->query("SELECT pro.*,ca.Categoria FROM Categorias ca,Producto pro WHERE pro.Id_Categoria=ca.Id_Categoria");
        return $query->result();
    }
    public function TraerUnpro($Id_Producto)
    {
        $query = $this->db->query("SELECT pro.*,ca.Categoria FROM Categorias ca,Producto pro WHERE pro.Id_Categoria=ca.Id_Categoria AND pro.Id_Producto=$Id_Producto");
        return $query->result();
    }
    public function Codigo()
    {
        $query = $this->db->query("SELECT SUM(Codigo) AS contar, Lectra FROM Codigo");
        return $query->row();
    }
    public function AgreCodi($codigos, $letras)
    {
        $this->db->query("INSERT INTO Codigo(Codigo,Lectra,Identificador)VALUES ($codigos,'$letras',1);");
    }
    public function AgreVentas($Codigo, $Id_user)
    {
        $this->db->query("INSERT INTO Ventas(FechaVenta,Codigo,Id_User)
        VALUES (NOW(),'$Codigo',$Id_user)");
    }
    public function ValidarVentas($Codigo)
    {
        $query = $this->db->query("SELECT COUNT(*)AS contar FROM Ventas WHERE Codigo='$Codigo'");
        return $query->row();
    }
    public function IdVentas($Codigo)
    {
        $query = $this->db->query("SELECT * FROM Ventas WHERE Codigo='$Codigo'");
        return $query->row();
    }
    public function AgreVenPro($IdVentas, $Id_Producto, $Cantidad, $TotalDEc)
    {
        $this->db->query("INSERT INTO Ventas_Has_Productos(Id_ventas,Id_Producto,Cantidad,TotalApagar)
       VALUES ($IdVentas,$Id_Producto,$Cantidad,$TotalDEc)");
    }
    public function VentasProducto($IdVentas)
    {
        $query = $this->db->query("SELECT p.Id_Producto,p.NombrePro,p.FotoPro,vp.Cantidad,vp.TotalApagar,vp.Id_ventas
        FROM Producto p,Ventas v,Ventas_Has_Productos vp
        WHERE p.Id_Producto=vp.Id_Producto
        AND  vp.Id_ventas= v.Id_ventas
        AND vp.Id_ventas=$IdVentas");
        return $query->result();
    }
    public function sumaProducVentas($IdVentas)
    {
        $query = $this->db->query("SELECT SUM(TotalApagar) AS total FROM Ventas_Has_Productos WHERE Id_ventas=$IdVentas");
        return $query->result();
    }
    public function ValidarVentasPro($IdVentas)
    {
        $query = $this->db->query("SELECT COUNT(*) AS contar FROM Ventas_Has_Productos WHERE Id_ventas=$IdVentas");
        return $query->Row();
    }
    public function TraerMunicipo()
    {
        $query = $this->db->query("SELECT * FROM Municipios");
        return $query->result();
    }
    public function TraerDpartamento()
    {
        $query = $this->db->query("SELECT * FROM Departamentos");
        return $query->result();
    }
    public function TraerDirecion()
    {
        $query = $this->db->query("SELECT * FROM Direccion");
        return $query->result();
    }
    public function AgregarEnvios($Nombre,$Apellido,$Id_Direccion,$direccion,$barrio,$numero,$Id_ventas,$Id_municipio,$Id_departamento)
    {
        $this->db->query("INSERT INTO Envios
                                (Nombre,
                                Apellido,
                                Id_Direccion,
                                NumeroEnvi,
                                BarrioEnvi,
                                Telefono,
                                Id_Ventas,
                                Id_Municipio,
                                Id_Departamento)
                                VALUES ('$Nombre',
                                    '$Apellido',
                                    $Id_Direccion,
                                    '$direccion',
                                    '$barrio',
                                    '$numero',
                                    $Id_ventas,
                                    $Id_municipio,
                                    $Id_departamento)");
    }
}
