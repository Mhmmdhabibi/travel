<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CekTiketResource\Pages;
use App\Models\CekTiket;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Filament\Tables\Actions\Action;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\BulkAction;
use Filament\Tables\Actions\ExportBulkAction;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Collection;

class CekTiketResource extends Resource
{
    protected static ?string $model = CekTiket::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('status')
                    ->required()
                    ->options([
                        'approve' => "Berhasil",
                        'expired' => "Sudah Terpakai",
                    ]),

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
                Tables\Columns\TextColumn::make('no_telp')
                    ->label('Nomor Telephone')
                    ->sortable(),
                Tables\Columns\TextColumn::make('tanggal_pembayaran')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('pax')
                    ->label('Pax')

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

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),

                Action::make('Expired')
                    ->button()
                    ->url(fn (CekTiket $record): string => route('expired', ['id' => $record]))
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
                BulkAction::make('download_pdf')
                    ->label('Download PDFs')
                    ->action(function (Collection $records) {
                        $pdf = FacadePdf::loadView('pdf', ['records' => $records]);
                        return response()->streamDownload(fn () => print($pdf->stream()), 'ListTiket.pdf');
                    }),
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
            'index' => Pages\ListCekTikets::route('/'),
            'create' => Pages\CreateCekTiket::route('/create'),
            'edit' => Pages\EditCekTiket::route('/{record}/edit'),
        ];
    }
}
