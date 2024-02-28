<?php

namespace App\Http\Livewire\Backend\HomeContent;

use Livewire\Component;
use App\Models\HomeContentSecond;
use Illuminate\Support\Facades\File;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use App\Traits\UploadTrait;
use Illuminate\Support\Str;
class SecondEdit extends Component
{

    use UploadTrait;  
    use WithFileUploads;

    public $editId,$image,$thumbnail,$editimage,$title1,$desc,$link,$sort_id,$status;

    public function render()
    {
        return view('livewire.backend.home-content.second-edit')->layout('layouts.backend');
    }

    public function mount($id){

        $homeContentSecond = HomeContentSecond::findOrFail($id);
        $this->editId = $homeContentSecond->id;
        $this->thumbnail = $homeContentSecond->thumbnail;
        $this->image = $homeContentSecond->image;
        $this->title1 = $homeContentSecond->title;
        $this->desc = $homeContentSecond->description;
        $this->link = $homeContentSecond->link;
        $this->sort_id = $homeContentSecond->sort_id;
        $this->status = $homeContentSecond->status;
    }

    public function saveRecord(){

         if(!is_null($this->editimage)){
            $image =  $this->editimage;
            $folder = '/uploads/principaldesk';
            $uploadedData = $this->uploadOne($image, $folder);
             
          $homeContentSecond = HomeContentSecond::find($this->editId);
          $homeContentSecond->image = $uploadedData['file_name'] ?? NULL;
          $homeContentSecond->thumbnail = $uploadedData['thumbnail_name'] ?? NULL;
          $homeContentSecond->title = $this->title1 ?? Null;
          $homeContentSecond->description = $this->desc ?? Null;
          $homeContentSecond->link =$this->link ?? Null;
          $homeContentSecond->sort_id =$this->sort_id ?? Null;
          $homeContentSecond->status = $this->status ?? Null;
          $homeContentSecond->save();  
                }

         else{

          $homeContentSecond = HomeContentSecond::find($this->editId);
          $homeContentSecond->title = $this->title1 ?? Null;
          $homeContentSecond->description = $this->desc ?? Null;
          $homeContentSecond->link =$this->link ?? Null;
          $homeContentSecond->sort_id =$this->sort_id ?? Null;
          $homeContentSecond->status = $this->status ?? Null;
          $homeContentSecond->save();

         }   

        return redirect()->route('view_second'); 


    }    
}
