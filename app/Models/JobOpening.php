<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class JobOpening extends Model
{
    protected $fillable = ['position_id','establishment_id','title','description','employment_type','location','vacancies','status','published_at'];

    public function position(): BelongsTo
    {
        return $this->belongsTo(Position::class);
    }

    public function establishment(): BelongsTo
    {
        return $this->belongsTo(Establishment::class);
    }

    public function qualifications(): HasMany
    {
        return $this->hasMany(JobOpeningQualification::class);
    }

    public function responsibilities(): HasMany
    {
        return $this->hasMany(JobOpeningResponsibility::class);
    }

    public function applications(): HasMany
    {
        return $this->hasMany(Application::class);
    }
}
