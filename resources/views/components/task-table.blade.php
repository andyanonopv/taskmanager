<table class="w-4/5 divide-y divide-gray-200 dark:divide-gray-700">
    <thead>
        <tr>
            <th
                class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                ID
            </th>
            <th
                class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                Task Name
            </th>
            <th
                class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                Description
            </th>
            <th
                class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                Priority
            </th>
            <th
                class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                Status
            </th>
        </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700">
        @foreach ($records as $record)
            <tr>
                <td class="px-6 py-4 whitespace-nowrap max-w-[150px]">
                    {{ $record->id }}
                </td>
                <td class="px-6 py-4 whitespace-nowrap max-w-[150px]">
                    {{ $record->name }}
                </td>
                <td class="px-6 py-4 whitespace-nowrap overflow-hidden overflow-ellipsis max-w-[150px]">
                    {{ $record->description }}
                </td>
                <td class="px-6 py-4 whitespace-nowrap overflow-hidden overflow-ellipsis max-w-[150px]">
                    {{ $record->priority }}
                </td>
                <td class="px-6 py-4 whitespace-nowrap overflow-hidden overflow-ellipsis max-w-[150px]">
                    {{ $record->status }}
                </td>
                <td class="px-6 py-4 whitespace-wrap">
                    <x-actions editRoute="route" deleteRoute="delete" :record="$record"/>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
