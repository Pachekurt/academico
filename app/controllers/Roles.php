<?php

    class Roles extends Controllers{
        public function __construct()
        {
            parent::__construct();

        } 
        public function Roles()
        {
            $data['page_id']=2;
            $data['tag_page']="Roles";
            $data['page_title']="Roles";
            $data['page_name']="Roles";
            $data['page_descripcion']="";
            $data['page_icon']="fa fa-address-book";
            $this->views->getView($this,"roles",$data);
        }
        public function getRoles()
        {
           
           $data= $this->model->obtenerDatos();
            //$data['dato']="Home";
            //$this->views->getView($this,"roles",$data );
            //<span class="badge badge-success mt-2></span>
            //dep($data[0]['status']);exit;

            for($i=0; $i< count($data); $i++){
                if ($data[$i]['status']==1)
                {
                    $data[$i]['status']= '<span class="badge badge-success mt-2">Activo</span>';
                }
                else
                { 
                    $data[$i]['status']= '<span class="badge badge-danger mt-2">Inactivo</span>';
                }
                $data[$i]['options']='<div class="btn-list">
                <button  class="btn btn-dark btn-sm mb-1" onClick="fntPermisos('.$data[$i]['idrol'].')" title="Permisos" ><i class="si si-settings"></i> </button>
                <button    class="btn btn-primary btn-sm mb-1"   onClick="fntEditRol('.$data[$i]['idrol'].')" title="Editar"  ><i class="si si-pencil"></i> </button> 
                <button   class="btn btn-danger btn-sm mb-1" onClick="fntDelRol('.$data[$i]['idrol'].')" title="Eliminar" ><i class="si si-dislike"></i> </button>
                </div>';
            }
            echo json_encode($data,JSON_UNESCAPED_UNICODE);
            die();
        }
		public function getRol(int $idrol)
		{
			$intIdrol = intval(strClean($idrol));
			if($intIdrol > 0)
			{
				$data = $this->model->selectRol($intIdrol);
				if(empty($data))
				{
					$arrResponse = array('status' => false, 'msg' => 'Datos no encontrados.');
				}else{
					$arrResponse = array('status' => true, 'data' => $data);
				}
				echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
			}
			die();
		}
        public function setRol(){
			 
			 $intIdrol = intval($_POST['idRol']);
			 $strRol =  strClean($_POST['txtNombre']);
			 $strDescipcion = strClean($_POST['txtDescripcion']);
			 $intStatus = intval($_POST['listStatus']);

           //  $datorol = RolesModel::where('nombrerol', $strRol)->get();
             $datorol = $this->model->buscar($strRol);
             //dep($datorol);
             //if (!$datorol) {
                //Crear
               // $this->model->insertarRol($strRol, $strDescipcion,$intStatus); 
               // $arrResponse = array('status' => true, 'msg' => 'Datos guardados correctamente.');
                    	 if($intIdrol == 0)
                            {
                                
                               $request_rol= $this->model->insertarRol($strRol, $strDescipcion,$intStatus); 
                                $option = 1;
                            }else{
                                //Actualizar
                               $request_rol= $this->model->updateRol($intIdrol,$strRol, $strDescipcion,$intStatus); 
                                $option = 2;
                            }  
                                if($option == 1)
                                {
                                    $arrResponse = array('status' => true, 'msg' => 'Datos guardados correctamente.');
                                }else{
                                    $arrResponse = array('status' => true, 'msg' => 'Datos Actualizados correctamente.');
                                }
                           
               //}
              // else
               // { 
                    // Devuelve un mensaje indicando que no existe un usuario con el id recibido.
               //     $arrResponse = array('status' => false, 'msg' => 'El nombre de Rol ya existe'); 
               // }
            
		
			 echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
			   die();
		}
        
        public function delRol()
		{
			if($_POST){
				$intIdrol = intval($_POST['idrol']);
				$requestDelete = $this->model->deleteRol($intIdrol);

				  //	$arrResponse = array('status' => true, 'msg' => 'Se ha eliminado el Rol');

				if($requestDelete == 'ok')
				{
					$arrResponse = array('status' => true, 'msg' => 'Se ha eliminado el Rol');
				}else if($requestDelete == 'exist'){
					$arrResponse = array('status' => false, 'msg' => 'No es posible eliminar un Rol asociado a usuarios.');
				}else{
					$arrResponse = array('status' => false, 'msg' => 'Error al eliminar el Rol.');
				}
				echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
			}
			die();
		}
    }
?>