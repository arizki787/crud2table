<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'date_of_birth', 'phone', 'division_id'];

    public function division()
    {
        return $this->belongsTo(division::class);
    }
}
