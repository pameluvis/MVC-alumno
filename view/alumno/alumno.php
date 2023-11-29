<!--continuacion header-->
<div class="well well-sm text-right">
    <a  href="?c=Alumno&a=CRUD" class="btn btn-info">Añadir alumno</a>
    <br><br>
</div>
<table class="table table-primary">
    <thead>
        <tr>
            <th>Alumno</th>
            <th>Apellido</th>
            <th>Correo</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <!-- r = variable de ciclo-->
        <?php foreach($this->model->Listar() as $r ) : ?>
            <td><?php echo $r->nombre;?></td>
            <td><?php echo $r->apellidos;?></td>
            <td><?php echo $r->correo;?></td>
            <td><a href="?c=Alumno&a=Editar&id=<?php echo $r ->id ?>&nombre=<?php echo $r ->nombre ?>&apellidos=<?php echo $r ->apellidos ?>&correo=<?php echo $r ->correo ?>"> <input type="submit" value="Modificar" class="btn btn-warning"></a></td>
            <td><a href="?c=Alumno&a=Eliminar&id=<?php echo $r ->id ?>"><input type="submit" value="Eliminar" class="btn btn-danger" ></a></button></td>
    </tbody>
    <?php endforeach; ?>
</table>

