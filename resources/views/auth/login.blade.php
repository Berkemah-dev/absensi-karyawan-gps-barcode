<x-guest-layout>
    <div class="flex h-screen">
      <!-- Form Login -->
      <div class="w-1/2 bg-white flex flex-col justify-center items-center px-8 py-16 shadow-lg">
        <div class="mb-8">
          <img src="{{ asset('assets/foto/berkemah.png') }}" alt="Logo" class="w-20 mx-auto">
        </div>

        @if (session('status'))
          <div class="mb-4 text-sm font-medium text-green-600">
            {{ session('status') }}
          </div>
        @endif

        <form method="POST" action="{{ route('login') }}" class="w-full max-w-sm">
          @csrf

          <!-- Input Email -->
          <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input
              id="email"
              type="email"
              name="email"
              value="{{ old('email') }}"
              class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50"
              required
            />
          </div>

          <!-- Input Password -->
          <div class="mb-4">
            <label for="password" class="block text-sm font-medium text-gray-700">Kata Sandi</label>
            <input
              id="password"
              type="password"
              name="password"
              class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50"
              required
            />
          </div>

          <!-- Lupa Kata Sandi -->
          <div class="mb-4 text-right">
            @if (Route::has('password.request'))
              <a
                href="{{ route('password.request') }}"
                class="text-sm text-red-500 hover:text-red-600 underline"
              >
                Lupa Kata Sandi?
              </a>
            @endif
          </div>

          <!-- Tombol Login dan Daftar -->
          <div class="mt-4 flex justify-between space-x-2">
            <!-- Tombol Masuk -->
            <button
              type="submit"
              class="w-1/2 px-4 py-2 bg-blue-500 text-white font-semibold rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-500 focus:ring-opacity-50"
            >
              Masuk
            </button>

            <!-- Tombol Daftar -->
            <a
              href="{{ route('register') }}"
              class="w-1/2 inline-block text-center px-4 py-2 bg-gray-200 text-gray-700 font-semibold rounded-md hover:bg-gray-300 focus:outline-none focus:ring focus:ring-gray-500 focus:ring-opacity-50"
            >
              Daftar
            </a>
          </div>
        </form>
      </div>

      <!-- Background Peta -->
      <div
        class="w-1/2 bg-gray-900 flex justify-center items-center relative"
        style="background-image: url('{{ asset('assets/foto/foto.jpg') }}'); background-size: cover; background-position: center;"
      >
        <div class="absolute inset-0 bg-gray-900 opacity-50"></div>
      </div>
    </div>
  </x-guest-layout>
