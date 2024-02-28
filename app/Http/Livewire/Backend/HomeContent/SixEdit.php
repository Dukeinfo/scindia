<?php

namespace App\Http\Livewire\Backend\HomeContent;

use Livewire\Component;
use App\Models\HomeContentSixth;
use Illuminate\Support\Facades\File;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use App\Traits\UploadTrait;
use Illuminate\Support\Str;
class SixEdit extends Component
{

    use UploadTrait;  
    use WithFileUploads;

    public $editId,$image,$thumbnail,$editimage,$title1,$title2,$link,$sort_id,$status;

     public function mount($id){

        $homeContentSixth = HomeContentSixth::findOrFail($id);
        $this->editId = $homeContentSixth->id;
        $this->thumbnail = $homeContentSixth->thumbnail;
        $this->image = $homeContentSixth->image;
        $this->title1 = $homeContentSixth->title1;
        $this->title2 = $homeContentSixth->title2;
        $this->link = $homeContentSixth->link;
        $this->sort_id = $homeContentSixth->sort_id;
        $this->status = $homeContentSixth->status;
    }


    public function render()
    {
        return view('livewire.backend.home-content.six-edit')->layout('layouts.backend');
    }

    public function saveRecord(){

         if(!is_null($this->editimage)){
            $image =  $this->editimage;
            $folder = '/uploads/lifeatskv';
            $uploadedData = $this->uploadOne($image, $folder);
             
          $homeContentSixth = HomeContentSixth::find($this->editId);
          $homeContentSixth->image = $uploadedData['file_name'] ?? NULL;
          $homeContentSixth->thumbnail = $uploadedData['thumbnail_name'] ?? NULL;
          $homeContentSixth->title1 = $this->title1 ?? Null;
          $homeContentSixth->title2 = $this->title2 ?? Null;
          $homeContentSixth->link =$this->link ?? Null;
          $homeContentSixth->sort_id =$this->sort_id ?? Null;
          $homeContentSixth->status = $this->status ?? Null;
          $homeContentSixth->save();  
                }

         else{

          $homeContentSixth = HomeContentSixth::find($this->editId);
          $homeContentSixth->title1 = $this->title1 ?? Null;
          $homeContentSixth->title2 = $this->title2 ?? Null;
          $homeContentSixth->link =$this->link ?? Null;
          $homeContentSixth->sort_id =$this->sort_id ?? Null;
          $homeContentSixth->status = $this->status ?? Null;
          $homeContentSixth->save();

         }   

        return redirect()->route('view_sixth'); 


    } 
}
