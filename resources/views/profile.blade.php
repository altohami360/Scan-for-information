<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          
  
  <div class="mt-10 sm:mt-0">
    <div class="md:grid md:grid-cols-3 md:gap-6">
      <div class="mt-5 md:col-span-2 md:mt-0">
        
        <div>
          @if ($errors->any())
              <div class="alert alert-danger">
                  @foreach ($errors->all() as $error)
                      <p class="mb-0">{{ $error }}</p>
                  @endforeach
              </div>
          @endif
        </div>

        <form action="{{ route('profile.update', $user) }}" method="POST">
          @method('PUT')
          @csrf
          <div class="overflow-hidden shadow sm:rounded-md">
            <div class="bg-white px-4 py-5 sm:p-6">
              <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-4">
                  <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                  <input type="text" name="name" value="{{ $user->name }}" id="name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                </div>
  
                <div class="col-span-6 sm:col-span-3">
                  <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                  <input type="text" name="email" value="{{ $user->email }}" id="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                </div>
  
                <div class="col-span-6 sm:col-span-3">
                  <label for="phone" class="block text-sm font-medium text-gray-700">phone</label>
                  <input type="text" name="phone" value="{{ $user->phone }}" id="birthday" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" />
                </div>
                
                <div class="col-span-6 sm:col-span-3">
                  <label for="birthday" class="block text-sm font-medium text-gray-700">Birthday</label>
                  <input type="date" name="birthday" value="{{ $user->birthday }}" id="birthday" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" />
                </div>

                <hr class="sm:col-span-6 my-8 h-px bg-gray-200 border-0 dark:bg-gray-700">

                <div class="col-span-6 sm:col-span-3">
                  <label for="country" class="block text-sm font-medium text-gray-700">Country</label>
                  <select id="country" name="country_id" autocomplete="country-name" class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                    <option value="">Select Country..</option>
                    @foreach ($countries as $country)
                      <option value="{{ $country->id }}" @selected(($user->address->country_id ?? '') == $country->id)>{{ $country->country_name }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="col-span-6 sm:col-span-3">
                  <label for="city" class="block text-sm font-medium text-gray-700">City</label>
                  <input type="text" name="city" value="{{ $user->address->city ?? '' }}" id="street-address" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                </div>
  
                <div class="col-span-2">
                  <label for="street-address" class="block text-sm font-medium text-gray-700">Street Address</label>
                  <input type="text" name="street" value="{{ $user->address->street ?? '' }}" id="street-address" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                </div>
            </div>
            <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
              <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Save</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

        </div>
    </div>
</x-app-layout>
