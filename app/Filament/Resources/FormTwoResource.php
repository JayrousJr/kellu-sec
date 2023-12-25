<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\FormTwo;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Hidden;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\FormTwoResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\FormTwoResource\RelationManagers;

class FormTwoResource extends Resource
{
    protected static ?string $model = FormTwo::class;

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }
    protected static ?string $navigationIcon = 'heroicon-o-briefcase';
    protected static ?string $navigationGroup = 'Results';
    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\DatePicker::make('year')
                    ->required(),
                Forms\Components\TextInput::make('div_one')
                    ->required()
                    ->numeric()
                    ->maxLength(255),
                Hidden::make('form'),
                Forms\Components\TextInput::make('div_two')
                    ->required()
                    ->numeric()
                    ->maxLength(255),

                Forms\Components\TextInput::make('div_three')
                    ->required()
                    ->numeric()
                    ->maxLength(255),

                Forms\Components\TextInput::make('div_four')
                    ->required()
                    ->numeric()
                    ->maxLength(255),

                Forms\Components\TextInput::make('div_zero')
                    ->required()
                    ->numeric()
                    ->maxLength(255),
                Forms\Components\Textarea::make('necta_link')
                    ->required()
                    ->maxLength(65535)
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('year')
                    ->label('Year of Study')
                    ->searchable(),
                Tables\Columns\TextColumn::make('div_one')
                    ->numeric()
                    ->searchable(),
                Tables\Columns\TextColumn::make('div_two')
                    ->numeric()
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
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
            'index' => Pages\ListFormTwos::route('/'),
            'create' => Pages\CreateFormTwo::route('/create'),
            'view' => Pages\ViewFormTwo::route('/{record}'),
            'edit' => Pages\EditFormTwo::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
