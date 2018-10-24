<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

    /**
     * Get all completed tasks
     *
     * @return mixed
     */
    protected static function complete()
        {
            return static::where('completed',0)->get();
        }


    /**
     * Get all "incomplete tasks" and other validation in $query.
     *
     * @param $query -> query to execute with the final query
     * @return mixed
     */
    public function scopeIncomplete($query)
    {
        return $query->where('completed',0);
    }
}
