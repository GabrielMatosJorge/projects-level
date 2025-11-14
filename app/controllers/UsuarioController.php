<?php 
// em qual pasta ela está
namespace App\Controllers;

use App\Models\Usuario;

class UsuarioController{
     public function listar() {
        $lista_usuarios = Usuario::buscarTodos();

        render("usuarios/lista_usuarios.php" , [
            'title => "lista de Usuarios',
            'usuarios' => $lista_usuarios
        ]);
     }
}