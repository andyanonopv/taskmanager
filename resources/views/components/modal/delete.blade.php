<div class="modalDelete close">
    <form action="{{ route('tasks.destroy', $record->id) }}" id="deleteForm" method="post" enctype="multipart/form-data">
        @method('delete') <!-- Use @method('delete') for Laravel 8 and above -->
        @csrf <!-- Use @csrf for Laravel 8 and above -->
        <div class="modal fade text-left" id="ModalDelete{{ $record->id }}" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <div class="modal-footer">
                        <button type="button" class="btn grey btn-outline-secondary closeRemoveBtn" data-dismiss="modal">{{ __('Back') }}</button>
                        <button type="submit" class="btn btn-success">{{ __('Delete') }}</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    </div>