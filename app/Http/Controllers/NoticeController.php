<?php

namespace App\Http\Controllers;

use App\Http\requests\NoticeRequest;
use App\Models\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    /**
     * Método para listar os recursos
     */
    public function index(Request $request)
    {
        $query = Notice::query();

        // Filtro por urgência (se existir)
        if ($request->filled('urgency')) {
            if ($request->urgency === 'urgent') {
                $query->where('urgency', true);
            } elseif ($request->urgency === 'non_urgent') {
                $query->where('urgency', false);
            }
        }
    
        // Ordenação por data
        $order = $request->get('order', 'desc'); // padrão: mais recentes primeiro
        $query->orderBy('made_at', $order);
    
        $notices = $query->paginate(9)->appends($request->query());
    
        return view('app.notices.index', compact('notices'));
    }

    /**
     * Método para mostrar o formulário de cadastro dos recados
     */
    public function create()
    {
        return view('app.notices.create');
    }

    /**
     * Método para receber as requisições e guardar no Banco de Dados
     */
    public function store(NoticeRequest $request)
    {
        // Validação dos campos
        $data = $request->validated();

        // Gravação no banco de dados
        Notice::create($data);

        // Redirecionamento por meio da rota "notices" com a mensagem de sucesso caso o cadastro der certo
        return redirect()->route('notices.create')->with('success', "Recado cadastrado com sucesso!");
    }

    /**
     * Display the specified resource.
     */
    public function show(Notice $notice)
    {
        return view('app.notices.show', compact('notice'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Notice $notice)
    {
        return view('app.notices.edit', compact('notice'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(NoticeRequest $request, Notice $notice)
    {
        // Validação dos campos
        $data = $request->validated();

        // Atualiza a alteração no banco de dados
        $notice->update($data);

        // Redireciona com a rota notices para notices edit
        return redirect()->route('notices.edit', $notice)->with('success', 'Recado atualizado com sucesso!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Notice $notice)
    {
        // Deleta o lembrete
        $notice->delete();
        return redirect()
            ->route('notices.index')
            ->with('success', 'Recado deletado com sucesso!');
    }

    public function markAsUrgency(Notice $notice)
    {
        // Atualiza o lembrete para urgente
        $notice->update(['urgency' => true]);
        return redirect()
            ->back()
            ->with('success', "Recado marcado como urgente!");
    }

    public function markAsNoUrgency(Notice $notice)
    {
        // Atualiza o lembrete para não urgente
        $notice->update(['urgency' => false]);
        return redirect()
            ->back()
            ->with('success', 'Recado marcado como não urgente!');
    }
}
