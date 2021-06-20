<?php
use Illuminate\Database\Eloquent\Model;
use RolesModel as GlobalRolesModel;

require_once 'vendor/autoload.php'; 
require_once 'app/database/conexion.php'; 
require_once 'app/models/UsuariosModel.php';
  
  
class UsuariosModel extends Model
{
    protected $table = 'usuario';

    protected $fillable =
    [
        //'idrol'U
        'username',
        'password',
        'toke',
        'rolid',
        'status'
    ];

    // function obtenerDatos(){
    //     $data =rolesModel::get();
         
    //     return $data;
    // } 
    // function buscar($strRol){
    //     $datorol = RolesModel::where('nombrerol', '=', $strRol)->first();
    //     return $datorol;
    // }
    // function insertarRol($strRol,$strDescripcion,$intStatus){
    //     RolesModel::create([
    //         'nombrerol'=>$strRol,
    //         'descripcion'=>$strDescripcion,
    //         'status'=>$intStatus
    //     ]);
    // }
    // function selectRol(int $idrol){
    //     $datorol = RolesModel::where('idrol', '=', $idrol)->first();
    //     return $datorol;
    // }

    // function updateRol($idrol,$strRol,$strDescripcion,$intStatus)
    // {
    //     $datorol=RolesModel::where('idrol','=',$idrol)->update(['nombrerol'=>$strRol,'descripcion'=>$strDescripcion,'status'=>$intStatus]);
    //     return $datorol;
    // }
    // function deleteRol($idrol)
    // {
            
    //     $datorol=RolesModel::where('idrol','=',$idrol)->delete();
    //     return $datorol;
    // }

}
?>