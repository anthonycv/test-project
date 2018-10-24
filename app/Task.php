<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{


        /*
         * Static Function
         */
        protected static function complete()
        {
            return static::where('completed',0)->get();
        }

        /*
         * Public function
         * scope preview of the method name (use camelCase)
         */
        public function scopeIncomplete($query)
        {
            return $query->where('completed',0);
        }
}
