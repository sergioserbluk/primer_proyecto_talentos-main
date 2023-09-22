<?php
namespace App\Models;
use CodeIgniter\Model;
Class Usuarios_model extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey = 'id_usuario';
    protected $allowedFields = ['nombre', 'apellido', 'usuario','email',  'pass', 'perfil_id', 'baja', 'created_at'];
}
