<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    protected $table = 'users';
    protected $fillable = ['no_induk','nama','jenkel','no_tlp','kelas','email','password','role'];

    protected $primaryKey ='id';
}
