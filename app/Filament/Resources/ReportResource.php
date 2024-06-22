<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ReportResource\Pages;
use App\Models\Report;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter as FiltersFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Filament\Tables\Actions\BulkAction;
use pxlrbt\FilamentExcel\Actions\Tables\ExportBulkAction;

class ReportResource extends Resource
{
    protected static ?string $model = Report::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = "Report";

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')->required(),
                Forms\Components\TextInput::make('harga')->required()->numeric(),
                Forms\Components\TextInput::make('fees')->required()->numeric(),
                Forms\Components\TextInput::make('percentage')->required(),
                Forms\Components\Select::make('type')
                    ->options([
                        'wisata' => "Wisata",
                        'camping' => 'Camping'
                    ])->required(),
                Forms\Components\RichEditor::make('detail')->required(),
                Forms\Components\TextInput::make('norek')->required()->maxLength(20),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->searchable()->label('Id Tiket')->numeric()->sortable(),
                TextColumn::make('user.name')->label('Nama Pemesan')->numeric()->sortable(),
                TextColumn::make('paketWisata.title')->label('Paket Pesanan')->numeric()->sortable(),
                TextColumn::make('tanggal_pembayaran')->date()->sortable(),
                TextColumn::make('pax')->label('Berapa Banyak Orang')->searchable(),
                TextColumn::make('paketWisata.fees')->label('Fees')->searchable(),
                TextColumn::make('paketWisata.percentage')->label('percentage')->searchable(),

                TextColumn::make('status')->badge()->searchable(),
                TextColumn::make('tanggal_masuk')->date()->sortable(),
                TextColumn::make('tanggal_keluar')->date()->sortable(),
                TextColumn::make('created_at')->dateTime()->sortable()->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')->dateTime()->sortable()->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                FiltersFilter::make('paket_wisata_fees')
                    ->form([
                        Forms\Components\TextInput::make('fees')
                            ->label('Minimum Fees')
                            ->numeric()
                            ->placeholder('Enter minimum fees'),
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query->when(
                            $data['fees'] ?? null,
                            fn (Builder $query, $fees): Builder => $query->whereHas('paketWisata', function (Builder $subQuery) use ($fees) {
                                $subQuery->where('fees', '=', $fees);
                            })
                        );
                    }),
                    FiltersFilter::make('paket_wisata_percentage')
                    ->form([
                        Forms\Components\TextInput::make('percentage')
                            ->label('Percentage')
                            ->placeholder('Enter Percentage'),
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query->when(
                            $data['percentage'] ?? null,
                            fn (Builder $query, $fees): Builder => $query->whereHas('paketWisata', function (Builder $subQuery) use ($fees) {
                                $subQuery->where('percentage', '=', $fees);
                            })
                        );
                    }),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\Action::make('pdf')
                    ->label('PDF')
                    ->color('success')
                    ->url(fn (Report $record) => route('pdf', $record))
                    ->openUrlInNewTab(),

            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
                ExportBulkAction::make(),
                BulkAction::make('download_pdf')
                    ->label('Download PDFs')
                    ->action(function (Collection $records) {
                        $pdf = FacadePdf::loadView('pdf', ['records' => $records]);
                        return response()->streamDownload(fn () => print($pdf->stream()), 'reports.pdf');
                    }),
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
            'index' => Pages\ListReports::route('/'),
            'create' => Pages\CreateReport::route('/create'),
            'edit' => Pages\EditReport::route('/{record}/edit'),
        ];
    }
}
