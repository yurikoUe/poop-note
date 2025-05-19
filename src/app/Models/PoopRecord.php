<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PoopRecord extends Model
{
    use HasFactory;

    protected $fillable = [
        'child_id',
        'datetime',
        'hardness',
        'medicine',
        'symptoms',
        'note',
    ];

    protected $casts = [
        'symptoms' => 'array', // json→配列に自動変換
        'datetime' => 'datetime',
    ];

    public function child()
    {
        return $this->belongsTo(Child::class);
    }
}
