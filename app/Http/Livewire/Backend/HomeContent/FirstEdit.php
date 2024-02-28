<?php

namespace App\Http\Livewire\Backend\HomeContent;

use Livewire\Component;
use App\Models\HomeContentFirst;
use Illuminate\Support\Facades\File;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use App\Traits\UploadTrait;
use Illuminate\Support\Str;

class FirstEdit extends Component
{
    use UploadTrait;  
    use WithFileUploads;

    public $editId,$title1,$title2,$title3,$desc,$link,$sort_id,$status;

    public function mount($id){

        $homeContentFirst = HomeContentFirst::findOrFail($id);
        $this->editId = $homeContentFirst->id;
        $this->title1 = $homeContentFirst->title1;
        $this->title2 = $homeContentFirst->title2;
        $this->title3 = $homeContentFirst->title3;
        $this->desc = $homeContentFirst->description;
        $this->link = $homeContentFirst->link;
        $this->sort_id = $homeContentFirst->sort_id;
        $this->status = $homeContentFirst->status;
    }

     public function saveRecord(){
 
      $homeContentFirst = HomeContentFirst::find($this->editId);
      $homeContentFirst->title1 = $this->title1 ?? Null;
      $homeContentFirst->title2 = $this->title2 ?? Null;
      $homeContentFirst->title3 = $this->title3 ?? Null;
      $homeContentFirst->description = $this->desc ?? Null;
      $homeContentFirst->link =$this->link ?? Null;
      $homeContentFirst->sort_id =$this->sort_id ?? Null;
      $homeContentFirst->status = $this->status ?? Null;
      $homeContentFirst->save();
 
      return redirect()->route('view_first');  

     } 

    public function render()
    {
        return view('livewire.backend.home-content.first-edit')->layout('layouts.backend');
    }
}
