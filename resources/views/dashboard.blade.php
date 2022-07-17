<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                    {!! QrCode::size(200)->generate('https://stackoverflow.com/questions/23126562/how-can-i-remove-a-package-from-laravel-using-php-composer'); !!}
                    <p>Scan me to return to the original page.</p>
                </div>
            </div> --}}
            <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl">
                <div class="md:flex p-4">
                    <div class="md:shrink-0 flex items-center justify-center">
                        {!!QrCode::format('svg')->size(200)->generate(route('my-info', auth()->user()->id))!!}
                        {{-- <img src="{{ asset('uploads\images\qrcode.png') }}"> --}}
                    </div>
                    <div class="p-8">
                        <div class="block mt-1 text-lg leading-tight font-medium text-black">HI {{ auth()->user()->name }}</div>
                        
                        <p class="mt-2 text-slate-500">Scan the QR code to access all the private information that you have previously registering.</p>
                            {{-- <a href="{{route('download')}}"
                                class="m-t-10 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Download</a> --}}

                        <a href="{{route('download')}}" class="tracking-wide text-bg text-indigo-500 font-semibold hover:underline">
                            Download My QR Code
                        </a>
                    </div>
                </div>
            </div>


        </div>
    </div>
</x-app-layout>
