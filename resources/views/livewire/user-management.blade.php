<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Dashboard') }}
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="overflow-hidden ">
            @if (session('message'))
            @livewire('alert-message')
            @endif

            <button
                wire:click="$dispatch('openModal', {component: 'create-user'})">
                Add new user
            </button>

            <div class="flex flex-col gap-5 mt-5">
                @foreach($users as $user)
                <div class="border border-slate-400 p-5">
                    <p>Nombre: {{ $user->name }}</p>
                    <p>Email: {{ $user->email }}</p>
                    <p>Role: {{ $user->role }}</p>
                    <button
                        wire:click="$dispatch('openModal', {component: 'update-user', arguments: {'user': {{$user->id}}}})">
                        Edit
                    <button
                        wire:click="$dispatch('openModal', {component: 'delete-user', arguments: {'user': {{$user->id}}}})">
                        Delete
                    </button>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
