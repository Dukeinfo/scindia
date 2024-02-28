<?php

namespace App\Http\Livewire\Backend\HomeContent;

use Livewire\Component;
use App\Models\HomeContentFifth;
use Illuminate\Support\Facades\File;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use App\Traits\UploadTrait;
use Illuminate\Support\Str;
class FifthEdit extends Component
{

    use UploadTrait;  
    use WithFileUploads;

    public $editId,$image,$thumbnail,$editimage,$title1,$title2,$link,$sort_id,$status;

     public function mount($id){

        $homeContentFifth = HomeContentFifth::findOrFail($id);
        $this->editId = $homeContentFifth->id;
        $this->thumbnail = $homeContentFifth->thumbnail;
        $this->image = $homeContentFifth->image;
        $this->title1 = $homeContentFifth->title1;
        $this->title2 = $homeContentFifth->title2;
        $this->link = $homeContentFifth->link;
        $this->sort_id = $homeContentFifth->sort_id;
        $this->status = $homeContentFifth->status;
    }

    public function render()
    {
        return view('livewire.backend.home-content.fifth-edit')->layout('layouts.backend');
    }


    public function saveRecord(){

         if(!is_null($this->editimage)){
            $image =  $this->editimage;
            $folder = '/uploads/lifeatskv';
            $uploadedData = $this->uploadOne($image, $folder);
             
          $homeContentFifth = HomeContentFifth::find($this->editId);
          $homeContentFifth->image = $uploadedData['file_name'] ?? NULL;
          $homeContentFifth->thumbnail = $uploadedData['thumbnail_name'] ?? NULL;
          $homeContentFifth->title1 = $this->title1 ?? Null;
          $homeContentFifth->title2 = $this->title2 ?? Null;
          $homeContentFifth->link =$this->link ?? Null;
          $homeContentFifth->sort_id =$this->sort_id ?? Null;
          $homeContentFifth->status = $this->status ?? Null;
          $homeContentFifth->save();  
                }

         else{

          $homeContentFifth = HomeContentFifth::find($this->editId);
          $homeContentFifth->title1 = $this->title1 ?? Null;
          $homeContentFifth->title2 = $this->title2 ?? Null;
          $homeContentFifth->link =$this->link ?? Null;
          $homeContentFifth->sort_id =$this->sort_id ?? Null;
          $homeContentFifth->status = $this->status ?? Null;
          $homeContentFifth->save();

         }   

        return redirect()->route('view_fifth'); 


    }  
}
