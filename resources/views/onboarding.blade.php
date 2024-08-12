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

            <h2 class=" md:text-[40px] font-medium mt-40"> Let's fill up your profile! </h2>

            <form class="mt-12" action="{{{ route('onboarding.post') }}}" method="post" enctype="multipart/form-data" >
                @csrf

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <div class="mt-2">
                            <label for="fullname">Fullname</label>
                            <input type="text" name="fullname" id="fullname" value="{{{ $name ?? '' }}}" class="
                                px-3 py-2 bg-white border shadow-sm mt-2
                                border-slate-300 placeholder-slate-400
                                disabled:bg-slate-50 disabled:text-slate-500
                                disabled:border-slate-200 focus:outline-none
                                focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md
                                sm:text-sm md:text-xl focus:ring-1 invalid:border-pink-500
                                invalid:text-pink-600 focus:invalid:border-pink-500
                                focus:invalid:ring-pink-500 disabled:shadow-none">
                        </div>

                        <div class="mt-2">
                            <label for="username">Username</label>
                            <input type="text" name="username" id="username" class="
                                px-3 py-2 bg-white border shadow-sm mt-2
                                border-slate-300 placeholder-slate-400
                                disabled:bg-slate-50 disabled:text-slate-500
                                disabled:border-slate-200 focus:outline-none w-full
                                focus:border-sky-500 focus:ring-sky-500 block rounded-md
                                sm:text-sm md:text-xl focus:ring-1 invalid:border-pink-500
                                invalid:text-pink-600 focus:invalid:border-pink-500
                                focus:invalid:ring-pink-500 disabled:shadow-none"
                                value="{{{ $username }}}">
                        </div>

                        <div class="mt-2">
                            <label for="birthday">Birthday</label>
                            <div class="relative w-full">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                  <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                  </svg>
                                </div>
                                <input datepicker name="birthday" value="{{{ $birthday ?? '' }}}" id="birthday-datepicker" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="mt-2">
                            <label for="fullname">Biodata</label>
                            <textarea name="bio" id="bio" class="
                                px-3 py-2 bg-white border shadow-sm mt-2
                                border-slate-300 placeholder-slate-400
                                disabled:bg-slate-50 disabled:text-slate-500
                                disabled:border-slate-200 focus:outline-none
                                focus:border-sky-500 focus:ring-sky-500 block w-full min-h-full rounded-md
                                sm:text-sm md:text-xl focus:ring-1 invalid:border-pink-500
                                invalid:text-pink-600 focus:invalid:border-pink-500
                                focus:invalid:ring-pink-500 disabled:shadow-none" value="dsds">{{{ $biodata ?? '' }}}</textarea>
                        </div>

                        <div class="mt-2">
                            <label for="photo">Profile photo</label>
                            <input type="file" multiple name="photo" id="photo" accept="image/*" class="block w-full text-sm text-gray-600 file:mr-4 file:py-2 file:px-4 file:rounded file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                        </div>
                    </div>
                </div>

                <input type="submit" value="Update" class="
                    block mr-0 ml-auto mt-6 bg-gray-500
                    sm:text-sm md:text-lg
                    hover:bg-gray-700 px-7 py-2 text-sm
                    leading-5 rounded-md font-semibold text-white
                ">
            </form>
        </div>
        @vite('resources/js/onboarding.js')
    </body>
</html>
