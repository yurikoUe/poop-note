<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Child extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'icon', 'color'];

    public function poopRecords()
    {
        return $this->hasMany(PoopRecord::class);
    }
}
