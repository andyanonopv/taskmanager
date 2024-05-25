<div class="modal-container">
    <form action="{{ route('tasks.destroy', $record->id) }}" id="deleteForm" method="post" enctype="multipart/form-data">
        @method('delete') <!-- Use @method('delete') for Laravel 8 and above -->
        @csrf <!-- Use @csrf for Laravel 8 and above -->
        <div class="modal fade text-left" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content flex flex-col">
                    <div class="modal-header">
                        <p class="mb-2">Are you sure you want to remove this ?</p>
                    </div>
                    <div class="modal-body">
                        <div class="modal flex gap-2">
                            <button type="button" class="btn grey btn-outline-secondary closeRemoveBtn"
                                data-dismiss="modal">{{ __('Back') }}</button>
                            <button type="submit" class="btn btn-success delete">{{ __('Delete') }}</button>
                        </div>
                    </div>
                </div>
            </div>
    </form>
</div>
