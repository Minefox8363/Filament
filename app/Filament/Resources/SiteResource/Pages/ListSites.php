<?php

namespace App\Filament\Resources\SiteResource\Pages;

use App\Filament\Resources\SiteResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSites extends ListRecords
{
    /**
     * The resource being managed.
     */
    protected static string $resource = SiteResource::class;

    /**
     * Get the header actions for the page.
     */
    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
