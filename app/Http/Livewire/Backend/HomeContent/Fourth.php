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
class Fourth extends Component
{
    use UploadTrait;  
    use WithFileUploads;

    public $link,$sort_id,$status;

    public function render()
    {
        $this->records = HomeContentForth::get();
        return view('livewire.backend.home-content.fourth')->layout('layouts.backend');
    }

      protected $rules = [ 
        'link' => 'required',
        'sort_id' => 'required',
        'status' => 'required', 
     
      ];

     protected $messages = [
      'link.required' => 'Link Required.',
      'sort_id.required' => 'Sort id Required.',
      'status.required' => 'Status Required.',
          
      ];

        private function resetInputFields(){
        $this->link = '';
        $this->sort_id = '';
        $this->status = '';
    }

    public function saveRecord(){
      $validatedData = $this->validate();

      $homeContentForth = new HomeContentForth();
      $homeContentForth->link =$this->link ?? Null;
      $homeContentForth->sort_id =$this->sort_id ?? Null;
      $homeContentForth->status = $this->status ?? Null;
      $homeContentForth->save();
      $this->resetInputFields();
        $this->dispatchBrowserEvent('swal:modal', [
                'type' => 'success',  
                'message' => 'Successfully save!', 
            ]); 
        // Emit the 'formSubmitted' event
        $this->emit('formSubmitted');

     } 


      public function delete($id){
      $homeContentForth = HomeContentForth::findOrFail($id);
      if(!is_null($homeContentForth)){
        $homeContentForth->status = 'Inactive';
        $homeContentForth->save();
      }
     }  
}
