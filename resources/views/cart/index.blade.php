@php
/**
* @var array $products
*/
@endphp

<x-layout>
    <section class="px-8">
        <main class="container mx-auto">
            <div class="lg:flex lg:justify-center mt-8">
                <div class="lg:flex-1 lg:mx-10" style="max-width: 700px">
                    <div class="overflow-auto">
                        <table style="border-collapse: collapse;">
                            <tr style="font-size: 13px; color: #555555;line-height: 1.5;text-transform: uppercase;padding-top: 16px;padding-bottom: 16px;">
                                <th style="width: 225px;padding-left: 50px;"></th>
                                <th style="width: 330px;padding-right: 30px;">Product</th>
                                <th style="width: 133px;padding-right: 30px;">Price</th>
                                <th style="width: 355px;padding-right: 30px;">Quantity</th>
                                <th style="width: 355px;padding-right: 30px;">Delete</th>
                            </tr>
                            @foreach($products as $product)
                                <tr style="border-top: 1px solid #e6e6e6; border-bottom: 1px solid #e6e6e6;">
                                    <td style="width: 800px;padding-left: 50px;">
                                        <img src="/images/item-cart-02.jpg" alt="IMG-PRODUCT">
                                    </td>
                                    <td class="pl-8" style="width: 330px;padding-right: 30px;">
                                        <a href="/product/">
                                            {{ $product->name }}
                                        </a>
                                    </td>
                                    <td style="width: 133px; padding-right: 30px;">{{ $product->price }} </td>
                                    <td style="width: 355px; padding-right: 30px;">
                                        <p class="ml-10">{{ $product->quantity }}</p>
                                    </td>
                                    <td class="pr-7">
                                        <button class="ml-8 bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                                            <a href="/cart/delete/"> Delete </a>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>

                <div class="lg:w-1/6 rounded-lg p-4">
                    <p>TOTAL :</p>
                </div>
            </div>
        </main>
    </section>
</x-layout>
