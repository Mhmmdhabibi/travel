<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PaketWisataResource\Pages;
use App\Filament\Resources\PaketWisataResource\RelationManagers;
use App\Models\PaketWisata;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PaketWisataResource extends Resource
{
    protected static ?string $model = PaketWisata::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required(),
                Forms\Components\TextInput::make('harga')
                    ->required()
                    ->numeric(),
                Forms\Components\FileUpload::make('gambar')
                    ->disk('local')
                    ->imageEditor()
                    ->required(),
                Forms\Components\TextInput::make('fees')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('percentage')
                    ->required(),
                Forms\Components\Select::make('type')
                    ->options([
                        'wisata' => "Wisata",
                        'camping' => 'Camping'
                    ])
                    ->required(),
                Forms\Components\RichEditor::make('detail')
                    ->required(),
                Forms\Components\TextInput::make('norek')
                    ->required()
                    ->maxLength(20),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table

            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('harga')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('type')
                    ->sortable(),
                Tables\Columns\ImageColumn::make('gambar')
                    ->disk('local')
                    ->sortable(),
                Tables\Columns\TextColumn::make('fees')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('percentage')
                    ->sortable(),
                Tables\Columns\TextColumn::make('detail')
                    ->html()
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
                Tables\Actions\DeleteAction::make(),

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
            'index' => Pages\ListPaketWisatas::route('/'),
            'create' => Pages\CreatePaketWisata::route('/create'),
            'edit' => Pages\EditPaketWisata::route('/{record}/edit'),
        ];
    }
}
