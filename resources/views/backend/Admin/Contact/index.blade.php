@extends('backend.Admin.master')
@section('title','contact')
@section('body')
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
              <div class="page-block">
                  <div class="row align-items-center justify-content-between">
                      <div class="col-sm-auto">
                          <div class="page-header-title">
                              <h5 class="mb-0">Contact</h5>
                          </div>
                      </div>
                      <div class="col-sm-auto">
                          <ul class="breadcrumb">
                              <li class="breadcrumb-item"><a
                                      href=""><i
                                          class="ph-duotone ph-house"></i></a></li>
                              <li class="breadcrumb-item"><a href="javascript: void(0)">Dashboard</a></li>
                              <li class="breadcrumb-item" aria-current="page">Contact</li>
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
                    Add contact
                </button>
                </div>
            
                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title h4" id="myLargeModalLabel">Add Contact</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('contact.store') }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="phone" class="col-form-label pt-0">Phone <sup class="text-size-20 top-1">*</sup></label>
                                        <input type="number" class="form-control" id="phone" name="phone" required>
                                    </div>
                                    <div class="form-group mb-0">
                                        <label for="email" class="col-form-label">E-mail</label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                    </div>

                                    <div class="form-group mb-0">
                                        <label for="address" class="col-form-label">Address</label>
                                        <textarea class="form-control" id="address" name="address"></textarea>
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
                                        <th>Phone</th>
                                        <th>E-mail</th>
                                        <th>Address</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($contacts as $contact)
                                    <tr class="table-active">
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$contact->phone}}</td>
                                        <td>{{base64_decode($contact->email) }}</td>
                                        <td>{{$contact->address}}</td>
                                        <td>
                                            <!-- Edit button with icon -->
                                            <button type="button" class="btn btn-primary btn-sm editcontactButton" data-bs-toggle="modal" data-bs-target="#editcontactModal{{ $contact->id }}">
                                                <i class="fas fa-edit"></i> Edit
                                            </button>
                                            <!-- Delete button with icon -->
                                            <form action="{{ route('contact.destroy', $contact->id) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method("DELETE")
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this');">
                                                    <i class="fas fa-trash-alt"></i> Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    <div class="modal fade" id="editcontactModal{{ $contact->id }}" tabindex="-1" role="dialog" aria-labelledby="editcontactModal{{ $contact->id }}Label" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editcontactModal{{ $contact->id }}Label">Edit contact</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form id="editcontactForm{{ $contact->id }}" action="{{ route('contact.update', $contact->id) }}" method="post" enctype="multipart/form-data">
                                                        @method('PUT')
                                                        @csrf
                                                        <div class="form-group">
                                                            <label for="phone" class="col-form-label pt-0">Phone <sup class="text-size-20 top-1">*</sup></label>
                                                            <input type="number" class="form-control" id="contact{{ $contact->id }}" name="phone" required value="{{ $contact->phone }}">
                                                        </div>
                                                        <div class="form-group mb-0">
                                                            <label for="email" class="col-form-label">E-mail</label>
                                                            <input type="email" class="form-control" id="email{{ $contact->id }}" name="email" required value="{{base64_decode($contact->email) }}">
                                                        </div>

                                                        <div class="form-group mb-0">
                                                            <label for="address" class="col-form-label">Address</label>
                                                            <textarea class="form-control" id="address{{ $contact->id }}" name="address">{{ $contact->address }}</textarea>
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