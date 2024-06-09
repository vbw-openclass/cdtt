<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DetailMatchResource\Pages;
use App\Filament\Resources\DetailMatchResource\RelationManagers;
use App\Models\DetailMatch;
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

class DetailMatchResource extends Resource
{
    protected static ?string $model = DetailMatch::class;

    protected static ?string $navigationIcon = 'heroicon-s-newspaper';

    public static function getNavigationLabel(): string
    {
        return 'Détail de feuille de match';
    }

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function getNavigationBadgeTooltip(): ?string
    {
        return __('admin.navigation_tooltip', ['model' => 'Détail de feuille de match']);
    }

    public static function getNavigationGroup(): ?string
    {
        return 'Équipes';
    }

    public static function getLabel(): ?string
    {
        return 'Détail de feuille de match';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('order')
                ->label('Ordre de la rencontre'),
                TextInput::make('match_type')
                ->label('Type'),
                Select::make('player_a_id')
                ->label('Joueur équipe recevante')
                ->relationship('homePlayer', 'name'),
                Select::make('player_b_id')
                ->label('Joueur équipe visiteuse')
                ->relationship('awayPlayer', 'name'),
                TextInput::make('set_one')
                ->label('Set 1')
                ->numeric(),
                TextInput::make('set_two')
                ->label('Set 2')
                ->numeric(),
                TextInput::make('set_three')
                ->label('Set 3')
                ->numeric(),
                TextInput::make('set_four')
                ->label('Set 4')
                ->numeric(),
                TextInput::make('set_five')
                ->label('Set 5')
                ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('order')
                ->label('Ordre de la rencontre'),
                TextColumn::make('match_type')
                ->label('Type'),
                TextColumn::make('homePlayer')
                ->label('Joueur équipe recevante'),
                TextColumn::make('awayPlayer')
                ->label('Joueur équipe visiteuse'),
                TextColumn::make('set_one')
                ->label('Set 1'),
                TextColumn::make('set_two')
                ->label('Set 2'),
                TextColumn::make('set_three')
                ->label('Set 3'),
                TextColumn::make('set_four')
                ->label('Set 4'),
                TextColumn::make('set_five')
                ->label('Set 5'),
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
            'index' => Pages\ListDetailMatches::route('/'),
            'create' => Pages\CreateDetailMatch::route('/create'),
            'edit' => Pages\EditDetailMatch::route('/{record}/edit'),
        ];
    }
}
