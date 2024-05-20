@props([
    'record' => null,
    'counter' => null,
    'editModalId' => null,
    'deleteModalId' => null,
])
<div class="flex items-center space-x-2">
    {{-- Edit Button --}}
    @if ($record)
        <button class="btn btn-primary editBtn" type="button" data-target="#{{ $editModalId }}"
            data-record-id="{{ $record->id }}">{{ __('Edit') }}</button>
        <div class="modal fade" id="modalEdit{{ $record->id }}" tabindex="-1" role="dialog">
            @include('components.modal.edit', ['record' => $record])
        </div>
        {{-- Delete Button --}}
        <button class="btn btn-primary removeBtn" type="button" data-toggle="modal"
            data-target="#{{ $deleteModalId }}"">{{ __('Remove') }}</button>
        <div class="modal fade" id="modalDelete{{ $record->id }}" tabindex="-1" role="dialog">
            @include('components.modal.delete', ['record' => $record])
        </div>
    @endif
</div>
