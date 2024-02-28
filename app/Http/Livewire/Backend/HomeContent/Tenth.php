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
class Tenth extends Component
{
      use UploadTrait;  
    use WithFileUploads;
    
    public $image,$title1,$title2,$link,$sort_id,$status;

    public function render()
    {
        $this->records = HomeContentTenth::get();
        return view('livewire.backend.home-content.tenth')->layout('layouts.backend');
    }

    protected $rules = [ 
        'image' => 'required', 
        'title1' => 'required', 
        'title2' => 'required', 
        'link' => 'required',
        'sort_id' => 'required',
        'status' => 'required', 
     
      ];

     protected $messages = [
      'image.required' => 'Image Required.',
      'title1.required' => 'Title First Required.',
      'title2.required' => 'Title Second Required.',
      'link.required' => 'Link Required.',
      'sort_id.required' => 'Sort id Required.',
      'status.required' => 'Status Required.',
          
      ]; 

        private function resetInputFields(){
        $this->image = '';
        $this->title1 = '';
        $this->title2 = ''; 
        $this->link = '';
        $this->sort_id = '';
        $this->status = '';
    }
     public function saveRecord(){

      $validatedData = $this->validate();


      if(!is_null($this->image)){
      $image =  $this->image;
      $folder = '/uploads/lifeatskv';
      $uploadedData = $this->uploadOne($image, $folder);
      }  

      $homeContentTenth = new HomeContentTenth();
      $homeContentTenth->image = $uploadedData['file_name'] ?? NULL;
      $homeContentTenth->thumbnail = $uploadedData['thumbnail_name'] ?? NULL;
      $homeContentTenth->title1 = $this->title1 ?? Null;
      $homeContentTenth->title2= $this->title2 ?? Null;
      $homeContentTenth->link =$this->link ?? Null;
      $homeContentTenth->sort_id =$this->sort_id ?? Null;
      $homeContentTenth->status = $this->status ?? Null;
      $homeContentTenth->save();
 
      $this->resetInputFields();
        $this->dispatchBrowserEvent('swal:modal', [
                'type' => 'success',  
                'message' => 'Successfully save!', 
            ]); 
        // Emit the 'formSubmitted' event
        $this->emit('formSubmitted');

    }
     public function delete($id){
      $homeContentTenth = HomeContentTenth::findOrFail($id);
      if(!is_null($homeContentTenth)){
        $homeContentTenth->status = 'Inactive';
        $homeContentTenth->save();
      }
     }
}
