<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-4">
                <div class="p-6 bg-white border-b border-gray-200">
                    
                    <!-- This example requires Tailwind CSS v2.0+ -->
                    <div class="lg:flex lg:items-center lg:justify-between">
                      <div class="flex-1 min-w-0">
                        <h2 class="text-2xl font-bold leading-7 text-indigo-700 sm:text-3xl sm:truncate">Create</h2>
                        <div class="mt-1 flex flex-col sm:flex-row sm:flex-wrap sm:mt-0 sm:space-x-6">
                          
                          
                          
                          <div class="mt-2 flex items-center text-sm text-gray-500">
                            <!-- Heroicon name: solid/calendar -->
                               Create New Programming Languages
                          </div>
                        </div>
                      </div>
                      <div class="mt-5 flex lg:mt-0 lg:ml-4">
                        

                       

                        <span class="sm:ml-3">
                          <a href="{{ url('dashboard') }}" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            <!-- Heroicon name: solid/check -->
                            Back to Dashboard
                          </a>
                        </span>

                      </div>
                    </div>

                </div>
            </div>



            <!-- List -->
            <div class="mt-8">



                <form action="{{ url('store') }}" method="POST">
                    @csrf

                   
                    @if (session('success'))
                        <div class="text-green-700 p-4 bg-green-200 rounded mx-2">{{ session('success') }}</div>
                    @endif
                    <div class="m-2 p-4 shadow-xl bg-white">


                        <p class="text-lg font-semibold px-2 py-4">Enter Name Of Programming Language</p>
                        <input type="text" name="name" class="block w-96 mx-2" placeholder="Enter Name Of Programming Language">
                        @error('name')
                            <div class="text-red-500 mx-2">{{ $message }}</div>
                        @enderror

                        <button class="bg-indigo-600 text-white px-5 py-2 rounded  m-2 mt-5">Submit</button>
                        <button type="reset" class="bg-red-500 text-white px-4 py-2 rounded m-2">Reset</button>
                    </div>
                </form>
            </div>

        </div>
    </div>



</x-app-layout>
