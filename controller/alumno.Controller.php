
<?php
require_once 'model/alumno.php';

class AlumnoController{
    private $model;

    public function __CONSTRUCT(){
        $this->model = new Alumno();
    }
    
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/alumno/alumno.php';

    }

    public function CRUD(){    
        require_once 'view/header.php';
        require_once 'view/alumno/alumno-crear.php';
    }

    //recibe los datos y los envía al modelo
    public function Guardar(){
        $alm = new Alumno();

        $alm->id = $_REQUEST['id'];
        $alm->nombre = $_REQUEST['nombre'];
        $alm->apellidos = $_REQUEST['apellidos'];
        $alm->correo = $_REQUEST['correo'];

        $alm->id >0 
            ? $this->model->Actualizar($alm)
            : $this->model->Registrar($alm);

        header('Location: index.php');
    }

    public function Eliminar(){ 
        $id = $_REQUEST['id'];
        $this->model->Eliminar($id);
        header('Location: index.php');
    }

    public function Editar(){
        $id = $_REQUEST['id'];
       
        require_once("view/header.php");
        require_once("view/alumno/alumno-modificar.php");
    }

    public function update(){
        $alm = new Alumno();
        $alm->id = $_REQUEST['id'];
        $alm->nombre = $_REQUEST['nombre'];
        $alm->apellidos = $_REQUEST['apellidos'];
        $alm->correo = $_REQUEST['correo'];
        
        $alm->id >0 
            ? $this->model->Actualizar($alm)
            : $this->model->Registrar($alm);

        header('Location: index.php');
    }



    // $r-$id
    // investivar como enviar id 

    // para el jueves, avances el martes
    // modificar 
    // id y formulario
    // paso 1 llamar un formulario (Crear formulario o usar el mismo pero saber si es modificar o eliminar (alumno-modificar::: alumno, correo , id oculto)
    // paso 2 Enviar id o todos datos
    // paso 3 abir formulario (recibe los datos enviados por url )(atributo value)
    // paso 4 colocar valores de la consulta (boton editar redirecciona a alumno controller editar, similar insertar) Enviar a actualizar(alumno controller )
    // paso 5 llmar metodo ediatar que esta en el controlados
    // paso 6 enviar datos al modelo
    // paso 7 ejecutar transacción

    // referencias ?-url c= controlador  & a de action

}

?>