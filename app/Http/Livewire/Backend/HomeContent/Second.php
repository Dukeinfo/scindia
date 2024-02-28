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
class Second extends Component
{
    use UploadTrait;  
    use WithFileUploads;

    public $image,$title1,$desc,$link,$sort_id,$status;

    public function render()
    {
        $this->records = HomeContentSecond::get();
        return view('livewire.backend.home-content.second')->layout('layouts.backend');
    }

      protected $rules = [ 
        'image' => 'required', 
        'title1' => 'required', 
        'desc' => 'required',
        'link' => 'required',
        'sort_id' => 'required',
        'status' => 'required', 
     
      ];

     protected $messages = [
      'image.required' => 'Image Required.',
      'title1.required' => 'Title Required.',
      'desc.required' => 'Desc Required.',
      'link.required' => 'Link Required.',
      'sort_id.required' => 'Sort id Required.',
      'status.required' => 'Status Required.',
          
      ];  

  private function resetInputFields(){
        $this->image = '';
        $this->title1 = ''; 
        $this->desc = '';
        $this->link = '';
        $this->sort_id = '';
        $this->status = '';
    }

    public function saveRecord(){

    $validatedData = $this->validate();    

     if(!is_null($this->image)){
      $image =  $this->image;
      $folder = '/uploads/principaldesk';
      $uploadedData = $this->uploadOne($image, $folder);
      } 
 
      $homeContentSecond = new HomeContentSecond();
      $homeContentSecond->image = $uploadedData['file_name'] ?? NULL;
      $homeContentSecond->thumbnail = $uploadedData['thumbnail_name'] ?? NULL;
      $homeContentSecond->title = $this->title1 ?? Null;
      $homeContentSecond->description = $this->desc ?? Null;
      $homeContentSecond->link =$this->link ?? Null;
      $homeContentSecond->sort_id =$this->sort_id ?? Null;
      $homeContentSecond->status = $this->status ?? Null;
      $homeContentSecond->save();
 
      $this->resetInputFields();
        $this->dispatchBrowserEvent('swal:modal', [
                'type' => 'success',  
                'message' => 'Successfully save!', 
            ]); 
        // Emit the 'formSubmitted' event
        $this->emit('formSubmitted');

     } 


      public function delete($id){
      $homeContentSecond = HomeContentSecond::findOrFail($id);
      if(!is_null($homeContentSecond)){
        $homeContentSecond->status = 'Inactive';
        $homeContentSecond->save();
      }
     }
}
