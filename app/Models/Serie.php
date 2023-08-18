<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'seasons',
        'premiere_date',
        'synopsis',
        'image',
        'status',
    ];

    protected $with = ['seasons'];

    public function seasons()
    {
        return $this->hasMany(Season::class, 'serie_id');
    }

    protected static function booted()
    {
        self::addGlobalScope('ordered', function (Builder $queryBuilder) {
            $queryBuilder->orderBy('title');
        });
    }

    public function scopeActive(Builder $queryBuilder)
    {
        return $queryBuilder->where('status', 1);
    }
}
