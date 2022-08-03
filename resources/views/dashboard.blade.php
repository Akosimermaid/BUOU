<x-app-layout>

    <div class="py-12">
        
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg" id ="table">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="Add">
                        <x-button class="ml-3">
                            Add
                        </x-button>
                    </a>
                    <a href="Delete">
                        <x-button class="ml-3">
                            Delete
                        </x-button>
                    </a>
                    <livewire:research-table/>
                </div>
            </div>
        
    </div>
</x-app-layout>
