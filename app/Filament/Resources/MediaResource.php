<?php

namespace App\Filament\Resources;

use Awcodes\Curator\Resources\MediaResource as BaseMediaResource;

class MediaResource extends BaseMediaResource
{
    protected static bool $shouldRegisterNavigation = false;
}
