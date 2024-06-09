<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ChampionshipResource\Pages;
use App\Filament\Resources\ChampionshipResource\RelationManagers;
use App\Models\Championship;
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

class ChampionshipResource extends Resource
{
    protected static ?string $model = Championship::class;

    protected static ?string $navigationIcon = 'heroicon-s-trophy';

    public static function getNavigationLabel(): string
    {
        return 'Championnat';
    }

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function getNavigationBadgeTooltip(): ?string
    {
        return __('admin.navigation_tooltip', ['model' => 'Championnat']);
    }

    public static function getNavigationGroup(): ?string
    {
        return 'Championnat';
    }

    public static function getLabel(): ?string
    {
        return 'Championnat';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('season')
                ->label('Saison')
                ->numeric(),
                Select::make('championship_category_id')
                ->label('Catégorie')
                ->relationship('category', 'name'),
                Select::make('state')
                ->label('État')
                ->options([
                    'active' => 'Actif',
                    'disable' => 'Inactif'
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('season')
                ->label('Saison')
                ->searchable(),
                TextColumn::make('category.name')
                ->label('Catégorie')
                ->searchable(),
                TextColumn::make('state')
                ->label('État')
                ->searchable(),
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
            'index' => Pages\ListChampionships::route('/'),
            'create' => Pages\CreateChampionship::route('/create'),
            'edit' => Pages\EditChampionship::route('/{record}/edit'),
        ];
    }
}
