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
@endphp

<div class="overflow-x-auto w-full">
    @foreach ($records as $record)
        <div class="task w-full flex justify-between mb-2">
            <div class="task-header">
                <div class="task-title">
                    <p>{{$record->name}}</p>
                </div>
                <div class="task-tags">
                    <span>tag</span>
                    <span>tag</span>
                </div>
            </div>
            <div class="task-body flex gap-4">
                <div class="task-description">
                    <p>{{$record->description}}</p>
                </div>
                <div class="task-date">
                    <p>{{$record->due_date}}</p>
                </div>
                <div class="task-subtasks">

                </div>
            </div>
            <div class="task-footer">
                <x-actions editRoute="somreoute" deleteRoute="delete" :record="$record"/>
            </div>
        </div>
    @endforeach
</div>
