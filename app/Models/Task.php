<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $dates = ['max_date'];
    protected $fillable = ['name', 'description', 'author_id', 'max_date', 'user_id'];

    /**
     * Get the logs for the task.
     */
    public function logs()
    {
        return $this->hasMany(Log::class);
    }

    /**
     * Get the log that owns the task.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the log that owns the task.
     */
    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }
}
