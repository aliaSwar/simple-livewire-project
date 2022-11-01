@if (session()->has('message'))
    <div class="p-3 bg-green-300 ">
        {{ session('message') }}
    </div>
@endif
<form wire:submit.prevent="store">
    <div class="flex ">

        <div class="relative  w-1/2">
            <input type="text"
                class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-r-lg border-l-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500"
                placeholder="Enter Your Task" wire:model.debounce.500ms="name" required>
            <button type="submit"
                class="absolute top-0 right-0 p-2.5 text-sm font-medium text-white bg-sky-700 rounded-r-lg border border-sky-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 24 24">
                    <path d="M24 10h-10v-10h-4v10h-10v4h10v10h4v-10h10z" />
                </svg>
                <button>
        </div>
    </div>
</form>

<div>
    @foreach ($tasks as $task)
        {{ $task->name }}
        <br>
    @endforeach
</div>
