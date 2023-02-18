<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tpackage extends Model
{
    use HasFactory;
    protected $guarded = [
        'id'
    ];
    protected $fillable = [
        'title', 'slug', 'location',  'about', 'featured_event', 'language', 'foods', 'depature_date', 'duration', 'type', 'price'];

        public function foto()
        {
            return $this->hasMany(Foto::class);
        }

        public function transaksi()
        {
            return $this->hasMany(Transaksi::class, 'id');
        }
}
