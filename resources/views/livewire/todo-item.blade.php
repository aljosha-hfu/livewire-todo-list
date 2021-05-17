<div>
    <div>
        <li class="flex row items-center justify-between w-full py-1 px-4 my-1 rounded border bg-gray-100 text-gray-600">
            <div class="items-center column">
                <input wire:click="changeTodoState" class="mx-1" type="checkbox" {{ $todoItem->is_done ? 'checked' : '' }}>
                <span class="{{ $todoItem->is_done ? 'line-through' : '' }}">{{ $todoItem->name }}</span>
            </div>
            <div class="items-center row-reverse">
                <span wire:click="deleteTodo" class="px-4 py-2 float-right cursor-pointer"></span>
<span class="px-4 py-2 float-right cursor-pointer">
<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" /></svg>
</span>
            </div>
        </li>
    </div>
</div>
