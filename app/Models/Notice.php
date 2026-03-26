<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    // array para definir os campos preenchíveis do banco de dados (fillable)
    protected $fillable = [
        'title',
        'description',
        'made_at',
        'urgency',
    ];

    // array associativo que força a sáida dos campos : dateTime, boolean ou hashed para evitar problemas em troca de banco de dados
    protected $casts = [
        'made_at' => 'datetime',
        'urgency' => 'boolean',
    ];
}
