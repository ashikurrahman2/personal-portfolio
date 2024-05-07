@extends('backend.Admin.master')
@section('title','linked')
@section('body')
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
              <div class="page-block">
                  <div class="row align-items-center justify-content-between">
                      <div class="col-sm-auto">
                          <div class="page-header-title">
                              <h5 class="mb-0">Account Link</h5>
                          </div>
                      </div>
                      <div class="col-sm-auto">
                          <ul class="breadcrumb">
                              <li class="breadcrumb-item"><a
                                      href=""><i
                                          class="ph-duotone ph-house"></i></a></li>
                              <li class="breadcrumb-item"><a href="javascript: void(0)">Dashboard</a></li>
                              <li class="breadcrumb-item" aria-current="page">Account Link</li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div><!-- [ breadcrumb ] end -->

          <!-- [ Main Content ] start -->
          
          <div class="row">    
            <div class="card-body pc-component">
                <div class="d-flex justify-content-end mb-2">   
                  <button  type="button" class="btn btn-primary mr-2" data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus mr-2">
                        <line x1="12" y1="5" x2="12" y2="19"></line>
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg>
                    Add Link
                </button>
                </div>
            
                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title h4" id="myLargeModalLabel">Add Link</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('links.store') }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name" class="col-form-label pt-0">Account Name <sup class="text-size-20 top-1">*</sup></label>
                                        <input type="text" class="form-control" id="account_name" name="account_name" required>
                                    </div>                                        
                                    <div class="form-group">
                                        <label for="link" class="col-form-label pt-0">Account Link <sup class="text-size-20 top-1">*</sup></label>
                                        <input type="text" class="form-control" id="link" name="link" required>
                                    </div>
                                  
                                 
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
          
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                            <p class="text-success text-center">{{session('success')}}</p>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Account Name</th>
                                        <th>Account Links</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($links as $link)
                                    <tr class="table-active">
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$link->account_name}}</td>
                                        <td>{{ base64_decode($link->link) }}</td>
                                        <td>

                        <!-- Edit button with icon -->
            <button type="button" class="btn btn-primary btn-sm editLinkButton" data-bs-toggle="modal" data-bs-target="#editlinkModal{{ $link->id }}">
                <i class="fas fa-edit"></i> Edit
            </button>
                                            <!-- Delete button with icon -->
                                            <form action="{{ route('links.destroy', $link->id) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method("DELETE")
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this');">
                                                    <i class="fas fa-trash-alt"></i> Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    <div class="modal fade" id="editlinkModal{{ $link->id }}" tabindex="-1" role="dialog" aria-labelledby="editLinkModal{{ $link->id }}Label" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editlinkModal{{ $link->id }}Label">Edit Link</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                            
                                                    <form id="editlinkForm{{ $link->id }}" action="{{ route('links.update', $link->id) }}" method="post" enctype="multipart/form-data">
                                                        @method('PUT')
                                                        @csrf
                                                        <div class="form-group">
                                                            <label for="name" class="col-form-label pt-0">Account Link <sup class="text-size-20 top-1">*</sup></label>
                                                        </div> 

                                                        <div class="form-group">
                                                            <label for="account_name" class="col-form-label pt-0">Account Name <sup class="text-size-20 top-1">*</sup></label>
                                                            <input type="text" class="form-control" id="account_name{{ $link->id }}" name="account_name" required value="{{ $link->account_name }}">xa
                                                        </div>

                                                        <div class="form-group mb-0">
                                                            <label for="link" class="col-form-label">Account Link</label>
                                                            <input type="text" class="form-control" id="link{{ $link->id }}" name="link" required value="{{ $link->link }}">
                                                        </div>
                                                    
                                                     
                                                      
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Update</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                </tbody>                                
                            </table>

                        </div>
                    </div>
                </div>
            </div><!-- [ Contextual-table ] end -->
          </div><!-- [ Main Content ] end -->                           

@endsection
