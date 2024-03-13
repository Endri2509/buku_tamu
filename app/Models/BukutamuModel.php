<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BukutamuModel extends Model
{
    use HasFactory;
    protected $table='buku_tamu';
    protected $guarded ='id';
    protected $fillable = [
        'nama','no_hp','email','instansi','layanan'
    ];
}
