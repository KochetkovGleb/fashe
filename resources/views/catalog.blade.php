<x-layout>
    <main class="max-w-6xl mx-auto mt-6 space-y-6">
        <div class="grid grid-cols-4 gap-4">

            {{-- Left toolbar  --}}
            <div class=" col-span-1">
               <div class="flex flex-col items-center">
                    <div>
                        <p class="text-xl font-bold">Categories</p>
                    </div>
                    @foreach ($categories as $category)
                        <div class="mt-2">
                            <a href="/catalog?category={{ $category->id }}">{{ $category->name }}</a>
                        </div>
                    @endforeach
                    {{-- search --}}
                    <div class="mt-10">
                        <form method="GET" action="/catalog" class="flex">

                            @foreach($hiddenInputs as $name => $value)
                                <input type="hidden" name="{{ $name }}" value="{{ $value }}">
                            @endforeach

                            @foreach($hiddenPricesInputs as $name => $value)
                                <input type="hidden" name="{{ $name }}" value="{{ $value }}">
                            @endforeach

                            <input type="text"
                                   name="search"
                                   placeholder="Search Products"
                                   class="s-text7 size6 p-l-23 p-r-50 border-2 mr-5"
                                   value="{{ request('search') }}"
                            >

                            <input type="submit"
                                   class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded cursor-pointer"
                                   value="Искать!"
                            >
                        </form>

                    </div>

                </div>
            </div>

            {{-- Right Side --}}
            <div class="border-black border-opacity-0 col-span-3 row-span-1">
                <div class="grid grid-cols-3">
                    <div class="py-6 px-5 h-full col-span-3">
                        <div class="flex justify-between">
                            <div class="flex items-center">
                                <div>
                                    <form method="GET" action="/catalog">

                                        @foreach($hiddenInputs as $name => $value)
                                            <input type="hidden" name="{{ $name }}" value="{{ $value }}">
                                        @endforeach

                                        @if (request()->has('search'))
                                            <input type="hidden" name="search" value="{{ request('search') }}">
                                        @endif

                                        <input type="number"
                                               name="minprice"
                                               placeholder="minprice"
                                               class="s-text7 size6 p-l-23 p-r-50 border-2"
                                               value="{{ request('minprice') }}">

                                        <input type="number"
                                               name="maxprice"
                                               placeholder="maxprice"
                                               class="s-text7 size6 p-l-23 p-r-50 border-2"
                                               value="{{ request('maxprice') }}">

                                        <input type="submit"
                                               class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded cursor-pointer"
                                               value="Применить"
                                        >

                                    </form>
                                </div>
                            </div>



                            <div class="mt-8 md:mt-0 flex items-center pr-6">
                                <p>Showing 1–12 of 16 results</p>
                            </div>
                        </div>
                    </div>
                    @foreach ($products as $product)
                        <div class="py-6 px-5 h-full col-span-1 transition-colors duration-300 hover:bg-gray-100">
                            <div>
                                <img src="/images/pes.jpg" alt="Blog Post illustration" class="rounded-xl">
                            </div>
                            <div class="mt-3.5 flex flex-col flex-1">
                                <header>
                                    <div class="space-x-2">
                                        <a href="/product/{{ $product->id }}">{{ $product->name }}</a>
                                    </div>
                                </header>
                                <div class="text-sm mt-2.5">
                                     <p>{{ $product->price }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    {{-- Pagination --}}
                    <div class="py-6 px-5 h-full col-span-3">
                        <div class="mt-8 md:mt-0 flex items-center pr-6">
                            <p>Pagination</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>
</x-layout>

