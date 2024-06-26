<div class="modalCreate close modal">
    <form action="{{ route('tasks.store') }}" id="createForm" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="modal fade text-left" id="modalCreate" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title p-2">{{ __('Create New Task') }}</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group flex w-full items-center justify-between p-2">
                                <strong class="mr-2">{{ __('Name') }}:</strong>
                                <input type="text" name="name" placeholder="Name" class="form-control">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group flex w-full items-center justify-between p-2">
                                <strong class="mr-2">{{ __('Description') }}:</strong>
                                <input type="text" name="description" placeholder="Description" class="form-control">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group flex w-full items-center justify-between p-2">
                                <strong class="mr-2">{{ __('Priority') }}:</strong>
                                <select name="priority" id="priority">
                                    <option value="low">Low</option>
                                    <option value="medium">Medium</option>
                                    <option value="high">High</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group flex w-full items-center justify-between p-2">
                                <strong class="mr-2">{{ __('Date') }}:</strong>
                                <input type="date" name="due_date" placeholder="Select a due_date" class="form-control">
                            </div>
                        </div>
                        <div class="modal-footer flex gap-2">
                            <button type="button" class="btn grey btn-outline-secondary closeBtn ml-2"
                                data-dismiss="modal">{{ __('Back') }}</button>
                            <button type="submit" id="task-submit" class="btn btn-success ml-2">{{ __('Save') }}</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    
</div>
