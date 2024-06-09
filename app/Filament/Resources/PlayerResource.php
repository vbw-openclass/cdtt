<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PlayerResource\Pages;
use App\Filament\Resources\PlayerResource\RelationManagers;
use App\Models\Player;
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

class PlayerResource extends Resource
{
    protected static ?string $model = Player::class;

    protected static ?string $navigationIcon = 'heroicon-s-user';

    public static function getNavigationLabel(): string
    {
        return 'Joueurs/Joueuses';
    }

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function getNavigationBadgeTooltip(): ?string
    {
        return __('admin.navigation_tooltip', ['model' => 'Joueurs/Joueuses']);
    }

    public static function getNavigationGroup(): ?string
    {
        return 'Équipes';
    }

    public static function getLabel(): ?string
    {
        return 'Joueurs/Joueuses';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('club_id')
                ->label('Nom du club')
                ->relationship('club', 'name'),
                TextInput::make('licence')
                ->label('Numéro de licence')
                ->numeric(),
                TextInput::make('name')
                ->label('Nom'),
                TextInput::make('surname')
                ->label('Prénom'),
                DatePicker::make('birthday')
                ->label('Date d\'anniversaire'),
                TextInput::make('ranking')
                ->label('Classement')
                ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                ->label('Nom'),
                TextColumn::make('surname')
                ->label('Prénom'),
                TextColumn::make('club.name')
                ->label('Nom du club'),
                TextColumn::make('licence')
                ->label('Numéro de licence'),
                TextColumn::make('birthday')
                ->label('Date d\'anniversaire')
                ->dateTime('d/m/Y'),
                TextColumn::make('ranking')
                ->label('Classement'),
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
            'index' => Pages\ListPlayers::route('/'),
            'create' => Pages\CreatePlayer::route('/create'),
            'edit' => Pages\EditPlayer::route('/{record}/edit'),
        ];
    }
}
