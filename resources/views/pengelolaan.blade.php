@extends('layouts.app')

@section('title', 'Employees')

@section('content')
    <div class="mx-10 my-5">
        <a href="#" class="bg-gray-800 text-white px-3 py-2 rounded-lg hover:bg-gray-900 text-lg">+ Add employee</a>
    </div>
    <div class="flex flex-col mx-10 min-h-[535px] overflow-x-auto sm:rounded-lg">
        <table class="w-full text-sm text-center rtl:text-right text-black">
            <thead class="text-x suppercase bg-[#f3f4f6] text-black">
                <tr>
                    <th scope="col" class="px-6 py-3">Num.</th>
                    <th scope="col" class="px-6 py-3">Photo</th>
                    <th scope="col" class="px-6 py-3">Name</th>
                    <th scope="col" class="px-6 py-3">Age</th>
                    <th scope="col" class="px-6 py-3">Date of Entry</th>
                    <th scope="col" class="px-6 py-3">Position</th>
                    <th scope="col" class="px-6 py-3">Telephone</th>
                    <th scope="col" class="px-6 py-3">Action</th>
                </tr>
            </thead>
            <tbody>
                @php $i = $awalData + 1; @endphp
                @foreach ($data_pegawai as $pegawai) 
                    <tr class="border-b bg-white border-gray-300 hover:bg-gray-200">
                        <td class="px-6 py-4">{{ $i }}</td>
                        <td class="px-6 py-4 flex justify-center">
                            <img src="{{ asset('/images/' . $pegawai['foto']) }}" class="xl:w-[70px] xl:h-[100px] rounded-sm"alt="">
                        </td>
                        <td class="px-6 py-4">{{ $pegawai['nama'] }}</td>
                        <td class="px-6 py-4">{{ $pegawai['umur'] }}</td>
                        <td class="px-6 py-4">{{ $pegawai['tanggal_masuk'] }}</td>
                        <td class="px-6 py-4">{{ $pegawai['posisi'] }}</td>
                        <td class="px-6 py-4">{{ $pegawai['no_hp'] }}</td>
                        <td class="px-6 py-4">
                            <a href="#" class="font-medium text-blue-500 hover:underline">Edit</a>
                            <a href="#" class="font-medium text-red-500 ml-5 hover:underline">Delete</a>
                        </td>
                    </tr>
                @php $i++; @endphp
                @endforeach
            </tbody>
        </table>

        {{-- Pagination --}}
        <nav class="mt-auto flex items-center h-14 flex-column flex-wrap justify-between md:flex-row bottom-0"
            aria-label="Table navigation">
            <span class="text-sm font-normal text-gray-800 mb-4 md:mb-0 block w-full md:inline md:w-auto">Showing <span
                    class="font-semibold text-gray-800">{{ $awalData + 1 }}-{{ min($awalData + $jmlDataHalaman, $jmlData) }}</span> of <span
                    class="font-semibold text-gray-800">{{ $jmlData }}</span></span>
            <ul class="inline-flex -space-x-px rtl:space-x-reverse text-sm h-8">
                {{-- Previous --}}
                <li>
                    @if ($halSkrg > 1)
                        <a href="?username={{ $username }}&hal={{ $halSkrg - 1 }}"
                        class="flex items-center justify-center p-5 h-8 ms-0 leading-tight border rounded-s-lg bg-white border-gray-300 text-black hover:bg-gray-700 hover:text-white">
                        Previous
                        </a>
                    @else
                        <span class="flex items-center justify-center p-5 h-8 ms-0 leading-tight border rounded-s-lg bg-gray-100 border-gray-300 text-gray-400 cursor-not-allowed">
                        Previous
                        </span>
                    @endif
                </li>
                {{-- Nomor halaman --}}
                @for ($i = 1; $i <= $jmlHalaman; $i++)
                    <li>
                        <a href="?username={{ $username }}&hal={{ $i }}"
                        class="flex items-center justify-center p-5 h-8 leading-tight border border-gray-300 {{ $i == $halSkrg ? 'bg-gray-700 text-white hover:bg-gray-500' : 'bg-white text-black hover:bg-gray-700 hover:text-white' }}"
                        aria-current="{{ $i == $halSkrg ? 'page' : '' }}">
                        {{ $i }}
                        </a>
                    </li>
                @endfor
                {{-- Next --}}
                <li>
                    @if ($halSkrg < $jmlHalaman)
                        <a href="?username={{ $username }}&hal={{ $halSkrg + 1 }}"
                        class="flex items-center justify-center p-5 h-8 leading-tight border rounded-e-lg bg-white border-gray-300 text-black hover:bg-gray-700 hover:text-white">
                        Next
                        </a>
                    @else
                        <span class="flex items-center justify-center p-5 h-8 leading-tight border rounded-e-lg bg-gray-100 border-gray-200 text-gray-400 cursor-not-allowed">
                        Next
                        </span>
                    @endif
                </li>
            </ul>
        </nav>
    </div>
@endsection