<div>
    <div class="w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto">
        <section class="py-10 bg-gray-50 font-poppins dark:bg-gray-800 rounded-lg">
            <div class="px-4 py-4 mx-auto max-w-7xl lg:py-6 md:px-6">
                <div class="flex flex-wrap mb-24 -mx-3">

                    <div class="w-full lg:w-1/4 lg:block">
                        <ol class="flex items-center whitespace-nowrap pb-5 pl-8">
                            <li class="inline-flex items-center">
                                <a class="flex items-center text-sm text-gray-500 hover:text-orange-500 focus:outline-none focus:text-orange-500 dark:text-neutral-500 dark:hover:text-blue-500 dark:focus:text-blue-500"
                                    href="/">
                                    Home
                                </a>
                                <svg class="flex-shrink-0 mx-2 overflow-visible size-4 text-gray-400 dark:text-neutral-600"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="m9 18 6-6-6-6"></path>
                                </svg>
                            </li>

                            <li class="inline-flex items-center text-sm font-semibold text-gray-800 truncate dark:text-neutral-200"
                                aria-current="page">
                                Daftar Produk
                            </li>
                        </ol>

                        {{-- categories list open --}}
                        <div
                            class="p-4 mb-5 bg-white border border-gray-200 dark:border-gray-900 dark:bg-gray-900 rounded">
                            <h2 class="text-2xl font-bold dark:text-gray-400"> Categories</h2>
                            <div class="w-16 pb-2 mb-6 border-b border-rose-600 dark:border-gray-400"></div>
                            <ul>
                                <li class="mb-4">
                                    <label for="" class="flex items-center dark:text-gray-400 ">
                                        <input type="checkbox" class="w-4 h-4 mr-2 rounded">
                                        <span class="text-lg">Makanan</span>
                                    </label>
                                </li>
                                <li class="mb-4">
                                    <label for="" class="flex items-center dark:text-gray-400 ">
                                        <input type="checkbox" class="w-4 h-4 mr-2 rounded">
                                        <span class="text-lg">Minuman</span>
                                    </label>
                                </li>
                                <li class="mb-4">
                                    <label for="" class="flex items-center dark:text-gray-400">
                                        <input type="checkbox" class="w-4 h-4 mr-2 rounded">
                                        <span class="text-lg">Jasa</span>
                                    </label>
                                </li>
                                <li class="mb-4">
                                    <label for="" class="flex items-center dark:text-gray-400">
                                        <input type="checkbox" class="w-4 h-4 mr-2 rounded">
                                        <span class="text-lg">Pakaian</span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                        {{-- categories list --}}


                    </div>

                    {{-- list product open --}}
                    <div class="w-full px-3 lg:w-3/4">
                        <div class="px-3 mb-4">
                            <div
                                class="items-center justify-start hidden px-3 py-2 md:flex dark:bg-gray-900 rounded-2xl">
                                <div class="flex items-center justify-between rounded-2xl">
                                    <select name="button" id="hs-dropdown-default"
                                        class="block w-40 text-base bg-white cursor-pointer dark:text-gray-400 dark:bg-gray-900 border-gray-800 border-hidden rounded-2xl">
                                        <option value="">Sort by latest</option>
                                        <option value="">Sort by Price</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                        <div
                            class="grid grid-cols-2 gap-x-6 gap-y-10 px-2 pb-20 sm:grid-cols-3 sm:px-8 lg:mt-16 lg:grid-cols-4 lg:gap-x-4 lg:px-0 animate-extract">
                            <article class="relative">
                                <div class="aspect-square overflow-hidden rounded-2xl">
                                    <img class="h-full w-full object-cover transition-all duration-300 group-hover:scale-125"
                                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="" />
                                </div>
                                <div class="mt-4 flex items-start justify-between">
                                    <div class="">
                                        <h3 class="text-xs font-semibold sm:text-sm md:text-base">
                                            <a href="#" title="" class="">
                                                Arabian Musk
                                                <span class="absolute" aria-hidden="true"></span>
                                            </a>
                                        </h3>
                                        <div class="mt-2 flex items-center">
                                            <svg class="block h-3 w-3 align-middle text-pink-600 sm:h-4 sm:w-4"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                                    class=""></path>
                                            </svg>
                                            <svg class="block h-3 w-3 align-middle text-pink-600 sm:h-4 sm:w-4"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                                    class=""></path>
                                            </svg>
                                            <svg class="block h-3 w-3 align-middle text-pink-600 sm:h-4 sm:w-4"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                                    class=""></path>
                                            </svg>
                                            <svg class="block h-3 w-3 align-middle text-pink-600 sm:h-4 sm:w-4"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                                    class=""></path>
                                            </svg>
                                            <svg class="block h-3 w-3 align-middle text-gray-400 sm:h-4 sm:w-4"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                                    class=""></path>
                                            </svg>
                                        </div>
                                    </div>
            
                                    <div class="text-right">
                                        <p class="block text-xs font-normal sm:text-sm md:text-base">
                                            <span class="text-xs font-normal sm:text-sm md:text-base">Rp.</span>
                                            <span class="text-xs font-normal sm:text-sm md:text-base">99.000</span>
                                        </p>
                                    </div>
                                </div>
                            </article>
                            <article class="relative">
                                <div class="aspect-square overflow-hidden rounded-2xl">
                                    <img class="h-full w-full object-cover transition-all duration-300 group-hover:scale-125"
                                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="" />
                                </div>
                                <div class="mt-4 flex items-start justify-between">
                                    <div class="">
                                        <h3 class="text-xs font-semibold sm:text-sm md:text-base">
                                            <a href="#" title="" class="">
                                                Arabian Musk
                                                <span class="absolute" aria-hidden="true"></span>
                                            </a>
                                        </h3>
                                        <div class="mt-2 flex items-center">
                                            <svg class="block h-3 w-3 align-middle text-pink-600 sm:h-4 sm:w-4"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                                    class=""></path>
                                            </svg>
                                            <svg class="block h-3 w-3 align-middle text-pink-600 sm:h-4 sm:w-4"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                                    class=""></path>
                                            </svg>
                                            <svg class="block h-3 w-3 align-middle text-pink-600 sm:h-4 sm:w-4"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                                    class=""></path>
                                            </svg>
                                            <svg class="block h-3 w-3 align-middle text-pink-600 sm:h-4 sm:w-4"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                                    class=""></path>
                                            </svg>
                                            <svg class="block h-3 w-3 align-middle text-gray-400 sm:h-4 sm:w-4"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                                    class=""></path>
                                            </svg>
                                        </div>
                                    </div>
            
                                    <div class="text-right">
                                        <p class="block text-xs font-normal sm:text-sm md:text-base">
                                            <span class="text-xs font-normal sm:text-sm md:text-base">Rp.</span>
                                            <span class="text-xs font-normal sm:text-sm md:text-base">99.000</span>
                                        </p>
                                    </div>
                                </div>
                            </article>
                            <article class="relative">
                                <div class="aspect-square overflow-hidden rounded-2xl">
                                    <img class="h-full w-full object-cover transition-all duration-300 group-hover:scale-125"
                                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="" />
                                </div>
                                <div class="mt-4 flex items-start justify-between">
                                    <div class="">
                                        <h3 class="text-xs font-semibold sm:text-sm md:text-base">
                                            <a href="#" title="" class="">
                                                Arabian Musk
                                                <span class="absolute" aria-hidden="true"></span>
                                            </a>
                                        </h3>
                                        <div class="mt-2 flex items-center">
                                            <svg class="block h-3 w-3 align-middle text-pink-600 sm:h-4 sm:w-4"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                                    class=""></path>
                                            </svg>
                                            <svg class="block h-3 w-3 align-middle text-pink-600 sm:h-4 sm:w-4"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                                    class=""></path>
                                            </svg>
                                            <svg class="block h-3 w-3 align-middle text-pink-600 sm:h-4 sm:w-4"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                                    class=""></path>
                                            </svg>
                                            <svg class="block h-3 w-3 align-middle text-pink-600 sm:h-4 sm:w-4"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                                    class=""></path>
                                            </svg>
                                            <svg class="block h-3 w-3 align-middle text-gray-400 sm:h-4 sm:w-4"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                                    class=""></path>
                                            </svg>
                                        </div>
                                    </div>
            
                                    <div class="text-right">
                                        <p class="block text-xs font-normal sm:text-sm md:text-base">
                                            <span class="text-xs font-normal sm:text-sm md:text-base">Rp.</span>
                                            <span class="text-xs font-normal sm:text-sm md:text-base">99.000</span>
                                        </p>
                                    </div>
                                </div>
                            </article>
                            <article class="relative">
                                <div class="aspect-square overflow-hidden rounded-2xl">
                                    <img class="h-full w-full object-cover transition-all duration-300 group-hover:scale-125"
                                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="" />
                                </div>
                                <div class="mt-4 flex items-start justify-between">
                                    <div class="">
                                        <h3 class="text-xs font-semibold sm:text-sm md:text-base">
                                            <a href="#" title="" class="">
                                                Arabian Musk
                                                <span class="absolute" aria-hidden="true"></span>
                                            </a>
                                        </h3>
                                        <div class="mt-2 flex items-center">
                                            <svg class="block h-3 w-3 align-middle text-pink-600 sm:h-4 sm:w-4"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                                    class=""></path>
                                            </svg>
                                            <svg class="block h-3 w-3 align-middle text-pink-600 sm:h-4 sm:w-4"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                                    class=""></path>
                                            </svg>
                                            <svg class="block h-3 w-3 align-middle text-pink-600 sm:h-4 sm:w-4"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                                    class=""></path>
                                            </svg>
                                            <svg class="block h-3 w-3 align-middle text-pink-600 sm:h-4 sm:w-4"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                                    class=""></path>
                                            </svg>
                                            <svg class="block h-3 w-3 align-middle text-gray-400 sm:h-4 sm:w-4"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                                    class=""></path>
                                            </svg>
                                        </div>
                                    </div>
            
                                    <div class="text-right">
                                        <p class="block text-xs font-normal sm:text-sm md:text-base">
                                            <span class="text-xs font-normal sm:text-sm md:text-base">Rp.</span>
                                            <span class="text-xs font-normal sm:text-sm md:text-base">99.000</span>
                                        </p>
                                    </div>
                                </div>
                            </article>
                            <article class="relative">
                                <div class="aspect-square overflow-hidden rounded-2xl">
                                    <img class="h-full w-full object-cover transition-all duration-300 group-hover:scale-125"
                                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="" />
                                </div>
                                <div class="mt-4 flex items-start justify-between">
                                    <div class="">
                                        <h3 class="text-xs font-semibold sm:text-sm md:text-base">
                                            <a href="#" title="" class="">
                                                Arabian Musk
                                                <span class="absolute" aria-hidden="true"></span>
                                            </a>
                                        </h3>
                                        <div class="mt-2 flex items-center">
                                            <svg class="block h-3 w-3 align-middle text-pink-600 sm:h-4 sm:w-4"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                                    class=""></path>
                                            </svg>
                                            <svg class="block h-3 w-3 align-middle text-pink-600 sm:h-4 sm:w-4"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                                    class=""></path>
                                            </svg>
                                            <svg class="block h-3 w-3 align-middle text-pink-600 sm:h-4 sm:w-4"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                                    class=""></path>
                                            </svg>
                                            <svg class="block h-3 w-3 align-middle text-pink-600 sm:h-4 sm:w-4"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                                    class=""></path>
                                            </svg>
                                            <svg class="block h-3 w-3 align-middle text-gray-400 sm:h-4 sm:w-4"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                                    class=""></path>
                                            </svg>
                                        </div>
                                    </div>
            
                                    <div class="text-right">
                                        <p class="block text-xs font-normal sm:text-sm md:text-base">
                                            <span class="text-xs font-normal sm:text-sm md:text-base">Rp.</span>
                                            <span class="text-xs font-normal sm:text-sm md:text-base">99.000</span>
                                        </p>
                                    </div>
                                </div>
                            </article>
                            <article class="relative">
                                <div class="aspect-square overflow-hidden rounded-2xl">
                                    <img class="h-full w-full object-cover transition-all duration-300 group-hover:scale-125"
                                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="" />
                                </div>
                                <div class="mt-4 flex items-start justify-between">
                                    <div class="">
                                        <h3 class="text-xs font-semibold sm:text-sm md:text-base">
                                            <a href="#" title="" class="">
                                                Arabian Musk
                                                <span class="absolute" aria-hidden="true"></span>
                                            </a>
                                        </h3>
                                        <div class="mt-2 flex items-center">
                                            <svg class="block h-3 w-3 align-middle text-pink-600 sm:h-4 sm:w-4"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                                    class=""></path>
                                            </svg>
                                            <svg class="block h-3 w-3 align-middle text-pink-600 sm:h-4 sm:w-4"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                                    class=""></path>
                                            </svg>
                                            <svg class="block h-3 w-3 align-middle text-pink-600 sm:h-4 sm:w-4"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                                    class=""></path>
                                            </svg>
                                            <svg class="block h-3 w-3 align-middle text-pink-600 sm:h-4 sm:w-4"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                                    class=""></path>
                                            </svg>
                                            <svg class="block h-3 w-3 align-middle text-gray-400 sm:h-4 sm:w-4"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                                    class=""></path>
                                            </svg>
                                        </div>
                                    </div>
            
                                    <div class="text-right">
                                        <p class="block text-xs font-normal sm:text-sm md:text-base">
                                            <span class="text-xs font-normal sm:text-sm md:text-base">Rp.</span>
                                            <span class="text-xs font-normal sm:text-sm md:text-base">99.000</span>
                                        </p>
                                    </div>
                                </div>
                            </article>
                            <article class="relative">
                                <div class="aspect-square overflow-hidden rounded-2xl">
                                    <img class="h-full w-full object-cover transition-all duration-300 group-hover:scale-125"
                                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="" />
                                </div>
                                <div class="mt-4 flex items-start justify-between">
                                    <div class="">
                                        <h3 class="text-xs font-semibold sm:text-sm md:text-base">
                                            <a href="#" title="" class="">
                                                Arabian Musk
                                                <span class="absolute" aria-hidden="true"></span>
                                            </a>
                                        </h3>
                                        <div class="mt-2 flex items-center">
                                            <svg class="block h-3 w-3 align-middle text-pink-600 sm:h-4 sm:w-4"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                                    class=""></path>
                                            </svg>
                                            <svg class="block h-3 w-3 align-middle text-pink-600 sm:h-4 sm:w-4"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                                    class=""></path>
                                            </svg>
                                            <svg class="block h-3 w-3 align-middle text-pink-600 sm:h-4 sm:w-4"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                                    class=""></path>
                                            </svg>
                                            <svg class="block h-3 w-3 align-middle text-pink-600 sm:h-4 sm:w-4"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                                    class=""></path>
                                            </svg>
                                            <svg class="block h-3 w-3 align-middle text-gray-400 sm:h-4 sm:w-4"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                                    class=""></path>
                                            </svg>
                                        </div>
                                    </div>
            
                                    <div class="text-right">
                                        <p class="block text-xs font-normal sm:text-sm md:text-base">
                                            <span class="text-xs font-normal sm:text-sm md:text-base">Rp.</span>
                                            <span class="text-xs font-normal sm:text-sm md:text-base">99.000</span>
                                        </p>
                                    </div>
                                </div>
                            </article>
                            <article class="relative">
                                <div class="aspect-square overflow-hidden rounded-2xl">
                                    <img class="h-full w-full object-cover transition-all duration-300 group-hover:scale-125"
                                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="" />
                                </div>
                                <div class="mt-4 flex items-start justify-between">
                                    <div class="">
                                        <h3 class="text-xs font-semibold sm:text-sm md:text-base">
                                            <a href="#" title="" class="">
                                                Arabian Musk
                                                <span class="absolute" aria-hidden="true"></span>
                                            </a>
                                        </h3>
                                        <div class="mt-2 flex items-center">
                                            <svg class="block h-3 w-3 align-middle text-pink-600 sm:h-4 sm:w-4"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                                    class=""></path>
                                            </svg>
                                            <svg class="block h-3 w-3 align-middle text-pink-600 sm:h-4 sm:w-4"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                                    class=""></path>
                                            </svg>
                                            <svg class="block h-3 w-3 align-middle text-pink-600 sm:h-4 sm:w-4"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                                    class=""></path>
                                            </svg>
                                            <svg class="block h-3 w-3 align-middle text-pink-600 sm:h-4 sm:w-4"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                                    class=""></path>
                                            </svg>
                                            <svg class="block h-3 w-3 align-middle text-gray-400 sm:h-4 sm:w-4"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                                    class=""></path>
                                            </svg>
                                        </div>
                                    </div>
            
                                    <div class="text-right">
                                        <p class="block text-xs font-normal sm:text-sm md:text-base">
                                            <span class="text-xs font-normal sm:text-sm md:text-base">Rp.</span>
                                            <span class="text-xs font-normal sm:text-sm md:text-base">99.000</span>
                                        </p>
                                    </div>
                                </div>
                            </article>
                            <article class="relative">
                                <div class="aspect-square overflow-hidden rounded-2xl">
                                    <img class="h-full w-full object-cover transition-all duration-300 group-hover:scale-125"
                                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="" />
                                </div>
                                <div class="mt-4 flex items-start justify-between">
                                    <div class="">
                                        <h3 class="text-xs font-semibold sm:text-sm md:text-base">
                                            <a href="#" title="" class="">
                                                Arabian Musk
                                                <span class="absolute" aria-hidden="true"></span>
                                            </a>
                                        </h3>
                                        <div class="mt-2 flex items-center">
                                            <svg class="block h-3 w-3 align-middle text-pink-600 sm:h-4 sm:w-4"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                                    class=""></path>
                                            </svg>
                                            <svg class="block h-3 w-3 align-middle text-pink-600 sm:h-4 sm:w-4"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                                    class=""></path>
                                            </svg>
                                            <svg class="block h-3 w-3 align-middle text-pink-600 sm:h-4 sm:w-4"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                                    class=""></path>
                                            </svg>
                                            <svg class="block h-3 w-3 align-middle text-pink-600 sm:h-4 sm:w-4"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                                    class=""></path>
                                            </svg>
                                            <svg class="block h-3 w-3 align-middle text-gray-400 sm:h-4 sm:w-4"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                                    class=""></path>
                                            </svg>
                                        </div>
                                    </div>
            
                                    <div class="text-right">
                                        <p class="block text-xs font-normal sm:text-sm md:text-base">
                                            <span class="text-xs font-normal sm:text-sm md:text-base">Rp.</span>
                                            <span class="text-xs font-normal sm:text-sm md:text-base">99.000</span>
                                        </p>
                                    </div>
                                </div>
                            </article>
                            <article class="relative">
                                <div class="aspect-square overflow-hidden rounded-2xl">
                                    <img class="h-full w-full object-cover transition-all duration-300 group-hover:scale-125"
                                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="" />
                                </div>
                                <div class="mt-4 flex items-start justify-between">
                                    <div class="">
                                        <h3 class="text-xs font-semibold sm:text-sm md:text-base">
                                            <a href="#" title="" class="">
                                                Arabian Musk
                                                <span class="absolute" aria-hidden="true"></span>
                                            </a>
                                        </h3>
                                        <div class="mt-2 flex items-center">
                                            <svg class="block h-3 w-3 align-middle text-pink-600 sm:h-4 sm:w-4"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                                    class=""></path>
                                            </svg>
                                            <svg class="block h-3 w-3 align-middle text-pink-600 sm:h-4 sm:w-4"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                                    class=""></path>
                                            </svg>
                                            <svg class="block h-3 w-3 align-middle text-pink-600 sm:h-4 sm:w-4"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                                    class=""></path>
                                            </svg>
                                            <svg class="block h-3 w-3 align-middle text-pink-600 sm:h-4 sm:w-4"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                                    class=""></path>
                                            </svg>
                                            <svg class="block h-3 w-3 align-middle text-gray-400 sm:h-4 sm:w-4"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                                    class=""></path>
                                            </svg>
                                        </div>
                                    </div>
            
                                    <div class="text-right">
                                        <p class="block text-xs font-normal sm:text-sm md:text-base">
                                            <span class="text-xs font-normal sm:text-sm md:text-base">Rp.</span>
                                            <span class="text-xs font-normal sm:text-sm md:text-base">99.000</span>
                                        </p>
                                    </div>
                                </div>
                            </article>
                            <article class="relative">
                                <div class="aspect-square overflow-hidden rounded-2xl">
                                    <img class="h-full w-full object-cover transition-all duration-300 group-hover:scale-125"
                                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="" />
                                </div>
                                <div class="mt-4 flex items-start justify-between">
                                    <div class="">
                                        <h3 class="text-xs font-semibold sm:text-sm md:text-base">
                                            <a href="#" title="" class="">
                                                Arabian Musk
                                                <span class="absolute" aria-hidden="true"></span>
                                            </a>
                                        </h3>
                                        <div class="mt-2 flex items-center">
                                            <svg class="block h-3 w-3 align-middle text-pink-600 sm:h-4 sm:w-4"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                                    class=""></path>
                                            </svg>
                                            <svg class="block h-3 w-3 align-middle text-pink-600 sm:h-4 sm:w-4"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                                    class=""></path>
                                            </svg>
                                            <svg class="block h-3 w-3 align-middle text-pink-600 sm:h-4 sm:w-4"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                                    class=""></path>
                                            </svg>
                                            <svg class="block h-3 w-3 align-middle text-pink-600 sm:h-4 sm:w-4"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                                    class=""></path>
                                            </svg>
                                            <svg class="block h-3 w-3 align-middle text-gray-400 sm:h-4 sm:w-4"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                                    class=""></path>
                                            </svg>
                                        </div>
                                    </div>
            
                                    <div class="text-right">
                                        <p class="block text-xs font-normal sm:text-sm md:text-base">
                                            <span class="text-xs font-normal sm:text-sm md:text-base">Rp.</span>
                                            <span class="text-xs font-normal sm:text-sm md:text-base">99.000</span>
                                        </p>
                                    </div>
                                </div>
                            </article>
                            <article class="relative">
                                <div class="aspect-square overflow-hidden rounded-2xl">
                                    <img class="h-full w-full object-cover transition-all duration-300 group-hover:scale-125"
                                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="" />
                                </div>
                                <div class="mt-4 flex items-start justify-between">
                                    <div class="">
                                        <h3 class="text-xs font-semibold sm:text-sm md:text-base">
                                            <a href="#" title="" class="">
                                                Arabian Musk
                                                <span class="absolute" aria-hidden="true"></span>
                                            </a>
                                        </h3>
                                        <div class="mt-2 flex items-center">
                                            <svg class="block h-3 w-3 align-middle text-pink-600 sm:h-4 sm:w-4"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                                    class=""></path>
                                            </svg>
                                            <svg class="block h-3 w-3 align-middle text-pink-600 sm:h-4 sm:w-4"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                                    class=""></path>
                                            </svg>
                                            <svg class="block h-3 w-3 align-middle text-pink-600 sm:h-4 sm:w-4"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                                    class=""></path>
                                            </svg>
                                            <svg class="block h-3 w-3 align-middle text-pink-600 sm:h-4 sm:w-4"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                                    class=""></path>
                                            </svg>
                                            <svg class="block h-3 w-3 align-middle text-gray-400 sm:h-4 sm:w-4"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                                    class=""></path>
                                            </svg>
                                        </div>
                                    </div>
            
                                    <div class="text-right">
                                        <p class="block text-xs font-normal sm:text-sm md:text-base">
                                            <span class="text-xs font-normal sm:text-sm md:text-base">Rp.</span>
                                            <span class="text-xs font-normal sm:text-sm md:text-base">99.000</span>
                                        </p>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    {{-- list product close --}}

                    <!-- pagination start -->
                    <div class="flex justify-end mt-6">
                        <nav aria-label="page-navigation">
                            <ul class="flex list-style-none">
                                <li class="page-item disabled ">
                                    <a href="#"
                                        class="relative block pointer-events-none px-3 py-1.5 mr-3 text-base text-gray-700 transition-all duration-300  rounded-md dark:text-gray-400 hover:text-gray-100 hover:bg-blue-600">Previous
                                    </a>
                                </li>
                                <li class="page-item ">
                                    <a href="#"
                                        class="relative block px-3 py-1.5 mr-3 text-base hover:text-gray-700 transition-all duration-300 hover:bg-orange-300 dark:hover:text-gray-400 dark:hover:bg-gray-700 rounded-md text-gray-100 bg-orange-500">1
                                    </a>
                                </li>
                                <li class="page-item ">
                                    <a href="#"
                                        class="relative block px-3 py-1.5 text-base text-gray-700 transition-all duration-300 dark:text-gray-400 dark:hover:bg-gray-700 rounded-md mr-3  hover:bg-orange-300">2
                                    </a>
                                </li>
                                <li class="page-item ">
                                    <a href="#"
                                        class="relative block px-3 py-1.5 text-base text-gray-700 transition-all duration-300 dark:text-gray-400 dark:hover:bg-gray-700 rounded-md mr-3 hover:bg-orange-300">3
                                    </a>
                                </li>
                                <li class="page-item ">
                                    <a href="#"
                                        class="relative block px-3 py-1.5 text-base text-gray-700 transition-all duration-300 dark:text-gray-400 dark:hover:bg-gray-700 rounded-md hover:bg-orange-300">Next
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!-- pagination end -->
                </div>

            </div>
    </div>
    </section>

</div>
</div>
