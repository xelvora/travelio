<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $guarded = [
        'id'
    ];
    protected $fillable = [
        'tpackage_id', 'username', 'additional_visa', 'transaction_total', 'status'];

        public function package()
        {
            return $this->belongsTo(Tpackage::class, 'tpackage_id');
        }

        public function detail()
        {
            return $this->hasMany(Transaksidt::class, 'id');
        }
}
