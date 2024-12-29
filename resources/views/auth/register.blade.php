<x-guest-layout>
    <div class="w-screen h-screen flex">
      <!-- Left Side (Form) -->
      <div class="w-1/2 h-full bg-white flex flex-col justify-center px-12">
        {{-- <x-authentication-card-logo class="mb-6 mx-auto w-16 h-16" /> --}}
        <img src="{{ asset('assets/foto/berkemah.png') }}" alt="Logo" class="mb-6 mx-auto w-16 h-16">

        <h2 class="text-2xl font-bold text-gray-800 mb-6">Create Account</h2>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
          @csrf

          <!-- Name -->
          <div class="mb-4">
            <x-label for="name" value="{{ __('Name') }}" />
            <x-input id="name" class="mt-1 block w-full bg-white text-black" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
          </div>

          <!-- NIP -->
          <div class="mb-4">
            <x-label for="nip" value="{{ __('NIP') }}" />
            <x-input id="nip" class="mt-1 block w-full" type="text" name="nip" :value="old('nip')" autocomplete="nip" />
          </div>

          <!-- Email -->
          <div class="mb-4">
            <x-label for="email" value="{{ __('Email') }}" />
            <x-input id="email" class="mt-1 block w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
          </div>

          <!-- Phone -->
          <div class="mb-4">
            <x-label for="phone" value="{{ __('Phone Number') }}" />
            <x-input id="phone" class="mt-1 block w-full" type="number" name="phone" :value="old('phone')" required autocomplete="username" />
          </div>

          <!-- Gender -->
          <div class="mb-4">
            <x-label for="gender" value="{{ __('Gender') }}" />
            <x-select id="gender" class="mt-1 block w-full" name="gender" required>
              <option disabled selected>{{ __('Select Gender') }}</option>
              <option value="male">{{ __('Male') }}</option>
              <option value="female">{{ __('Female') }}</option>
            </x-select>
          </div>

          <!-- Address -->
          <div class="mb-4">
            <x-label for="address" value="{{ __('Address') }}" />
            <x-textarea id="address" class="mt-1 block w-full" name="address" :value="old('address')" required />
          </div>

          <!-- City -->
          <div class="mb-4">
            <x-label for="city" value="{{ __('City') }}" />
            <x-input id="city" class="mt-1 block w-full" type="text" name="city" :value="old('city')" required autocomplete="city" />
          </div>

          <!-- Password -->
          <div class="mb-4">
            <x-label for="password" value="{{ __('Password') }}" />
            <x-input id="password" class="mt-1 block w-full" type="password" name="password" required autocomplete="new-password" />
          </div>

          <!-- Confirm Password -->
          <div class="mb-4">
            <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
            <x-input id="password_confirmation" class="mt-1 block w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
          </div>

          <!-- Submit Button -->
          <div class="flex items-center justify-between">
            <a href="{{ route('login') }}" class="text-sm text-gray-600 hover:text-blue-600 underline">
              {{ __('Already registered?') }}
            </a>
            <x-button class="ml-4 bg-white text-blue-600 border border-blue-600 hover:bg-gray-100">
              {{ __('Register') }}
            </x-button>
          </div>
        </form>
      </div>

      <!-- Right Side -->
      <div class="w-1/2 h-full bg-gradient-to-r from-[#2F4596] to-[#4D72F9] flex items-center justify-center">
        <div class="text-white">
          <div class="w-24 h-24 mx-auto">
            {{-- <svg xmlns="http://www.w3.org/2000/svg" class="w-full h-full" viewBox="0 0 24 24" fill="currentColor">
              <path d="M12 0C18.627 0 24 5.373 24 12s-5.373 12-12 12S0 18.627 0 12 5.373 0 12 0z" opacity=".2" />
              <path d="M12 2a10 10 0 100 20 10 10 0 000-20zm-.72 5.83c.73-.73 1.94-.19 1.94.83v5.7a.85.85 0 01-1.7 0V8.64l-2.17 2.16a.85.85 0 01-1.2-1.2z" />
            </svg> --}}


            <img src="{{ asset('assets/foto/regis.png') }}" alt="Logo" class="w-auto h-auto max-w-[500px] max-h-[500px] ml-[-200px]">



          </div>
        </div>
      </div>


    </div>
  </x-guest-layout>
