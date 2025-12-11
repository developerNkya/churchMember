<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name', 'middle_name', 'last_name', 'jinsi', 'tarehe_kuzaliwa', 'mahali_kuzaliwa', 'hali_ndoa',
        'jina_mwenzi', 'aina_ndoa', 'tarehe_ndoa', 'watoto', 'simu',
        'simu_mwenzi', 'sanduku_barua', 'barua_pepe', 'mtaa', 'namba_nyumba',
        'jina_eneo', 'block_no', 'jirani_jina', 'jirani_simu', 'mzee_kanisa',
        'simu_mzee', 'kazi', 'mahali_kazi', 'elimu', 'ujuzi', 'batizwa',
        'kipaimara', 'tarehe_kipaimara', 'meza_bwana', 'jumuiya', 'jina_jumuiya',
        'sababu', 'huduma', 'kwaya', 'umoja', 'ahadi_jengo', 'ahadi_uwakili',
        'ahadi_nyingine', 'other_pledges', 'namba_ahadi', 'namba_ahadi_specific', 'photo', 'status'
    ];

    protected $casts = [
        'tarehe_kuzaliwa' => 'date',
        'tarehe_ndoa' => 'date',
        'tarehe_kipaimara' => 'date',
        'watoto' => 'array',
        'huduma' => 'array',
        'kwaya' => 'array',
        'umoja' => 'array',
        'other_pledges' => 'array',
        'ahadi_jengo' => 'decimal:2',
        'ahadi_uwakili' => 'decimal:2',
        'ahadi_nyingine' => 'decimal:2',
    ];
}