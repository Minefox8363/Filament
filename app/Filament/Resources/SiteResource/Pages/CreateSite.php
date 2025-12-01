<?php

namespace App\Filament\Resources\SiteResource\Pages;

use App\Filament\Resources\SiteResource;
use Filament\Resources\Pages\CreateRecord;

class CreateSite extends CreateRecord
{
    /**
     * The resource being managed.
     */
    protected static string $resource = SiteResource::class;
}
