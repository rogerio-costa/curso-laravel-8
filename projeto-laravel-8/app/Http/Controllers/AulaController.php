<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AulaController extends Controller
{

    public function aula4()
    {
        $nome = "Korra";
        $idade = 23;
        $elementos = ["terra", "fogo", "ar", "água"];
        return view(
            'aulas.aula4',
            [
                'nome' => $nome,
                'idade' => $idade,
                'elementos' => $elementos
            ]
        );
    }


    public function aula8($id = null)
    {
        // {id?} = campo opicional
    // $id = null estou definindo o valor default caso nenhum parâmentro seja passado
    return view('aulas.aula8', ['id' => $id]);
    }

}
