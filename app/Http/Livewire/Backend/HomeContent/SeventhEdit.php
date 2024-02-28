<?php

namespace App\Http\Livewire\Backend\HomeContent;

use Livewire\Component;
use App\Models\HomeContentSeventh;
use Illuminate\Support\Facades\File;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use App\Traits\UploadTrait;
use Illuminate\Support\Str;
class SeventhEdit extends Component
{
    use UploadTrait;  
    use WithFileUploads;
    
    public $editId,$image,$thumbnail,$editimage,$title1,$title2,$link,$sort_id,$status;

     public function mount($id){

        $homeContentSeventh = HomeContentSeventh::findOrFail($id);
        $this->editId = $homeContentSeventh->id;
        $this->thumbnail = $homeContentSeventh->thumbnail;
        $this->image = $homeContentSeventh->image;
        $this->title1 = $homeContentSeventh->title1;
        $this->title2 = $homeContentSeventh->title2;
        $this->link = $homeContentSeventh->link;
        $this->sort_id = $homeContentSeventh->sort_id;
        $this->status = $homeContentSeventh->status;
    }

    public function saveRecord(){

         if(!is_null($this->editimage)){
            $image =  $this->editimage;
            $folder = '/uploads/lifeatskv';
            $uploadedData = $this->uploadOne($image, $folder);
             
          $homeContentSeventh = HomeContentSeventh::find($this->editId);
          $homeContentSeventh->image = $uploadedData['file_name'] ?? NULL;
          $homeContentSeventh->thumbnail = $uploadedData['thumbnail_name'] ?? NULL;
          $homeContentSeventh->title1 = $this->title1 ?? Null;
          $homeContentSeventh->title2 = $this->title2 ?? Null;
          $homeContentSeventh->link =$this->link ?? Null;
          $homeContentSeventh->sort_id =$this->sort_id ?? Null;
          $homeContentSeventh->status = $this->status ?? Null;
          $homeContentSeventh->save();  
                }

         else{

          $homeContentSeventh = HomeContentSeventh::find($this->editId);
          $homeContentSeventh->title1 = $this->title1 ?? Null;
          $homeContentSeventh->title2 = $this->title2 ?? Null;
          $homeContentSeventh->link =$this->link ?? Null;
          $homeContentSeventh->sort_id =$this->sort_id ?? Null;
          $homeContentSeventh->status = $this->status ?? Null;
          $homeContentSeventh->save();

         }   

        return redirect()->route('view_seventh'); 


    } 

    public function render()
    {
        return view('livewire.backend.home-content.seventh-edit')->layout('layouts.backend');
    }
}
