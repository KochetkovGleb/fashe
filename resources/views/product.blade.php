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
                    <p>{{ $product->description }}</p>
                </div>
                <div class="mt-5">
                    <button class="bg-yellow-500 hover:bg-red-400 text-white font-bold py-2 px-4 rounded-full add-to-cart" id="add-to-cart" data-product-id="{{ $product->id }}">
                        ADD TO CART
                    </button>
                </div>
            </div>
        </div>
    </main>

    <script>
        function addToCart(e) {
            let target = e.target;

            axios
                .post('http://127.0.0.1:8000/cart', {
                    productId: target.dataset.productId
                })
                .then(function (response) {
                    alert(response.data);
                })
                .catch(function (err) {
                    console.log(err);
                });
        }

        let addToCartButton = document.getElementById('add-to-cart');

        addToCartButton.addEventListener('click', addToCart);
    </script>
</x-layout>
