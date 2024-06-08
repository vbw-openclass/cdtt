<?php

namespace App\Livewire\App;

use Livewire\Component;

class ChampionshipMatchList extends Component
{
	public $championship;

    public function render()
    {
        return view('livewire.app.championship-match-list');
    }
}
