@props([
    'record' => null,
    'counter' => null,
    'editModalId' => null,
    'deleteModalId' => null,
])
<div class="flex items-center space-x-2">
    {{-- Edit Button --}}
    @if ($record)
        <button class="btn btn-primary editBtn" type="button" data-toggle="modal" data-target="#modalEdit{{ $record->id }}">
            {{ __('Edit') }}
        </button>
        <div class="modalEdit modal close" id="modalEdit{{ $record->id }}">
            @include('components.modal.edit', ['record' => $record])
        </div>
        
        {{-- Delete Button --}}
        <button class="btn btn-primary removeBtn" type="button" data-toggle="modal" data-target="#deleteModal{{ $record->id }}">{{ __('Remove') }}</button>
        <div class="modalDelete modal close" id="deleteModal{{ $record->id }}">
            @include('components.modal.delete', ['record' => $record])
        </div>
    @endif
</div>
