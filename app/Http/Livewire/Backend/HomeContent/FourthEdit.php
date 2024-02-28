<?php

namespace App\Http\Livewire\Backend\HomeContent;

use Livewire\Component;
use App\Models\HomeContentForth;
use Illuminate\Support\Facades\File;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use App\Traits\UploadTrait;
use Illuminate\Support\Str;
class FourthEdit extends Component
{

    public $editId,$link,$sort_id,$status;

    public function mount($id){

        $homeContentForth = HomeContentForth::findOrFail($id);
         $this->editId = $homeContentForth->id;
        $this->link = $homeContentForth->link;
        $this->sort_id = $homeContentForth->sort_id;
        $this->status = $homeContentForth->status;
    }

    public function render()
    {
        return view('livewire.backend.home-content.fourth-edit')->layout('layouts.backend');
    }

    public function saveRecord(){

      $homeContentForth = HomeContentForth::find($this->editId);
      $homeContentForth->link =$this->link ?? Null;
      $homeContentForth->sort_id =$this->sort_id ?? Null;
      $homeContentForth->status = $this->status ?? Null;
      $homeContentForth->save();
   
       return redirect()->route('view_fourth'); 

     } 

}
