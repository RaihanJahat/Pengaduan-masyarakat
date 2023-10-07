<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Masyarakat extends Model
{
    use HasFactory;

    //set Tabel
    protected $table ="masyarakat";

    //set primary key
    protected $primaryKey ="Nik";

    //set auto increment
    public $incrementing =false;


    //set tipe data primary key
    protected $KeyType ="string";

    // string kolom yang dapat di isi secara masal
    protected $guarded = [];
}
