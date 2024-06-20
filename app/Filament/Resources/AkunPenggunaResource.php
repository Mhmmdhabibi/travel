<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AkunPenggunaResource\Pages;
use App\Filament\Resources\AkunPenggunaResource\RelationManagers;
use App\Models\AkunPengguna;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;
use Filament\Tables\Filters\QueryBuilder\Constraints\Operators\Operator;


class AkunPenggunaResource extends Resource
{
    protected static ?string $model = User::class;
    
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
    
        if(Auth::user()->role == 'admin'){
            return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('no_telp')
                    ->tel()
                    ->required()
                    ->maxLength(255),
                Forms\Components\DateTimePicker::make('email_verified_at'),
                Forms\Components\TextInput::make('password')
                    ->password()
                    ->required()
                    ->maxLength(255),
            ]);
        }else{
            return $form;
        }
    }

    public static function table(Table $table): Table
    {
        if(auth()->user()->role == 'admin')
        {
            return $table
            ->modifyQueryUsing(function (Builder $query){
                $query->where('role', 'user');

            })
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('no_telp')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email_verified_at')
                    ->dateTime()
                    ->sortable(),
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
        }else{
            return $table;
        }
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
            'index' => Pages\ListAkunPenggunas::route('/'),
            'create' => Pages\CreateAkunPengguna::route('/create'),
            'edit' => Pages\EditAkunPengguna::route('/{record}/edit'),
        ];
    }

}
