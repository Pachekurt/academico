<?php

    class admsucursal extends Controllers{
        public function __construct()
        {
            parent::__construct();

        } 
        public function admsucursal( )
        {  
             $data =admsucursalModel::get();
            //$data['dato']="Home";
            $this->views->getView($this,"admsucursal",$data );
            
        }

        public function insert( )
        { 
            $this->views->getView($this,"insert" );
        }
        
        public function versucursal($id)
        { 
              $data =admsucursalModel::find($id);
              $this->views->getView($this,"admsucursal" ,$data );
        }
    }
?>