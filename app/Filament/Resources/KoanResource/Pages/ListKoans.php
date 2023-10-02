<?php

namespace App\Filament\Resources\KoanResource\Pages;

use App\Filament\Resources\KoanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Widgets\StatsOverviewWidget\Stat;

class ListKoans extends ListRecords
{
    protected static string $resource = KoanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }


}
