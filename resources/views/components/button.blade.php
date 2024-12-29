@php
  $class =
      'inline-flex items-center px-4 py-2 bg-white border border-blue-500 rounded-md font-semibold text-xs text-black hover:bg-blue-100 focus:bg-blue-100 active:bg-blue-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 disabled:opacity-50 transition ease-in-out duration-150';
@endphp

@if (!isset($attributes['href']))
  <button {{ $attributes->merge(['type' => 'submit', 'class' => $class]) }}>
    {{ $slot }}
  </button>
@else
  <a {{ $attributes->merge(['class' => $class]) }}>
    {{ $slot }}
  </a>
@endif
