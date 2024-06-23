<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TransaksiResource\Pages;
use App\Filament\Resources\TransaksiResource\RelationManagers;
use App\Models\Transaksi;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Tables\Actions\CreateAction;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TransaksiResource extends Resource
{
    protected static ?string $model = Transaksi::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\TextInput::make('akun_penggunas_id')
                    ->required()
                    ->numeric(),
                Forms\Components\DatePicker::make('tanggal_pembayaran')
                    ->required(),
                Forms\Components\FileUpload::make('bukti_transfer_path')
                    ->disk('local')
                    ->image()
                    ->imageEditor()
                    ->required(),
                Forms\Components\TextInput::make('pax')
                    ->label('Berapa Banyak Orang')
                    ->required()
                    ->maxLength(10),
                Forms\Components\Select::make('status')
                    ->required()
                    ->options([
                        'pending' => "Pending",
                        'approve' => "Approve",
                        'reject' => "Reject"
                    ]),
                Forms\Components\DatePicker::make('tanggal_masuk')
                    ->required(),
                Forms\Components\DatePicker::make('tanggal_keluar')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table

            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->searchable()
                    ->label('Id Tiket')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('user.name')
                    ->label('Nama Pemesan')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('paketWisata.title')
                    ->label('Paket Pesanan')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('no_telp')
                    ->label('Nomor Telephone')
                    ->sortable(),
                Tables\Columns\TextColumn::make('tanggal_pembayaran')
                    ->date()
                    ->sortable(),
                Tables\Columns\ImageColumn::make('bukti_transfer_path')
                    ->disk('local')
                    ->label('Bukti Transfer')
                    ->sortable(),
                Tables\Columns\TextColumn::make('pax')
                    ->label('Berapa Banyak Orang')
                    ->searchable(),
                Tables\Columns\TextColumn::make('status')
                    ->badge()
                    ->searchable(),
                Tables\Columns\TextColumn::make('tanggal_masuk')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tanggal_keluar')
                    ->date()
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
            ->selectable()
            ->actions([
                Tables\Actions\EditAction::make(),
                Action::make('Approve')
                ->button()
                ->url(fn (Transaksi $record): string => route('approve', ['id'=>$record]))

            ])

            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function canViewAny(): bool
    {
        return auth()->user()->role == 'admin';
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
            'index' => Pages\ListTransaksis::route('/'),
            'create' => Pages\CreateTransaksi::route('/create'),
            'edit' => Pages\EditTransaksi::route('/{record}/edit'),
        ];
    }
}
