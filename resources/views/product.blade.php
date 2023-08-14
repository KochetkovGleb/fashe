<x-layout>
    <main class="max-w-6xl mx-auto mt-6 space-y-6">
        <div class="flex justify-between">
            {{--Left Side--}}
            <div class="mr-6 flex flex-1 flex-col items-center">
                <img src="/images/item-cart-06.jpg" alt="Blog Post illustration">
            </div>
            {{--Right Side--}}
            <div class="flex flex-col flex-1">
                <div>
                    <p>{{ $product->name }}</p>
                </div>
                <div class="mt-5">
                    <p>{{ $product->price }}</p>
                </div>
                <div class="mt-5">
                    <p>Хотите наслаждаться изысканным ароматом и густой пенкой любимого кофе из свежемолотых зерен? Кофе-машины Miele — для вас... Какую бы машину вы ни выбрали, при нажатии одной кнопки у вас будет свежесваренный кофе. Наслаждайтесь любимым сортом кофе, не выходя из дома. Идеально и просто...</p>
                </div>
                <div class="mt-5">
                    <button class="bg-yellow-500 hover:bg-red-400 text-white font-bold py-2 px-4 rounded-full">
                        <a href="/">ADD TO CART</a>
                    </button>
                </div>
            </div>
        </div>
    </main>
</x-layout>
