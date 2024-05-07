@section('title', 'Courses')

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <!-- <h1 class="text-3xl font-semibold mt-8 mb-4">Courses</h1> -->
        <div class="mb-4">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" wire:click="create()">Create</button>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach($courses as $course)
                <a href="#">
                    <div class="bg-white rounded-lg shadow-lg p-6">
                        <h2 class="text-xl font-semibold mb-2">{{ $course->title }}</h2>
                        <p class="text-gray-700 mb-2">Teacher: {{ $course->teacher->name }}</p>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</div>

