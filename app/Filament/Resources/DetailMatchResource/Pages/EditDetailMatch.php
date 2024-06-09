<?php

namespace App\Filament\Resources\DetailMatchResource\Pages;

use App\Filament\Resources\DetailMatchResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDetailMatch extends EditRecord
{
    protected static string $resource = DetailMatchResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
