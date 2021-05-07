@extends('layouts.page')

@section('content')
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border border-gray-200">
                <form  method="post" action="{{ route('auth.register.store') }}">
                    @csrf

                    <div class="mb-4">
                        <label class="text-xl text-gray-600" id="name">
                            Name <span class="text-red-500">*</span>
                        </label>
                        <input type="text" class="border-2 border-gray-300 p-2 w-full" name="name" id="name" required></input>
                        @error('name')
                            <div class="p3 bg-red-200">
                                {{$message}}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label class="text-xl text-gray-600" id="email">
                            e-mail <span class="text-red-500">*</span>
                        </label>
                        <input type="text" class="border-2 border-gray-300 p-2 w-full" name="email" id="email" required></input>
                        @error('email')
                            <div class="p3 bg-red-200">
                                {{$message}}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label class="text-xl text-gray-600" for="password">
                            Password <span class="text-red-500">*</span>
                        </label>
                        <input type="password" class="border-2 border-gray-300 p-2 w-full" name="password" id="password" required></input>
                        @error('password')
                            <div class="p3 bg-red-200">
                                {{$message}}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label class="text-xl text-gray-600" for="password_confirmation">
                            Repeat Password <span class="text-red-500">*</span>
                        </label>
                        <input type="password" class="border-2 border-gray-300 p-2 w-full" name="password_confirmation" id="password_confirmation" required></input>
                        @error('password_confirmation')
                            <div class="p3 bg-red-200">
                                {{$message}}
                            </div>
                        @enderror
                    </div>

                    <div class="flex p-1">
                        <button class="shadow bg-blue-500 hover:bg-blue-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
                            Register
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
