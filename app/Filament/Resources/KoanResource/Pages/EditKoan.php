<?php

namespace App\Filament\Resources\KoanResource\Pages;

use App\Filament\Resources\KoanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKoan extends EditRecord
{
    protected static string $resource = KoanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
