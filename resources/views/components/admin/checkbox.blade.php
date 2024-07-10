@props(['id' => 'hs-table-checkbox-all'])
<div class="flex items-center h-5">
    <input
        {{ $attributes->merge(['class' => 'bg-neutral-200 border-border-1 dark:border-borderDark-1 rounded text-blue-600 focus:ring-blue-500 dark:bg-dark-1  dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800', 'id' => $id, 'type' => 'checkbox']) }}>
    <label for="{{ $id }}" class="sr-only">Checkbox</label>
</div>
