<script type="text/javascript">
let mensaje = '<?php echo $mensaje ?>';

//alerta al agregar nuevo usuario
if (mensaje == 'exitoAgregar') {
    Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: 'Nuevo usuario agregado',
        showConfirmButton: false,
        timer: 1500
    })

    //alert cuando no se agrego
} else if (mensaje == 'errorAgregar') {
    Swal.fire({
        position: 'top-end',
        icon: 'error',
        title: 'Erro al agregar nuevo usuario',
        showConfirmButton: false,
        timer: 1500
    })


    //alert al borrar usuario con exito
} else if (mensaje == 'exitoEliminar') {
    Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: 'Usuario eliminado',
        showConfirmButton: false,
        timer: 1500
    })

    //alert cuando existio error al eliminar el usuario
} else if (mensaje == 'errorEliminar') {
    Swal.fire({
        position: 'top-end',
        icon: 'error',
        title: 'Error al eliminar usuario',
        showConfirmButton: false,
        timer: 1500
    })
}
</script>