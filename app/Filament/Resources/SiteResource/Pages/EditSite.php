<?php

namespace App\Filament\Resources\SiteResource\Pages;

use App\Filament\Resources\SiteResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSite extends EditRecord
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
            Actions\DeleteAction::make(),
        ];
    }
}
