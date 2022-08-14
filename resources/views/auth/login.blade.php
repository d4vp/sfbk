@extends('layouts.plantilla')

@section('title','login')

@section('content')


    <section>
        <div class="blog mx-auto my-12 p-8 bg-white w-1/3 border-gray-200 rounded-ld shadow-lg">

            <h1 class="text-3xl text-center font-bold">Iniciar Sesión</h1>
               

                <form class="mt-4" method="POST" action="">
                    @csrf
                    <label for="input-group-1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your Email</label>
                    <div class="relative mb-6">
                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path><path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path></svg>
                        </div>
                    <input type="email" id="email" name="email" placeholder="Email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                    <label for="website-admin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Username</label>
                    <div class="flex">
                        <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 rounded-l-md border border-r-0 border-gray-300 dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                        </span>
                    <input type="password" id="password" placeholder="Password" name="password" class="rounded-none rounded-r-lg bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>

                    @error('message')
    
                    <p class="border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">* {{ $message }}</p>
    
                    @enderror

                    <button type="submit" class="rounded-md bg-indigo-500 w-full text-lg text-white font-semibold 
                    p-2 my-3 hover:bg-indigo-600">
                    Enviar
                </button>
                </form>
    
        </div>


    </section>

@endsection