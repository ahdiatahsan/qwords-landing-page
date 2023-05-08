<div class="relative bg-white mb-2" x-data="{ mobile: false }">
    <div class="flex items-center justify-between p-6 xl:justify-start xl:space-x-10">
        <div class="flex justify-start lg:w-0 lg:flex-1">
            <a href="#">
                <span class="sr-only">Qwords</span>
                <img class="h-10 w-auto sm:h-12" src="{{ asset('media/header/logo-qw-light.webp') }}" alt="Qwords">
            </a>
        </div>
        <div class="-my-2 -mr-2 xl:hidden" @click="mobile = true">
            <button type="button"
                class="inline-flex items-center justify-center rounded-md bg-white p-2 text-gray-400 outline outline-1 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-orange-500"
                aria-expanded="false">
                <span class="sr-only">Buka menu</span>
                <!-- Heroicon name: outline/bars-3 -->
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </div>
        <nav class="hidden space-x-10 xl:flex">
            <!-- Cloud Hosting -->
            <div class="relative" x-data="{ cloud: false }">
                <button type="button"
                    class="text-gray-700 group inline-flex items-center rounded-md bg-white text-base font-medium hover:text-gray-900 focus:outline-none focus:text-gray-900"
                    aria-expanded="false" @click="cloud = true">
                    <span>Cloud Hosting</span>
                    <svg class="text-gray-400 ml-2 h-5 w-5 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                            clip-rule="evenodd" />
                    </svg>
                </button>

                <div class="absolute z-10 -ml-4 mt-5 w-screen max-w-md transform lg:ml-0 lg:max-w-2xl" x-show="cloud"
                    @click.away="cloud = false" x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 translate-y-1"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:leave="transition ease-in duration-150"
                    x-transition:leave-start="opacity-100 translate-y-0"
                    x-transition:leave-end="opacity-0 translate-y-1">
                    <div class="overflow-hidden rounded-lg shadow-lg ring-1 ring-black ring-opacity-5">
                        <div class="relative grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-8 lg:grid-cols-2">
                            <a href="#" class="-m-3 flex items-start rounded-lg p-3 hover:bg-gray-50">
                                <div
                                    class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-md bg-orange-600/10 text-orange-600 sm:h-12 sm:w-12">
                                    <!-- Heroicon name: outline/chart-bar -->
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M4.5 9.75a6 6 0 0111.573-2.226 3.75 3.75 0 014.133 4.303A4.5 4.5 0 0118 20.25H6.75a5.25 5.25 0 01-2.23-10.004 6.072 6.072 0 01-.02-.496z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <p class="text-base font-medium text-gray-900">Value Cloud Hosting</p>
                                    <p class="mt-1 text-sm text-gray-500">Harga ekonomis dengan performa optimal.</p>
                                </div>
                            </a>

                            <a href="#" class="-m-3 flex items-start rounded-lg p-3 hover:bg-gray-50">
                                <div
                                    class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-md bg-orange-600/10 text-orange-600 sm:h-12 sm:w-12">
                                    <!-- Heroicon name: outline/cursor-arrow-rays -->
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M4.5 9.75a6 6 0 0111.573-2.226 3.75 3.75 0 014.133 4.303A4.5 4.5 0 0118 20.25H6.75a5.25 5.25 0 01-2.23-10.004 6.072 6.072 0 01-.02-.496z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <p class="text-base font-medium text-gray-900">High Performance Bisnis</p>
                                    <p class="mt-1 text-sm text-gray-500">Untuk perusahaan, e-commerce, startup &
                                        website e-learning.</p>
                                </div>
                            </a>

                            <a href="#" class="-m-3 flex items-start rounded-lg p-3 hover:bg-gray-50">
                                <div
                                    class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-md bg-orange-600/10 text-orange-600 sm:h-12 sm:w-12">
                                    <!-- Heroicon name: outline/shield-check -->
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M4.5 9.75a6 6 0 0111.573-2.226 3.75 3.75 0 014.133 4.303A4.5 4.5 0 0118 20.25H6.75a5.25 5.25 0 01-2.23-10.004 6.072 6.072 0 01-.02-.496z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <p class="text-base font-medium text-gray-900">High Performance Enterprise</p>
                                    <p class="mt-1 text-sm text-gray-500">Hosting dengan dedicated resource. Tanpa
                                        gangguan & batasan.</p>
                                </div>
                            </a>

                            <a href="#" class="-m-3 flex items-start rounded-lg p-3 hover:bg-gray-50">
                                <div
                                    class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-md bg-orange-600/10 text-orange-600 sm:h-12 sm:w-12">
                                    <!-- Heroicon name: outline/squares-2x2 -->
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M4.5 9.75a6 6 0 0111.573-2.226 3.75 3.75 0 014.133 4.303A4.5 4.5 0 0118 20.25H6.75a5.25 5.25 0 01-2.23-10.004 6.072 6.072 0 01-.02-.496z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <p class="text-base font-medium text-gray-900">WordPress Hosting</p>
                                    <p class="mt-1 text-sm text-gray-500">Hosting khusus bagi Anda yang menggunakan CMS
                                        WordPress.</p>
                                </div>
                            </a>

                            <a href="#" class="-m-3 flex items-start rounded-lg p-3 hover:bg-gray-50">
                                <div
                                    class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-md bg-orange-600/10 text-orange-600 sm:h-12 sm:w-12">
                                    <!-- Heroicon name: outline/arrow-path -->
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M4.5 9.75a6 6 0 0111.573-2.226 3.75 3.75 0 014.133 4.303A4.5 4.5 0 0118 20.25H6.75a5.25 5.25 0 01-2.23-10.004 6.072 6.072 0 01-.02-.496z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <p class="text-base font-medium text-gray-900">Unlimited Hosting</p>
                                    <p class="mt-1 text-sm text-gray-500">Hosting dengan Unlimited resource yang dapat
                                        diAndalkan.</p>
                                </div>
                            </a>

                            <a href="#" class="-m-3 flex items-start rounded-lg p-3 hover:bg-gray-50">
                                <div
                                    class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-md bg-orange-600/10 text-orange-600 sm:h-12 sm:w-12">
                                    <!-- Heroicon name: outline/document-chart-bar -->
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M4.5 9.75a6 6 0 0111.573-2.226 3.75 3.75 0 014.133 4.303A4.5 4.5 0 0118 20.25H6.75a5.25 5.25 0 01-2.23-10.004 6.072 6.072 0 01-.02-.496z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <p class="text-base font-medium text-gray-900">Private Label cPanel Reseller</p>
                                    <p class="mt-1 text-sm text-gray-500">Bergabung dan mulai Bisnis Sukses bersama
                                        Qwords.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Server -->
            <div class="relative" x-data="{ server: false }">
                <button type="button"
                    class="text-gray-700 group inline-flex items-center rounded-md bg-white text-base font-medium hover:text-gray-900 focus:outline-none focus:text-gray-900"
                    aria-expanded="false" @click="server = true">
                    <span>Server</span>
                    <svg class="text-gray-400 ml-2 h-5 w-5 group-hover:text-gray-500"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                        aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                            clip-rule="evenodd" />
                    </svg>
                </button>

                <div class="absolute z-10 -ml-4 mt-5 w-screen max-w-md transform lg:ml-0 lg:max-w-2xl" x-show="server"
                    @click.away="server = false" x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 translate-y-1"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:leave="transition ease-in duration-150"
                    x-transition:leave-start="opacity-100 translate-y-0"
                    x-transition:leave-end="opacity-0 translate-y-1">
                    <div class="overflow-hidden rounded-lg shadow-lg ring-1 ring-black ring-opacity-5">
                        <div class="relative grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-8 lg:grid-cols-2">
                            <a href="#" class="-m-3 flex items-start rounded-lg p-3 hover:bg-gray-50">
                                <div
                                    class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-md bg-orange-600/10 text-orange-600 sm:h-12 sm:w-12">
                                    <!-- Heroicon name: outline/chart-bar -->
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M5.25 14.25h13.5m-13.5 0a3 3 0 01-3-3m3 3a3 3 0 100 6h13.5a3 3 0 100-6m-16.5-3a3 3 0 013-3h13.5a3 3 0 013 3m-19.5 0a4.5 4.5 0 01.9-2.7L5.737 5.1a3.375 3.375 0 012.7-1.35h7.126c1.062 0 2.062.5 2.7 1.35l2.587 3.45a4.5 4.5 0 01.9 2.7m0 0a3 3 0 01-3 3m0 3h.008v.008h-.008v-.008zm0-6h.008v.008h-.008v-.008zm-3 6h.008v.008h-.008v-.008zm0-6h.008v.008h-.008v-.008z" />
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <p class="text-base font-medium text-gray-900">Cloud VPS KVM SSD</p>
                                    <p class="mt-1 text-sm text-gray-500">KVM Ultrafast dengan Easy Install & OS
                                        terbaru.</p>
                                </div>
                            </a>

                            <a href="#" class="-m-3 flex items-start rounded-lg p-3 hover:bg-gray-50">
                                <div
                                    class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-md bg-orange-600/10 text-orange-600 sm:h-12 sm:w-12">
                                    <!-- Heroicon name: outline/cursor-arrow-rays -->
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M5.25 14.25h13.5m-13.5 0a3 3 0 01-3-3m3 3a3 3 0 100 6h13.5a3 3 0 100-6m-16.5-3a3 3 0 013-3h13.5a3 3 0 013 3m-19.5 0a4.5 4.5 0 01.9-2.7L5.737 5.1a3.375 3.375 0 012.7-1.35h7.126c1.062 0 2.062.5 2.7 1.35l2.587 3.45a4.5 4.5 0 01.9 2.7m0 0a3 3 0 01-3 3m0 3h.008v.008h-.008v-.008zm0-6h.008v.008h-.008v-.008zm-3 6h.008v.008h-.008v-.008zm0-6h.008v.008h-.008v-.008z" />
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <p class="text-base font-medium text-gray-900">Server sekolah CBT/Moodle</p>
                                    <p class="mt-1 text-sm text-gray-500">Untuk kebutuhan e-learning, ujian sekolah,
                                        dsb.</p>
                                </div>
                            </a>

                            <a href="#" class="-m-3 flex items-start rounded-lg p-3 hover:bg-gray-50">
                                <div
                                    class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-md bg-orange-600/10 text-orange-600 sm:h-12 sm:w-12">
                                    <!-- Heroicon name: outline/shield-check -->
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M5.25 14.25h13.5m-13.5 0a3 3 0 01-3-3m3 3a3 3 0 100 6h13.5a3 3 0 100-6m-16.5-3a3 3 0 013-3h13.5a3 3 0 013 3m-19.5 0a4.5 4.5 0 01.9-2.7L5.737 5.1a3.375 3.375 0 012.7-1.35h7.126c1.062 0 2.062.5 2.7 1.35l2.587 3.45a4.5 4.5 0 01.9 2.7m0 0a3 3 0 01-3 3m0 3h.008v.008h-.008v-.008zm0-6h.008v.008h-.008v-.008zm-3 6h.008v.008h-.008v-.008zm0-6h.008v.008h-.008v-.008z" />
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <p class="text-base font-medium text-gray-900">Dedicated Server</p>
                                    <p class="mt-1 text-sm text-gray-500">Multiple Internet Connection up to 10Gbps,
                                        Monitoring 24/7.</p>
                                </div>
                            </a>

                            <a href="#" class="-m-3 flex items-start rounded-lg p-3 hover:bg-gray-50">
                                <div
                                    class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-md bg-orange-600/10 text-orange-600 sm:h-12 sm:w-12">
                                    <!-- Heroicon name: outline/squares-2x2 -->
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M5.25 14.25h13.5m-13.5 0a3 3 0 01-3-3m3 3a3 3 0 100 6h13.5a3 3 0 100-6m-16.5-3a3 3 0 013-3h13.5a3 3 0 013 3m-19.5 0a4.5 4.5 0 01.9-2.7L5.737 5.1a3.375 3.375 0 012.7-1.35h7.126c1.062 0 2.062.5 2.7 1.35l2.587 3.45a4.5 4.5 0 01.9 2.7m0 0a3 3 0 01-3 3m0 3h.008v.008h-.008v-.008zm0-6h.008v.008h-.008v-.008zm-3 6h.008v.008h-.008v-.008zm0-6h.008v.008h-.008v-.008z" />
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <p class="text-base font-medium text-gray-900">Colocation Server</p>
                                    <p class="mt-1 text-sm text-gray-500">99% Uptime Server, UPS Backup, On-Site &
                                        OffSite Monitoring.</p>
                                </div>
                            </a>

                            <a href="#" class="-m-3 flex items-start rounded-lg p-3 hover:bg-gray-50">
                                <div
                                    class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-md bg-orange-600/10 text-orange-600 sm:h-12 sm:w-12">
                                    <!-- Heroicon name: outline/arrow-path -->
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M5.25 14.25h13.5m-13.5 0a3 3 0 01-3-3m3 3a3 3 0 100 6h13.5a3 3 0 100-6m-16.5-3a3 3 0 013-3h13.5a3 3 0 013 3m-19.5 0a4.5 4.5 0 01.9-2.7L5.737 5.1a3.375 3.375 0 012.7-1.35h7.126c1.062 0 2.062.5 2.7 1.35l2.587 3.45a4.5 4.5 0 01.9 2.7m0 0a3 3 0 01-3 3m0 3h.008v.008h-.008v-.008zm0-6h.008v.008h-.008v-.008zm-3 6h.008v.008h-.008v-.008zm0-6h.008v.008h-.008v-.008z" />
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <p class="text-base font-medium text-gray-900">Leased To Owned Server</p>
                                    <p class="mt-1 text-sm text-gray-500">Sekarang sewa, Nanti jadi hak milik Anda!</p>
                                </div>
                            </a>

                            <a href="#" class="-m-3 flex items-start rounded-lg p-3 hover:bg-gray-50">
                                <div
                                    class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-md bg-orange-600/10 text-orange-600 sm:h-12 sm:w-12">
                                    <!-- Heroicon name: outline/document-chart-bar -->
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M5.25 14.25h13.5m-13.5 0a3 3 0 01-3-3m3 3a3 3 0 100 6h13.5a3 3 0 100-6m-16.5-3a3 3 0 013-3h13.5a3 3 0 013 3m-19.5 0a4.5 4.5 0 01.9-2.7L5.737 5.1a3.375 3.375 0 012.7-1.35h7.126c1.062 0 2.062.5 2.7 1.35l2.587 3.45a4.5 4.5 0 01.9 2.7m0 0a3 3 0 01-3 3m0 3h.008v.008h-.008v-.008zm0-6h.008v.008h-.008v-.008zm-3 6h.008v.008h-.008v-.008zm0-6h.008v.008h-.008v-.008z" />
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <p class="text-base font-medium text-gray-900">Fleksibel VPS</p>
                                    <p class="mt-1 text-sm text-gray-500">KVM Pay as you Growth! Mulai Rp 200/jam.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Domain -->
            <div class="relative" x-data="{ domain: false }">
                <button type="button"
                    class="text-gray-700 group inline-flex items-center rounded-md bg-white text-base font-medium hover:text-gray-900 focus:outline-none focus:text-gray-900"
                    aria-expanded="false" @click="domain = true">
                    <span>Domain</span>
                    <svg class="text-gray-400 ml-2 h-5 w-5 group-hover:text-gray-500"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                        aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                            clip-rule="evenodd" />
                    </svg>
                </button>

                <div class="absolute z-10 -ml-4 mt-5 w-screen max-w-md transform lg:ml-0 lg:max-w-2xl" x-show="domain"
                    @click.away="domain = false" x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 translate-y-1"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:leave="transition ease-in duration-150"
                    x-transition:leave-start="opacity-100 translate-y-0"
                    x-transition:leave-end="opacity-0 translate-y-1">
                    <div class="overflow-hidden rounded-lg shadow-lg ring-1 ring-black ring-opacity-5">
                        <div class="relative grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-8 lg:grid-cols-2">
                            <a href="#" class="-m-3 flex items-start rounded-lg p-3 hover:bg-gray-50">
                                <div
                                    class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-md bg-orange-600/10 text-orange-600 sm:h-12 sm:w-12">
                                    <!-- Heroicon name: outline/chart-bar -->
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12.75 3.03v.568c0 .334.148.65.405.864l1.068.89c.442.369.535 1.01.216 1.49l-.51.766a2.25 2.25 0 01-1.161.886l-.143.048a1.107 1.107 0 00-.57 1.664c.369.555.169 1.307-.427 1.605L9 13.125l.423 1.059a.956.956 0 01-1.652.928l-.679-.906a1.125 1.125 0 00-1.906.172L4.5 15.75l-.612.153M12.75 3.031a9 9 0 00-8.862 12.872M12.75 3.031a9 9 0 016.69 14.036m0 0l-.177-.529A2.25 2.25 0 0017.128 15H16.5l-.324-.324a1.453 1.453 0 00-2.328.377l-.036.073a1.586 1.586 0 01-.982.816l-.99.282c-.55.157-.894.702-.8 1.267l.073.438c.08.474.49.821.97.821.846 0 1.598.542 1.865 1.345l.215.643m5.276-3.67a9.012 9.012 0 01-5.276 3.67m0 0a9 9 0 01-10.275-4.835M15.75 9c0 .896-.393 1.7-1.016 2.25" />
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <p class="text-base font-medium text-gray-900">Daftar Domain</p>
                                    <p class="mt-1 text-sm text-gray-500">Miliki Domain terbaik untuk identitas website
                                        Anda.</p>
                                </div>
                            </a>

                            <a href="#" class="-m-3 flex items-start rounded-lg p-3 hover:bg-gray-50">
                                <div
                                    class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-md bg-orange-600/10 text-orange-600 sm:h-12 sm:w-12">
                                    <!-- Heroicon name: outline/cursor-arrow-rays -->
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12.75 3.03v.568c0 .334.148.65.405.864l1.068.89c.442.369.535 1.01.216 1.49l-.51.766a2.25 2.25 0 01-1.161.886l-.143.048a1.107 1.107 0 00-.57 1.664c.369.555.169 1.307-.427 1.605L9 13.125l.423 1.059a.956.956 0 01-1.652.928l-.679-.906a1.125 1.125 0 00-1.906.172L4.5 15.75l-.612.153M12.75 3.031a9 9 0 00-8.862 12.872M12.75 3.031a9 9 0 016.69 14.036m0 0l-.177-.529A2.25 2.25 0 0017.128 15H16.5l-.324-.324a1.453 1.453 0 00-2.328.377l-.036.073a1.586 1.586 0 01-.982.816l-.99.282c-.55.157-.894.702-.8 1.267l.073.438c.08.474.49.821.97.821.846 0 1.598.542 1.865 1.345l.215.643m5.276-3.67a9.012 9.012 0 01-5.276 3.67m0 0a9 9 0 01-10.275-4.835M15.75 9c0 .896-.393 1.7-1.016 2.25" />
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <p class="text-base font-medium text-gray-900">Domain Premium .id</p>
                                    <p class="mt-1 text-sm text-gray-500">Domain premium berkualitas untuk website
                                        Anda.</p>
                                </div>
                            </a>

                            <a href="#" class="-m-3 flex items-start rounded-lg p-3 hover:bg-gray-50">
                                <div
                                    class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-md bg-orange-600/10 text-orange-600 sm:h-12 sm:w-12">
                                    <!-- Heroicon name: outline/shield-check -->
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12.75 3.03v.568c0 .334.148.65.405.864l1.068.89c.442.369.535 1.01.216 1.49l-.51.766a2.25 2.25 0 01-1.161.886l-.143.048a1.107 1.107 0 00-.57 1.664c.369.555.169 1.307-.427 1.605L9 13.125l.423 1.059a.956.956 0 01-1.652.928l-.679-.906a1.125 1.125 0 00-1.906.172L4.5 15.75l-.612.153M12.75 3.031a9 9 0 00-8.862 12.872M12.75 3.031a9 9 0 016.69 14.036m0 0l-.177-.529A2.25 2.25 0 0017.128 15H16.5l-.324-.324a1.453 1.453 0 00-2.328.377l-.036.073a1.586 1.586 0 01-.982.816l-.99.282c-.55.157-.894.702-.8 1.267l.073.438c.08.474.49.821.97.821.846 0 1.598.542 1.865 1.345l.215.643m5.276-3.67a9.012 9.012 0 01-5.276 3.67m0 0a9 9 0 01-10.275-4.835M15.75 9c0 .896-.393 1.7-1.016 2.25" />
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <p class="text-base font-medium text-gray-900">Domain Backorder</p>
                                    <p class="mt-1 text-sm text-gray-500">Dapatkan Domain berkualitas yang tidak
                                        diperbarui pemiliknya.</p>
                                </div>
                            </a>

                            <a href="#" class="-m-3 flex items-start rounded-lg p-3 hover:bg-gray-50">
                                <div
                                    class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-md bg-orange-600/10 text-orange-600 sm:h-12 sm:w-12">
                                    <!-- Heroicon name: outline/squares-2x2 -->
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12.75 3.03v.568c0 .334.148.65.405.864l1.068.89c.442.369.535 1.01.216 1.49l-.51.766a2.25 2.25 0 01-1.161.886l-.143.048a1.107 1.107 0 00-.57 1.664c.369.555.169 1.307-.427 1.605L9 13.125l.423 1.059a.956.956 0 01-1.652.928l-.679-.906a1.125 1.125 0 00-1.906.172L4.5 15.75l-.612.153M12.75 3.031a9 9 0 00-8.862 12.872M12.75 3.031a9 9 0 016.69 14.036m0 0l-.177-.529A2.25 2.25 0 0017.128 15H16.5l-.324-.324a1.453 1.453 0 00-2.328.377l-.036.073a1.586 1.586 0 01-.982.816l-.99.282c-.55.157-.894.702-.8 1.267l.073.438c.08.474.49.821.97.821.846 0 1.598.542 1.865 1.345l.215.643m5.276-3.67a9.012 9.012 0 01-5.276 3.67m0 0a9 9 0 01-10.275-4.835M15.75 9c0 .896-.393 1.7-1.016 2.25" />
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <p class="text-base font-medium text-gray-900">Domain Privacy Protection</p>
                                    <p class="mt-1 text-sm text-gray-500">Lindungi data pribadi & rahasia Anda dari
                                        publik.</p>
                                </div>
                            </a>

                            <a href="#" class="-m-3 flex items-start rounded-lg p-3 hover:bg-gray-50">
                                <div
                                    class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-md bg-orange-600/10 text-orange-600 sm:h-12 sm:w-12">
                                    <!-- Heroicon name: outline/arrow-path -->
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12.75 3.03v.568c0 .334.148.65.405.864l1.068.89c.442.369.535 1.01.216 1.49l-.51.766a2.25 2.25 0 01-1.161.886l-.143.048a1.107 1.107 0 00-.57 1.664c.369.555.169 1.307-.427 1.605L9 13.125l.423 1.059a.956.956 0 01-1.652.928l-.679-.906a1.125 1.125 0 00-1.906.172L4.5 15.75l-.612.153M12.75 3.031a9 9 0 00-8.862 12.872M12.75 3.031a9 9 0 016.69 14.036m0 0l-.177-.529A2.25 2.25 0 0017.128 15H16.5l-.324-.324a1.453 1.453 0 00-2.328.377l-.036.073a1.586 1.586 0 01-.982.816l-.99.282c-.55.157-.894.702-.8 1.267l.073.438c.08.474.49.821.97.821.846 0 1.598.542 1.865 1.345l.215.643m5.276-3.67a9.012 9.012 0 01-5.276 3.67m0 0a9 9 0 01-10.275-4.835M15.75 9c0 .896-.393 1.7-1.016 2.25" />
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <p class="text-base font-medium text-gray-900">Sewa Domain</p>
                                    <p class="mt-1 text-sm text-gray-500">Dapatkan Domain Premium tanpa bayar biaya
                                        penuh.</p>
                                </div>
                            </a>

                            <a href="#" class="-m-3 flex items-start rounded-lg p-3 hover:bg-gray-50">
                                <div
                                    class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-md bg-orange-600/10 text-orange-600 sm:h-12 sm:w-12">
                                    <!-- Heroicon name: outline/document-chart-bar -->
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12.75 3.03v.568c0 .334.148.65.405.864l1.068.89c.442.369.535 1.01.216 1.49l-.51.766a2.25 2.25 0 01-1.161.886l-.143.048a1.107 1.107 0 00-.57 1.664c.369.555.169 1.307-.427 1.605L9 13.125l.423 1.059a.956.956 0 01-1.652.928l-.679-.906a1.125 1.125 0 00-1.906.172L4.5 15.75l-.612.153M12.75 3.031a9 9 0 00-8.862 12.872M12.75 3.031a9 9 0 016.69 14.036m0 0l-.177-.529A2.25 2.25 0 0017.128 15H16.5l-.324-.324a1.453 1.453 0 00-2.328.377l-.036.073a1.586 1.586 0 01-.982.816l-.99.282c-.55.157-.894.702-.8 1.267l.073.438c.08.474.49.821.97.821.846 0 1.598.542 1.865 1.345l.215.643m5.276-3.67a9.012 9.012 0 01-5.276 3.67m0 0a9 9 0 01-10.275-4.835M15.75 9c0 .896-.393 1.7-1.016 2.25" />
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <p class="text-base font-medium text-gray-900">Jual Beli & Lelang Domain</p>
                                    <p class="mt-1 text-sm text-gray-500">Untung berlipat dari Domain cantik dengan
                                        sistem lelang.</p>
                                </div>
                            </a>

                            <a href="#" class="-m-3 flex items-start rounded-lg p-3 hover:bg-gray-50">
                                <div
                                    class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-md bg-orange-600/10 text-orange-600 sm:h-12 sm:w-12">
                                    <!-- Heroicon name: outline/document-chart-bar -->
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12.75 3.03v.568c0 .334.148.65.405.864l1.068.89c.442.369.535 1.01.216 1.49l-.51.766a2.25 2.25 0 01-1.161.886l-.143.048a1.107 1.107 0 00-.57 1.664c.369.555.169 1.307-.427 1.605L9 13.125l.423 1.059a.956.956 0 01-1.652.928l-.679-.906a1.125 1.125 0 00-1.906.172L4.5 15.75l-.612.153M12.75 3.031a9 9 0 00-8.862 12.872M12.75 3.031a9 9 0 016.69 14.036m0 0l-.177-.529A2.25 2.25 0 0017.128 15H16.5l-.324-.324a1.453 1.453 0 00-2.328.377l-.036.073a1.586 1.586 0 01-.982.816l-.99.282c-.55.157-.894.702-.8 1.267l.073.438c.08.474.49.821.97.821.846 0 1.598.542 1.865 1.345l.215.643m5.276-3.67a9.012 9.012 0 01-5.276 3.67m0 0a9 9 0 01-10.275-4.835M15.75 9c0 .896-.393 1.7-1.016 2.25" />
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <p class="text-base font-medium text-gray-900">Domain Negotiator/Broker</p>
                                    <p class="mt-1 text-sm text-gray-500">Broker negosiasikan harga terbaik untuk
                                        Domain impian Anda.</p>
                                </div>
                            </a>

                            <a href="#" class="-m-3 flex items-start rounded-lg p-3 hover:bg-gray-50">
                                <div
                                    class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-md bg-orange-600/10 text-orange-600 sm:h-12 sm:w-12">
                                    <!-- Heroicon name: outline/document-chart-bar -->
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12.75 3.03v.568c0 .334.148.65.405.864l1.068.89c.442.369.535 1.01.216 1.49l-.51.766a2.25 2.25 0 01-1.161.886l-.143.048a1.107 1.107 0 00-.57 1.664c.369.555.169 1.307-.427 1.605L9 13.125l.423 1.059a.956.956 0 01-1.652.928l-.679-.906a1.125 1.125 0 00-1.906.172L4.5 15.75l-.612.153M12.75 3.031a9 9 0 00-8.862 12.872M12.75 3.031a9 9 0 016.69 14.036m0 0l-.177-.529A2.25 2.25 0 0017.128 15H16.5l-.324-.324a1.453 1.453 0 00-2.328.377l-.036.073a1.586 1.586 0 01-.982.816l-.99.282c-.55.157-.894.702-.8 1.267l.073.438c.08.474.49.821.97.821.846 0 1.598.542 1.865 1.345l.215.643m5.276-3.67a9.012 9.012 0 01-5.276 3.67m0 0a9 9 0 01-10.275-4.835M15.75 9c0 .896-.393 1.7-1.016 2.25" />
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <p class="text-base font-medium text-gray-900">Private Label Domain Reseller</p>
                                    <p class="mt-1 text-sm text-gray-500">Paket Reseller Domain dengan harga yang
                                        bersaing.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Email Suite -->
            <div class="relative" x-data="{ email: false }">
                <button type="button"
                    class="text-gray-700 group inline-flex items-center rounded-md bg-white text-base font-medium hover:text-gray-900 focus:outline-none focus:text-gray-900"
                    aria-expanded="false" @click="email = true">
                    <span>Email Suite</span>
                    <svg class="text-gray-400 ml-2 h-5 w-5 group-hover:text-gray-500"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                        aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                            clip-rule="evenodd" />
                    </svg>
                </button>

                <div class="absolute z-10 -ml-4 mt-5 w-screen max-w-md transform lg:ml-0 lg:max-w-xl" x-show="email"
                    @click.away="email = false" x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 translate-y-1"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:leave="transition ease-in duration-150"
                    x-transition:leave-start="opacity-100 translate-y-0"
                    x-transition:leave-end="opacity-0 translate-y-1">
                    <div class="overflow-hidden rounded-lg shadow-lg ring-1 ring-black ring-opacity-5">
                        <div class="relative grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-8 lg:grid-cols-2">
                            <a href="#" class="-m-3 flex items-start rounded-lg p-3 hover:bg-gray-50">
                                <div
                                    class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-md bg-orange-600/10 text-orange-600 sm:h-12 sm:w-12">
                                    <!-- Heroicon name: outline/chart-bar -->
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        aria-hidden="true">
                                        <path
                                            d="M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z" />
                                        <path
                                            d="M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z" />
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <p class="text-base font-medium text-gray-900">Titan Email</p>
                                    <p class="mt-1 text-sm text-gray-500">Bisnis tampil profesional dengan email domain
                                        khusus dari Titan.</p>
                                </div>
                            </a>

                            <a href="#" class="-m-3 flex items-start rounded-lg p-3 hover:bg-gray-50">
                                <div
                                    class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-md bg-orange-600/10 text-orange-600 sm:h-12 sm:w-12">
                                    <!-- Heroicon name: outline/cursor-arrow-rays -->
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        aria-hidden="true">
                                        <path
                                            d="M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z" />
                                        <path
                                            d="M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z" />
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <p class="text-base font-medium text-gray-900">EC Collaboration Suite</p>
                                    <p class="mt-1 text-sm text-gray-500">Email premium dengan Kapasitas 25GB hingga
                                        1000 akun.</p>
                                </div>
                            </a>

                            <a href="#" class="-m-3 flex items-start rounded-lg p-3 hover:bg-gray-50">
                                <div
                                    class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-md bg-orange-600/10 text-orange-600 sm:h-12 sm:w-12">
                                    <!-- Heroicon name: outline/shield-check -->
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        aria-hidden="true">
                                        <path
                                            d="M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z" />
                                        <path
                                            d="M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z" />
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <p class="text-base font-medium text-gray-900">Microsoft 365</p>
                                    <p class="mt-1 text-sm text-gray-500">Untuk meningkatkan produktivitas kerja
                                        perusahaan Anda.</p>
                                </div>
                            </a>

                            <a href="#" class="-m-3 flex items-start rounded-lg p-3 hover:bg-gray-50">
                                <div
                                    class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-md bg-orange-600/10 text-orange-600 sm:h-12 sm:w-12">
                                    <!-- Heroicon name: outline/squares-2x2 -->
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        aria-hidden="true">
                                        <path
                                            d="M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z" />
                                        <path
                                            d="M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z" />
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <p class="text-base font-medium text-gray-900">Google Workspace</p>
                                    <p class="mt-1 text-sm text-gray-500">Layanan Premium dari Google dengan Nama
                                        Domain Anda.</p>
                                </div>
                            </a>

                            <a href="#" class="-m-3 flex items-start rounded-lg p-3 hover:bg-gray-50">
                                <div
                                    class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-md bg-orange-600/10 text-orange-600 sm:h-12 sm:w-12">
                                    <!-- Heroicon name: outline/arrow-path -->
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        aria-hidden="true">
                                        <path
                                            d="M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z" />
                                        <path
                                            d="M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z" />
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <p class="text-base font-medium text-gray-900">Mailtogo</p>
                                    <p class="mt-1 text-sm text-gray-500">Marketing online lebih mudah dijalankan
                                        melalui MailToGo.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Services -->
            <div class="relative" x-data="{ services: false }">
                <button type="button"
                    class="text-gray-700 group inline-flex items-center rounded-md bg-white text-base font-medium hover:text-gray-900 focus:outline-none focus:text-gray-900"
                    aria-expanded="false" @click="services = true">
                    <span>Services</span>
                    <svg class="text-gray-400 ml-2 h-5 w-5 group-hover:text-gray-500"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                        aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                            clip-rule="evenodd" />
                    </svg>
                </button>

                <div class="absolute z-10 -ml-4 mt-5 w-screen max-w-md transform lg:ml-0 lg:max-w-lg"
                    x-show="services" @click.away="services = false"
                    x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 translate-y-1"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:leave="transition ease-in duration-150"
                    x-transition:leave-start="opacity-100 translate-y-0"
                    x-transition:leave-end="opacity-0 translate-y-1">
                    <div class="overflow-hidden rounded-lg shadow-lg ring-1 ring-black ring-opacity-5">
                        <div class="relative grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-8 lg:grid-cols-2">
                            <a href="#" class="-m-3 flex items-start rounded-lg p-3 hover:bg-gray-50">
                                <div
                                    class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-md bg-orange-600/10 text-orange-600 sm:h-12 sm:w-12">
                                    <!-- Heroicon name: outline/chart-bar -->
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M2.25 5.25a3 3 0 013-3h13.5a3 3 0 013 3V15a3 3 0 01-3 3h-3v.257c0 .597.237 1.17.659 1.591l.621.622a.75.75 0 01-.53 1.28h-9a.75.75 0 01-.53-1.28l.621-.622a2.25 2.25 0 00.659-1.59V18h-3a3 3 0 01-3-3V5.25zm1.5 0v7.5a1.5 1.5 0 001.5 1.5h13.5a1.5 1.5 0 001.5-1.5v-7.5a1.5 1.5 0 00-1.5-1.5H5.25a1.5 1.5 0 00-1.5 1.5z"
                                            clip-rule="evenodd" />

                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <p class="text-base font-medium text-gray-900">SSL</p>
                                    <p class="mt-1 text-sm text-gray-500">Amankan komunikasi data Anda.</p>
                                </div>
                            </a>

                            <a href="#" class="-m-3 flex items-start rounded-lg p-3 hover:bg-gray-50">
                                <div
                                    class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-md bg-orange-600/10 text-orange-600 sm:h-12 sm:w-12">
                                    <!-- Heroicon name: outline/cursor-arrow-rays -->
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M2.25 5.25a3 3 0 013-3h13.5a3 3 0 013 3V15a3 3 0 01-3 3h-3v.257c0 .597.237 1.17.659 1.591l.621.622a.75.75 0 01-.53 1.28h-9a.75.75 0 01-.53-1.28l.621-.622a2.25 2.25 0 00.659-1.59V18h-3a3 3 0 01-3-3V5.25zm1.5 0v7.5a1.5 1.5 0 001.5 1.5h13.5a1.5 1.5 0 001.5-1.5v-7.5a1.5 1.5 0 00-1.5-1.5H5.25a1.5 1.5 0 00-1.5 1.5z"
                                            clip-rule="evenodd" />

                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <p class="text-base font-medium text-gray-900">Advanced Backup</p>
                                    <p class="mt-1 text-sm text-gray-500">Advanced Backup berbasis Acronis.</p>
                                </div>
                            </a>

                            <a href="#" class="-m-3 flex items-start rounded-lg p-3 hover:bg-gray-50">
                                <div
                                    class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-md bg-orange-600/10 text-orange-600 sm:h-12 sm:w-12">
                                    <!-- Heroicon name: outline/shield-check -->
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M2.25 5.25a3 3 0 013-3h13.5a3 3 0 013 3V15a3 3 0 01-3 3h-3v.257c0 .597.237 1.17.659 1.591l.621.622a.75.75 0 01-.53 1.28h-9a.75.75 0 01-.53-1.28l.621-.622a2.25 2.25 0 00.659-1.59V18h-3a3 3 0 01-3-3V5.25zm1.5 0v7.5a1.5 1.5 0 001.5 1.5h13.5a1.5 1.5 0 001.5-1.5v-7.5a1.5 1.5 0 00-1.5-1.5H5.25a1.5 1.5 0 00-1.5 1.5z"
                                            clip-rule="evenodd" />

                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <p class="text-base font-medium text-gray-900">Extended Support</p>
                                    <p class="mt-1 text-sm text-gray-500">Bantuan ekstra untuk akun Hosting Cpanel.</p>
                                </div>
                            </a>

                            <a href="#" class="-m-3 flex items-start rounded-lg p-3 hover:bg-gray-50">
                                <div
                                    class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-md bg-orange-600/10 text-orange-600 sm:h-12 sm:w-12">
                                    <!-- Heroicon name: outline/squares-2x2 -->
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M2.25 5.25a3 3 0 013-3h13.5a3 3 0 013 3V15a3 3 0 01-3 3h-3v.257c0 .597.237 1.17.659 1.591l.621.622a.75.75 0 01-.53 1.28h-9a.75.75 0 01-.53-1.28l.621-.622a2.25 2.25 0 00.659-1.59V18h-3a3 3 0 01-3-3V5.25zm1.5 0v7.5a1.5 1.5 0 001.5 1.5h13.5a1.5 1.5 0 001.5-1.5v-7.5a1.5 1.5 0 00-1.5-1.5H5.25a1.5 1.5 0 00-1.5 1.5z"
                                            clip-rule="evenodd" />

                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <p class="text-base font-medium text-gray-900">Offline Backup</p>
                                    <p class="mt-1 text-sm text-gray-500">Backup offline dari server Anda.</p>
                                </div>
                            </a>

                            <a href="#" class="-m-3 flex items-start rounded-lg p-3 hover:bg-gray-50">
                                <div
                                    class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-md bg-orange-600/10 text-orange-600 sm:h-12 sm:w-12">
                                    <!-- Heroicon name: outline/arrow-path -->
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M2.25 5.25a3 3 0 013-3h13.5a3 3 0 013 3V15a3 3 0 01-3 3h-3v.257c0 .597.237 1.17.659 1.591l.621.622a.75.75 0 01-.53 1.28h-9a.75.75 0 01-.53-1.28l.621-.622a2.25 2.25 0 00.659-1.59V18h-3a3 3 0 01-3-3V5.25zm1.5 0v7.5a1.5 1.5 0 001.5 1.5h13.5a1.5 1.5 0 001.5-1.5v-7.5a1.5 1.5 0 00-1.5-1.5H5.25a1.5 1.5 0 00-1.5 1.5z"
                                            clip-rule="evenodd" />

                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <p class="text-base font-medium text-gray-900">Licenses</p>
                                    <p class="mt-1 text-sm text-gray-500">Lisensi software bagi bisnis Anda.</p>
                                </div>
                            </a>

                            <a href="#" class="-m-3 flex items-start rounded-lg p-3 hover:bg-gray-50">
                                <div
                                    class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-md bg-orange-600/10 text-orange-600 sm:h-12 sm:w-12">
                                    <!-- Heroicon name: outline/document-chart-bar -->
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M2.25 5.25a3 3 0 013-3h13.5a3 3 0 013 3V15a3 3 0 01-3 3h-3v.257c0 .597.237 1.17.659 1.591l.621.622a.75.75 0 01-.53 1.28h-9a.75.75 0 01-.53-1.28l.621-.622a2.25 2.25 0 00.659-1.59V18h-3a3 3 0 01-3-3V5.25zm1.5 0v7.5a1.5 1.5 0 001.5 1.5h13.5a1.5 1.5 0 001.5-1.5v-7.5a1.5 1.5 0 00-1.5-1.5H5.25a1.5 1.5 0 00-1.5 1.5z"
                                            clip-rule="evenodd" />

                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <p class="text-base font-medium text-gray-900">Digital Signature</p>
                                    <p class="mt-1 text-sm text-gray-500">Asuransi downtime untuk Hosting.</p>
                                </div>
                            </a>

                            <a href="#" class="-m-3 flex items-start rounded-lg p-3 hover:bg-gray-50">
                                <div
                                    class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-md bg-orange-600/10 text-orange-600 sm:h-12 sm:w-12">
                                    <!-- Heroicon name: outline/shield-check -->
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M2.25 5.25a3 3 0 013-3h13.5a3 3 0 013 3V15a3 3 0 01-3 3h-3v.257c0 .597.237 1.17.659 1.591l.621.622a.75.75 0 01-.53 1.28h-9a.75.75 0 01-.53-1.28l.621-.622a2.25 2.25 0 00.659-1.59V18h-3a3 3 0 01-3-3V5.25zm1.5 0v7.5a1.5 1.5 0 001.5 1.5h13.5a1.5 1.5 0 001.5-1.5v-7.5a1.5 1.5 0 00-1.5-1.5H5.25a1.5 1.5 0 00-1.5 1.5z"
                                            clip-rule="evenodd" />

                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <p class="text-base font-medium text-gray-900">Manage The Box Server</p>
                                    <p class="mt-1 text-sm text-gray-500">Manage Service untuk mengatur Server Anda.
                                    </p>
                                </div>
                            </a>

                            <a href="#" class="-m-3 flex items-start rounded-lg p-3 hover:bg-gray-50">
                                <div
                                    class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-md bg-orange-600/10 text-orange-600 sm:h-12 sm:w-12">
                                    <!-- Heroicon name: outline/squares-2x2 -->
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M2.25 5.25a3 3 0 013-3h13.5a3 3 0 013 3V15a3 3 0 01-3 3h-3v.257c0 .597.237 1.17.659 1.591l.621.622a.75.75 0 01-.53 1.28h-9a.75.75 0 01-.53-1.28l.621-.622a2.25 2.25 0 00.659-1.59V18h-3a3 3 0 01-3-3V5.25zm1.5 0v7.5a1.5 1.5 0 001.5 1.5h13.5a1.5 1.5 0 001.5-1.5v-7.5a1.5 1.5 0 00-1.5-1.5H5.25a1.5 1.5 0 00-1.5 1.5z"
                                            clip-rule="evenodd" />

                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <p class="text-base font-medium text-gray-900">Diego VPN</p>
                                    <p class="mt-1 text-sm text-gray-500">Private Network yang aman, super cepat, dan
                                        easy to use.</p>
                                </div>
                            </a>

                            <a href="#" class="-m-3 flex items-start rounded-lg p-3 hover:bg-gray-50">
                                <div
                                    class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-md bg-orange-600/10 text-orange-600 sm:h-12 sm:w-12">
                                    <!-- Heroicon name: outline/arrow-path -->
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M2.25 5.25a3 3 0 013-3h13.5a3 3 0 013 3V15a3 3 0 01-3 3h-3v.257c0 .597.237 1.17.659 1.591l.621.622a.75.75 0 01-.53 1.28h-9a.75.75 0 01-.53-1.28l.621-.622a2.25 2.25 0 00.659-1.59V18h-3a3 3 0 01-3-3V5.25zm1.5 0v7.5a1.5 1.5 0 001.5 1.5h13.5a1.5 1.5 0 001.5-1.5v-7.5a1.5 1.5 0 00-1.5-1.5H5.25a1.5 1.5 0 00-1.5 1.5z"
                                            clip-rule="evenodd" />

                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <p class="text-base font-medium text-gray-900">NAS Asustor</p>
                                    <p class="mt-1 text-sm text-gray-500">Backup server yang mudah digunakan tanpa
                                        perlu staff IT, mampu berjalan 24/7 dengan garansi 3 Tahun</p>
                                </div>
                            </a>

                            <a href="#" class="-m-3 flex items-start rounded-lg p-3 hover:bg-gray-50">
                                <div
                                    class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-md bg-orange-600/10 text-orange-600 sm:h-12 sm:w-12">
                                    <!-- Heroicon name: outline/document-chart-bar -->
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M2.25 5.25a3 3 0 013-3h13.5a3 3 0 013 3V15a3 3 0 01-3 3h-3v.257c0 .597.237 1.17.659 1.591l.621.622a.75.75 0 01-.53 1.28h-9a.75.75 0 01-.53-1.28l.621-.622a2.25 2.25 0 00.659-1.59V18h-3a3 3 0 01-3-3V5.25zm1.5 0v7.5a1.5 1.5 0 001.5 1.5h13.5a1.5 1.5 0 001.5-1.5v-7.5a1.5 1.5 0 00-1.5-1.5H5.25a1.5 1.5 0 00-1.5 1.5z"
                                            clip-rule="evenodd" />

                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <p class="text-base font-medium text-gray-900">Reports</p>
                                    <p class="mt-1 text-sm text-gray-500">Get detailed reports that will help you make
                                        more informed decisions</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Internet Access -->
            <div class="relative" x-data="{ internet: false }">
                <button type="button"
                    class="text-gray-700 group inline-flex items-center rounded-md bg-white text-base font-medium hover:text-gray-900 focus:outline-none focus:text-gray-900"
                    aria-expanded="false" @click="internet = true">
                    <span>Internet Access</span>
                    <!-- Heroicon name: mini/chevron-down -->
                    <svg class="text-gray-400 ml-2 h-5 w-5 group-hover:text-gray-500"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                        aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                            clip-rule="evenodd" />
                    </svg>
                </button>

                <div class="absolute left-1/2 z-10 mt-3 w-screen max-w-xs -translate-x-1/2 transform px-2 sm:px-0"
                    x-show="internet" @click.away="internet = false"
                    x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 translate-y-1"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:leave="transition ease-in duration-150"
                    x-transition:leave-start="opacity-100 translate-y-0"
                    x-transition:leave-end="opacity-0 translate-y-1">
                    <div class="overflow-hidden rounded-lg shadow-lg ring-1 ring-black ring-opacity-5">
                        <div class="relative grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-8">
                            <a href="#" class="-m-3 flex items-start rounded-lg p-3 hover:bg-gray-50">
                                <div
                                    class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-md bg-orange-600/10 text-orange-600 sm:h-12 sm:w-12">
                                    <!-- Heroicon name: outline/document-chart-bar -->
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z" />
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <p class="text-base font-medium text-gray-900">Broadband Home</p>
                                    <p class="mt-1 text-sm text-gray-500">Internet untuk kebutuhan rumah/personal
                                        dengan koneksi stabil tanpa buffering hingga 1Gbps. Kuota Unlimited.</p>
                                </div>
                            </a>

                            <a href="#" class="-m-3 flex items-start rounded-lg p-3 hover:bg-gray-50">
                                <div
                                    class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-md bg-orange-600/10 text-orange-600 sm:h-12 sm:w-12">
                                    <!-- Heroicon name: outline/document-chart-bar -->
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z" />
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <p class="text-base font-medium text-gray-900">Broadband Business</p>
                                    <p class="mt-1 text-sm text-gray-500">Jalankan bisnis bisa lebih fokus dengan
                                        jaringan internet cepat, koneksi stabil, dan aman.</p>
                                </div>
                            </a>

                            <a href="#" class="-m-3 flex items-start rounded-lg p-3 hover:bg-gray-50">
                                <div
                                    class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-md bg-orange-600/10 text-orange-600 sm:h-12 sm:w-12">
                                    <!-- Heroicon name: outline/document-chart-bar -->
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z" />
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <p class="text-base font-medium text-gray-900">Broadband Wireless</p>
                                    <p class="mt-1 text-sm text-gray-500">Internet dengan teknologi wireless super
                                        cepat, bebas FUP untuk kebutuhan rumah & bisnis.</p>
                                </div>
                            </a>

                            <a href="#" class="-m-3 flex items-start rounded-lg p-3 hover:bg-gray-50">
                                <div
                                    class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-md bg-orange-600/10 text-orange-600 sm:h-12 sm:w-12">
                                    <!-- Heroicon name: outline/document-chart-bar -->
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z" />
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <p class="text-base font-medium text-gray-900">Check Coverage</p>
                                    <p class="mt-1 text-sm text-gray-500">Mau pasang internet? Cek jangkauan internet
                                        Broadband Qwords di area rumah Anda.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <div class="hidden items-center justify-end xl:flex xl:flex-1 lg:w-0">
            <a href="#"
                class="ml-8 inline-flex items-center justify-center whitespace-nowrap rounded-md border border-transparent bg-orange-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-orange-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange-600">Log
                In</a>
        </div>
    </div>

    <!--
      Mobile menu
    -->
    <div class="absolute z-30 inset-x-0 top-0 origin-top-right transform p-2 transition xl:hidden" x-show="mobile"
        @click.away="mobile = false" x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-100" x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-95">
        <div class="divide-y-2 divide-gray-50 rounded-lg bg-white shadow-lg ring-1 ring-black ring-opacity-5">
            <div class="px-5 pt-5 pb-6">
                <div class="flex items-center justify-between">
                    <div>
                        <img class="h-8 w-auto" src="{{ asset('media/header/logo-qw-light.webp') }}" alt="Qwords">
                    </div>
                    <div class="-mr-2" @click="mobile = false">
                        <button type="button"
                            class="inline-flex items-center justify-center rounded-md bg-white p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-orange-500">
                            <span class="sr-only">Tutup menu</span>
                            <!-- Heroicon name: outline/x-mark -->
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="mt-6">
                    <nav class="grid grid-cols-1 gap-7">
                        <a href="#" class="-m-3 flex items-center rounded-lg p-3 hover:bg-gray-50">
                            <div class="ml-4 text-base font-medium text-gray-900">Cloud Hosting</div>
                        </a>

                        <a href="#" class="-m-3 flex items-center rounded-lg p-3 hover:bg-gray-50">
                            <div class="ml-4 text-base font-medium text-gray-900">Server</div>
                        </a>

                        <a href="#" class="-m-3 flex items-center rounded-lg p-3 hover:bg-gray-50">
                            <div class="ml-4 text-base font-medium text-gray-900">Domain</div>
                        </a>

                        <a href="#" class="-m-3 flex items-center rounded-lg p-3 hover:bg-gray-50">
                            <div class="ml-4 text-base font-medium text-gray-900">Email Suite</div>
                        </a>

                        <a href="#" class="-m-3 flex items-center rounded-lg p-3 hover:bg-gray-50">
                            <div class="ml-4 text-base font-medium text-gray-900">Services</div>
                        </a>

                        <a href="#" class="-m-3 flex items-center rounded-lg p-3 hover:bg-gray-50">
                            <div class="ml-4 text-base font-medium text-gray-900">Internet Access</div>
                        </a>
                    </nav>
                </div>
            </div>
            <div class="py-6 px-5">
                <div class="mt-2">
                    <a href="#"
                        class="flex w-full items-center justify-center rounded-md border border-transparent bg-orange-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-orange-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange-600">Log
                        In</a>
                </div>
            </div>
        </div>
    </div>
</div>
