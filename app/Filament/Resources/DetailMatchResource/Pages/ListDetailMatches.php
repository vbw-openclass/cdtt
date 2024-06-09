<?php

namespace App\Filament\Resources\DetailMatchResource\Pages;

use App\Filament\Resources\DetailMatchResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDetailMatches extends ListRecords
{
    protected static string $resource = DetailMatchResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
