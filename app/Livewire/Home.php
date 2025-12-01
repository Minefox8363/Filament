<?php

namespace App\Livewire;

use Livewire\Component;
use Spatie\SchemaOrg\Schema;

class Home extends Component
{

    /**
     * Layout used by the component.
     */
    protected string $layout = 'components.layouts.app';

    /**
     * Render the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        $title = config('app.name');
        $description = 'See every site you have access to from one Pelican-style home base.';

        seo()
            ->title($title)
            ->description($description)
            ->canonical($url = route('home'))
            ->addSchema(
                Schema::webPage()
                    ->name($title)
                    ->description($description)
                    ->url($url)
                    ->author(Schema::organization()->name($title))
            );

        $user = auth()->user();

        $sites = $user
            ? $user->sites()
                ->latest()
                ->get()
            : collect();

        return view('livewire.home', compact('sites'));
    }
}
