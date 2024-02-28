<?php

namespace App\Http\Livewire\Backend\HomeContent;

use Livewire\Component;
use App\Models\HomeContentTenth;
use Illuminate\Support\Facades\File;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use App\Traits\UploadTrait;
use Illuminate\Support\Str;
class TenthEdit extends Component
{

     use UploadTrait;  
    use WithFileUploads;

    public $editId,$image,$thumbnail,$editimage,$title1,$title2,$link,$sort_id,$status;

    public function mount($id){

        $homeContentTenth = HomeContentTenth::findOrFail($id);
        $this->editId = $homeContentTenth->id;
        $this->thumbnail = $homeContentTenth->thumbnail;
        $this->image = $homeContentTenth->image;
        $this->title1 = $homeContentTenth->title1;
        $this->title2 = $homeContentTenth->title2;
        $this->link = $homeContentTenth->link;
        $this->sort_id = $homeContentTenth->sort_id;
        $this->status = $homeContentTenth->status;
    }

    public function render()
    {
        return view('livewire.backend.home-content.tenth-edit')->layout('layouts.backend');
    }

    public function saveRecord(){

         if(!is_null($this->editimage)){
            $image =  $this->editimage;
            $folder = '/uploads/lifeatskv';
            $uploadedData = $this->uploadOne($image, $folder);
             
          $homeContentTenth = HomeContentTenth::find($this->editId);
          $homeContentTenth->image = $uploadedData['file_name'] ?? NULL;
          $homeContentTenth->thumbnail = $uploadedData['thumbnail_name'] ?? NULL;
          $homeContentTenth->title1 = $this->title1 ?? Null;
          $homeContentTenth->title2 = $this->title2 ?? Null;
          $homeContentTenth->link =$this->link ?? Null;
          $homeContentTenth->sort_id =$this->sort_id ?? Null;
          $homeContentTenth->status = $this->status ?? Null;
          $homeContentTenth->save();  
                }

         else{

          $homeContentTenth = HomeContentTenth::find($this->editId);
          $homeContentTenth->title1 = $this->title1 ?? Null;
          $homeContentTenth->title2 = $this->title2 ?? Null;
          $homeContentTenth->link =$this->link ?? Null;
          $homeContentTenth->sort_id =$this->sort_id ?? Null;
          $homeContentTenth->status = $this->status ?? Null;
          $homeContentTenth->save();

         }   

        return redirect()->route('view_tenth'); 


    } 
}
