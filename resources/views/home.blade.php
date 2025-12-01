<x-layouts.app>
  <div class="space-y-10">
    <section class="relative overflow-hidden py-16 text-white mb-10">
      <div class="absolute inset-0 bg-gradient-to-r from-blue-600 via-indigo-600 to-blue-500 opacity-90"></div>
      <div class="absolute inset-0 bg-[radial-gradient(circle_at_20%_20%,rgba(255,255,255,0.2),transparent_25%)]"></div>

      <div class="relative max-w-5xl px-6 mx-auto">
        <h1 class="text-4xl font-bold tracking-tight">Home</h1>
        <p class="mt-4 text-white/80 max-w-3xl">
          {{ __('Your collection of connected sites, all in one place.') }}
        </p>
      </div>
    </section>

    <div class="max-w-5xl px-6 mx-auto space-y-8">
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
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="w-5 h-5">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9 9 0 100-18 9 9 0 000 18z" />
                  <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.522 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.478 0-8.268-2.943-9.542-7z" />
                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v18M3 12h18" />
                </svg>
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
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 4.5v2.25M17.25 4.5v2.25M3.75 9.75h16.5M8.25 12.75h.008v.008H8.25v-.008zM12 12.75h.008v.008H12v-.008zM15.75 12.75h.008v.008h-.008v-.008zM8.25 16.5h.008v.008H8.25v-.008zM12 16.5h.008v.008H12v-.008zM15.75 16.5h.008v.008h-.008v-.008z" />
                </svg>
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
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                </svg>
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
    </div>
  </div>
</x-layouts.app>
