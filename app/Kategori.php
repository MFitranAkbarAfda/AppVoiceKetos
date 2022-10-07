<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    public $table = "kategori";
    protected $fillable = ['nm_kategori'];
    protected $primaryKey = 'id_kategori';
    
    public function candidate()
    {
        return $this->belongsTo('App\Candidate', 'id_candidate','id_candidate');
    }
}
