@props(['active' => false])

<a {{ $attributes }}
    class="{{ $active ? 'md:text-blue-500 bg-blue-700 md:bg-transparent' : 'hover:bg-gray-600 md:hover:bg-transparent md:hover:text-blue-500  hover:text-white border-gray-700' }} block py-2 px-3 text-white rounded-sm md:p-0"
    aria-current="{{ $active ? 'page' : false }}">{{ $slot }}</a>