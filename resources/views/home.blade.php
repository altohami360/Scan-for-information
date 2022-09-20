<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            @if (auth()->user()->complete_profile)
                    
                <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 mb-6 px-4 py-3 shadow-sm" role="alert">
                    <div class="flex">
                    <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                    <div>
                        <p class="font-bold">Notices!</p>
                        <a href="{{ route('profile') }}" class="text-blue-600 visited:text-purple-600 underline-offset-4">
                            Please complete your information.
                        </a>
                    </div>
                    </div>
                </div>

            @endif

            <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-7xl">
                <div class="md:flex p-4">
                    <div class="md:shrink-0 flex items-center justify-center">

                        {!! $qr_code !!}

                    </div>
                    <div class="p-8">
                        <div class="block mt-1 text-lg leading-tight font-medium text-black">HI {{ auth()->user()->name }}</div>
                        
                        <p class="mt-2 text-slate-500">Scan the QR code to access all the private information that you have previously registering.</p>
                            
                        
                        <a href="{{route('download')}}" class="tracking-wide text-bg text-indigo-500 font-semibold hover:underline">
                            Download My QR Code
                        </a>
                    </div>
                </div>
            </div>


        </div>
    </div>
</x-app-layout>
