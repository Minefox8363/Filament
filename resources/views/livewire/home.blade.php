<div class="space-y-10">
  <x-hero
    title="Home"
    :after-title="__('Your collection of connected sites, all in one place.')"
  />

  <x-container class="space-y-6">
    <div class="flex items-center justify-between gap-4">
      <div>
        <p class="text-sm uppercase tracking-[0.2em] text-white/60">Dashboard</p>
        <h2 class="text-3xl font-semibold text-white">Available Sites</h2>
        <p class="mt-2 text-sm text-gray-300">Jump into any site you have access to.</p>
      </div>

      <div class="hidden sm:flex items-center gap-3 text-sm text-white/70 bg-white/5 border border-white/10 rounded-full px-4 py-2">
        <span class="flex h-2 w-2 rounded-full bg-emerald-400 animate-pulse"></span>
        <span>All systems operational</span>
      </div>
    </div>

    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
      @forelse ($sites as $site)
        <div class="glass-panel card-sheen p-5 transition transform hover:-translate-y-1 hover:shadow-2xl">
          <div class="flex items-start justify-between gap-3 mb-3">
            <div>
              <h3 class="text-lg font-semibold text-white">
                {{ $site->name }}
              </h3>
              <p class="text-xs text-gray-400">{{ $site->created_at->format('M j, Y') }}</p>
            </div>

            <span class="px-3 py-1 text-[11px] font-semibold uppercase tracking-wide text-blue-100 bg-blue-600/40 border border-blue-400/40 rounded-full">
              Site
            </span>
          </div>

          <p class="text-sm text-gray-200 break-words">
            {{ $site->url }}
          </p>

          <div class="mt-4 flex items-center justify-between text-sm">
            <a
              class="inline-flex items-center gap-2 font-medium text-blue-200 hover:text-white"
              href="{{ $site->url }}"
              target="_blank"
              rel="noopener noreferrer"
            >
              Visit site
              <x-heroicon-o-arrow-top-right-on-square class="w-4 h-4" />
            </a>

            <span class="text-xs text-white/60">
              Active
            </span>
          </div>
        </div>
      @empty
        <div class="glass-panel p-6 text-gray-200 sm:col-span-2 lg:col-span-3 text-center">
          <p class="text-lg font-semibold">No sites added yet.</p>
          <p class="text-sm text-gray-400 mt-1">Connect a site to see it appear here.</p>
        </div>
      @endforelse
    </div>
  </x-container>
</div>
