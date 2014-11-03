<?php 
session_start();
require_once "modelos.php";
require_once "modelos/usuarios_model.php";
require_once "modelos/inventario_model.php";
require_once "controladores.php";

$url = $_SERVER['REQUEST_URI'];
$uri = explode("?", $url);
	
	switch ($uri[0]) {
		case "/Smart-Solutions/index.php/salir":
		cerrar_secion();
		break;

		case "/Smart-Solutions/index.php/login":
		login();
		break;
		
		case "/Smart-Solutions/":
		header("Location: index.php/login");
		break;

		case "/Smart-Solutions/index.php/crear_usuario":
		crear_usuario_action();
		break;
		case "/Smart-Solutions/index.php/admin":
		abrir_panel_admin();
		break;
		case "/Smart-Solutions/index.php/contador":
		abrir_panel_contador();
		break;
		case "/Smart-Solutions/index.php/cajero":
		abrir_panel_cajero();
		break;

		case "/Smart-Solutions/index.php/inventario":
		inventario_action();
		break;

		case "/Smart-Solutions/index.php/clientes":
		clientes_action();
		break;
		case "/Smart-Solutions/index.php/consultar_cliente":
		consultar_cliente_action();
		break;
		case "/Smart-Solutions/index.php/actualizar_cliente":
		actualizar_cliente_action();
		break;
		case "/Smart-Solutions/index.php/crear_cliente":
		crear_cliente_action();
		break;
		case "/Smart-Solutions/index.php/eliminar_cliente":
		eliminar_cliente_action();
		break;

		case "/Smart-Solutions/index.php/empleados":
		empleados_action();
		break;
		case "/Smart-Solutions/index.php/consultar_empleado":
		consultar_empleado_action();
		break;
		case "/Smart-Solutions/index.php/actualizar_empleado":
		actualizar_empleado_action();
		break;
		case "/Smart-Solutions/index.php/crear_empleado":
		crear_empleado_action();
		break;
		case "/Smart-Solutions/index.php/eliminar_empleado":
		eliminar_empleado_action();
		break;

		case "/Smart-Solutions/index.php/proveedores":
		proveedores_action();
		break;
		case "/Smart-Solutions/index.php/consultar_proveedor":
		consultar_proveedor_action();
		break;
		case "/Smart-Solutions/index.php/actualizar_proveedor":
		actualizar_proveedor_action();
		break;
		case "/Smart-Solutions/index.php/crear_proveedor":
		crear_proveedor_action();
		break;
		case "/Smart-Solutions/index.php/eliminar_proveedor":
		eliminar_proveedor_action();
		break;

		case "/Smart-Solutions/index.php/nuevo_pedido":
		pedido_action();
		break;

		case "/Smart-Solutions/index.php/crear_producto":
		prodcuto_nuevo_action();
		break;

		case "/Smart-Solutions/index.php/consultar_producto":
		consultar_inventario_action();
		break;

		case "/Smart-Solutions/index.php/almacenar_pedido":
		procesar_pedido_action();
		break;

		case "/Smart-Solutions/index.php/Transacion-manual":
		contabilidad_action();
		break;
		case "/Smart-Solutions/index.php/buscar_cuentas":
		contabilidad_consultar_action();
		break;
		case "/Smart-Solutions/index.php/nueva_contabilidad":
		contabilidad_nueva_action();
		break;
		case "/Smart-Solutions/index.php/buscar_codigo":
		consultar_codigo_action();
		break;
		case "/Smart-Solutions/index.php/guardar_transaiones":
		crear_contabilidad_action();
		break;
		case "/Smart-Solutions/index.php/Codigos":
		codigos_action();
		break;

		case "/Smart-Solutions/index.php/catalogo":
		productos_action();
		break;

		case "/Smart-Solutions/index.php/factura":
		crear_factura_action();
		break;

		case "/Smart-Solutions/index.php/buscar_productos":
		productos_numero_action();
		break;
		case "/Smart-Solutions/index.php/consultar_producto1":
		consultar_producto_fact_action();
		break;

		case "/Smart-Solutions/index.php/imprimir_factura":
		guardar_factura_action();
		break;

		case "/Smart-Solutions/index.php/facturas":
		facturas_action();
		break;

		case "/Smart-Solutions/index.php/consultar_factura":
		consultar_detalles_action();
		break;

		case "/Smart-Solutions/index.php/modificar-empresa":
		empresa_action();
		break;

		case "/Smart-Solutions/index.php/nomina":
		nominas_action();
		break;
		case "/Smart-Solutions/index.php/nueva_nomina":
		crear_nomina_action();
		break;
		case "/Smart-Solutions/index.php/liquidar_nomina":
		liquidar_nomina_action();
		break;
		case "/Smart-Solutions/index.php/consultar_nomina":
		consultar_nomina_action();
		break;


	}

?>