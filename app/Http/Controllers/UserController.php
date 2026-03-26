<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // Exibe o formulário de cadastro
    // public function create()
    // {
    //     return view('app.notices.student');
    // }

    // Processa e salva o cadastro
    public function store(UserRequest $request)
    {
        $validated = $request->validated();

    User::create([
        'name' => $validated['name'],
        'email' => $validated['email'],
        'password' => Hash::make($validated['password']),
        'city' => $validated['city'],
    ]);

        return redirect()->route('students.view')->with('success', 'Cadastro realizado com sucesso!');
    }

    public function index()
    {
        $students = User::paginate(10); // pega todos os usuários do banco

        return view('app.notices.student_list', compact('students'));
    }

}
