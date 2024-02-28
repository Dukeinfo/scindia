<?php

namespace App\Http\Livewire\Backend\Seo;

use Livewire\Component;
use App\Models\Footersnippets ;
class EditFooterSnippets extends Component
{

	 public $footerId, $desc, $sort_id, $status, $editing, $recordId;
public function mount($id)
    {
	      $record = Footersnippets::findOrFail($id);
        $this->footerId = $record->id;
        $this->desc = $record->description;

        $this->sort_id = $record->sort_id;
        $this->status = $record->status;
    }


    public function render()
    {
        return view('livewire.backend.seo.edit-footer-snippets')->layout('layouts.backend');
    }

    public function updateFootersnippets(){

      $footersnippets =  Footersnippets::find($this->footerId);
      $footersnippets->description = $this->desc;
      $footersnippets->sort_id =$this->sort_id;
      $footersnippets->status = $this->status;
      $footersnippets->save();


      $this->dispatchBrowserEvent('swal:modal', [
              'type' => 'success',  
              'message' => 'Updated Successfully!', 
          ]); 
      return redirect()->route('manage_footer_snippets');
    }
}
