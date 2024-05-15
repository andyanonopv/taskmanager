@props([
    'route' => null,
])
<form method="get" action="{{ route('rows') }}" class="mb-4">
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
