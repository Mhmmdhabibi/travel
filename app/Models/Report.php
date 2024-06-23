<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'transaksis';



    public function user()
    {
        return $this->belongsTo(User::class, 'akun_penggunas_id');
    }

    public function paketWisata()
    {
        return $this->belongsTo(PaketWisata::class);
    }
}
