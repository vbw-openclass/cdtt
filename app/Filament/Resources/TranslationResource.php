<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TranslationResource\Pages;
use App\Filament\Resources\TranslationResource\RelationManagers;
use App\Models\Translation;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TranslationResource extends Resource
{
    protected static ?string $model = Translation::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
	public static function getNavigationLabel(): string
	{
		return __('models.translation');
	}

	public static function getNavigationBadge(): ?string
	{
		return static::getModel()::count();
	}

	public static function getNavigationBadgeTooltip(): ?string
	{
		return __('admin.navigation_tooltip', ['model' => __('models.translation')]);
	}

	public static function getNavigationGroup(): ?string
	{
		return __('admin.navigation_group_settings');
	}

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
				Forms\Components\TextInput::make('group')
					->required()
					->maxLength(255),
				Forms\Components\TextInput::make('key')
					->required()
					->maxLength(255),
				Forms\Components\Repeater::make('text')
					->schema([
						Forms\Components\TextInput::make('locale')
							->required(),
						Forms\Components\TextInput::make('translatedText')
							->required(),
					])
					->columnSpanFull()
					->grid(3)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
				Tables\Columns\TextColumn::make('group')
					->sortable()
					->searchable(),
				Tables\Columns\TextColumn::make('key')
					->sortable()
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
            'index' => Pages\ListTranslations::route('/'),
            'create' => Pages\CreateTranslation::route('/create'),
            'edit' => Pages\EditTranslation::route('/{record}/edit'),
        ];
    }
}
