<?php

namespace App\Http\Livewire\Backend\HomeContent;

use Livewire\Component;
use App\Models\HomeContentFirst;
use Illuminate\Support\Facades\File;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use App\Traits\UploadTrait;
use Illuminate\Support\Str;
class First extends Component
{
      use UploadTrait;  
    use WithFileUploads;

    public $title1,$title2,$title3,$desc,$link,$sort_id,$status;
    
    public function render()
    {
        $this->records = HomeContentFirst::get();
        return view('livewire.backend.home-content.first')->layout('layouts.backend');
    }

     protected $rules = [ 
        'title1' => 'required', 
        'title2' => 'required', 
        'title3' => 'required',
        'desc' => 'required',
        'link' => 'required',
        'sort_id' => 'required',
        'status' => 'required', 
     
      ];

     protected $messages = [
      'title1.required' => 'Title First Required.',
      'title2.required' => 'Title Second Required.',
      'title3.required' => 'Title third Required.',
      'desc.required' => 'Desc Required.',
      'link.required' => 'Link Required.',
      'sort_id.required' => 'Sort id Required.',
      'status.required' => 'Status Required.',
          
      ];  

       private function resetInputFields(){
        $this->title1 = '';
        $this->title2 = ''; 
        $this->title3 = ''; 
        $this->desc = '';
        $this->link = '';
        $this->sort_id = '';
        $this->status = '';
    }

    public function saveRecord(){
      $validatedData = $this->validate();

      $homeContentFirst = new HomeContentFirst();
      $homeContentFirst->title1 = $this->title1 ?? Null;
      $homeContentFirst->title2 = $this->title2 ?? Null;
      $homeContentFirst->title3 = $this->title3 ?? Null;
      $homeContentFirst->description = $this->desc ?? Null;
      $homeContentFirst->link =$this->link ?? Null;
      $homeContentFirst->sort_id =$this->sort_id ?? Null;
      $homeContentFirst->status = $this->status ?? Null;
      $homeContentFirst->save();
      $this->resetInputFields();
        $this->dispatchBrowserEvent('swal:modal', [
                'type' => 'success',  
                'message' => 'Successfully save!', 
            ]); 
        // Emit the 'formSubmitted' event
        $this->emit('formSubmitted');

     } 

      public function delete($id){
      $homeContentFirst = HomeContentFirst::findOrFail($id);
      if(!is_null($homeContentFirst)){
        $homeContentFirst->status = 'Inactive';
        $homeContentFirst->save();
      }
     }  

}
