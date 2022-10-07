<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    public $table = "candidate";
    protected $fillable = ['nm_candidate','id_kategori','kelas','ttl','jenkel','visi','misi','foto'];
    protected $primaryKey = 'id_candidate';

    public function Kategori()
    {
        return $this->belongsTo('App\Kategori','id_kategori','id_kategori');
    }
}
