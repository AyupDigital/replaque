<?php

namespace App\Models;

class Ticket extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function plaque()
    {
        return $this->belongsTo(Plaque::class);
    }
}
