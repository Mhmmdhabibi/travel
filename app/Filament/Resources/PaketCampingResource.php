<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PaketCampingResource\Pages;
use App\Filament\Resources\PaketCampingResource\RelationManagers;
use App\Models\PaketCamping;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PaketCampingResource extends Resource
{
    protected static ?string $model = PaketCamping::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Textarea::make('title')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('harga')
                    ->required()
                    ->numeric(),
                Forms\Components\Textarea::make('detail')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('norek')
                    ->required()
                    ->maxLength(20),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('harga')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('norek')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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

    public static function canViewAny(): bool 
    {
        return auth()->user()->role == 'admin';
    } 

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPaketCampings::route('/'),
            'create' => Pages\CreatePaketCamping::route('/create'),
            'edit' => Pages\EditPaketCamping::route('/{record}/edit'),
        ];
    }
}
