@props([
  'title' => null,
  'afterTitle' => null,
])

<div {{ $attributes->merge(['class' => 'relative overflow-hidden py-16 text-white mb-10']) }}>
  <div class="absolute inset-0 bg-gradient-to-r from-blue-600 via-indigo-600 to-blue-500 opacity-90"></div>
  <div class="absolute inset-0 bg-[radial-gradient(circle_at_20%_20%,rgba(255,255,255,0.2),transparent_25%)]"></div>
  <x-container class="relative">
    <h1 class="text-4xl font-bold tracking-tight">{{ $title ?? $slot }}</h1>

    @if ($afterTitle)
      <div class="mt-4 text-white/80 max-w-3xl">
        {{ $afterTitle }}
      </div>
    @endif
  </x-container>
</div>
