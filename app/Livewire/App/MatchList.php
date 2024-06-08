<?php

namespace App\Livewire\App;

use App\Models\Championship;
use App\Models\Encounter;
use Carbon\Carbon;
use Livewire\Component;

class MatchList extends Component
{
	public $matchs;
	public $championships;

    public function render()
    {
		$year = Carbon::now()->year;
		$this->championships = Championship::all()->where('season' , '>=', $year);

        return view('livewire.app.match-list');
    }

	public function seeAll(): void
	{
		$today = Carbon::today();
		$this->matchs = Encounter::all()
			->where('date' , '>=', $today);
	}

	public function seeMatchs(Championship $championship): void
	{
		$today = Carbon::today();
		$this->matchs = $championship->encounters()
			->where('date' , '>=', $today)
			->orderBy('date', 'asc')
			->get();
	}
}
