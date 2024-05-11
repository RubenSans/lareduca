<?php

namespace App\Livewire\Resources;

use App\Models\Resources;
use LivewireUI\Modal\ModalComponent;

class EditResource extends ModalComponent
{
    public $resource, $courseId, $title, $resource_type, $url, $content;

    public function mount($resourceId)
    {
        $this->resource = Resources::find($resourceId);
        $this->courseId = $this->resource->course_id;

        $this->title = $this->resource->title;
        $this->resource_type = $this->resource->resource_type;
        $this->url = $this->resource->url;
        $this->content = $this->resource->content;
    }

    public function updateResource()
    {
        $this->validate([
            'title' => 'required',
            'resource_type' => 'required',
            'url' => 'required',
            'content' => 'required',
        ]);

        Resources::where('id', $this->resource->id)->update([
            'title' => $this->title,
            'resource_type' => $this->resource_type,
            'url' => $this->url,
            'content' => $this->content,
        ]);

        session()->flash('message', 'Resource updated successfully.');

        redirect()->route('courses.course-details', $this->courseId);
    }

    public function render()
    {
        return view('livewire.resources.edit-resource');
    }
}
