<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InfoPag extends Model
{
    protected $table = 'tb_infopag';
    public $timestamps = false;
    protected $primaryKey = 'ID_INFOPAG';

    protected $fillable = ['ID_USER', 'ID_MOEDA', 'ID_CARTEIRA', 'TEMPO_PAG', 'VALOR_MIN'];
    protected $guarded = ['ID_INFOPAG'];

}
