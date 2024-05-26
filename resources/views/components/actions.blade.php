@props([
    'record' => null,
    'counter' => null,
])
<div class="flex items-center space-x-2">
    {{-- Edit Button --}}
    @if ($record)
        <button class="createSubtasksBtn" type="button" data-toggle="modal" data-target="#modalSubtasks{{ $record->id }}">
            {{ __('Add Subtask') }}
        </button>
        <div class="modalSubtask modal close" id="modalSubtasks{{ $record->id }}">
            @include('components.modal.create-subtask')
        </div>
        
        <button class="editBtn" type="button" data-toggle="modal" data-target="#modalEdit{{ $record->id }}">
            {{ __('Edit') }}
        </button>
        <div class="modalEdit modal close" id="modalEdit{{ $record->id }}">
            @include('components.modal.edit', ['record' => $record])
        </div>
        
        {{-- Delete Button --}}
        <button class="removeBtn delete" type="button" data-toggle="modal" data-target="#deleteModal{{ $record->id }}">{{ __('Remove') }}</button>
        <div class="modalDelete modal close" id="deleteModal{{ $record->id }}">
            @include('components.modal.delete', ['record' => $record])
        </div>
    @endif
</div>
