<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Update Footer Snippets</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Dashboard</a></li>
                                <li class="breadcrumb-item active">Footer Snippets</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header bg-transparent border-bottom py-3">
                            <h4 class="card-title">Schema Code</h4>
                            <p class="card-title-desc mb-0">Paste your schema code here.</p>
                        </div>
                        <div class="card-body">
                              <!--form starts-->
                              <form wire:submit.prevent="updateFootersnippets">
                              	
                            <div class="row g-3">
                                
                                <div class="col-md-12">
                                    <div class="mb-3" >
                                        <textarea wire:model="desc"  id="" cols="" rows="15" class="form-control"></textarea>
                          
                                   
                                    </div>
                                     @error('desc') <span class="error">{{ $message }}</span> @enderror
                                </div>
                                    <div class="col-md-2">
                                    <div class="mb-3">
                                        <label class="form-label">Sorting Order#</label>
                                        <input type="number" class="form-control"  wire:model="sort_id" placeholder="Order NUmber">
                                         @error('sort_id') <span class="error">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="mb-3">
                                        <label class="form-label">Status</label>
                                        <select class="form-select" wire:model="status">
                                                <option value="">Select</option>
                                                <option value="Active">Active</option>
                                                <option value="Inactive"> Inactive </option>
                                        </select>
                                         @error('status') <span class="error">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Update</button>
                                </div>
                            </div>
                              </form>

                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

       
            <!-- end row -->

        </div>
        <!-- container-fluid -->
    </div>
</div>
