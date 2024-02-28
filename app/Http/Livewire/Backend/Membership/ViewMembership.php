<?php

namespace App\Http\Livewire\Backend\Membership;

use Livewire\Component;
use App\Models\Memberships;
use App\Traits\UploadTrait;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\File;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class ViewMembership extends Component
{

    use WithFileUploads;
    use UploadTrait;
    public  $sort, $image ,$hlink,$status;
    public $records;


     protected $rules = [
        'image' => 'required', 
        'sort' => 'required| unique:memberships,sort_id', 
        'status' => 'required', 
       
     
      ];
      protected $messages = [
          'image.required' => 'Logo Required.',
          'sort.required' => 'Sort Required.',
          'status.required' => 'Status Required.',
          
      ];
    private function resetInputFields(){
        $this->logo = '';
        $this->sort = '';
        $this->status = '';
        $this->hlink = '';
    }

   
   public function addMembership(){

     $validatedData = $this->validate();
     if(!is_null($this->image)){
      $image =  $this->image;
      // Define folder path
      $folder = '/uploads/membership';
      foreach ($this->image as $img) {
      $uploadedData = $this->uploadOne($img, $folder);
      $membership = new Memberships();
      $membership->logo = $uploadedData['file_name'] ?? NULL;
      $membership->thumbnail = $uploadedData['thumbnail_name'] ?? NULL;
      $membership->sort_id =$this->sort;
      $membership->link = $this->hlink;
      $membership->status = $this->status;
      $membership->save();
      } 
    } 
       $this->resetInputFields();
       $this->dispatchBrowserEvent('swal:modal', [
              'type' => 'success',  
              'message' => 'Successfully save!', 
          ]); 

   }


     public function delete($id){

      $membership = Memberships::findOrFail($id);
      if(!is_null($membership)){
         $membership->status = 'Inactive';
         $membership->save();
      }

     }

    public function render()
    {
    $this->records =  Memberships::orderBy('sort_id' ,'asc')->get();
    return view('livewire.backend.membership.view-membership')->layout('layouts.backend');
    }
}
