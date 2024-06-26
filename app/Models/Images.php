<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Images extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
