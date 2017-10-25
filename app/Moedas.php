<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Moedas extends Model
{
    protected $table = 'tb_moedas';
    public $timestamps = false;
    protected $primaryKey = 'ID_MOEDA';

    protected $fillable = ['SG_MOEDA', 'NO_MOEDA'];
    protected $guarded = ['ID_MOEDA'];
}
