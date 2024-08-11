<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        @vite('resources/css/app.css')

    </head>

    <body>
        @include('partials.error-popup')

        <div class="md:container md:mx-auto">

            <h2 class="text-center md:text-[40px] font-medium mt-60"> Register </h2>

            <form class="mt-12" action="{{{ route('register.post') }}}" method="post">
                @csrf
                <input type="email" name="email" id="email" class="
                    mx-auto
                    px-3 py-2 bg-white border shadow-sm
                    border-slate-300 placeholder-slate-400
                    disabled:bg-slate-50 disabled:text-slate-500
                    disabled:border-slate-200 focus:outline-none
                    focus:border-sky-500 focus:ring-sky-500 block w-full md:w-1/3 rounded-md
                    sm:text-sm md:text-xl focus:ring-1 invalid:border-pink-500
                    invalid:text-pink-600 focus:invalid:border-pink-500
                     focus:invalid:ring-pink-500 disabled:shadow-none"
                placeholder="Email (someone@email.com)">

                <input type="password" name="password" id="password" class="
                    mx-auto mt-6
                    px-3 py-2 bg-white border shadow-sm
                    border-slate-300 placeholder-slate-400
                    disabled:bg-slate-50 disabled:text-slate-500
                    disabled:border-slate-200 focus:outline-none
                    focus:border-sky-500 focus:ring-sky-500 block w-full md:w-1/3 rounded-md
                    sm:text-sm md:text-xl focus:ring-1 disabled:shadow-none"
                placeholder="Your password here">

                <input type="password" name="password_confirmation" id="password_confirmation" class="
                    mx-auto mt-6
                    px-3 py-2 bg-white border shadow-sm
                    border-slate-300 placeholder-slate-400
                    disabled:bg-slate-50 disabled:text-slate-500
                    disabled:border-slate-200 focus:outline-none
                    focus:border-sky-500 focus:ring-sky-500 block w-full md:w-1/3 rounded-md
                    sm:text-sm md:text-xl focus:ring-1 disabled:shadow-none"
                placeholder="Confirm your password">

                <input type="submit" value="Signup" class="
                    block mx-auto mt-6 bg-gray-500
                    sm:text-sm md:text-lg
                    hover:bg-gray-700 px-7 py-2 text-sm
                    leading-5 rounded-md font-semibold text-white
                ">
            </form>
            <p class="mt-6 md:text-lg text-center">Sudah punya akun ? <a class="underline text-sky-500" href="{{{ route('login') }}}">Masuk</a></p>
        </div>
    </body>
</html>
