@props([
    'editRoute' => null,
    'deleteRoute' => null,
    'record' => null,
])

<div class="flex items-center space-x-2">
    {{-- Edit Button --}}
    @if ($record)
        @if (isset($editRoute))
            <button class="btn btn-primary editBtn" type="button" data-toggle="modal"
                data-target="#ModalEdit{{ $record->id }}">{{ __('Edit') }}</button>
            @include('components.modal.edit')
        @endif
        {{-- Delete Button --}}
        @if (isset($deleteRoute))
            <button class="btn btn-primary removeBtn" type="button" data-toggle="modal"
                data-target="#ModalDelete{{ $record->id }}">{{ __('Remove') }}</button>
            @include('components.modal.delete')
        @endif
    @endif
</div>
