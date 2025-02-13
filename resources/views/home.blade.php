{{-- {{ dd($title) }} --}}
{{-- {{ dd($webtitle) }} --}}
<x-layout>
  
  <x-slot:title>
    {{ $title }}
  </x-slot:title>
  
  {{-- isi halaman home --}}
  <x-hero-section></x-hero-section>
</x-layout>