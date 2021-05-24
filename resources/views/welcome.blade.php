<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    </head>

    <body>
                     
        <section class="flex flex-wrap items-center h-screen md">
                   
            <div class="container w-full h-screen bg-white md:w-1/2">
                    <h2
                        class="h-1/5 w-1/5 object-cover object-left-top pl-10 pt-6 ">
                        <a href="{{route('frontpage')}}">
                        <img src="newlaravellogoblack.png" alt="" />
                        </a>
                    </h2>
                <div class="mx-5 lg:mx-32 ">
                    <a class="flex items-center w-48 mt-32 mb-4 font-medium text-gray-900 title-font md:mb-0 lg:mt-16">
                    <div class="w-2 h-2 p-2 mr-2 rounded-full bg-gradient-to-tr from-cyan-400 to-lightBlue-500">
                    </div>
                    
                    </a>
                    <div class="flex mt-16 font-light text-gray-500">
                        <div class="pr-4">
                            <h1 class="mb-9 mx-28 text-2xl font-semibold tracking-tighter text-black sm:text-5xl title-font">
                                Keeping you educated.
                            </h1>
                        </div>
                    </div>
                    <p class="mx-auto text-center font-medium leading-relaxed text-gray-700 lg:w-2/3">Information Security is not only about securing information from unauthorized access. Information Security is basically the practice of preventing unauthorized access, use, disclosure, disruption, modification, inspection, recording or destruction of information.</p>

                <div class="flex my-16 lg:justify-center ">
                        <a href="{{ route('login') }}"
                        class="inline-flex px-6 py-2 font-semibold text-white transition duration-500 ease-in-out transform bg-black rounded-lg hover:bg-gray-800 hover:to-black focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2">Log in
                        </a>
                        <a href="{{ route('register') }}"
                        class="inline-flex items-center px-6 py-2 ml-4 font-semibold text-black transition duration-500 ease-in-out transform bg-white border rounded-lg shadow-xl hover:border-gray-600 hover:bg-gray-600 hover:text-white focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2">Register
                        </a>
                </div>

                        
                    
                </div>
            </div>
            <div class="hidden w-full h-screen bg-center bg-cover md:w-1/2 lg:block">
                <img src="welcomepicture.png" class="object-fill w-full h-screen" alt="" />
            </div>
        </section>
                  
                                
    </body>
</html>
