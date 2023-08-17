@php
    /**
    * @var array $products
    */
@endphp

<x-layout>
    <section class="px-8">
        <main class="container mx-auto">
            <table class="cart_table overflow-auto" style="border-collapse: collapse;">
                <tr class="cart_table_headings">
                    <th></th>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th></th>
                </tr>
                @foreach($products as $product)
                    <tr>
                        <td>
                            <img src="/images/item-cart-02.jpg" alt="IMG-PRODUCT" class="cart-product-image">
                        </td>
                        <td>
                            <a href="/product/{{ $product->id }}">{{ $product->name }}</a>
                        </td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->quantity }}</td>
                        <td class="pr-7">
                            <button
                                class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded"
                            >
                                <a href="/cart/delete/"> Delete </a>
                            </button>
                        </td>
                    </tr>
                @endforeach
            </table>

            <div class="flex justify-end cart-total-price-div">
                <div class="lg:w-1/6 rounded-lg p-4">
                    <p>TOTAL :</p>
                </div>
            </div>

        </main>
    </section>
</x-layout>
