@section('title', $course->title)

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-col gap-4"> 
        <div class="bg-white overflow-hidden sm:rounded-lg">
            <div class="flex justify-between p-6 bg-white border-b border-gray-200">
                <p class="text-gray-500">{{ $course->description }}</p>
            </div>
        </div>
        <div class="bg-white overflow-hidden sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <div class="flex justify-between">
                    <h2 class="text-3xl text-blue85/70 font-bold">Resources</h2>
                    <x-button-add>
                        Add resource
                    </x-button-add> 
                </div>
                <ul class="list-none text-black33">
                    @foreach ($course->resources as $resource)
                        <li>
                            <a href="{{ $resource->url }}" target="_blank" class="">{{ $resource->title }}</a>
                        </li>
                        <li>
                            <a href="{{ $resource->url }}" target="_blank" class="">{{ $resource->title }}</a>
                        </li>
                        <li>
                            <a href="{{ $resource->url }}" target="_blank" class="">{{ $resource->title }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="bg-white overflow-hidden sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <div class="flex justify-between">
                    <h2 class="text-3xl text-blue85/70 font-bold">Practices</h2>
                    <x-button-add>
                        Add practice
                    </x-button-add>
                </div>
                <ul class="list-none text-black33">
                    @foreach ($course->resources as $resource)
                        <a href="{{ $resource->url }}" target="_blank" class="">
                            <li class="bg-slate-200 p-3 rounded-xl">{{ $resource->title }}</li>
                        </a>
                        <a href="{{ $resource->url }}" target="_blank" class="">
                            <li class="bg-slate-200 p-3 rounded-xl">{{ $resource->title }}</li>
                        </a>
                        <a href="{{ $resource->url }}" target="_blank" class="">
                            <li class="bg-slate-200 p-3 rounded-xl">{{ $resource->title }}</li>
                        </a>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="bg-white overflow-hidden sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <div class="flex justify-between">
                    <h2 class="text-3xl text-blue85/70 font-bold">Submissions</h2>
                    <x-button-add>
                        Add submission
                    </x-button-add>
                </div>
                <ul class="list-none text-black33">
                    @foreach ($course->resources as $resource)
                        <a href="{{ $resource->url }}" target="_blank" class="">
                            <li class="bg-slate-200 p-3 rounded-xl">{{ $resource->title }}</li>
                        </a>
                        <a href="{{ $resource->url }}" target="_blank" class="">
                            <li class="bg-slate-200 p-3 rounded-xl">{{ $resource->title }}</li>
                        </a>
                        <a href="{{ $resource->url }}" target="_blank" class="">
                            <li class="bg-slate-200 p-3 rounded-xl">{{ $resource->title }}</li>
                        </a>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>