<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ChampionshipCategoryResource\Pages;
use App\Filament\Resources\ChampionshipCategoryResource\RelationManagers;
use App\Models\ChampionshipCategory;
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

class ChampionshipCategoryResource extends Resource
{
    protected static ?string $model = ChampionshipCategory::class;

    protected static ?string $navigationIcon = 'heroicon-s-user';

    public static function getNavigationLabel(): string
    {
        return 'Catégorie des championnats';
    }

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function getNavigationBadgeTooltip(): ?string
    {
        return __('admin.navigation_tooltip', ['model' => 'Catégorie des championnats']);

    }

    public static function getNavigationGroup(): ?string
    {
        return 'Championnat';
    }

    public static function getLabel(): ?string
    {
        return 'Catégorie des championnat';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                ->label('Catégorie'),
                Select::make('players')
                ->label('Nombre de joueurs')
                ->options([
                    2 => '2',
                    3 => '3',
                    4 => '4'
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                ->label('Catégorie')
                ->searchable(),
                TextColumn::make('players')
                ->label('Nombre de joueurs'),
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
            'index' => Pages\ListChampionshipCategories::route('/'),
            'create' => Pages\CreateChampionshipCategory::route('/create'),
            'edit' => Pages\EditChampionshipCategory::route('/{record}/edit'),
        ];
    }
}
