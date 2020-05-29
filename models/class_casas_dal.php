<?php
include("class_casas.php");
include("class_db.php");
class casas_dal extends class_db{
	
	function __construct()
	{
		parent::__construct();
	}

	function __destruct()
	{
        parent::__destruct();

	}

    function get_lista_casas(){

       $elsql ="select casasID,sold,fk_usuarioID from casas order by casasID";

        $this->set_sql($elsql);
        $lista=NULL;
        $rs = mysqli_query($this->db_conn,$this->db_query) or die(mysqli_error($this->db_conn));
        $total_de_registro = mysqli_num_rows($rs);
        $i=0;
        while($renglon = mysqli_fetch_assoc($rs)) {
                   $obj_det = new lista_casas($renglon["id_casa"],utf8_encode($renglon["f_picture"]));
    
  
            $i++;
            $lista[$i]=$obj_det;
            unset($obj_det);
        }
        mysqli_free_result($rs);
        return $lista;
     }


            //Insertar
    function publicar_casa($obj){
        $sql = "insert into casas (";
        $sql .= "casasID,";
        $sql .= "sold,";
        $sql .= "picture,";
        $sql .= "price,";
        $sql .= "rooms,";
        $sql .= "bathrooms,";
        $sql .= "fk_usuarioID,";
        $sql .= "fk_ubicacionID";
        $sql .= ") ";
        $sql .= "values(";
        $sql .= "'".$obj->getId_Casa()."',";
        $sql .= "'".$obj->getStatus_Casa()."',";
        $sql .= "'".$obj->getFoto_Casa()."',";
        $sql .= "'".$obj->getPrecio_Casa()."',";
        $sql .= "'".$obj->getCuartos_Casa()."',";
        $sql .= "'".$obj->getBaños_Casa()."',";
        $sql .= "'".$obj->getVendedor_Casa()."',";
        $sql .= "'".$obj->getUbicacion_Casa()."'";
        $sql .= ")";
        //print $sql;exit;
        $this->set_sql($sql);
        $this->db_conn->set_charset("utf8");
        
        mysqli_query($this->db_conn,$this->db_query) or die(mysqli_error($this->db_conn));

        if(mysqli_affected_rows($this->db_conn)==1) {
            $insertado=1;
        }else{
            $insertado=0;
        }
        unset($obj);
        return $insertado;
    }


        //borrar
    function borrar_casa($obj){
        
        $sql = "delete from casas where casasID='".$obj->getId_Casa()."'";
     
        //print $sql;exit;
        $this->set_sql($sql);
        $this->db_conn->set_charset("utf8");
        
        mysqli_query($this->db_conn,$this->db_query) or die(mysqli_error($this->db_conn));

        if(mysqli_affected_rows($this->db_conn)==1) {
            $insertado=1;
        }else{
            $insertado=0;
        }
        unset($obj);
        return $insertado;
    }


    function actualiza_curso($obj){
/*
        echo '<pre>';
        echo print_r($obj);
        echo '</pre>';exit;
*/
        $sql = "update catalogo_cursos set ";
        $sql .= "nombre_curso="."'".$obj->getNombre_Curso()."'";
        $sql .= " where id_curso = '".$obj->getId_Curso()."'";

        //echo $sql;exit;
        $this->set_sql($sql);
        $this->db_conn->set_charset("utf8");
        
        mysqli_query($this->db_conn,$this->db_query) or die(mysqli_error($this->db_conn));

        if(mysqli_affected_rows($this->db_conn)==1) {
            $actualizado=1;
        }else{
            $actualizado=0;
        }
        unset($obj);
        return $actualizado;
    }


     //Obtener listado
    function get_datos_cursos_by_id($id){

        //EJEMPLOS AVOID SQL INJECTION 
        //$f_nivel=$this->db_conn->real_escape_string($f_nivel);
        //$f_control=$this->db_conn->real_escape_string($f_control);

        $elsql ="select id_curso,nombre_curso ";
        $elsql.="from catalogo_cursos where id_curso=$id";
        //echo $elsql;
        $this->set_sql($elsql);

        $rs = mysqli_query($this->db_conn,$this->db_query) or die(mysqli_error($this->db_conn));
        $total_de_registro = mysqli_num_rows($rs);
        $i=0;
        while($renglon = mysqli_fetch_assoc($rs)) {
            $obj_det = new catalogo_cursos($renglon["id_curso"],$renglon["nombre_curso"]);

            $i++;
            $lista[$i]=$obj_det;
            unset($obj_det);
        }

        return $lista;
     }     


        function existeRfc($id_curso){
      $id_curso=$this->db_conn->real_escape_string($id_curso);

        $sql = "select count(*) from catalogo_cursos";
        $sql .= " where id_curso='$id_curso'";

        //print $sql;
        $this->set_sql($sql);
        $rs = mysqli_query($this->db_conn,$this->db_query) or die(mysqli_error($this->db_conn));
        //$total_de_registro = mysqli_num_rows($rs);
        $renglon= mysqli_fetch_array($rs);
        $cuantos= $renglon[0];

        return $cuantos;
    }
}
?>