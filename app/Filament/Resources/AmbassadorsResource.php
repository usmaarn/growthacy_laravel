<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AmbassadorsResource\Pages;
use App\Filament\Resources\AmbassadorsResource\RelationManagers;
use App\Models\Ambassadors;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AmbassadorsResource extends Resource
{
    protected static ?string $model = Ambassadors::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
            'index' => Pages\ListAmbassadors::route('/'),
            'create' => Pages\CreateAmbassadors::route('/create'),
            'edit' => Pages\EditAmbassadors::route('/{record}/edit'),
        ];
    }
}
