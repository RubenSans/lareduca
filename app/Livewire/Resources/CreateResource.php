<?php

namespace App\Livewire\Resources;

use App\Models\Course;
use App\Models\Resources;
use Illuminate\Support\Facades\Auth;
use LivewireUI\Modal\ModalComponent;

class CreateResource extends ModalComponent
{
    public $courseId, $title, $resource_type, $url, $content;
    public $course, $resources;

    public function mount($courseId)
    {
        $this->courseId = $courseId;
        $this->course = Course::find($courseId);
    }

    public function saveResource()
    {
        $this->validate([
            'title' => 'required',
            'resource_type' => 'required',
            'url' => 'required',
            'content' => 'required',
        ]);

        Resources::create([
            'course_id' => $this->course->id,
            'title' => $this->title,
            'resource_type' => $this->resource_type,
            'url' => $this->url,
            'content' => $this->content,
            'uploaded_by' => Auth::user()->id,
        ]);

        session()->flash('message', 'Resource created successfully.');

        $this->resources = Resources::where('course_id', $this->course->id)->get();

        $this->mount($this->course->id);

        redirect()->route('course-details', $this->course->id);
    }

    public function render()
    {
        return view('livewire.resources.create-resource');
    }
}
