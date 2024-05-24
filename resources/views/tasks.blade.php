<x-app-layout>
    @php
        $model = \App\Models\Tasks::all();
    @endphp
    <x-slot name="header" class="flex">
        <div class="flex w-full justify-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Tasks') }}
            </h2>
            <div class="create">
                <a href="#" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                    id="createButton" data-toggle="modal" data-target="#modalCreate">
                    {{ __('New') }}
                </a>
            </div>
        </div>
        <div class="">
            @include('components.modal.create')
        </div>
    </x-slot>
    <div>
        <h1 class="text-center py-4">Tasks</h1>
        <div class="py-12 flex justify-center">

            <div class="w-4/5">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 w-full text-gray-900 dark:text-gray-100 flex flex-col">
                        <x-table.task-card :models="$model" :records="$records" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="cf-response-message"></div>
</x-app-layout>
