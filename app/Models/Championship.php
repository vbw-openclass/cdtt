<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Championship extends Model
{
    use HasFactory;

	protected $fillable = [
		'season',
		'championship_category_id',
		'state',
	];

	public function category(): BelongsTo
	{
		return $this->belongsTo(ChampionshipCategory::class, 'championship_category_id');
	}

	public function teams(): BelongsToMany
	{
		return $this->belongsToMany(Team::class, 'championships_teams');
	}
}
