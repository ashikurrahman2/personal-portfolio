@extends('backend.Admin.master')
@section('title','Ressumes')
@section('body')
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
              <div class="page-block">
                  <div class="row align-items-center justify-content-between">
                      <div class="col-sm-auto">
                          <div class="page-header-title">
                              <h5 class="mb-0">Ressumes</h5>
                          </div>
                      </div>
                      <div class="col-sm-auto">
                          <ul class="breadcrumb">
                              <li class="breadcrumb-item"><a
                                      href=""><i
                                          class="ph-duotone ph-house"></i></a></li>
                              <li class="breadcrumb-item"><a href="javascript: void(0)">Dashboard</a></li>
                              <li class="breadcrumb-item" aria-current="page">Ressumes</li>
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
                    Add Ressume
                </button>
                </div>
            
                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title h4" id="myLargeModalLabel">Add Ressume</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('ressumes.store') }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name" class="col-form-label pt-0">Name <sup class="text-size-20 top-1">*</sup></label>
                                        <select class="form-control" id="name" name="name" required>
                                            <option value="">Select Ressume Title</option>
                                            <option value="My Experience">My Experience</option>
                                            <option value="My Education">My Education</option>

                                        </select>
                                    </div>                                        
                                    <div class="form-group">
                                        <label for="duration">Duration <sup class="text-size-20 top-1">*</sup></label>  
                                        <input class="form-control" type="text" id="duration" name="duration" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="experience_title">Exprience / Educational Qualification <sup class="text-size-20 top-1">*</sup></label>  
                                        <input class="form-control" type="text" id="experience_title" name="experience_title" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="address">Address <sup class="text-size-20 top-1">*</sup></label>  
                                        <input class="form-control" type="text" id="address" name="address" required>
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
                                        <th>Name</th>
                                        <th>Duration</th>
                                        <th>Exprience / Educational Qualification</th>
                                        <th>Address</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($ressumes as $ressume)
                                    <tr class="table-active">
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$ressume->name}}</td>
                                        <td>{{$ressume->duration}}</td>
                                        <td>{{$ressume->experience_title}}</td>
                                        <td>{{$ressume->address}}</td>
                                        <td>
                                            <!-- Edit button with icon -->
                                            <button type="button" class="btn btn-primary btn-sm editRessumeButton" data-bs-toggle="modal" data-bs-target="#editRessumeModal{{ $ressume->id }}">
                                                <i class="fas fa-edit"></i> Edit
                                            </button>
                                            <!-- Delete button with icon -->
                                            <form action="{{ route('ressumes.destroy', $ressume->id) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method("DELETE")
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this');">
                                                    <i class="fas fa-trash-alt"></i> Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    <div class="modal fade" id="editRessumeModal{{ $ressume->id }}" tabindex="-1" role="dialog" aria-labelledby="editRessumeModal{{ $ressume->id }}Label" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editRessumeModal{{ $ressume->id }}Label">Edit Ressume</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                            
                                                    <form id="editRessumeForm{{ $ressume->id }}" action="{{ route('ressumes.update', $ressume->id) }}" method="post" enctype="multipart/form-data">
                                                        @method('PUT')
                                                        @csrf
                                                        <div class="form-group">
                                                            <label for="name" class="col-form-label pt-0">Name <sup class="text-size-20 top-1">*</sup></label>
                                                            <select class="form-control" id="name{{ $ressume->id }}" name="name" required>
                                                                <option value="">Select Resume Title</option>
                                                                <option value="My Experience" {{ $ressume->name == "My Experience" ? 'selected' : '' }}>My Experience</option>
                                                                <option value="My Education" {{ $ressume->name == "My Education" ? 'selected' : '' }}>My Education</option>
                                                            </select>
                                                        </div> 
                                                        <div class="form-group">
                                                            <label for="duration">Duration <sup class="text-size-20 top-1">*</sup></label>  
                                                            <input class="form-control" type="text" id="duration{{ $ressume->id }}" name="duration" required value="{{ $ressume->duration }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="experience_title">Exprience / Educational Qualification <sup class="text-size-20 top-1">*</sup></label>  
                                                            <input class="form-control" type="text" id="experience_title{{ $ressume->id }}" name="experience_title" required value="{{ $ressume->experience_title }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="address">Address <sup class="text-size-20 top-1">*</sup></label>  
                                                            <input class="form-control" type="text" id="address{{ $ressume->id }}" name="address" required value="{{ $ressume->address }}">
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