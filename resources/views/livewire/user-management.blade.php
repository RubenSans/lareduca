<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Dashboard') }}
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="overflow-hidden ">
            <form wire:submit.prevent="store">
                <input type="text" wire:model="name" placeholder="Name" required>
                <input type="email" wire:model="email" placeholder="Email" required>
                <select wire:model="selectedRoleId">
                    <option value="">Select Role</option>
                    @foreach($roles as $role)
                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                    @endforeach
                </select>
                <button type="submit">Create User</button>
            </form>
            <div>
                @foreach($users as $user)
                <div>
                    <p>{{ $user->name }} - {{ $user->email }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
