<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class division extends Model
{
    use HasFactory;
    protected $table = 'divisions';

    protected $fillable = [
        'id',
        'name_division'
    ];

    public function employees()
    {
        return $this->hasMany(Employee::class);
    }
}
