<x-app-layout>

    <div class="py-12">
        
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg" id ="table">

                    @if(Session::get('success'))
                          
                          <alertalert-success>
                              {{Session::get('success')}}
                          </alertalert-success>
                        
                      @endif
                <div class="p-4 bg-white border-b border-gray-200">
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
                    <a href="Edit">
                        <x-button class="ml-3">
                            Edit
                        </x-button>
                    </a>
                    <livewire:research-table/>
                    </td>
                </div>
            </div>
        
    </div>
</x-app-layout>
