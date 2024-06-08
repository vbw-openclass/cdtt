<?php

namespace App\Livewire\App;

use App\Models\Championship;
use Livewire\Component;

class ChampionshipList extends Component
{
	public $championships;

	public function mount(): void
	{
		$this->championships = Championship::all();
	}

    public function render()
    {
        return view('livewire.app.championship-list');
    }

	public function seeMatchs(Championship $championship): void
	{
		redirect()->route('championship.show', ['championship' => $championship]);
	}
}
