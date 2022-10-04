<?php
$ servidor = " localhost ";
$ usuario = " nuevousuario ";
$ contraseña = " contraseña ";
$ nombre_bd = " ransomware_db ";
$ conn = new mysqli ( $ servidor , $ nombre de usuario , $ contraseña , $ dbname );
if ( $ conexión -> connect_error ) {
    die(" Conexión fallida: " . $ conn -> connect_error );
}
$ sql = " seleccionar * de victimas; ";
$ resultado = $ conn -> consulta ( $ sql );

if ( $ resultado -> num_filas > 0 ) {
    // listamos las filas y columnas
    while ( $ fila = $ resultado -> fetch_assoc ()) {
        eco " id: ". $ fila [" ID "]. " - Nombre: " . $ fila [" IDD "]. "  " . $ fila [" APROBADO "]. " <br> ";
    }
} más {
    echo " 0 resultados ";
}
$ conexión -> cerrar ();
?>
