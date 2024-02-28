<?php

namespace App\Http\Livewire\Backend\Enquiries;

use Livewire\Component;
use App\Models\Enquiry;
class EnquiryLists extends Component
{
    public function render()
    {
        $this->records = Enquiry::orderBy('id','desc')->get();
        return view('livewire.backend.enquiries.enquiry-lists')->layout('layouts.backend');;
    }

    public function delete($id){

      $enquiry=Enquiry::where('id',$id)->delete();

     }


}
