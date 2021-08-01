<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'comments','task_id'];

    /**
     * Get the log that owns the task.
     */
    public function task()
    {
        return $this->belongsTo(Task::class);
    }
}
