<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormularioBlog;

class WebController extends Controller
{
    public function show()
    {
       
        return view('formulario');
    }

    public function store(Request $request)
    {
        // Validação dos campos (opcional)
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        // Criação do novo registro usando o modelo BlogPost
        $blogPost = new FormularioBlog();
        $blogPost->title = $request->input('title');
        $blogPost->description = $request->input('description');
        $blogPost->save();

        // Redirecionar para uma rota ou retornar uma resposta (opcional)
        return redirect()->back()->with('status', 'Registro salvo com sucesso!');
    }

    public function showData()
    {
        // Buscar os dados no banco usando o Eloquent
        $formData = FormularioBlog::all(); // Isso irá buscar todos os registros na tabela associada ao modelo FormData

        // Passar os dados para a view e exibi-los
        return view('mostrar')->with('formData', $formData);
    }
    public function login(){
      return view('login');
    }

}

