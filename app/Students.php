<?php
// MODEL: si occupa della gestione dei dati provenienti dal database

namespace App;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
  protected $fillable = [
    'nome',
    'cognome',
    'voto'
  ];
}
