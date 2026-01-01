<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class InterviewInvite extends Model
{
    protected $fillable = ['interview_id','token','sent_at','status'];

    public function interview(): BelongsTo
    {
        return $this->belongsTo(Interview::class);
    }
}
