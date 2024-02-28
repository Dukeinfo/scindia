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
class ThirdEdit extends Component
{

    use UploadTrait;  
    use WithFileUploads;

    public $editId,$noticeboarddate,$title,$link,$sort_id,$status;

    protected $listeners = ["selectDate" => 'getDate'];

    public function mount($id){

        $homeContentThird = HomeContentThird::findOrFail($id);
        $this->editId = $homeContentThird->id;
        $this->title = $homeContentThird->title;
        $this->noticeboarddate = $homeContentThird->date;
        $this->link = $homeContentThird->link;
        $this->sort_id = $homeContentThird->sort_id;
        $this->status = $homeContentThird->status;
    }

    public function getDate( $date ) {
        
        $this->noticeboarddate = $date;
    }


    public function render()
    {
        return view('livewire.backend.home-content.third-edit')->layout('layouts.backend');
    }

     public function saveRecord(){

      $date=date('Y-m-d', strtotime($this->noticeboarddate)); 

      $HomeContentThird =  HomeContentThird::find($this->editId);  
      $HomeContentThird->date = $date;
      $HomeContentThird->title = $this->title ?? Null;
      $HomeContentThird->link =$this->link ?? Null;
      $HomeContentThird->sort_id =$this->sort_id ?? Null;
      $HomeContentThird->status = $this->status ?? Null;
      $HomeContentThird->save();
   
      return redirect()->route('view_third'); 

     }   
}
