<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class KategoriMou extends Model
{
    use HasFactory;
    // use SoftDeletes;

    protected $table = 'kategori_mous';
    protected $guarded = ['id'];
}
