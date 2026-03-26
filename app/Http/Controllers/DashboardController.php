<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        // Recebe o valor do campo searchdate
        $searchDate = $request->input('search_date');

        // Se o usuário entrar com a data, formata para formato de banco de dados, se não, entra com a data atual já formatada para banco de dados
        $selectedDate = $searchDate ? Carbon::parse($searchDate) : Carbon::today();

       // Pesquisa no banco de dados os lembretes da data buscada 
        $notices = Notice::whereDate('made_at', $selectedDate->format('Y-m-d'))
            ->orderBy('made_at', "asc")
            ->get();  // get é obrigatório quando usa where para pegar as pesquisas

        return view('app.dashboard', compact('notices', 'searchDate'));
    }

    // Views das páginas de cadaastro dos estudantes e professores
    public function student(){
        return view('app.notices.student');
    }

    public function teacher(){
        return view('app.notices.teacher');
    }

    // View da página welcome
    public function welcome(){
        return view('app.notices.welcome');
    }

    public function about_us(){
        return view('app.components.about_us');
    }
}