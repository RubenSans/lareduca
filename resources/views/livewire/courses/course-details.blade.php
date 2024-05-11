@section('title', $course->title)

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-col gap-4"> 
        @if (session()->has('message'))
            @livewire('alert-message')
        @endif
        <div class="bg-white overflow-hidden sm:rounded-lg">
            <div class="flex justify-between p-6 bg-white border-b border-gray-200">
                <p class="text-gray-500">{{ $course->description }}</p>
            </div>
        </div>
        <div class="bg-white overflow-hidden sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <div class="flex justify-between mb-4">
                    <h2 class="text-3xl text-blue85/70 font-bold">Resources</h2>
                    @if(Auth::user()->isTeacher() || Auth::user()->isAdmin())
                        <!-- <x-button-add wire:click="showResourceModal">
                            Add resource
                        </x-button-add>  -->
                        <x-button-add wire:click="$dispatch('openModal', {component: 'resources.create-resource', arguments: {courseId: {{ $course->id }}}})">
                            Add resource
                        </x-button-add>
                    @endif
                </div>
                <ul class="flex gap-4 flex-col list-none text-black33">
                    @foreach ($course->resources as $resource)
                        <li class="flex justify-between items-center hover:bg-slate-200 p-2 rounded-xl">
                            <a href="{{ $resource->url }}" target="_blank" class="flex gap-4 items-center">
                                @switch($resource->resource_type)
                                    @case('ppt')
                                        <img src="{{asset('assets/img/IconPPT.svg')}}" alt="PPT icon">
                                        @break
                                    @case('pdf')
                                        <img src="{{asset('assets/img/IconPDF.svg')}}" alt="PDF icon">
                                        @break
                                    @default
                                        <img src="{{asset('assets/img/IconPDF.svg')}}" alt="PDF icon">
                                @endswitch
                                <p>{{ $resource->title }}</p>
                            </a>
                            @if(Auth::user()->isTeacher() || Auth::user()->isAdmin())
                                <div>
                                    <button wire:click="$dispatch('openModal', {component: 'resources.edit-resource', arguments: {resourceId: {{ $resource->id }}}})" class="bg-blue-500/80 text-white px-4 py-2 rounded-md">Edit</button>
                                    <button wire:click="$dispatch('openModal', {component: 'resources.delete-resource', arguments: {resourceId: {{ $resource->id }}}})" class="bg-red-500/80 text-white px-4 py-2 rounded-md">Delete</button>
                                </div>
                            @endif
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="bg-white overflow-hidden sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <div class="flex justify-between mb-4">
                    <h2 class="text-3xl text-blue85/70 font-bold">Practices</h2>
                    @if(Auth::user()->isTeacher() || Auth::user()->isAdmin())
                        <x-button-add>
                            Add practice
                        </x-button-add>
                    @endif
                </div>
                <ul class="flex gap-4 flex-col list-none text-black33">
                    @foreach ($course->resources as $resource)
                        <li class="flex justify-between items-center hover:bg-slate-200 p-2 rounded-xl">
                            <a href="{{ $resource->url }}" target="_blank" class="flex gap-4 items-center">
                                <p>{{ $resource->title }}</p>
                            </a>
                            @if(Auth::user()->isStudent())
                                <button class="bg-green-500/80 text-white px-4 py-2 rounded-md">Completed</button>
                            @elseif(Auth::user()->isTeacher() || Auth::user()->isAdmin())
                                <div>
                                    <button class="bg-blue-500/80 text-white px-4 py-2 rounded-md">Edit</button>
                                    <button class="bg-red-500/80 text-white px-4 py-2 rounded-md">Delete</button>
                                </div>
                            @endif
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="bg-white overflow-hidden sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <div class="flex justify-between mb-4">
                    <h2 class="text-3xl text-blue85/70 font-bold">Submissions</h2>
                    @if(Auth::user()->isTeacher() || Auth::user()->isAdmin())
                        <x-button-add>
                            Add submission
                        </x-button-add>
                    @endif
                </div>
                <ul class="flex gap-4 flex-col list-none text-black33">
                    @foreach ($course->resources as $resource)
                        <li class="flex justify-between items-center hover:bg-slate-200 p-2 rounded-xl">
                            <a href="{{ $resource->url }}" target="_blank" class="">
                                <p>{{ $resource->title }}</p>
                            </a>
                            @if(Auth::user()->isStudent())
                                <button class="bg-slate-500/80 text-white px-4 py-2 rounded-md">Mark completed</button>
                            @elseif(Auth::user()->isTeacher() || Auth::user()->isAdmin())
                                <div>
                                    <button class="bg-blue-500/80 text-white px-4 py-2 rounded-md">Edit</button>
                                    <button class="bg-red-500/80 text-white px-4 py-2 rounded-md">Delete</button>
                                </div>
                            @endif
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>