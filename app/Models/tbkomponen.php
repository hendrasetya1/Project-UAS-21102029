<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbkomponen extends Model
{
    use HasFactory;
    //field yang tidak perlu ditambahkan
    protected $guard = ['ID', 'created_at', 'updated_at'];

    //field yang di isikan dari form
    protected $fillable = ['komponens','fungsi','jenis','flname'];

    //nama tabel
    protected $table = "tbkomponens";
}
