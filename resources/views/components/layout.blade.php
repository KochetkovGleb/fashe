<!doctype html>

<title>Fashe e-commerce</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">

<style>
    .clamp {
        display: -webkit-box;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .clamp.one-line {
        -webkit-line-clamp: 1;
    }
</style>

<body style="font-family: Open Sans, sans-serif">
    <section class="px-6 py-8">
        <nav class="md:flex md:justify-between md:items-center">
            <div class="flex items-center">
                <a href="/">
                    <img src="/images/facebookIcon.png" alt="facebook" width="30" height="5">
                </a>
                <a href="/" class="ml-1">
                    <img src="/images/twitterIcon.png" alt="twitter" width="30" height="5">
                </a>
                <a href="/" class="ml-1">
                    <img src="/images/instagramIcon.png" alt="twitter" width="30" height="5">
                </a>
            </div>


            <div>
                <a href="/">
                    <img src="/images/logo.png" alt="Logo" width="105" height="10">
                </a>
            </div>

            <div class="mt-8 md:mt-0 flex items-center pr-6">
                @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Account</a>
                        @else
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
        </nav>

        {{-- menu --}}

        <nav class="md:flex md:justify-center">

                <div class="mt-5">
                   <a href="/">Home</a>
                </div>
                <div class="ml-10 mt-5">
                    <a href="/catalog">Catalog</a>
                </div>
                <div class="ml-10 mt-5">
                    <a href="/">About</a>
                </div>
                <div class="ml-10 mt-5">
                    <a href="/">Contacts</a>
                </div>


            </nav>

        {{ $slot }}

        <footer class="bg-gray-100 border border-black border-opacity-5 rounded-xl text-center py-16 px-10 mt-16">
            <h5 class="text-3xl">Stay in touch with the latest updates</h5>
            <p class="text-sm mt-3">Promise to keep the inbox clean. No bugs.</p>

            <div class="mt-10">
                <div class="relative inline-block mx-auto lg:bg-gray-200 rounded-full">
                    <p>Feedback</p>
                </div>
            </div>
        </footer>
    </section>
</body>
