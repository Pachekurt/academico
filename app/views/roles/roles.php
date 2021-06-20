<?php headerAdmin($data); 
      getModal('modalroles',$data);  
?>     
<div class="row">
    <div class="col-lg-12">
        <div class="card">  
            <div class="card-header">
            <h4 class="page-title"><i class="fa fa-address-book"> </i> <?= $data['page_title'];?>   </h4> 
			&nbsp&nbsp  
             <a class="btn btn-pill btn-info"     onclick="openModal();"  >
             <icon class="fa fa-plus-circle"></icon>
             Nuevo</a>
            </div>

             
        </div>  
   
        <div class="card">
           
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-nowrap" id="tableroles">
                        <thead>
                            <tr>
                                <th class="wd-15p border-bottom-0">Id</th>
                                <th class="wd-25p border-bottom-0">Nombre</th>
                                <th class="wd-30p border-bottom-0">Descripcion</th>
                                <th class="wd-15p border-bottom-0">Estado</th> 
                                <th class="wd-15p border-bottom-0">Acciones</th>  
                            </tr>
                        </thead>
                        <tbody>
                       
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
       
        
    </div>
 </div>
<?php footerAdmin($data); ?>	 