<?php

namespace App\Models;

use App\Models\Tasks;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Subtasks extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'priority',
        'status',
    ];

    public function tasks() : BelongsTo
    {
        return $this->belongsTo(Tasks::class);
    }
}
