@section('title', $course->title)

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-col gap-4"> 
        <div class="bg-white overflow-hidden sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <p class="text-gray-500">{{ $course->description }}</p>
            </div>
        </div>
        <div class="bg-white overflow-hidden sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <h2 class="text-3xl text-blue85/70 font-bold">Resources</h2>
                <ul class="list-none">
                    @foreach ($course->resources as $resource)
                        <li>
                            <a href="{{ $resource->url }}" target="_blank" class="text-blue-500">{{ $resource->title }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="bg-white overflow-hidden sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <h2 class="text-3xl text-pink-400 font-bold">Practices</h2>
                <ul class="list-disc list-inside">
                    
                </ul>
            </div>
        </div>
        <div class="bg-white overflow-hidden sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <h2 class="text-3xl text-black33/70 font-bold">Submissions</h2>
                <ul class="list-disc list-inside">
                    
                </ul>
            </div>
        </div>
    </div>
</div>