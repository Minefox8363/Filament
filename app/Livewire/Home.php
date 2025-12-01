<?php

namespace App\Livewire;

use App\Models\Site;
use Livewire\Component;
use Spatie\SchemaOrg\Schema;

class Home extends Component
{

    /**
     * Render the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        seo()
            ->title($title = config('app.name'))
            ->description($description = 'Lorem ipsum...')
            ->canonical($url = route('home'))
            ->addSchema(
                Schema::webPage()
                    ->name($title)
                    ->description($description)
                    ->url($url)
                    ->author(Schema::organization()->name($title))
            );

        $sites = Site::where('user_id', auth()->id())
            ->latest()
            ->get();

        return view('livewire.home', compact('sites'));
    }
}
