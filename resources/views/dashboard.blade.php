@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<p>Welcome to your admin panel.</p>
    <div class="px-6 py-8">
        <h1 class="text-2xl font-bold mb-6">All Categories</h1>

        <div class="overflow-x-auto bg-white shadow-lg rounded-lg">
            <table class="min-w-full border border-gray-200">
                <thead class="bg-gray-100 border-b">
                    <tr>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-700">Song</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-700">Artist</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-700">Year</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 text-sm text-gray-800">The Sliding Mr. Bones (Next Stop, Pottersville)</td>
                        <td class="px-6 py-4 text-sm text-gray-800">Malcolm Lockyer</td>
                        <td class="px-6 py-4 text-sm text-gray-800">1961</td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 text-sm text-gray-800">Witchy Woman</td>
                        <td class="px-6 py-4 text-sm text-gray-800">The Eagles</td>
                        <td class="px-6 py-4 text-sm text-gray-800">1972</td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 text-sm text-gray-800">Shining Star</td>
                        <td class="px-6 py-4 text-sm text-gray-800">Earth, Wind, and Fire</td>
                        <td class="px-6 py-4 text-sm text-gray-800">1975</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


@endsection
