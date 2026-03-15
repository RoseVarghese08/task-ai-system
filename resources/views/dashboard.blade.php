<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dashboard
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="grid grid-cols-4 gap-6">

                <div class="bg-white p-6 rounded shadow">
                    <h3 class="text-gray-500">Total Tasks</h3>
                    <p class="text-2xl font-bold">{{ $total }}</p>
                </div>

                <div class="bg-white p-6 rounded shadow">
                    <h3 class="text-gray-500">Completed Tasks</h3>
                    <p class="text-2xl font-bold text-green-600">{{ $completed }}</p>
                </div>

                <div class="bg-white p-6 rounded shadow">
                    <h3 class="text-gray-500">Pending Tasks</h3>
                    <p class="text-2xl font-bold text-yellow-600">{{ $pending }}</p>
                </div>

                <div class="bg-white p-6 rounded shadow">
                    <h3 class="text-gray-500">High Priority Tasks</h3>
                    <p class="text-2xl font-bold text-red-600">{{ $high }}</p>
                </div>

            </div>

        </div>
    </div>
</x-app-layout>