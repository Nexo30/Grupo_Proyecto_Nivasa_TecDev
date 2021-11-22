<?php

class Carrito_Controller extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->view->mensaje = "";
        $this->view->mensajeC = "";
        $this->view->resultadoLogin = "";

    }
    public function render()
    {

        $this->view->render('carrito/index');

    }
    public function carritoI()
    {

        $this->view->render('carrito/carritoI');

    }
    public function ingresar()
    {
        $nombre = $_POST['nombre'];
        $pass = $_POST['pass'];
        $exitoLogin = $this->model->ingresar($nombre, $pass);
        if ($exitoLogin) {
            $_SESSION["estalogueado"] = true;
            $_SESSION["nombre"] = $nombre;
            $_SESSION["tipo"] = "cliente";
            $this->view->render('carrito/carritoI');
        } else {
            $this->view->resultadoLogin = "Usuario o contraseña incorrectos";
            $this->view->render('carrito');

        }

    }

    public function salir()
    {
        $_SESSION["estalogueado"] = false;
        unset($_SESSION["nombre"]);
        unset($_SESSION["tipo"]);
        $this->view->render('carrito');
    }
    public function registrar()
    {
        //var_dump($this); //desplegar los detalles de una variable

        //echo 'ejecutando crear';
        $nombre = $_POST['usuario'];
        $pass = $_POST['contrasena'];
        $calle = $_POST['calle'];
        $ciudad = $_POST['ciudad'];
        $apellido = $_POST['apellido'];
        $numero = $_POST['telefono'];
        if ($this->model->registrar(['usuario' => $nombre, 'apellido' => $apellido, 'contrasena' => $pass, 'calle' => $calle, 'ciudad' => $ciudad, 'telefono' => $numero])) {
            $this->view->mensaje = "Se ha registrado correctamente";
            $articulos = $this->model->get();
            $articulos = $this->model->get();
            $respuesta = [
                "datos" => $articulos,
                "totalResultados" => count($articulos),
            ];
            $this->view->articulos = $articulos;
            $this->view->render('carrito/registrar');
        } else {
            $this->view->mensaje = "Error, intentelo de nuevo";
            $articulos = $this->model->get();
            $this->view->articulos = $articulos;
            $this->view->render('carrito');
        }
    }
}
