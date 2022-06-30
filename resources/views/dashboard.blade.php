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
                        <h2 class="text-2xl font-bold leading-7 text-indigo-700 sm:text-3xl sm:truncate">Programming Languages</h2>
                        <div class="mt-1 flex flex-col sm:flex-row sm:flex-wrap sm:mt-0 sm:space-x-6">
                          
                          
                          
                          <div class="mt-2 flex items-center text-sm text-gray-500">
                            <!-- Heroicon name: solid/calendar -->
                               List Of Programming Languages
                          </div>
                        </div>
                      </div>
                      <div class="mt-5 flex lg:mt-0 lg:ml-4">
                        

                       

                        <span class="sm:ml-3">
                          <a href="{{ url('create') }}" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            <!-- Heroicon name: solid/check -->
                            Create New
                          </a>
                        </span>

                      </div>
                    </div>

                </div>
            </div>



            <!-- List -->
            <div class="mt-8">

                @if (session('success'))
                    <div class="text-green-700 p-4 bg-green-200 rounded mx-2">{{ session('success') }}</div>
                @endif


                @foreach($programs as $key => $prog) 
                    <div class="m-2 p-4 shadow-xl bg-white">
                        <a href="{{ url('delete/'.$prog->id) }}" class="bg-red-500 text-white px-4 py-2 rounded float-right m-2" onclick="return confirm('Are you sure?')">Delete</a>
                        @if($prog->status)
                            <button class="bg-green-600 text-white px-4 py-2 rounded float-right m-2">Completed</button>
                        @else
                            <a href="{{ url('update/'.$prog->id.'/status') }}" class="bg-indigo-600 text-white px-4 py-2 rounded float-right m-2">Mark as Completed</a>
                        @endif
                        <p class="text-lg font-semibold p-2">
                            {{ $key + 1 }}. {{ $prog->name }}
                            <br>
                            <small class="text-gray-500">Posted: {{ \Carbon\Carbon::createFromTimeStamp(strtotime($prog->created_at))->diffForHumans() }}</small>
                        </p>

                    </div>
                @endforeach
            </div>

        </div>
    </div>



</x-app-layout>
