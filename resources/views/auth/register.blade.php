
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
            <div class="hidden w-full h-screen bg-gray-400 lg:block md:w-1/3 lg:w-2/3">
                 <img src="registerbackground.jpg"
                    alt="" class="object-cover w-full h-full">
            </div>

            <div class="flex items-center justify-center w-full h-screen  bg-white md:max-w-md lg:max-w-full md:mx-auto md:w-1/2 xl:w-1/3 lg:px-16 xl:px-12 container px-8 pb-24 mx-auto lg:px-4 ">
                <div class="w-full h-100">
                    
                    <center><h2
                        class="h-1/3 w-1/3 object-center">
                        <a href="{{route('frontpage')}}">
                        <img src="newlaravellogoblack.png" alt="" />
                        </a>
                    </h2>
                    </center>
                    
                    <h1 class="mt-12 text-2xl pb-3.5 font-semibold text-black tracking-ringtighter sm:text-3xl title-font">Register Your Account</h1>
                    <form  method="POST" class="mt-3" action="{{ route('register') }}">
                    @csrf
                 
                        <div>
                            <label class="block text-sm pt-3 font-medium leading-relaxed tracking-tighter text-gray-700">Name</label>
                            <input type="name" name="name" id="name" placeholder="Your Name " :value="old('name')" required 
                                class="w-full px-4 py-2 mt-2 text-base text-black transition duration-500 ease-in-out transform bg-gray-100 border-transparent rounded-lg focus:border-gray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 "
                                autofocus autocomplete required>
                        </div>

                        <div>
                            <label class="block text-sm pt-3 font-medium leading-relaxed tracking-tighter text-gray-700">Email
                                Address</label>
                            <input type="email" name="email" id="email" placeholder="Your Email " :value="old('email')" required 
                                class="w-full px-4 py-2 mt-2 text-base text-black transition duration-500 ease-in-out transform bg-gray-100 border-transparent rounded-lg focus:border-gray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 "
                                autofocus autocomplete required>
                        </div>

                        <div class="mt-4">
                            <label class="block text-sm font-medium leading-relaxed tracking-tighter text-gray-700">Password</label>
                            <input type="password" type = "password" name = "password" id="password" placeholder="Your Password"  autocomplete="new-password"
                                class="w-full px-4 py-2 text-base text-black transition duration-500 ease-in-out transform bg-gray-100 border-transparent rounded-lg focus:border-gray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 "
                                required>
                        </div>

                        <div>
                            <label class="block text-sm pt-3 font-medium leading-relaxed tracking-tighter text-gray-700">Confirm Password</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Repeat Password" :value="old('name')" required 
                                class="w-full px-4 py-2 mt-2 text-base text-black transition duration-500 ease-in-out transform bg-gray-100 border-transparent rounded-lg focus:border-gray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 "
                                autofocus autocomplete required>
                        </div>

                        


                        
                        @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                         <div class="mt-4">
                            <x-jet-label for="terms">
                                <div class="flex items-center">
                                    <x-jet-checkbox name="terms" id="terms" required/>

                                    <div class="ml-2">
                                        {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                        ]) !!}

                                    </div>
                                </div>
                            </x-jet-label>
                        </div>
                      @endif

                      <div class="form-group mt-3 pt-3">
                            {!! NoCaptcha::renderJs('fil',false,'onloadCallback') !!}
                            {!! NoCaptcha::display() !!}
                         </div>      

                         <div class = "text-left">
                         <br>
                            <x-jet-validation-errors class="mb-4" />    
                        </div>

                       

                        <button type="submit" class="block w-full px-4 py-3 mt-6 font-semibold text-white transition duration-500 ease-in-out transform bg-black rounded-lg 
                        hover:bg-yellow-500 hover:to-black focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 ">Log In</button>
                   
                </div>
            </div>
        </section>
    </body>
</html>