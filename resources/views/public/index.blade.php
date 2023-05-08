@extends('layouts.public.base')

@section('content')
    <div class="relative isolate overflow-hidden bg-white">
        <svg class="absolute inset-0 -z-10 h-full w-full stroke-gray-200 [mask-image:radial-gradient(100%_100%_at_top_right,white,transparent)]"
            aria-hidden="true">
            <defs>
                <pattern id="0787a7c5-978c-4f66-83c7-11c213f99cb7" width="180" height="100" x="50%" y="-1"
                    patternUnits="userSpaceOnUse">
                    <path d="M.5 200V.5H200" fill="none" />
                </pattern>
            </defs>
            <rect width="100%" height="100%" stroke-width="0" fill="url(#0787a7c5-978c-4f66-83c7-11c213f99cb7)" />
        </svg>
        <div class="mx-auto max-w-7xl px-6 pt-10 pb-24 sm:pb-32 lg:flex lg:py-20 lg:px-8">
            <div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-xl lg:flex-shrink-0 lg:pt-8">
                <div class="mt-2">
                    <a href="#cloud-hosting" class="inline-flex space-x-6">
                        <span
                            class="animate-pulse rounded-full bg-orange-600/10 px-3 py-1 text-sm font-semibold leading-6 text-orange-600 ring-1 ring-inset ring-orange-600/10">Promo
                            50%</span>
                        <span class="inline-flex items-center space-x-2 text-sm font-medium leading-6 text-gray-600">
                            <span>Cek Sekarang</span>
                            <!-- Heroicon name: mini/chevron-right -->
                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                    </a>
                </div>
                <h1 class="mt-10 text-2xl font-bold tracking-tight text-gray-900">Cloud Hosting untuk
                    Kesuksesan Websitemu!</h1>
                <p class="mt-6 text-lg leading-8 text-gray-600">Qwords menawarkan layanan Cloud Hosting yang Cepat, Aman,
                    dan Dukungan 24 jam untuk memenuhi kebutuhan hosting Anda. Tersertifikasi ISO 27001 dengan Data Center
                    Tier 3.</p>
                <div class="mt-10 flex items-center gap-x-6">
                    <a href="#domain-check"
                        class="rounded-md bg-orange-600 px-3.5 py-1.5 text-base font-semibold leading-7 text-white shadow-sm hover:bg-orange-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange-600">Memulai
                        <span aria-hidden="true">→</span></a>
                </div>
            </div>
            <div class="mx-auto mt-16 flex max-w-2xl sm:mt-24 lg:ml-10 lg:mt-0 lg:mr-0 lg:max-w-none lg:flex-none xl:ml-32">
                <div class="max-w-3xl flex-none sm:max-w-5xl lg:max-w-none">
                    <div
                        class="-m-2 rounded-xl bg-gray-900/5 p-2 ring-1 ring-inset ring-gray-900/10 lg:-m-4 lg:rounded-2xl lg:p-4">
                        <img src="{{ asset('media/header/project-app-screenshot.png') }}" alt="App screenshot"
                            width="2432" height="1442" class="w-[40rem] rounded-md shadow-2xl ring-1 ring-gray-900/10">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-slate-100 bg-opacity-25 mb-12">
        <div class="mx-auto max-w-7xl py-12 px-6 lg:px-8">
            <div class="lg:grid lg:grid-cols-2 lg:gap-8">
                <h2
                    class="mx-auto max-w-md text-2xl font-bold text-center tracking-tight text-gray-900 lg:text-left lg:mx-4">
                    Qwords Tersertifikasi Atas Tingkat Kualitas dan Pelayanan Pelanggannya.</h2>
                <div class="mt-8 flow-root self-center lg:mt-0">
                    <div class="-mt-4 -ml-8 flex flex-wrap justify-evenly lg:-ml-4">
                        <div class="mt-4 ml-8 flex flex-shrink-0 flex-grow justify-center lg:ml-4 lg:flex-grow-0">
                            <img class="h-16 sm:h-20" src="{{ asset('media/certificates/logobsi-black.webp') }}"
                                alt="BSI">
                        </div>
                        <div class="mt-4 ml-8 flex flex-shrink-0 flex-grow justify-center lg:ml-4 lg:flex-grow-0">
                            <img class="h-16 sm:h-20" src="{{ asset('media/certificates/icann-logo.webp') }}"
                                alt="Icann">
                        </div>
                        <div class="mt-4 ml-8 flex flex-shrink-0 flex-grow justify-center lg:ml-4 lg:flex-grow-0">
                            <img class="h-16 sm:h-20" src="{{ asset('media/certificates/logoaccreditedpandi.webp') }}"
                                alt="Pandi">
                        </div>
                        <div class="mt-4 ml-8 flex flex-shrink-0 flex-grow justify-center lg:ml-4 lg:flex-grow-0">
                            <img class="h-16 sm:h-20" src="{{ asset('media/certificates/badge_litespeed.svg') }}"
                                alt="Litespeed">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white py-16" id="domain-check">
        <div class="relative">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="relative overflow-hidden rounded-2xl bg-white px-6">
                    <div class="text-center">
                        <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Temukan Nama Domain Impian
                            Anda</h2>
                        <p class="mx-auto mt-6 max-w-3xl text-lg text-gray-600">Tersedia beragam nama domain untuk segala
                            keperluan Anda. Pilih nama domain yang paling mencerminkan bisnis, produk, atau layanan Anda.
                        </p>
                    </div>
                    <form action="#" class="mt-12 sm:mx-auto sm:flex sm:max-w-4xl">
                        <div class="min-w-0 flex-1">
                            <input id="cta-domain" type="text"
                                class="block w-full rounded-md border border-inherit px-5 py-3 text-base text-gray-900 placeholder-gray-500 shadow-sm focus:border-transparent focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-orange-600"
                                placeholder="Temukan nama domain Anda disini">
                        </div>
                        <div class="mt-4 sm:mt-0 sm:ml-3">
                            <button type="submit"
                                class="block w-full rounded-md border border-inherit bg-orange-500 px-5 py-3 text-base font-medium text-white shadow hover:bg-orange-400 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-orange-600 sm:px-10">Cek
                                Domain</button>
                        </div>
                    </form>
                    <div class="text-center">
                        <p class="mx-auto mt-6 max-w-3xl text-lg text-gray-600">
                            <b>.com</b> Rp165.000 &nbsp;
                            <b>.id</b> Rp225.000 &nbsp;
                            <b>.org</b> Rp130.000
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mx-auto max-w-7xl py-16 px-6 lg:px-8" id="cloud-hosting">
        <div class="mx-auto max-w-2xl text-center">
            <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Hosting Terbaik di Indonesia</p>
            <p class="mt-6 text-lg leading-8 text-gray-600">Layanan cloud hosting Indonesia terbaik dengan teknologi andal
                untuk kebutuhan website Anda.</p>
        </div>

        <!-- Tiers -->
        <div class="mt-12 space-y-12 gap-4 sm:mt-24 sm:gap-x-8 md:grid md:grid-cols-2 lg:grid lg:grid-cols-4 md:space-y-0">
            <div class="relative flex flex-col rounded-lg border border-gray-200 bg-white p-8 shadow-sm">
                <div class="flex-1">
                    <h5 class="text-md font-semibold text-gray-600">Value Cloud Hosting</h5>
                    <h3 class="mt-2 text-2xl font-semibold text-gray-900">VCH1</h3>
                    <p class="mt-4 flex items-baseline text-gray-600 line-through">
                        <span class="text-lg tracking-tight">Rp 24.500</span>
                    </p>
                    <p class="mt-2 flex items-baseline text-orange-500">
                        <span class="text-2xl font-bold tracking-tight">Rp 14.500</span>
                    </p>

                    <!-- Feature list -->
                    <ul role="list" class="mt-8 space-y-6">
                        <li class="flex">
                            <!-- Heroicon name: outline/check -->
                            <svg class="h-6 w-6 flex-shrink-0 text-orange-500" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            <span class="ml-3 text-gray-500">3 GB SSD Storage</span>
                        </li>

                        <li class="flex">
                            <!-- Heroicon name: outline/check -->
                            <svg class="h-6 w-6 flex-shrink-0 text-orange-500" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            <span class="ml-3 text-gray-500">Unlimited Bandwidth</span>
                        </li>

                        <li class="flex">
                            <!-- Heroicon name: outline/check -->
                            <svg class="h-6 w-6 flex-shrink-0 text-orange-500" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            <span class="ml-3 text-gray-500">0.5 Core CPU</span>
                        </li>

                        <li class="flex">
                            <!-- Heroicon name: outline/check -->
                            <svg class="h-6 w-6 flex-shrink-0 text-orange-500" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            <span class="ml-3 text-gray-500">1 jam, waktu respons dukungan khusus</span>
                        </li>
                    </ul>
                </div>

                <a href="#"
                    class="bg-orange-50 text-orange-700 hover:bg-orange-100 mt-8 block w-full py-3 px-6 border border-transparent rounded-md text-center font-medium">Pilih
                    Paket</a>
            </div>

            <div class="relative flex flex-col rounded-lg border border-gray-200 bg-white p-8 shadow-sm">
                <div class="flex-1">
                    <p
                        class="absolute top-0 -translate-y-1/2 transform rounded-full bg-orange-500 py-1.5 px-4 text-sm font-semibold text-white">
                        Penawaran Terbaik</p>
                    <h5 class="text-md font-semibold text-gray-600">Unlimited Hosting</h5>
                    <h3 class="mt-2 text-2xl font-semibold text-gray-900">Signature</h3>
                    <p class="mt-4 flex items-baseline text-gray-600 line-through">
                        <span class="text-lg tracking-tight">Rp 114.000</span>
                    </p>
                    <p class="mt-2 flex items-baseline text-orange-500">
                        <span class="text-2xl font-bold tracking-tight">Rp 89.900</span>
                    </p>

                    <!-- Feature list -->
                    <ul role="list" class="mt-8 space-y-6">
                        <li class="flex">
                            <!-- Heroicon name: outline/check -->
                            <svg class="h-6 w-6 flex-shrink-0 text-orange-500" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            <span class="ml-3 text-gray-500">Unlimited SSD Storage</span>
                        </li>

                        <li class="flex">
                            <!-- Heroicon name: outline/check -->
                            <svg class="h-6 w-6 flex-shrink-0 text-orange-500" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            <span class="ml-3 text-gray-500">Unlimited Bandwidth</span>
                        </li>

                        <li class="flex">
                            <!-- Heroicon name: outline/check -->
                            <svg class="h-6 w-6 flex-shrink-0 text-orange-500" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            <span class="ml-3 text-gray-500">1 Core CPU</span>
                        </li>

                        <li class="flex">
                            <!-- Heroicon name: outline/check -->
                            <svg class="h-6 w-6 flex-shrink-0 text-orange-500" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            <span class="ml-3 text-gray-500">Waktu respons dukungan 24 jam</span>
                        </li>

                        <li class="flex">
                            <!-- Heroicon name: outline/check -->
                            <svg class="h-6 w-6 flex-shrink-0 text-orange-500" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            <span class="ml-3 text-gray-500">Addon / Parked Domain (5/5)</span>
                        </li>
                    </ul>
                </div>

                <a href="#"
                    class="bg-orange-500 text-white hover:bg-orange-600 mt-8 block w-full py-3 px-6 border border-transparent rounded-md text-center font-medium">Pilih
                    Paket</a>
            </div>

            <div class="relative flex flex-col rounded-lg border border-gray-200 bg-white p-8 shadow-sm">
                <div class="flex-1">
                    <h5 class="text-md font-semibold text-gray-600">High Performance</h5>
                    <h3 class="mt-2 text-2xl font-semibold text-gray-900">HPCH Bisnis 1</h3>
                    <p class="mt-4 flex items-baseline text-gray-600 line-through">
                        <span class="text-lg tracking-tight">Rp 109.000</span>
                    </p>
                    <p class="mt-2 flex items-baseline text-orange-500">
                        <span class="text-2xl font-bold tracking-tight">Rp 79.000</span>
                    </p>

                    <!-- Feature list -->
                    <ul role="list" class="mt-8 space-y-6">
                        <li class="flex">
                            <!-- Heroicon name: outline/check -->
                            <svg class="h-6 w-6 flex-shrink-0 text-orange-500" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            <span class="ml-3 text-gray-500">3 GB SSD Storage</span>
                        </li>

                        <li class="flex">
                            <!-- Heroicon name: outline/check -->
                            <svg class="h-6 w-6 flex-shrink-0 text-orange-500" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            <span class="ml-3 text-gray-500">Unlimited Bandwidth</span>
                        </li>

                        <li class="flex">
                            <!-- Heroicon name: outline/check -->
                            <svg class="h-6 w-6 flex-shrink-0 text-orange-500" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            <span class="ml-3 text-gray-500">1 Core CPU</span>
                        </li>

                        <li class="flex">
                            <!-- Heroicon name: outline/check -->
                            <svg class="h-6 w-6 flex-shrink-0 text-orange-500" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            <span class="ml-3 text-gray-500">1 jam, waktu respons dukungan khusus</span>
                        </li>

                        <li class="flex">
                            <!-- Heroicon name: outline/check -->
                            <svg class="h-6 w-6 flex-shrink-0 text-orange-500" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            <span class="ml-3 text-gray-500">Addon / Parked Domain (-)</span>
                        </li>
                    </ul>
                </div>

                <a href="#"
                    class="bg-orange-50 text-orange-700 hover:bg-orange-100 mt-8 block w-full py-3 px-6 border border-transparent rounded-md text-center font-medium">Pilih
                    Paket</a>
            </div>

            <div class="relative flex flex-col rounded-lg border border-gray-200 bg-white p-8 shadow-sm">
                <div class="flex-1">
                    <h5 class="text-md font-semibold text-gray-600">Cloud VPS KVM SSD</h5>
                    <h3 class="mt-2 text-2xl font-semibold text-gray-900">VPS SC1</h3>
                    <p class="mt-4 flex items-baseline text-gray-600 line-through">
                        <span class="text-lg tracking-tight">Rp 135.000</span>
                    </p>
                    <p class="mt-2 flex items-baseline text-orange-500">
                        <span class="text-2xl font-bold tracking-tight">Rp 75.000</span>
                    </p>

                    <!-- Feature list -->
                    <ul role="list" class="mt-8 space-y-6">
                        <li class="flex">
                            <!-- Heroicon name: outline/check -->
                            <svg class="h-6 w-6 flex-shrink-0 text-orange-500" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            <span class="ml-3 text-gray-500">25 GB SSD Storage</span>
                        </li>

                        <li class="flex">
                            <!-- Heroicon name: outline/check -->
                            <svg class="h-6 w-6 flex-shrink-0 text-orange-500" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            <span class="ml-3 text-gray-500">Unlimited Bandwidth</span>
                        </li>

                        <li class="flex">
                            <!-- Heroicon name: outline/check -->
                            <svg class="h-6 w-6 flex-shrink-0 text-orange-500" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            <span class="ml-3 text-gray-500">1 Core CPU</span>
                        </li>

                        <li class="flex">
                            <!-- Heroicon name: outline/check -->
                            <svg class="h-6 w-6 flex-shrink-0 text-orange-500" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            <span class="ml-3 text-gray-500">Waktu respons dukungan 24 jam</span>
                        </li>

                        <li class="flex">
                            <!-- Heroicon name: outline/check -->
                            <svg class="h-6 w-6 flex-shrink-0 text-orange-500" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            <span class="ml-3 text-gray-500">Unlimited Addon / Parked Domain</span>
                        </li>
                    </ul>
                </div>

                <a href="#"
                    class="bg-orange-50 text-orange-700 hover:bg-orange-100 mt-8 block w-full py-3 px-6 border border-transparent rounded-md text-center font-medium">Pilih
                    Paket</a>
            </div>
        </div>
    </div>

    <div class="bg-white py-16">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl text-center">
                <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Lihat Juga Layanan Kami Yang
                    Lain</p>
                <p class="mt-6 text-lg leading-8 text-gray-600">Optimalkan performa website bisnis Anda dengan berbagai
                    layanan berkualitas dari Qwords.</p>
            </div>
        </div>
        <div class="mx-auto max-w-7xl bg-white pt-16 sm:pt-24 sm:px-6 lg:px-8">
            <!-- xs to lg -->
            <div class="mx-auto max-w-lg sm:max-w-5xl space-y-8 lg:hidden">
                <section>
                    <div class="rounded-lg border border-gray-200 bg-white mb-8 p-12 shadow-sm">
                        <h2 class="text-2xl font-semibold leading-6 text-gray-900">SSL</h2>
                        <p class="mt-4">
                            <span class="text-2xl font-bold tracking-tight text-orange-500">Rp 112.000</span>
                            <span class="text-base font-medium text-gray-500">/tahun</span>
                        </p>
                        <p class="mt-4 text-lg text-gray-500">Jadikan website Anda lebih terpercaya dan disukai oleh search
                            engine dengan menggunakan SSL Certificate.</p>
                        <a href="#"
                            class="bg-orange-50 text-orange-700 hover:bg-orange-100 mt-8 block w-full py-3 px-6 border border-transparent rounded-md text-center font-medium">Pesan
                            Sekarang</a>
                    </div>
                </section>

                <section>
                    <div class="rounded-lg border border-gray-200 bg-white mb-8 p-12 shadow-sm">
                        <h2 class="text-2xl font-semibold leading-6 text-gray-900">Dedicated Server</h2>
                        <p class="mt-4">
                            <span class="text-2xl font-bold tracking-tight text-orange-500">Rp 499.000</span>
                            <span class="text-base font-medium text-gray-500">/bulan</span>
                        </p>
                        <p class="mt-4 text-lg text-gray-500">Nikmati kelola Dedicated Server sendiri dengan akses remote
                            dari seluruh dunia tanpa batas.</p>
                        <a href="#"
                            class="bg-orange-50 text-orange-700 hover:bg-orange-100 mt-8 block w-full py-3 px-6 border border-transparent rounded-md text-center font-medium">Pesan
                            Sekarang</a>
                    </div>
                </section>

                <section>
                    <div class="rounded-lg border border-gray-200 bg-white p-12 shadow-sm">
                        <h2 class="text-2xl font-semibold leading-6 text-gray-900">Colocation Server</h2>
                        <p class="mt-4">
                            <span class="text-2xl font-bold tracking-tight text-orange-500">Rp 500.000</span>
                            <span class="text-base font-medium text-gray-500">/bulan</span>
                        </p>
                        <p class="mt-4 text-lg text-gray-500">Akses cepat dari seluruh dunia dengan fasilitas 24x7 full
                            monitoring dengan cooling system terbaik serta fire extinguisher.</p>
                        <a href="#"
                            class="bg-orange-50 text-orange-700 hover:bg-orange-100 mt-8 block w-full py-3 px-6 border border-transparent rounded-md text-center font-medium">Pesan
                            Sekarang</a>
                    </div>
                </section>
            </div>

            <!-- lg+ -->
            <div class="hidden lg:block">
                <table class="h-px w-full table-fixed">
                    <caption class="sr-only">
                        Layanan Kami Yang Lain
                    </caption>
                    <thead>
                        <tr>
                            <th class="px-6 pb-4 text-left text-sm font-medium text-gray-900" scope="col">
                                <span>Layanan</span>
                            </th>

                            <th class="w-1/4 px-6 pb-4 text-left text-xl font-medium leading-6 text-gray-900"
                                scope="col">SSL</th>

                            <th class="w-1/4 px-6 pb-4 text-left text-xl font-medium leading-6 text-gray-900"
                                scope="col">Dedicated Server</th>

                            <th class="w-1/4 px-6 pb-4 text-left text-xl font-medium leading-6 text-gray-900"
                                scope="col">Colocation Server</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 border-t border-gray-200">
                        <tr>
                            <th class="py-8 px-6 text-left align-top text-sm font-medium text-gray-900" scope="row">
                                Rincian</th>

                            <td class="h-full py-8 px-6 align-top">
                                <div class="relative table h-full">
                                    <p>
                                        <span class="text-2xl font-bold tracking-tight text-orange-500">Rp 112.000</span>
                                        <span class="text-base font-medium text-gray-500">/tahun</span>
                                    </p>
                                    <p class="mt-4 mb-24 text-md text-gray-500">Jadikan website Anda lebih terpercaya dan
                                        disukai oleh search engine dengan menggunakan SSL Certificate.</p>
                                    <a href="#"
                                        class="5 absolute bottom-0 block w-full flex-grow rounded-md bg-orange-50 py-3 text-center border border-transparent text-sm font-medium text-orange-700 hover:bg-orange-100">Pesan
                                        Sekarang</a>
                                </div>
                            </td>

                            <td class="h-full py-8 px-6 align-top">
                                <div class="relative table h-full">
                                    <p>
                                        <span class="text-2xl font-bold tracking-tight text-orange-500">Rp 499.000</span>
                                        <span class="text-base font-medium text-gray-500">/bulan</span>
                                    </p>
                                    <p class="mt-4 mb-24 text-md text-gray-500">Nikmati kelola Dedicated Server sendiri
                                        dengan akses remote dari seluruh dunia tanpa batas.</p>
                                    <a href="#"
                                        class="5 absolute bottom-0 block w-full flex-grow rounded-md bg-orange-50 py-3 text-center border border-transparent text-sm font-medium text-orange-700 hover:bg-orange-100">Pesan
                                        Sekarang</a>
                                </div>
                            </td>

                            <td class="h-full py-8 px-6 align-top">
                                <div class="relative table h-full">
                                    <p>
                                        <span class="text-2xl font-bold tracking-tight text-orange-500">Rp 500.000</span>
                                        <span class="text-base font-medium text-gray-500">/bulan</span>
                                    </p>
                                    <p class="mt-4 mb-24 text-md text-gray-500">Akses cepat dari seluruh dunia dengan
                                        fasilitas 24x7 full monitoring dengan cooling system terbaik serta fire
                                        extinguisher.</p>
                                    <a href="#"
                                        class="5 absolute bottom-0 block w-full flex-grow rounded-md bg-orange-50 py-3 text-center border border-transparent text-sm font-medium text-orange-700 hover:bg-orange-100">Pesan
                                        Sekarang</a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="bg-white py-16">
        <!-- Header -->
        <div class="relative bg-orange-50 pb-32">
            <div class="relative mx-auto max-w-3xl pt-20 pb-36 px-6 lg:px-8 text-center">
                <h1 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
                    <span class="text-orange-500">Qwords</span> Siap Membantumu
                </h1>
                <p class="mt-6 text-lg leading-8 text-gray-600 ">Kami siap membantu selama 24 jam, 7 hari untuk mendapatkan
                    solusi terbaik untuk kebutuhan Anda.</p>
            </div>
        </div>

        <!-- Overlapping cards -->
        <section class="relative z-10 mx-auto -mt-36 max-w-7xl px-6 pb-38 lg:px-8" aria-labelledby="contact-heading">
            <div class="grid grid-cols-1 gap-y-36 lg:grid-cols-2 lg:gap-y-0 lg:gap-x-8">
                <div class="flex flex-col rounded-2xl border-r-4 border-b-4 border-gray-200 bg-white shadow-xl">
                    <div class="relative flex-1 px-6 pt-16 pb-8 md:px-8">
                        <img class="absolute top-0 inline-block -translate-y-1/2 transform h-40"
                            src="{{ asset('media/banner/planning.webp') }}" alt="planning">
                        <h3 class="text-xl font-medium text-gray-900 pt-10">Rekomendasi Produk Sesuai Kebutuhan Anda!</h3>
                        <p class="mt-4 text-base text-gray-500">Masih bingung untuk memilih produk? Qwords siap membantu
                            memilih produk yang paling tepat khusus untuk Anda. Kami menawarkan solusi paket hosting terbaik
                            untuk segala kebutuhan website dan sistem Anda. Mulai dari blog hingga website bisnis dan
                            perusahaan. </p>
                    </div>
                    <div class="rounded-bl-2xl rounded-br-2xl bg-orange-50 p-6 md:px-8">
                        <a href="#" class="text-base font-medium text-orange-700 hover:text-orange-600">Coba
                            Sekarang<span aria-hidden="true"> &rarr;</span></a>
                    </div>
                </div>

                <div class="flex flex-col rounded-2xl border-r-4 border-b-4 border-gray-200 bg-white shadow-xl">
                    <div class="relative flex-1 px-6 pt-16 pb-8 md:px-8">
                        <img class="absolute top-0 inline-block -translate-y-1/2 transform h-40"
                            src="{{ asset('media/banner/design.webp') }}" alt="design">
                        <h3 class="text-xl font-medium text-gray-900 pt-10">Bikin Website Impian Anda Dengan Mudah Disini!
                        </h3>
                        <p class="mt-4 text-base text-gray-500">Bikin website impian include paket hosting Indonesia
                            terbaik hanya 1 jutaan Jasa pembuatan website profesional untuk Perusahaan, Bisnis & UKM. Bikin
                            website impian dengan mudah di sini, desain website elegan dan mudah dikelola. </p>
                    </div>
                    <div class="rounded-bl-2xl rounded-br-2xl bg-orange-50 p-6 md:px-8">
                        <a href="#" class="text-base font-medium text-orange-700 hover:text-orange-600">Lihat
                            Selengkapnya<span aria-hidden="true"> &rarr;</span></a>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="bg-white py-16">
        <div class="mx-auto max-w-none px-6 lg:px-8">
            <div class="mx-auto max-w-2xl text-center">
                <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Komitmen Qwords</p>
                <p class="mt-6 text-lg leading-8 text-gray-600">Berbagai alasan mengapa pelanggan memilih sewa hosting di
                    Qwords.</p>
            </div>
            <div class="mx-auto mt-16 max-w-3xl sm:mt-18 lg:mt-20 lg:max-w-none">
                <dl class="flex flex-wrap justify-center gap-y-16 gap-x-8 sm:max-w-none">
                    <div
                        class="relative border-r-4 border-b-4 border-gray-200 rounded-lg shadow-md p-6 md:w-5/12 xl:w-3/12">
                        <div class="relative top-0 left-0 flex h-28 w-28 rounded-lg">
                            <img class="w-26" src="{{ asset('media/commitment/call.webp') }}" alt="">
                        </div>
                        <dt class="mt-4 text-base text-xl font-semibold leading-7 text-gray-900">
                            Layanan 24/7
                        </dt>
                        <dd class="mt-2 text-base leading-7 text-gray-600">Tim Technical Support dan Customer Service
                            Qwords siap membantu Anda selama 24 jam, 7 hari. Anda dapat menghubungi melalui Live chat, Call
                            Center, dan Support Ticket.</dd>
                    </div>

                    <div
                        class="relative border-r-4 border-b-4 border-gray-200 rounded-lg shadow-md p-6 md:w-5/12 xl:w-3/12">
                        <div class="relative top-0 left-0 flex h-28 w-28 rounded-lg">
                            <img class="w-26" src="{{ asset('media/commitment/book.webp') }}" alt="">
                        </div>
                        <dt class="mt-4 text-base text-xl font-semibold leading-7 text-gray-900">
                            Panduan Manual Lengkap
                        </dt>
                        <dd class="mt-2 text-base leading-7 text-gray-600">Qwords dilengkapi dengan halaman knowledge base
                            berisi tutorial dan tips seputar pengelolaan website dan hosting. Dapat diakses dengan mudah dan
                            solutif.</dd>
                    </div>

                    <div
                        class="relative border-r-4 border-b-4 border-gray-200 rounded-lg shadow-md p-6 md:w-5/12 xl:w-3/12">
                        <div class="relative top-0 left-0 flex h-28 w-28 rounded-lg">
                            <img class="w-26" src="{{ asset('media/commitment/router.webp') }}" alt="">
                        </div>
                        <dt class="mt-4 text-base text-xl font-semibold leading-7 text-gray-900">
                            Up time 99.99%
                        </dt>
                        <dd class="mt-2 text-base leading-7 text-gray-600">Uptime Network & Server di atas 99. 99% dengan
                            konfigurasi server yang tepat. Didukung manajemen jaringan dan multiple upstream tier 1 provider
                            network serta multiple peering.</dd>
                    </div>

                    <div
                        class="relative border-r-4 border-b-4 border-gray-200 rounded-lg shadow-md p-6 md:w-5/12 xl:w-3/12">
                        <div class="relative top-0 left-0 flex h-28 w-28 rounded-lg">
                            <img class="w-26" src="{{ asset('media/commitment/guard.webp') }}" alt="">
                        </div>
                        <dt class="mt-4 text-base text-xl font-semibold leading-7 text-gray-900">
                            Jaminan keamanan
                        </dt>
                        <dd class="mt-2 text-base leading-7 text-gray-600">Keamanan menjadi fokus utama kami di Qwords.
                            Tindakan pemantauan dan pencegahan yang berstandar & berkelanjutan telah menjadi perhatian utama
                            kami.</dd>
                    </div>

                    <div
                        class="relative border-r-4 border-b-4 border-gray-200 rounded-lg shadow-md p-6 md:w-5/12 xl:w-3/12">
                        <div class="relative top-0 left-0 flex h-28 w-28 rounded-lg">
                            <img class="w-26" src="{{ asset('media/commitment/networkAlt.webp') }}" alt="">
                        </div>
                        <dt class="mt-4 text-base text-xl font-semibold leading-7 text-gray-900">
                            Clustered DNS
                        </dt>
                        <dd class="mt-2 text-base leading-7 text-gray-600">DNS Server Cloud Hosting Qwords terhubung satu
                            dengan yang lainnya. Hal ini membuat DNS Server akan selalu dapat di akses karena saling
                            membackup antar server.</dd>
                    </div>

                    <div
                        class="relative border-r-4 border-b-4 border-gray-200 rounded-lg shadow-md p-6 md:w-5/12 xl:w-3/12">
                        <div class="relative top-0 left-0 flex h-28 w-28 rounded-lg">
                            <img class="w-26" src="{{ asset('media/commitment/diamond.webp') }}" alt="">
                        </div>
                        <dt class="mt-4 text-base text-xl font-semibold leading-7 text-gray-900">
                            High Enterprise Server
                        </dt>
                        <dd class="mt-2 text-base leading-7 text-gray-600">Standar server Qwords adalah server kelas
                            enterprise Dual Xeon Octa Core yang merupakan hardware kelas terbaik. Hardware ini biasa
                            digunakan oleh perusahaan terkemuka.</dd>
                    </div>

                    <div
                        class="relative border-r-4 border-b-4 border-gray-200 rounded-lg shadow-md p-6 md:w-5/12 xl:w-3/12">
                        <div class="relative top-0 left-0 flex h-28 w-28 rounded-lg">
                            <img class="w-26" src="{{ asset('media/commitment/router.webp') }}" alt="">
                        </div>
                        <dt class="mt-4 text-base text-xl font-semibold leading-7 text-gray-900">
                            Tier 1 Network
                        </dt>
                        <dd class="mt-2 text-base leading-7 text-gray-600">Tier 1 Network merupakan jaringan dunia tanpa
                            transit network, yang membuat jaringan lebih cepat serta jalur routing yang lebih pendek dan
                            ketersediaan backup network.</dd>
                    </div>

                    <div
                        class="relative border-r-4 border-b-4 border-gray-200 rounded-lg shadow-md p-6 md:w-5/12 xl:w-3/12">
                        <div class="relative top-0 left-0 flex h-28 w-28 rounded-lg">
                            <img class="w-26" src="{{ asset('media/commitment/network.webp') }}" alt="">
                        </div>
                        <dt class="mt-4 text-base text-xl font-semibold leading-7 text-gray-900">
                            Peering Network
                        </dt>
                        <dd class="mt-2 text-base leading-7 text-gray-600">Jaringan di Qwords terhubung langsung ke public
                            peering seperti OpenIXP dan CDIX yang membuat latency atau waktu tunggu pengiriman data semakin
                            kecil.</dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>

    <div class="relative py-16 overflow-hidden">
        <div class="relative bg-orange-50 mx-auto p-12">
            <div class="max-w-lg lg:max-w-7xl mx-auto">
                <div class="flex flex-wrap -mx-4 items-center">
                    <div class="w-full lg:w-1/2 px-4 mb-8 lg:mb-0">
                        <div class="lg:max-w-md xl:max-w-lg">
                            <img class="block w-full xl:w-11/12" src="{{ asset('media/banner/refund.webp') }}"
                                alt="Refund">
                        </div>
                    </div>
                    <div class="w-full lg:w-1/2 px-4">
                        <div class="max-w-7xl">
                            <div class="mx-auto text-center sm:text-left lg:max-w-none">
                                <h4 class="mt-6 text-xl tracking-tight font-semibold text-gray-900">Jaminan Layanan Terbaik
                                </h4>
                                <h2 class="mt-4 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Garansi 30
                                    Hari <span class="text-orange-500">Uang Kembali</span></h2>
                                <p class="mt-6 text-md text-gray-600 mb-5 sm:text-lg">Tidak puas dengan layanan hosting
                                    Qwords? Beritahukan kepada kami dalam kurun 30 hari setelah aktivasi. Uang Anda akan
                                    kembali sepenuhnya.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="relative bg-white py-16 overflow-hidden">
        <div class="relative container px-4 mx-auto">
            <div class="max-w-lg lg:max-w-4xl mx-auto">
                <div class="mx-auto text-center mb-16">
                    <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Apa Kata Mereka?</p>
                    <p class="mt-6 text-lg leading-8 text-gray-600">Apa kata mereka yang sudah menggunakan layanan web
                        hosting Indonesia dari Qwords? Simak pengalaman mereka yang telah membuktikan sendiri fitur dari
                        layanan kami. </p>
                </div>
            </div>
            <div class="max-w-lg lg:max-w-7xl mx-auto">
                <div class="flex flex-wrap -mx-4 items-center" x-data="{ item: 1 }">
                    <div class="w-full lg:w-1/2 px-4 mb-8 lg:mb-0">
                        <div class="lg:max-w-md xl:max-w-lg">
                            <img class="block w-full2" x-show="item === 1"
                                src="{{ asset('media/testimonial/testi1.webp') }}" alt="Testimoni 1">
                            <img class="block w-full2" x-show="item === 2"
                                src="{{ asset('media/testimonial/testi2.webp') }}" alt="Testimoni 2">
                            <img class="block w-full2" x-show="item === 3"
                                src="{{ asset('media/testimonial/testi3.webp') }}" alt="Testimoni 3">
                        </div>
                    </div>
                    <div class="w-full lg:w-1/2 px-4">
                        <div class="max-w-lg">
                            <div class="mx-auto mt-12 max-w-3xl text-center sm:text-left lg:max-w-none"
                                x-show="item === 1">
                                <img class="block mb-4 h-5 w-5" src="{{ asset('media/testimonial/cite.png') }}"
                                    alt="">
                                <p class="text-lg font-base text-gray-900 mb-5 sm:text-2xl">&ldquo;Semoga <span
                                        class="text-orange-500">Qwords</span> dapat terus bertahan, sehingga kami dan
                                    masyarakat Indonesia bisa mendapatkan layanan yang terbaik dari Qwords.&rdquo;</p>
                                <span class="block text-gray-900 font-semibold mb-1">&mdash; Budi Raharjo</span>
                                <span class="block text-gray-500 mb-10">Founder ID Cert</span>
                            </div>
                            <div class="mx-auto mt-12 max-w-3xl text-center sm:text-left lg:max-w-none"
                                x-show="item === 2">
                                <img class="block mb-4 h-5 w-5" src="{{ asset('media/testimonial/cite.png') }}"
                                    alt="">
                                <p class="text-lg font-base text-gray-900 mb-5 sm:text-2xl">&ldquo;Pelayanan <span
                                        class="text-orange-500">Qwords</span> sangat cepat dan responsif, sehingga tidak
                                    butuh waktu lama untuk membantu website kami kembali normal. Terbaik pokoknya, mah!
                                    &rdquo;</p>
                                <span class="block text-gray-900 font-semibold mb-1">&mdash; Kuns Kurniawan</span>
                                <span class="block text-gray-500 mb-10">PR Event Info BDG</span>
                            </div>
                            <div class="mx-auto mt-12 max-w-3xl text-center sm:text-left lg:max-w-none"
                                x-show="item === 3">
                                <img class="block mb-4 h-5 w-5" src="{{ asset('media/testimonial/cite.png') }}"
                                    alt="">
                                <p class="text-lg font-base text-gray-900 mb-5 sm:text-2xl">&ldquo;Hingga saat ini pula,
                                    kami tidak pernah menemukan masalah yang berarti dari layanan yang diberikan <span
                                        class="text-orange-500">Qwords</span>. Layanan Customer Service yang sangat baik,
                                    membuat kami tidak ingin berpindah dari Qwords.&rdquo;</p>
                                <span class="block text-gray-900 font-semibold mb-1">&mdash; Denden Sofiudin</span>
                                <span class="block text-gray-500 mb-10">Owner Rumah Kopi temanggung</span>
                            </div>
                            <div class="mx-auto mt-12 max-w-3xl text-center sm:text-left lg:max-w-none">
                                <button
                                    class="inline-block mr-3 w-3 h-3 rounded-full outline outline-2 hover:outline-gray-500"
                                    :class="{ 'outline-gray-900 bg-gray-900': item === 1 }" @click="item = 1"></button>
                                <button
                                    class="inline-block mr-3 w-3 h-3 rounded-full outline outline-2 hover:outline-gray-500"
                                    :class="{ 'outline-gray-900 bg-gray-900': item === 2 }" @click="item = 2"></button>
                                <button
                                    class="inline-block mr-3 w-3 h-3 rounded-full outline outline-2 hover:outline-gray-500"
                                    :class="{ 'outline-gray-900 bg-gray-900': item === 3 }" @click="item = 3"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white py-16">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-7xl text-center">
                <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Dipercaya oleh 45.000+
                    Pelanggan di Seluruh Indonesia</p>
            </div>
            <div class="mx-auto mt-14 max-w-3xl sm:mt-12 lg:max-w-none">
                <dl class="flex flex-wrap justify-center gap-y-16 gap-x-8 sm:max-w-none">
                    <div class="flex flex-wrap justify-around lg:-ml-4">
                        <div class="mt-4 flex flex-shrink-0 flex-grow justify-evenly lg:flex-grow-0">
                            <img class="h-16 sm:h-20" src="{{ asset('media/company/Cimory.webp') }}" alt="Cimory">
                        </div>
                        <div class="mt-4 flex flex-shrink-0 flex-grow justify-center lg:flex-grow-0">
                            <img class="h-16 sm:h-20" src="{{ asset('media/company/MD.webp') }}" alt="MD">
                        </div>
                        <div class="mt-4 flex flex-shrink-0 flex-grow justify-center lg:flex-grow-0">
                            <img class="h-16 sm:h-20" src="{{ asset('media/company/Forisa.webp') }}" alt="Forisa">
                        </div>
                        <div class="mt-4 flex flex-shrink-0 flex-grow justify-center lg:flex-grow-0">
                            <img class="h-16 sm:h-20" src="{{ asset('media/company/Horison.webp') }}" alt="Horison">
                        </div>
                        <div class="mt-4 flex flex-shrink-0 flex-grow justify-center lg:flex-grow-0">
                            <img class="h-16 sm:h-20" src="{{ asset('media/company/Elsheskin.webp') }}" alt="Elsheskin">
                        </div>
                    </div>
                </dl>
            </div>
            <div class="mx-auto mt-12 max-w-3xl text-center lg:max-w-none">
                <p class="text-md font-semibold text-gray-700">Dan Masih Banyak yang Lainnya</p>
            </div>
        </div>
    </div>

    <div class="bg-white py-16">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-7xl text-center">
                <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Partner Kami</p>
            </div>
            <div class="mx-auto mt-14 max-w-3xl sm:mt-12 lg:max-w-none">
                <dl class="flex flex-wrap justify-center gap-y-16 gap-x-8 sm:max-w-none">
                    <div class="flex flex-wrap justify-around lg:-ml-4">
                        <div class="mt-4 flex flex-shrink-0 flex-grow justify-evenly lg:flex-grow-0">
                            <img class="h-16 sm:h-20" src="{{ asset('media/partner/Google.webp') }}" alt="Google">
                        </div>
                        <div class="mt-4 flex flex-shrink-0 flex-grow justify-center lg:flex-grow-0">
                            <img class="h-16 sm:h-20" src="{{ asset('media/partner/Cpanel.webp') }}" alt="Cpanel">
                        </div>
                        <div class="mt-4 flex flex-shrink-0 flex-grow justify-center lg:flex-grow-0">
                            <img class="h-16 sm:h-20" src="{{ asset('media/partner/Idea.webp') }}" alt="Idea">
                        </div>
                        <div class="mt-4 flex flex-shrink-0 flex-grow justify-center lg:flex-grow-0">
                            <img class="h-16 sm:h-20" src="{{ asset('media/partner/Archi.webp') }}" alt="Archi">
                        </div>
                        <div class="mt-4 flex flex-shrink-0 flex-grow justify-center lg:flex-grow-0">
                            <img class="h-16 sm:h-20" src="{{ asset('media/partner/dotid.webp') }}" alt="dotid">
                        </div>
                    </div>
                </dl>
            </div>
            <div class="mx-auto mt-12 max-w-3xl text-center lg:max-w-none">
                <a href="#" class="text-md font-semibold text-orange-500 hover:text-orange-700">
                    Lihat Semua Partner<span aria-hidden="true"> &rarr;</span>
                </a>
            </div>
        </div>
    </div>

    <div class="bg-white py-16">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-4xl text-center">
                <p class="mt-2 text-xl font-bold tracking-tight text-gray-900 sm:text-2xl">Pilih metode e-payment otomatis.
                    Layanan Domain, Hosting, VPS langsung aktif tanpa perlu konfirmasi bayar. </p>
            </div>
            <div class="mx-auto mt-14 max-w-7xl sm:mt-12 lg:max-w-none">
                <dl class="flex flex-wrap justify-center gap-y-16 gap-x-8 sm:max-w-none">
                    <div class="flex flex-wrap">
                        <div class="mt-4 flex flex-shrink justify-center flex-grow lg:flex-grow-0">
                            <img class="h-full w-10/12" src="{{ asset('media/banner/all-payment.webp') }}"
                                alt="payment">
                        </div>
                    </div>
                </dl>
            </div>
            <div class="mx-auto mt-6 max-w-3xl text-center lg:max-w-none">
                <a href="#" class="text-md font-semibold text-orange-500 hover:text-orange-700">
                    Lihat Metode Pembayaran<span aria-hidden="true"> &rarr;</span>
                </a>
            </div>
        </div>
    </div>

    <div class="bg-white pt-16 pb-36" x-data="{ selected: 1 }">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-5xl divide-y divide-gray-900/10">
                <h2 class="text-2xl font-bold leading-10 tracking-tight text-gray-900">Frequently asked questions</h2>
                <dl class="mt-10 space-y-6 divide-y divide-gray-900/10">
                    <div class="pt-6">
                        <dt>
                            <button type="button" class="flex w-full items-start justify-between text-left text-gray-900"
                                aria-controls="faq-0" aria-expanded="false"
                                @click="selected !== 1 ?  selected = 1 : selected = null">
                                <span class="text-lg font-semibold leading-7">Apa itu web hosting?</span>
                                <span class="ml-6 flex h-7 items-center">
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                    </svg>
                                </span>
                            </button>
                        </dt>
                        <dd class="mt-2 pr-12" id="faq-0" x-show="selected == 1" x-transition
                            x-transition:enter.duration.300ms x-transition:leave.duration.100ms>
                            <p class="text-base leading-7 text-gray-600">Hosting adalah tempat penyimpanan file dan data
                                website seperti teks, video dan gambar website. File dan data tersebut di simpan di dalam
                                server yang
                                terkoneksi dengan internet sehingga data tersebut dapat diakses oleh siapa saja, kapan saja
                                dan di mana saja. <br> <br> Penjelasan lebih lanjut dapat Anda baca pada artikel ini :
                                https://qwords.com/blog/apa-itu-hosting/ .
                            </p>
                        </dd>
                    </div>
                    <div class="pt-6">
                        <dt>
                            <button type="button" class="flex w-full items-start justify-between text-left text-gray-900"
                                aria-controls="faq-0" aria-expanded="false"
                                @click="selected !== 2 ?  selected = 2 : selected = null">
                                <span class="text-lg font-semibold leading-7">Ada berapa jenis hosting di Qwords?</span>
                                <span class="ml-6 flex h-7 items-center">
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                    </svg>
                                </span>
                            </button>
                        </dt>
                        <dd class="mt-2 pr-12" id="faq-0" x-show="selected == 2" x-transition
                            x-transition:enter.duration.300ms x-transition:leave.duration.100ms>
                            <p class="text-base leading-7 text-gray-600">
                                Untuk mendukung kesuksesan bisnis di era digital, Qwords menghadirkan beragam paket hosting
                                Indonesia yang bisa dipilih sesuai kebutuhan. <br> <br>
                            </p>
                            <h4 class="text-md font-bold pb-4">Value Performance</h4>
                            <p class="text-base leading-7 text-gray-600">Value Cloud Hosting merupakan paket cloud hosting
                                murah Indonesia yang dirancang khusus untuk
                                keperluan sederhana seperti UKM, toko online, blog, website sederhana, hingga email untuk
                                penggunaan personal. Hosting murah dari Qwords untuk pengguna baru website atau Anda yang
                                baru terjun ke dalam
                                industri/bisnis online. Storage sesuai kebutuhan, fleksibel, dan ekstra lega mulai 3 GB
                                hingga</p>
                            <br>
                            <h4 class="text-md font-bold pb-4">High Performance Cloud Hosting Bisnis</h4>
                            <p class="text-base leading-7 text-gray-600">Productivity starts here! Berikan Hosting terbaik
                                untuk bisnis Anda. Kinerja lebih
                                produktif dengan performa tinggi &amp; optimal untuk website profesional perusahaan,
                                e-commerce,
                                startup bisnis, serta support Moodle--platform open source yang memudahkan sistem
                                pembelajaran
                                online</p>
                            <br>
                            <h4 class="text-md font-bold pb-4">High Performance Cloud Hosting Enterprise</h4>
                            <p class="text-base leading-7 text-gray-600">Nikmati versi terbaik dedicated hosting melalui
                                paket HPCH Enterprise. Tampil lebih premium
                                dengan resource dedicated hanya untuk 1 pengguna. Performa lebih stabil, bebas gangguan dari
                                Cloud Hosting lainnya. More productivity, less drama.</p>
                            <br>
                            <h4 class="text-md font-bold pb-4">WordPress Hosting</h4>
                            <p class="text-base leading-7 text-gray-600">Hosting khusus bagi Anda yang menggunakan CMS
                                WordPress. Dilengkapi CloudPop untuk kinerja
                                WordPress yang optimal. WordPress Hosting Indonesia yang dioptimalkan dengan CloudPOP.</p>
                            <br>
                            <h4 class="text-md font-bold pb-4">Unlimited Hosting</h4>
                            <p class="text-base leading-7 text-gray-600">Paket Unlimited Hosting Indonesia yang dapat
                                diandalkan, tanpa batasan! Free Domain &amp;
                                SSL Certificate dengan Uptime Server 99,99%. Didukung Website Builder dan Web Accelerator
                                dengan Module LSAPI PRO + CRIU. Akses
                                internasional ngebut, serta garansi 30 hari uang kembali.</p>
                        </dd>
                    </div>
                    <div class="pt-6">
                        <dt>
                            <button type="button" class="flex w-full items-start justify-between text-left text-gray-900"
                                aria-controls="faq-0" aria-expanded="false"
                                @click="selected !== 3 ?  selected = 3 : selected = null">
                                <span class="text-lg font-semibold leading-7">Apa kelebihan dari cloud hosting
                                    Qwords?</span>
                                <span class="ml-6 flex h-7 items-center">
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                    </svg>
                                </span>
                            </button>
                        </dt>
                        <dd class="mt-2 pr-12" id="faq-0" x-show="selected == 3" x-transition
                            x-transition:enter.duration.300ms x-transition:leave.duration.100ms>
                            <p class="text-base leading-7 text-gray-600">
                                Cloud hosting Qwords sudah dipercaya 45,000+ pelanggan dari dalam dan luar negeri. Anda akan
                                mendapatkan jaminan keamanan, Uptime 99.99%, dukungan teknis selama 24 jam, 7 hari melalui
                                Live chat, Call Center, atau Support Ticket dan masih banyak lagi.
                            </p>
                        </dd>
                    </div>
                    <div class="pt-6">
                        <dt>
                            <button type="button" class="flex w-full items-start justify-between text-left text-gray-900"
                                aria-controls="faq-0" aria-expanded="false"
                                @click="selected !== 4 ?  selected = 4 : selected = null">
                                <span class="text-lg font-semibold leading-7">Mengapa saya perlu web hosting?</span>
                                <span class="ml-6 flex h-7 items-center">
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                    </svg>
                                </span>
                            </button>
                        </dt>
                        <dd class="mt-2 pr-12" id="faq-0" x-show="selected == 4" x-transition
                            x-transition:enter.duration.300ms x-transition:leave.duration.100ms>
                            <p class="text-base leading-7 text-gray-600">Tanpa web hosting, Anda tidak bisa membuat website
                                company profile,
                                portal berita, blog pribadi, website toko online, atau jenis website lain yang bisa diakses
                                secara online.
                                Penyedia layanan web hosting seperti Qwords.com membantu memastikan data-data dan file
                                website Anda tetap aman
                                serta responsif ketika diakses oleh pengguna secara online.
                            </p>
                        </dd>
                    </div>
                    <div class="pt-6">
                        <dt>
                            <button type="button" class="flex w-full items-start justify-between text-left text-gray-900"
                                aria-controls="faq-0" aria-expanded="false"
                                @click="selected !== 5 ?  selected = 5 : selected = null">
                                <span class="text-lg font-semibold leading-7">Bagaimana cara membeli hosting?</span>
                                <span class="ml-6 flex h-7 items-center">
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                    </svg>
                                </span>
                            </button>
                        </dt>
                        <dd class="mt-2 pr-12" id="faq-0" x-show="selected == 5" x-transition
                            x-transition:enter.duration.300ms x-transition:leave.duration.100ms>
                            <p class="text-base leading-7 text-gray-600">Kami memiliki panduan cara membeli hosting di
                                Qwords sesuai kebutuhan dengan mudah yang dapat Anda akses selengkapnya di <a
                                    href="#" class="text-indigo-500">sini</a>.
                                Beli hosting Indonesia di Qwords kini juga semakin mudah dengan adanya berbagai metode
                                pembayaran.
                            </p>
                        </dd>
                    </div>
                    <div class="pt-6">
                        <dt>
                            <button type="button" class="flex w-full items-start justify-between text-left text-gray-900"
                                aria-controls="faq-0" aria-expanded="false"
                                @click="selected !== 6 ?  selected = 6 : selected = null">
                                <span class="text-lg font-semibold leading-7">Apakah saya bisa transfer Hosting ke Qwords
                                    Cloud Web Hosting Indonesia?</span>
                                <span class="ml-6 flex h-7 items-center">
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                    </svg>
                                </span>
                            </button>
                        </dt>
                        <dd class="mt-2 pr-12" id="faq-0" x-show="selected == 6" x-transition
                            x-transition:enter.duration.300ms x-transition:leave.duration.100ms>
                            <p class="text-base leading-7 text-gray-600">Ya, Anda bisa melakukan transfer Hosting dari
                                provider lain ke Qwords Cloud Hosting Indonesia.
                                Caranya, silahkan lakukan pemesanan Cloud Hosting baru sesuai paket yang Anda inginkan,
                                kemudian informasikan kebutuhan migrasi pada tim support kami, lalu proses migrasi akan
                                dibantu hingga selesai.
                            </p>
                        </dd>
                    </div>
                    <!-- More questions... -->
                </dl>
            </div>
        </div>
    </div>

    <!-- scroll-to-top-button -->
    <button x-data="topBtn" @click="scrolltoTop" id="topButton"
        class="fixed z-10 hidden p-3 bg-orange-300 rounded-full shadow-md bottom-10 right-10">
        <svg class="w-5 h-5" fill="none" stroke="white" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 10l7-7m0 0l7 7m-7-7v18">
            </path>
        </svg>
    </button>

    <!-- scroll-to-top-button js-->
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('topBtn', () => ({
                scrolltoTop() {
                    document.body.scrollTop = 0;
                    document.documentElement.scrollTop = 0;
                }
            }));
        });

        const topBtn = document.getElementById("topButton");
        window.onscroll = () => {
            (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) ?
            topBtn.classList.remove("hidden"): topBtn.classList.add("hidden");

        }
    </script>
@endsection
