<div>
    <h2 class="text-2xl font-extrabold text-gray-900">Your Tasks ({{$doneTodoCounter}}/{{count($todos)}})</h2>
    <div class="mt-4 flex column">
        <input wire:model="todoInput" wire:keydown.enter="addTodo"
               class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
               type="text" placeholder="New task...">
        <button wire:click="addTodo"
                class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow ml-1"
                type="button">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                      d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                      clip-rule="evenodd"/>
            </svg>
        </button>
    </div>
    <ul class="mt-4">
        @forelse ($todos as $todoItem)
            <livewire:todo-item :todoItem="$todoItem" :key="$todoItem->id"/>
        @empty
            No items found!
        @endforelse
    </ul>
</div>
