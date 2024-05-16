@props([
    'models' => null,
    'records' => null,
])

@php
    
    $attributesArray = [];

    if(isset($models))
    {
        if ($models->isNotEmpty()) {
            $attributesArray = array_keys($models->first()->getAttributes());
        }
    }
@endphp

<table class="w-4/5 divide-y divide-gray-200 dark:divide-gray-700">
    <thead>
        <tr>
            <th>
                <form method="get" action="{{ route('tasks.index') }}" class="mb-4">
                    <input type="hidden" name="table" value="tasks">
                    <label for="rowsPerPage" class="mr-2">Rows per page:</label>
                    <select name="rowsPerPage" id="rowsPerPage" class="p-2 border rounded">
                        <option value="5" {{ request('rowsPerPage') == 5 ? 'selected' : '' }}>5</option>
                        <option value="10" {{ request('rowsPerPage') == 10 ? 'selected' : '' }}>10</option>
                        <option value="25" {{ request('rowsPerPage') == 25 ? 'selected' : '' }}>25</option>
                        <option value="50" {{ request('rowsPerPage') == 50 ? 'selected' : '' }}>50</option>
                        <option value="100" {{ request('rowsPerPage') == 100 ? 'selected' : '' }}>100</option>
                    </select>
                    <button type="submit" class="ml-2 px-4 py-2 bg-blue-500 text-white rounded">Apply</button>
                </form>
            </th>
            @foreach ($attributesArray as $attribute)
                <th>{{ ucfirst($attribute) }}</th>
            @endforeach
        </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700">
        @foreach ($records as $record)
            <tr>
                @foreach ($attributesArray as $attribute)
                    <td class="px-6 py-4 whitespace-nowrap max-w-[150px]">
                        {{ $record->{$attribute} }}
                    </td>
                @endforeach
            </tr>
        @endforeach
    </tbody>
</table>
