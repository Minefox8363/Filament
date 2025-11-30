<div>
  <x-hero title="Home" />

  <x-container>
    <h2 class="mb-8 text-4xl">
      Latest Posts
    </h2>

    <div class="grid grid-cols-1 gap-10 sm:grid-cols-2 lg:grid-cols-3">
      @forelse ($posts as $post)
        <div>
          <a
            class="*:transition group"
            href="{{ $post->url }}"
            wire:navigate
          >
            <div class="w-full h-48 mb-2 overflow-hidden border rounded-lg bg-gray-50"></div>

            <h3 class="text-lg text-gray-700 group-hover:text-primary-500">
              {{ $post->title }}
            </h3>
          </a>
        </div>
      @empty
        <div>No posts yet.</div>
      @endforelse
    </div>

    @if ($posts->hasPages())
      <div class="pt-6 mt-6 border-t">
        {{ $posts->links() }}
      </div>
    @endif
  </x-container>
</div>
