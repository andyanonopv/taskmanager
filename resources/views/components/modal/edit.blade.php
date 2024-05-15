<div class="modalEdit close">
<form action="{{ route('tasks.update', $record->id) }}" id="editForm" method="post" enctype="multipart/form-data">
    @method('patch') <!-- Use @method('patch') for Laravel 8 and above -->
    @csrf <!-- Use @csrf for Laravel 8 and above -->
    <div class="modal fade text-left" id="ModalEdit{{ $record->id }}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>{{ __('Name') }}:</strong>
                            <input type="text" name="name" value="{{ $record->name }}" placeholder="Name" class="form-control">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>{{ __('Description') }}:</strong>
                            <input type="text" name="description" value="{{ $record->description }}" placeholder="Description" class="form-control">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>{{ __('Priority') }}:</strong>
                            <select name="priority" id="priority">
                                <option value="low" {{ $record->priority === 'low' ? 'selected' : '' }}>Low</option>
                                <option value="medium" {{ $record->priority === 'medium' ? 'selected' : '' }}>Medium</option>
                                <option value="high" {{ $record->priority === 'high' ? 'selected' : '' }}>High</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>{{ __('Status') }}:</strong>
                            <select name="status" id="status">
                                <option value="pending" {{ $record->status === 'pending' ? 'selected' : '' }}>Pending</option>
                                <option value="completed" {{ $record->status === 'completed' ? 'selected' : '' }}>Completed</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>{{ __('Date') }}:</strong>
                            <input type="datetime-local" name="due_date" value="{{ $record->due_date }}" placeholder="Select a due_date" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn grey btn-outline-secondary closeEditButton" data-dismiss="modal">{{ __('Back') }}</button>
                    <button type="submit" class="btn btn-success">{{ __('Save') }}</button>
                </div>
            </div>
        </div>
    </div>
</form>
</div>