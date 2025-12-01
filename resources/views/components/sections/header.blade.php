<header class="text-white bg-gradient-to-r from-gray-950/80 via-gray-900/70 to-gray-950/80 backdrop-blur border-b border-white/10">
  <x-container>
    <nav class="flex items-center justify-between py-4">
      <a
        wire:navigate
        href="/"
        class="flex items-center flex-shrink-0 mr-auto"
        aria-label="{{ config('app.name') }}"
      >
        <x-logo />
      </a>

      <div>
        <x-button
          :icon="Auth::check() ? 'heroicon-o-cog' : 'heroicon-s-user'"
          size="xs"
          :url="\Filament\Pages\Dashboard::getUrl()"
          class="!bg-white/10 !border-white/20 hover:!bg-white/20"
        >
          {{ Auth::check() ? 'Manage' : 'Login' }}
        </x-button>
      </div>
    </nav>
  </x-container>
</header>
