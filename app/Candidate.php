<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Candidate extends Model
{
    protected $fillable = ['email', 'phone', 'student_id', 'party_id'];

    public function party() : BelongsTo
    {
        return $this->belongsTo(Party::class);
    }
}