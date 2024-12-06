<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LiburanResource\Pages;
use App\Filament\Resources\LiburanResource\RelationManagers;
use App\Models\Liburan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\FileUpload;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Forms\Components\Textarea;

class LiburanResource extends Resource
{
    protected static ?string $model = Liburan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                ->label('Destinasi')
                ->required(),
                FileUpload::make('picture'),
                Forms\Components\Textarea::make('price')
                ->label('Harga')
                ->Required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('price'),
                Tables\Columns\ImageColumn::make('picture')
            ])
            ->filters([
                
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make()
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
            'index' => Pages\ListLiburans::route('/'),
            'create' => Pages\CreateLiburan::route('/create'),
            'edit' => Pages\EditLiburan::route('/{record}/edit'),
        ];
    }
}
