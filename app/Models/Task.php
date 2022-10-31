<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'user_id'];
    /**
     * The Relation One To many user.
     *
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}