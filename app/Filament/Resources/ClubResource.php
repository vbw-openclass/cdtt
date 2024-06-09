<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ClubResource\Pages;
use App\Filament\Resources\ClubResource\RelationManagers;
use App\Models\Club;
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

class ClubResource extends Resource
{
    protected static ?string $model = Club::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                ->label('Nom du club'),
                TextInput::make('department')
                ->label('Département'),
                TextInput::make('address')
                ->label('Adresse'),
                Select::make('user.name')
                ->label('Catégorie')
                ->relationship('user', 'name'),
                TextInput::make('mobile')
                ->label('Numéro de téléphone'),
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
                TextColumn::make('name')
                ->label('Nom du club')
                ->searchable(),
                TextColumn::make('department')
                ->label('Département'),
                TextColumn::make('address')
                ->label('Adresse'),
                TextColumn::make('mobile')
                ->label('Numéro de téléphone'),
                TextColumn::make('user.name')
                ->label('Président'),
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
            'index' => Pages\ListClubs::route('/'),
            'create' => Pages\CreateClub::route('/create'),
            'edit' => Pages\EditClub::route('/{record}/edit'),
        ];
    }
}
