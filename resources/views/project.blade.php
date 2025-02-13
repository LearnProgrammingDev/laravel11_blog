{{-- {{ dd($title) }} --}}
<x-layout>
    <x-slot:title>
      {{ $title }}
    </x-slot:title>
    {{-- <p class="text-xl">halaman Project page!</p> --}}
    <x-blog></x-blog>
  </x-layout>