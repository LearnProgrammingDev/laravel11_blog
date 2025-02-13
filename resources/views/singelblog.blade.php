{{-- {{ dd($title) }} --}}
<x-layout>
    <x-slot:title>
      {{ $title }}
    </x-slot:title>
      
    {{-- isi halaman blog --}}
    {{-- <x-blog></x-blog> --}}
    {{-- <x-main-content></x-main-content> --}}

{{-- {{ dd($artikel) }} --}}
    <div class="bg-white py-24 sm:py-32">
      <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:mx-0">
          
          <h2 class="text-pretty text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl">di-BlogIn-Aja</h2>
          <p class="mt-2 text-lg/8 text-gray-600">Ini tentang cerita hidupKu yang didalamnya ada cerita lucu, gembira, sedih dan hal lainnya🎈.</p>
          <a href="/blog" class="text-sm/6 font-semibold text-gray-900">Back to Posts!</a>
        </div>
        <div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-200 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
          <article class="flex max-w-xl flex-col items-start justify-between">
            
            <div class="flex items-center gap-x-4 text-xs">
              <time datetime="2020-03-16" class="text-gray-500">July 19, 2003</time>
              <a href="#" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">Programming</a>
            </div>
            <div class="group relative">
              <h3 class="mt-3 text-lg/6 font-semibold text-gray-900 group-hover:text-gray-600">
                <a href="#">
                  <span class="absolute inset-0"></span>
                  {{ $artikel['Judul'] }}
                </a>
              </h3>
              {{-- <p class="mt-5 line-clamp-2 text-sm/6 text-gray-600">{{ $artikel['isi'] }}</p> --}}
              <p class="mt-5 text-sm/6 text-gray-600">{{ $artikel['Isi'] }}</p>
            </div>
            <div class="relative mt-8 flex items-center gap-x-4">
              <img src="images/randimulyana.jpg" alt="randi mulyana" class="size-10 rounded-full bg-gray-50">
              <div class="text-sm/6">
                <p class="font-semibold text-gray-900">
                  <a href="#">
                    <span class="absolute inset-0"></span>
                    {{ $artikel['Penulis'] }}
                  </a>
                </p>
                <p class="text-gray-600">Programmer / Student</p>
              </div>
              
            </div>
          </article>
        </div>
      </div>
    </div>
  </x-layout>