<div class="space-y-10">
  <x-hero
    title="Home"
    :after-title="__('Your collection of connected sites, all in one place.')"
  />

  <x-container class="space-y-8">
    <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
      <div class="space-y-1">
        <p class="text-xs uppercase tracking-[0.2em] text-white/60">Dashboard</p>
        <h2 class="text-3xl font-semibold text-white">Available Sites</h2>
        <p class="text-sm text-gray-300">Jump into any site you have access to.</p>
      </div>

      <div class="status-pill">
        <span class="status-indicator"></span>
        <span>All systems operational</span>
      </div>
    </div>

    <div class="home-grid">
      @forelse ($sites as $site)
        <article class="site-card">
          <div class="site-card__beam"></div>

          <div class="site-card__header">
            <div class="site-card__icon">
              <x-heroicon-o-globe-alt class="w-5 h-5" />
            </div>

            <div class="site-card__badge">
              <span class="site-card__badge-dot"></span>
              Site
            </div>
          </div>

          <div class="site-card__body">
            <div class="space-y-1">
              <h3 class="site-card__name">
                {{ $site->name }}
              </h3>

              <p class="site-card__url">
                {{ $site->url }}
              </p>
            </div>

            <div class="site-card__meta">
              <x-heroicon-o-calendar class="w-4 h-4" />
              <span>Added {{ $site->created_at->format('M j, Y') }}</span>
            </div>
          </div>

          <div class="site-card__footer">
            <span class="site-card__status">
              <span class="site-card__status-dot"></span>
              Active
            </span>

            <a
              class="site-card__cta"
              href="{{ $site->url }}"
              target="_blank"
              rel="noopener noreferrer"
            >
              Visit site
              <x-heroicon-o-arrow-top-right-on-square class="w-4 h-4" />
            </a>
          </div>
        </article>
      @empty
        <div class="site-card sm:col-span-2 xl:col-span-3 text-center">
          <div class="site-card__beam"></div>
          <p class="text-lg font-semibold text-white">No sites added yet.</p>
          <p class="text-sm text-gray-300 mt-1">Connect a site to see it appear here.</p>
        </div>
      @endforelse
    </div>
  </x-container>
</div>
