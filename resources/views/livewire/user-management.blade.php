@section('title', 'User Management')

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="flex flex-col gap-12 overflow-hidden">
            @if (session('message'))
                @livewire('alert-message')
            @endif

            <!-- Create user -->
            <div class="flex justify-end w-full">
                <x-button-add class="w-fit"
                    wire:click="$dispatch('openModal', {component: 'create-user'})">
                    Add user
                </x-button-add>
            </div>

            <!-- Users list -->
            <livewire:users-table/>            
        </div>
    </div>
</div>
