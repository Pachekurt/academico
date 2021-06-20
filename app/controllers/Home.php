<?php

    class Home extends Controllers{
        public function __construct()
        {
            parent::__construct();

        } 
        public function home()
        {
            $data['tag_page']="Inicio";
            $data['page_title']="Inicio";
            $data['page_name']="Inicio";
            $data['page_id']=1;
            $data['page_descripcion']="";
            $this->views->getView($this,"home",$data);
        }

        
    }
?>