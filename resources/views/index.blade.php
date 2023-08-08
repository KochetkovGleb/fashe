<x-layout>
    <main class="max-w-6xl mx-auto mt-6 space-y-6">

        {{-- Items list  --}}
        <div class="lg:grid lg:grid-cols-12">
            @foreach ($products as $product)
                <article class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl col-span-3">
                    <div class="py-6 px-5 h-full flex flex-col">
                        <div>
                            <img src="/images/pes.jpg" alt="Blog Post illustration" class="rounded-xl">
                        </div>
                        <div class="mt-3.5 flex flex-col flex-1">
                            <div class="space-x-2">
                                <a href="/product/{{ $product->id }}">{{ $product->name }}</a>
                            </div>
                            <div class="text-sm mt-2.5">
                                <p>{{ $product->price }}</p>
                            </div>
                        </div>
                    </div>
                </article>  
            @endforeach
        </div> 

        {{-- Slider --}}
        <h3 class="text-center text-xl font-bold">NEW PRODUCTS</h3>
        <div class="lg:grid lg:grid-cols-12">
            @foreach ($newProducts as $newProduct)
                <article class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl col-span-3">
                    <div class="py-6 px-5 h-full flex flex-col">
                        <div>
                            <img src="/images/vanka.jpg" alt="Blog Post illustration" class="rounded-xl">
                        </div>
                        <div class="mt-3.5 flex flex-col flex-1">
                            <div class="space-x-2">
                                <a href="/product/{{ $newProduct->id }}">{{ $newProduct->name }}</a>
                            </div>
                            <div class="text-sm mt-2.5">
                                <p>{{$newProduct->price}}</p>
                            </div>
                        </div>
                    </div>
                </article>
            @endforeach
        </div> 
    </main>
</x-layout>

