
<?php
class Alumno
{
    private $pdo;
    public $id;
    public $Nombre;
    public $Apellidos;
    public $Correo;

    public function __CONSTRUCT()
    {
        try{
            $this->pdo = Database::StartUp();
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function Listar(){
        try{
            $result = array();
            $stm = $this->pdo->prepare("select*from alumno");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        }
        catch(Exception $e){
            die($e->getMessage());
        }

    }
    
    //llamar formulario 
    //enviar doatos al control
    //controler envia datos al modelo 
    //modelo inserta datos en la base de datos

    //recibe datos del estudiante
    // hacer el formulario bootsrtp, 3 cajas de texto: nombre, apellidos, correo
    // a la tabla agregar un boton de eliminar y modificar
    public function Registrar(Alumno $data){
        try{
            $sql = "INSERT INTO alumno (Nombre, Apellidos, Correo) VALUES (?, ?,?)";
            $this->pdo->prepare($sql)
            ->execute(
                array(
                    $data->nombre,
                    $data->apellidos,
                    $data->correo)
                );
        } catch (Exception $e){
            die($e->getMessage());
        }
    }
    
 
    public function Eliminar($id){
        try{
            $sql = "delete from alumno where id= ?";
            $ex=$this->pdo->prepare($sql);
            $ex->execute(array($id));

    }
        catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function Obtener(Alumno $id){
     
    }

    public function Actualizar(Alumno $data){
        try{
            $sql = "UPDATE alumno set nombre= ?, apellidos=?, correo=? WHERE id=?" ;
            $this->pdo->prepare($sql)
            ->execute(
                array(
                    $data->nombre,
                    $data->apellidos,
                    $data->correo,
                    $data->id)
                );
        } catch (Exception $e){
            die($e->getMessage());
        }
    }

} 
?>