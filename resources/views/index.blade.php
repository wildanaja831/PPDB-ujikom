@extends('layout.app')

@section('content')
    <div class="mx-auto text-center">
        <div class="text-center">
            <div class="">
                <img class="mx-auto" src="{{ asset('image/undraw_spreadsheet_re_cn18.svg') }}" alt="">
            </div>
            <form method="get" action="{{ route('registrasi') }}">
                <button type="submit"
                    class="text-white mt-8 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
                    s>Daftar</button>
            </form>
        </div>

        <div class="text-center justify-between mt-16">
            <p
                class="inline-block p-4 text-blue-600 rounded-t-lg border-b-2 border-blue-600 active dark:text-blue-500 dark:border-blue-500">
                PROFILE SEKOLAH</p>

            <div id="controls-carousel" class="relative" data-carousel="static">

                <div class="overflow-hidden relative h-48 rounded-lg sm:h-64 xl:h-80 2xl:h-96">

                    <div class="duration-700 ease-in-out absolute inset-0 transition-all transform -translate-x-full z-10"
                        data-carousel-item="">
                        <img src="{{ asset('image/smk-wikrama.jpg') }}"
                            class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                    </div>

                    <div class="duration-700 ease-in-out absolute inset-0 transition-all transform translate-x-0 z-20"
                        data-carousel-item="active">
                        <img src="{{ asset('image/2. Gedung 2.jpg') }}"
                            class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                    </div>

                    <div class="duration-700 ease-in-out absolute inset-0 transition-all transform translate-x-full z-10"
                        data-carousel-item="">
                        <img src="{{ asset('image/maxresdefault.jpg') }}"
                            class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                    </div>
                </div>

                <button type="button"
                    class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
                    data-carousel-prev="">
                    <span
                        class="inline-flex justify-center items-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-6 h-6 text-white dark:text-gray-800" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                            </path>
                        </svg>
                        <span class="hidden">Previous</span>
                    </span>
                </button>
                <button type="button"
                    class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
                    data-carousel-next="">
                    <span
                        class="inline-flex justify-center items-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-6 h-6 text-white dark:text-gray-800" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                        <span class="hidden">Next</span>
                    </span>
                </button>
            </div>

            <p class="mx-14 my-8 font-weight-bold text-2xl">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Libero, deleniti non
                possimus eius nam maxime optio, temporibus adipisci aut doloribus fugiat consequuntur atque architecto
                cupiditate iste eligendi illo laboriosam nulla!</p>
        </div>


        <div id="indicators-carousel" class="relative" data-carousel="static" class="">

            <div class="overflow-hidden relative h-48 rounded-lg sm:h-64 xl:h-80 2xl:h-96 my-20">

                <div class="flex duration-700 ease-in-out absolute inset-0 transition-all transform translate-x-0 z-20"
                    data-carousel-item="active">
                    <div class="w-1/3">
                        <img src="{{ asset('image/RPL.jpg') }}" alt="">
                        <h3 class="mt-4">Rekayasa Perangkat Lunak</h3>
                        <p>Siswa jurusan Perhotelan akan mampu bekerja di departemen yang ada di hotel dengan kompetensi yang mereka pelajari.</p>
                    </div>
                    <div class="w-1/3">
                        <img src="{{ asset('image/TKJ.JPG') }}" alt="">
                        <h3 class="mt-4">Teknik Komputer dan Jaringan</h3>
                        <p>Siswa jurusan Perhotelan akan mampu bekerja di departemen yang ada di hotel dengan kompetensi yang mereka pelajari.</p>
                    </div>
                    <div class="w-1/3">
                        <img src="{{ asset('image/MMD.JPG') }}" alt="">
                        <h3 class="mt-4">Multimedia</h3>
                        <p>Siswa jurusan Perhotelan akan mampu bekerja di departemen yang ada di hotel dengan kompetensi yang mereka pelajari.</p>
                    </div>
                </div>

                <div class="flex duration-700 ease-in-out absolute inset-0 transition-all transform translate-x-0 z-20"
                    data-carousel-item="">
                    <div class="w-1/3">
                        <img src="{{ asset('image/BDP.jpg') }}" alt="">
                        <h3 class="mt-4">Bisnis Daring dan Pemasaran</h3>
                        <p>Siswa jurusan Perhotelan akan mampu bekerja di departemen yang ada di hotel dengan kompetensi yang mereka pelajari.</p>
                    </div>
                    <div class="w-1/3">
                        <img src="{{ asset('image/OTKP.jpg') }}" alt="">
                        <h3 class="mt-4">Otomatisasi Perkantoran</h3>
                        <p>Siswa jurusan Perhotelan akan mampu bekerja di departemen yang ada di hotel dengan kompetensi yang mereka pelajari.</p>
                    </div>
                    <div class="w-1/3">
                        <img src="{{ asset('image/TBG.jpg') }}" alt="">
                        <h3 class="mt-4">Tata Boga</h3>
                        <p>Siswa jurusan Perhotelan akan mampu bekerja di departemen yang ada di hotel dengan kompetensi yang mereka pelajari.</p>
                    </div>
                </div>

                <div class="flex duration-700 ease-in-out absolute inset-0 transition-all transform translate-x-0 z-20"
                    data-carousel-item="">
                    <div class="w-1/3">
                        <img src="{{ asset('image/HOTEL.jpg') }}" alt="">
                        <h3 class="mt-4">Perhotelan</h3>
                        <p>Siswa jurusan Perhotelan akan mampu bekerja di departemen yang ada di hotel dengan kompetensi yang mereka pelajari.</p>
                    </div>
                </div>
            </div>

            <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
                <button type="button" class="w-3 h-3 rounded-full bg-white dark:bg-gray-800" aria-current="true"
                    aria-label="Slide 1" data-carousel-slide-to="0"></button>
                <button type="button"
                    class="w-3 h-3 rounded-full bg-white/50 dark:bg-gray-800/50 hover:bg-white dark:hover:bg-gray-800"
                    aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                <button type="button"
                    class="w-3 h-3 rounded-full bg-white/50 dark:bg-gray-800/50 hover:bg-white dark:hover:bg-gray-800"
                    aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
            </div>

            <button type="button"
                class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
                data-carousel-prev="">
                <span
                    class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-5 h-5 text-black sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                    <span class="hidden">Previous</span>
                </span>
            </button>
            <button type="button"
                class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
                data-carousel-next="">
                <span
                    class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-5 h-5 text-black sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                    <span class="hidden">Next</span>
                </span>
            </button>
        </div>

    </div>
@endsection
