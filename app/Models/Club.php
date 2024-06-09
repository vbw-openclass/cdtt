<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Club extends Model
{
    use HasFactory;

	protected $fillable = [
		'name',
	];

	public function teams(): HasMany
	{
		return $this->hasMany(Team::class);
	}

	public function user(): BelongsTo
	{
		return $this->belongsTo(User::class);
	}
}
