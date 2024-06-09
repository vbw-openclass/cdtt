<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EncounterResource\Pages;
use App\Filament\Resources\EncounterResource\RelationManagers;
use App\Models\Encounter;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DatePicker;

class EncounterResource extends Resource
{
    protected static ?string $model = Encounter::class;

    protected static ?string $navigationIcon = 'heroicon-s-arrow-path-rounded-square';

    public static function getNavigationLabel(): string
    {
        return 'Rencontres';
    }

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function getNavigationBadgeTooltip(): ?string
    {
        return __('admin.navigation_tooltip', ['model' => 'Rencontres']);
    }

    public static function getNavigationGroup(): ?string
    {
        return 'Équipes';
    }

    public static function getLabel(): ?string
    {
        return 'Rencontres';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('championship_id')
                ->label('Catégorie')
                ->relationship('championship', 'name'),
                DatePicker::make('date')
                ->label('Date de la rencontre'),
                TextInput::make('day')
                ->label('Journée')
                ->numeric(),
                TextInput::make('team_a_id')
                ->label('Équipe recevante'),
                TextInput::make('team_b_id')
                ->label('Équipe visiteuse'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('championship.name')
                ->label('Catégorie')
                ->searchable(),
                TextColumn::make('date')
                ->label('Date de la rencontre')
                ->dateTime('d/m/Y'),
                TextColumn::make('day')
                ->label('Journée'),
                TextColumn::make('homeTeam.name')
                ->label('Équipe recevante'),
                TextColumn::make('awayTeam.name')
                ->label('Équipe visiteuse'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEncounters::route('/'),
            'create' => Pages\CreateEncounter::route('/create'),
            'edit' => Pages\EditEncounter::route('/{record}/edit'),
        ];
    }
}
