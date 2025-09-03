<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    // Exibe o formulário
    public function contatoEmpresas()
    {
        return view('empresas.contato');
    }

    // Recebe os dados do formulário
    public function enviarContatoEmpresas(Request $request)
    {
        // validação simples
        $request->validate([
            'empresa'     => 'required|string|max:120',
            'responsavel' => 'required|string|max:100',
            'email'       => 'required|email',
            'mensagem'    => 'required|string',
        ]);

        // por enquanto só retorna mensagem de sucesso
        return back()->with('ok', 'Mensagem enviada com sucesso!');
    }
}
