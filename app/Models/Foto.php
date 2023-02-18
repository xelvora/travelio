<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    use HasFactory;
    protected $guarded = [
        'id'
    ];
    protected $fillable = [
        'tpackage_id', 'foto',];

    public function package()
    {
        return $this->belongsTo(Tpackage::class, 'tpackage_id');
    }
}
