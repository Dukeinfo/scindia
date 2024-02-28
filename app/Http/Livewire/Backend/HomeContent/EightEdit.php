<?php

namespace App\Http\Livewire\Backend\HomeContent;

use Livewire\Component;
use App\Models\HomeContentEight;
use Illuminate\Support\Facades\File;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use App\Traits\UploadTrait;
use Illuminate\Support\Str;
class EightEdit extends Component
{
    use UploadTrait;  
    use WithFileUploads;
    
    public $editId,$image,$thumbnail,$editimage,$title1,$title2,$link,$sort_id,$status;

       public function mount($id){

        $homeContentEight = HomeContentEight::findOrFail($id);
        $this->editId = $homeContentEight->id;
        $this->thumbnail = $homeContentEight->thumbnail;
        $this->image = $homeContentEight->image;
        $this->title1 = $homeContentEight->title1;
        $this->title2 = $homeContentEight->title2;
        $this->link = $homeContentEight->link;
        $this->sort_id = $homeContentEight->sort_id;
        $this->status = $homeContentEight->status;
    }

    public function render()
    {
        return view('livewire.backend.home-content.eight-edit')->layout('layouts.backend');
    }


    public function saveRecord(){

         if(!is_null($this->editimage)){
            $image =  $this->editimage;
            $folder = '/uploads/lifeatskv';
            $uploadedData = $this->uploadOne($image, $folder);
             
          $homeContentEight = HomeContentEight::find($this->editId);
          $homeContentEight->image = $uploadedData['file_name'] ?? NULL;
          $homeContentEight->thumbnail = $uploadedData['thumbnail_name'] ?? NULL;
          $homeContentEight->title1 = $this->title1 ?? Null;
          $homeContentEight->title2 = $this->title2 ?? Null;
          $homeContentEight->link =$this->link ?? Null;
          $homeContentEight->sort_id =$this->sort_id ?? Null;
          $homeContentEight->status = $this->status ?? Null;
          $homeContentEight->save();  
                }

         else{

          $homeContentEight = HomeContentEight::find($this->editId);
          $homeContentEight->title1 = $this->title1 ?? Null;
          $homeContentEight->title2 = $this->title2 ?? Null;
          $homeContentEight->link =$this->link ?? Null;
          $homeContentEight->sort_id =$this->sort_id ?? Null;
          $homeContentEight->status = $this->status ?? Null;
          $homeContentEight->save();

         }   

        return redirect()->route('view_eight'); 


    } 
}
