<?php 
	require_once "modelos.php";
	require_once "controladores.php";

	$uri = $_SERVER['REQUEST_URI'];
	switch ($uri) {
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
	}
 ?>