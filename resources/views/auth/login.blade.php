
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

      

 
 <section class="flex flex-col items-center h-screen md:flex-row ">
            <div class="hidden w-full h-screen bg-white lg:block md:w-1/3 lg:w-2/3">
                 <img src="backgroundlogin.jpg"
                    alt="" class="object-cover w-full h-full">
            </div>

          
            <div class="flex items-center justify-center w-full h-screen px-6 bg-white md:max-w-md lg:max-w-full md:mx-auto md:w-1/2 xl:w-1/3 lg:px-16 xl:px-12 container px-8 pt-48 pb-24 mx-auto lg:px-4">
                <div class="w-full h-100">
                    <a class="flex items-center w-32 mb-4 font-medium text-gray-900 title-font md:mb-0">
                    </a>
                    
                    <center>
                    <h2
                        class="h-1/3 w-1/3 object-center">
                        <a href="{{route('frontpage')}}">
                        <img src="newlaravellogoblack.png" alt="" />
                        </a>
                    </h2>
                    </center>
                    
                    <h1 class="mt-12 text-2xl font-semibold text-black tracking-ringtighter sm:text-3xl title-font">Log in to your
                        account</h1>
                    <form class="mt-6" action="{{ route('login') }}" method="POST">
                    @csrf
                        <div>
                            <label class="block text-sm font-medium leading-relaxed tracking-tighter text-gray-700">Email
                                Address</label>
                            <input type="email" name="email" id="email" placeholder="Your Email " required
                                class="w-full px-4 py-2 mt-2 text-base text-black transition duration-500 ease-in-out transform bg-gray-100 border-transparent rounded-lg focus:border-gray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 "
                                autofocus autocomplete required>
                        </div>

                        <div class="mt-4">
                            <label class="block text-sm font-medium leading-relaxed tracking-tighter text-gray-700">Password</label>
                            <input type="password" name = "password" id="password" placeholder="Your Password"  autocomplete="current-password"
                                class="w-full px-4 py-2 text-base text-black transition duration-500 ease-in-out transform bg-gray-100 border-transparent rounded-lg focus:border-gray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 "
                                required>
                        </div>

                        <div class="mt-2 text-right">
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}"
                                    class="text-sm font-semibold leading-relaxed text-gray-700 hover:text-black focus:text-blue-700">Forgot
                                    Password?</a>
                            @endif
                        </div>

                        <div class = "text-left">

                        @if (session('status'))
                            <div class="mb-4 font-medium text-sm text-green-600">
                                {{ session('status') }}
                            </div>
                        @endif
                        <br>
                            <x-jet-validation-errors class="mb-4" />    
                        </div>
                        
                        
                        <button type="submit" class="block w-full px-4 py-3 mt-6 font-semibold text-white transition duration-500 ease-in-out transform bg-black rounded-lg 
                        hover:bg-yellow-500 hover:to-black focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 ">Log In</button>
                    </form>
                    <hr class="w-full my-6 border-gray-300">
                   
                    <p class="mt-8 text-center">Need an account? <a href="{{ route('register') }}"
                            class="font-semibold text-blue-500 hover:text-blue-700">Sign Up</a></p>
                </div>
            </div>
        </section>
</body>
</html>