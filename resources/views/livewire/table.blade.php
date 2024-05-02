<div class="w-full overflow-x-auto">
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Role</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Last Connection</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>

            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach($users as $user)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $user['name'] }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $user['email'] }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $user['role'] }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $user['lastt_connection'] }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <button
                            wire:click="$dispatch('openModal', {component: 'update-user', arguments: {'user': {{$user->id}}}})">
                            Edit
                        </button>
                        <button
                            wire:click="$dispatch('openModal', {component: 'delete-user', arguments: {'user': {{$user->id}}}})">
                            Delete
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
