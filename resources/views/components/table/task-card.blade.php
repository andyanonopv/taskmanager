@props([
    'models' => null,
    'records' => null,
])
@php
    $attributesArray = [];

    if (isset($models)) {
        if ($models->isNotEmpty()) {
            $attributesArray = array_keys($models->first()->getAttributes());
        }
    }
    $counter = 0;
@endphp

<div class="overflow-x-auto w-full flex flex-col gap-2 item">
    @foreach ($records as $record)
        @php 
            $editModalId = "editModal{$record->id}";
            $deleteModalId = "deleteModal{$record->id}";
        @endphp
        <div class="">
            <div class="task w-full flex items-center justify-between mb-2">
                <div class="task-header">
                    <div class="task-title">
                        <p>{{ $record->name }}</p>
                    </div>
                    <div class="task-tags">
                        <button class="tag"><span>tag</span></button>
                        <button class="tag"><span>tag</span></button>
                    </div>
                </div>
                <div class="task-body flex gap-4">
                    <div class="task-description">
                        <p>{{ $record->description }}</p>
                    </div>
                    <div class="task-date">
                        <p>{{ $record->due_date }}</p>
                    </div>
                    <div class="task-subtasks">

                    </div>
                </div>
                <div class="task-footer">
                    <x-actions :record="$record" />
                </div>
            </div>  
        </div>
    @endforeach
</div>
