<?php

namespace App\Http\Livewire\Backend\HomeContent;

use Livewire\Component;
use App\Models\HomeContentThird;
use Illuminate\Support\Facades\File;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use App\Traits\UploadTrait;
use Illuminate\Support\Str;
class Third extends Component
{
    use UploadTrait;  
    use WithFileUploads;

    public $noticeboarddate,$title,$link,$sort_id,$status;

    protected $listeners = ["selectDate" => 'getDate'];

    public function render()
    {
        $this->records = HomeContentThird::get();
        return view('livewire.backend.home-content.third')->layout('layouts.backend');
    }

    public function getDate( $date ) {
        
        $this->noticeboarddate = $date;
    }


    protected $rules = [ 
        'title' => 'required', 
        'noticeboarddate' => 'required',
        'link' => 'required',
        'sort_id' => 'required',
        'status' => 'required', 
     
      ];

     protected $messages = [
      'title.required' => 'Title Required.',
      'noticeboarddate.required' => 'Date Required.',
      'link.required' => 'Link Required.',
      'sort_id.required' => 'Sort id Required.',
      'status.required' => 'Status Required.',
          
      ];

       private function resetInputFields(){
        $this->title = ''; 
        $this->noticeboarddate = '';
        $this->link = '';
        $this->sort_id = '';
        $this->status = '';
     }

   
     public function saveRecord(){

      $validatedData = $this->validate(); 

      $date=date('Y-m-d', strtotime($this->noticeboarddate));   
     
      $HomeContentThird = new HomeContentThird();
      $HomeContentThird->date = $date;
      $HomeContentThird->title = $this->title ?? Null;
      $HomeContentThird->link =$this->link ?? Null;
      $HomeContentThird->sort_id =$this->sort_id ?? Null;
      $HomeContentThird->status = $this->status ?? Null;
      $HomeContentThird->save();
 
      $this->resetInputFields();
        $this->dispatchBrowserEvent('swal:modal', [
                'type' => 'success',  
                'message' => 'Successfully save!', 
            ]); 
        // Emit the 'formSubmitted' event
        $this->emit('formSubmitted');   

     }   

      public function delete($id){
      $homeContentThird = HomeContentThird::findOrFail($id);
      if(!is_null($homeContentThird)){
        $homeContentThird->status = 'Inactive';
        $homeContentThird->save();
      }
     }

}
