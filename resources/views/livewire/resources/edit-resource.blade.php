<div>
    <h2>Edit Resource</h2>
    <form wire:submit.prevent="updateResource">
        <div class="flex flex-col gap-4">
            <div class="flex flex-col gap-2">
                <label for="title">Title</label>
                <input type="text" wire:model="title" id="title" class="border border-gray-200 p-2 rounded-md">
            </div>
            <div class="flex flex-col gap-2">
                <label for="url">URL</label>
                <input type="text" wire:model="url" id="url" class="border border-gray-200 p-2 rounded-md">
            </div>
            <div class="flex flex-col gap-2">
                <label for="resource_type">Resource Type</label>
                <select wire:model="resource_type" id="resource_type" class="border border-gray-200 p-2 rounded-md">
                    <option value="ppt">PPT</option>
                    <option value="pdf">PDF</option>
                </select>
            </div>
            <div class="flex flex-col gap-2">
                <label for="content">Content</label>
                <textarea wire:model="content" id="content" class="border border-gray-200 p-2 rounded-md"></textarea>
            </div>
            <div class="flex justify-end gap-4">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Save</button>
                <button type="button" wire:click="closeModal" class="bg-red-500 text-white px-4 py-2 rounded-md">Cancel</button>
            </div>
        </div>
    </form>
</div>
