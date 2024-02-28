<?php

namespace App\Http\Livewire\Backend\HomeContent;

use Livewire\Component;
use App\Models\HomeContentNineth;
use Illuminate\Support\Facades\File;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use App\Traits\UploadTrait;
use Illuminate\Support\Str;
class NinethEdit extends Component
{

     use UploadTrait;  
    use WithFileUploads;

    public $editId,$image,$thumbnail,$editimage,$title1,$title2,$link,$sort_id,$status;

       public function mount($id){

        $homeContentNineth = HomeContentNineth::findOrFail($id);
        $this->editId = $homeContentNineth->id;
        $this->thumbnail = $homeContentNineth->thumbnail;
        $this->image = $homeContentNineth->image;
        $this->title1 = $homeContentNineth->title1;
        $this->title2 = $homeContentNineth->title2;
        $this->link = $homeContentNineth->link;
        $this->sort_id = $homeContentNineth->sort_id;
        $this->status = $homeContentNineth->status;
    }
    
    

    public function render()
    {
        return view('livewire.backend.home-content.nineth-edit')->layout('layouts.backend');
    }

    public function saveRecord(){

         if(!is_null($this->editimage)){
            $image =  $this->editimage;
            $folder = '/uploads/lifeatskv';
            $uploadedData = $this->uploadOne($image, $folder);
             
          $homeContentNineth = HomeContentNineth::find($this->editId);
          $homeContentNineth->image = $uploadedData['file_name'] ?? NULL;
          $homeContentNineth->thumbnail = $uploadedData['thumbnail_name'] ?? NULL;
          $homeContentNineth->title1 = $this->title1 ?? Null;
          $homeContentNineth->title2 = $this->title2 ?? Null;
          $homeContentNineth->link =$this->link ?? Null;
          $homeContentNineth->sort_id =$this->sort_id ?? Null;
          $homeContentNineth->status = $this->status ?? Null;
          $homeContentNineth->save();  
                }

         else{

          $homeContentNineth = HomeContentNineth::find($this->editId);
          $homeContentNineth->title1 = $this->title1 ?? Null;
          $homeContentNineth->title2 = $this->title2 ?? Null;
          $homeContentNineth->link =$this->link ?? Null;
          $homeContentNineth->sort_id =$this->sort_id ?? Null;
          $homeContentNineth->status = $this->status ?? Null;
          $homeContentNineth->save();

         }   

        return redirect()->route('view_nineth'); 


    } 
}
