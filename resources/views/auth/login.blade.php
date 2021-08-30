@extends('layouts.app')

@section('content')

<div class="flex justify-center">
    <div class="w-4/12 bg-white p-6 rounded-lg">

        <form action="{{ route('login') }}" method="post">

            @csrf

         


  


            <div class="mb-4">

                <label for="Email" class="sr-only">Email</label>
                <!-- <input type="text" name="Email" id="Email" placeholder=" Your Email" class="bg-gray-100 border-2 w-full p-4 rounded-lg" value=""> -->

                <input type="email" name="email" id="email" placeholder="Your Email" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('email') border-red-500 @enderror " value="{{ old('email') }}">

                @error('email')

                <div class="text-red-500 mt-2 text-sm">

                    {{ $message}}

                </div>

                @enderror





            </div>

            <div class="mb-4">

                <label for="password" class="sr-only">Password</label>


                <!-- <input type="text" name="Password" id="Password" placeholder=" Choose Password" class="bg-gray-100 border-2 w-full p-4 rounded-lg" valus=""> -->


                <input type="password" name="password" id="password" placeholder="Your Password" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password') border-red-500 @enderror " value="{{ old('password') }}">

                @error('password')

                <div class="text-red-500 mt-2 text-sm">

                    {{ $message}}

                </div>

                @enderror




            </div>


       
            <div class="mb-4">

                <button type="submit" class="bg-blue-500 border-2 w-full p-4 rounded-lg">Login </button>

            </div>

        </form>

    </div>
</div>


@endsection