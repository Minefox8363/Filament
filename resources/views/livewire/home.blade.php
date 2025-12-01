<div>
  <x-hero title="Home" />

  <x-container>
    <h2 class="mb-8 text-4xl">
      Available Sites
    </h2>

    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
      @forelse ($sites as $site)
        <div class="p-4 transition border rounded-lg shadow-sm group hover:border-primary-500">
          <div class="flex items-center justify-between gap-2 mb-2">
            <h3 class="text-lg font-semibold text-gray-800 group-hover:text-primary-600">
              {{ $site->name }}
            </h3>

            <span class="px-2 text-xs text-primary-700 bg-primary-50 rounded-full">
              Site
            </span>
          </div>

          <p class="text-sm text-gray-600 break-words">
            {{ $site->url }}
          </p>

          <div class="mt-4">
            <a
              class="inline-flex items-center gap-2 text-sm font-medium text-primary-600 hover:text-primary-700"
              href="{{ $site->url }}"
              target="_blank"
              rel="noopener noreferrer"
            >
              Visit site
              <x-heroicon-o-arrow-top-right-on-square class="w-4 h-4" />
            </a>
          </div>
        </div>
      @empty
        <div class="text-gray-600">No sites added yet.</div>
      @endforelse
    </div>
  </x-container>
</div>
