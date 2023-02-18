<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksidt extends Model
{
    use HasFactory;
    protected $guarded = [
        'id'
    ];
    protected $fillable = [
        'transaction_id', 'nationality', 'is_visa', 'doe_passport'];

        public function transaksi()
        {
            return $this->belongsTo(Transaksi::class, 'transaction_id');
        }
}
