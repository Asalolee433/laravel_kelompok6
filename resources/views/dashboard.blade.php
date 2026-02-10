<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="flex min-h-screen bg-gray-100">

        <aside class="w-64 bg-white border-r shadow-sm">
            <div class="p-6 text-lg font-bold text-gray-800">
                Admin
            </div>

            <nav class="px-4 space-y-2 text-sm">
                <a href="#" class="flex items-center gap-3 px-4 py-2 rounded-lg bg-gray-200 font-semibold text-gray-900">
                    Dashboard
                </a>

                <hr class="my-4">

                <a href="#" class="flex items-center gap-3 px-4 py-2 rounded-lg hover:bg-gray-100">
                    Settings
                </a>
            </nav>
        </aside>
        
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        {{ __("You're log in as admin") }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    </x-app-layout>
