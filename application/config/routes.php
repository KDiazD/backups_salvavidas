<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//Rutas del home
$route['Prueba'] = 'WelcomeController';
$route['QuienesSomos'] = 'Clients/QuienesSomosController';


//$route['classgo/(:any)'] = 'landing/registro/$1';
$route['Login'] = 'Home/LoginController';
$route['Registro/DatosAsociado'] = 'Home/LoginController/RegisterViewsDatosPersonales';
$route['Registro/Referencia'] = 'Home/LoginController/AgregarReferencia';
$route['Registro/Referencias/(:any)'] = 'Home/LoginController/RegisterReferenciaViewsDatosPersonales/$1';
$route['Login/nuevo/(:any)']='Home/LoginController/newPass/$1';



//rutas logicas del Login 
$route['Login/Session']= 'Home/LoginController/Login';
$route['Login/AgregarDatos']='Home/LoginController/AgregarDatosPersonles';
$route['Login/Recovered']= 'Home/LoginController/recovered';
$route['Login/Newpass']= 'Home/LoginController/MoficarContra';
$route['login/salir']='Home/LoginController/salir';

//rutas de servicio
$route['Servicio/Publicidad']='Home/ServicioControllers/Publicidad';

//Rutas logicas en la tienda 
$route['Tienda/Agregar']='Tienda/ProdutosControllers/AgregarVentas';
$route['Tienda/AgregarEnvio']='Tienda/EnviosControllers/agregarEnvios';


// Rutas de la tienda 
$route['Tienda']= 'Tienda/TiendaControlles';
$route['Tienda/Producto/(:any)']= 'Tienda/ProdutosControllers/Producto/$1';
$route['Tienda/Carrito']= 'Tienda/CarritoController';
$route['Tienda/Pagar']='Tienda/PagarController';
$route['Tienda/Categoria/(:any)']= 'Tienda/TiendaControlles/Categoria/$1';
$route['Tiendad/Envio']='Tienda/EnviosControllers';

//Rutas del logicas del admin
$route['Admin/Edit']= 'admin/AdminControllers/EditPerfil';
$route['Admin/EditFoto']='admin/AdminControllers/EditarFoto';
$route['Admin/EditarPasss']='admin/AdminControllers/Editarpass';
$route['Admin/AgregarCategoria']='admin/CategoriaControllers/agregarCategoria';
$route['Admin/modificarCategoria']='admin/CategoriaControllers/modificarCatego';
$route['Admin/EliminarCatego']='admin/CategoriaControllers/EliminarCate';
$route['Admin/AgregarPro']='admin/ProductoControllers/AgregarPrducto';
$route['Admin/Editarpro']='admin/ProductoControllers/EditarPro';
$route['Admin/editarFoto']='admin/ProductoControllers/editarFoto';
$route['Admin/EliminarPro']='admin/ProductoControllers/EliminarPro';
$route['Admin/AgregarServi']='admin/ServicioControlers/AgregarServio';
$route['Admin/ModificarServi']='admin/ServicioControlers/EditarServicio';
$route['Admin/EditarFotoServi']='admin/ServicioControlers/EditarFoto';
$route['Admin/EliminarServi']='admin/ServicioControlers/EliminarServi';
$route['Admin/AgregarTpservi']='admin/TipoServicioControllers/agregarServicio';
$route['Admin/ModificarTpservicio']='admin/TipoServicioControllers/modificarTpServi';
$route['Admin/EliminarTpservicio']='admin/TipoServicioControllers/EliminarTpServi';

// Rutas del administrador
$route['Admin']= 'admin/AdminControllers';
$route['Admin/Perfil']='admin/AdminControllers/Profile';
$route['Admin/Catgoria']='admin/CategoriaControllers';
$route['Admin/Producto']='admin/ProductoControllers';
$route['Admin/Producto']='admin/ProductoControllers';
$route['Admin/Servicio']='admin/ServicioControlers';
$route['Admin/TipoServi']='admin/TipoServicioControllers';
$route['Admin/Pedidos']='admin/PedidosControlers';
$route['Admin/Pedido/(:any)']='admin/PedidosControlers/VerProducto/$1';
