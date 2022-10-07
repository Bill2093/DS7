<?php

require_once('modelo.php');

class noticias extends modeloCreadencialesBD{
    protected $titulo;
    protected $texto;
    protected $categoria;
    protected $fecha;
    protected $imagen;

public function __construct() {
    parent::__construct();

}

/*public function consultar_noticias() {

$instruccion = "CALL sp_listar_noticias()";

$consulta=$this->_db->query ($instruccion);
$resultado=$consulta->fetch_all(MYSQLI_ASSOC);

      if(!$resultado) {
        echo "Fallo al  consultar las noticias";
      }
      else{
        return $resultado;
        $resultado->close();
        $this->_db->close();
      }

}*/

public function paginacion($P1,$CANTIDAD) {
  $instruccion = "CALL sp_paginacion('".$P1."','".$CANTIDAD."')";

  $consulta=$this->_db->query($instruccion);
  $resultado=$consulta->fetch_all(MYSQLI_ASSOC);

  if($resultado) {
    return $resultado;
    $resultado->close();
    $this->_db->close();
  }
}


}


?>
