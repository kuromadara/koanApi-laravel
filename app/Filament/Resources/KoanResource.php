<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KoanResource\Pages;
use App\Filament\Resources\KoanResource\RelationManagers;
use App\Models\Koan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Filters\SelectFilter;

class KoanResource extends Resource
{
    protected static ?string $model = Koan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema(
                    [
                        TextInput::make('title'),
                        Textarea::make('koan')
                            ->autosize(),
                            Toggle::make('status')
                            ->onIcon('heroicon-m-bolt')
                            ->offIcon('heroicon-m-user')
                    ]
                )

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable()->searchable(),
                TextColumn::make('title')->sortable()->searchable(),
                TextColumn::make('koan')    ->limit(50)
                ->wrap()
                ->tooltip(function (TextColumn $column): ?string {
                    $state = $column->getState();

                    if (strlen($state) <= $column->getCharacterLimit()) {
                        return null;
                    }

                    // Only render the tooltip if the column content exceeds the length limit.
                    return $state;
                })->sortable()->searchable(),
                TextColumn::make('created_at')->dateTime(),
                ToggleColumn::make('status')
            ])
            ->filters([
                SelectFilter::make('status')
                    ->label('Status')->options([
                        '0' => 'Inactive',
                        '1' => 'Active',
                    ])
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListKoans::route('/'),
            'create' => Pages\CreateKoan::route('/create'),
            'edit' => Pages\EditKoan::route('/{record}/edit'),
        ];
    }

    
}
