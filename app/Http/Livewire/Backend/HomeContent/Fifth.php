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
class Fifth extends Component
{
    use UploadTrait;  
    use WithFileUploads;

    public $image,$title1,$title2,$link,$sort_id,$status;

    public function render()
    {
        $this->records = HomeContentFifth::get();
        return view('livewire.backend.home-content.fifth')->layout('layouts.backend');
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

      $homeContentFifth = new HomeContentFifth();
      $homeContentFifth->image = $uploadedData['file_name'] ?? NULL;
      $homeContentFifth->thumbnail = $uploadedData['thumbnail_name'] ?? NULL;
      $homeContentFifth->title1 = $this->title1 ?? Null;
      $homeContentFifth->title2= $this->title2 ?? Null;
      $homeContentFifth->link =$this->link ?? Null;
      $homeContentFifth->sort_id =$this->sort_id ?? Null;
      $homeContentFifth->status = $this->status ?? Null;
      $homeContentFifth->save();
 
      $this->resetInputFields();
        $this->dispatchBrowserEvent('swal:modal', [
                'type' => 'success',  
                'message' => 'Successfully save!', 
            ]); 
        // Emit the 'formSubmitted' event
        $this->emit('formSubmitted');

    }

    public function delete($id){
      $homeContentFifth = HomeContentFifth::findOrFail($id);
      if(!is_null($homeContentFifth)){
        $homeContentFifth->status = 'Inactive';
        $homeContentFifth->save();
      }
     }
}
