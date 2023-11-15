@extends('server.layouts.masterlayout')

@section('content')

                    <!-- Modal -->
                    <form action="{{route('admin_update')}}" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{$editData->id}}">
                    
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalCenterTitle">Update Admin Information</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col mb-3">
                                                <label for="nameWithTitle" class="form-label">Name</label>
                                                <input name="admin_name" type="text" id="nameWithTitle" class="form-control" value="{{$editData->admin_name}}" placeholder="Enter Name" />
                                            </div>
                                        </div>
                                        <div class="row g-2">
                                            <div class="col mb-0">
                                                <label for="emailWithTitle" class="form-label">Email</label>
                                                <input name="email" type="text" id="emailWithTitle" class="form-control" value="{{$editData->email}}" placeholder="sample@gmail.com" />
                                            </div>

                                        </div>
                                        <div class="row g-2">
                                            <div class="col mb-0">
                                                <label for="emailWithTitle" class="form-label">Password</label>
                                                <input name="password" type="text" id="emailWithTitle" class="form-control" value="{{$editData->password}}" placeholder="Alpha Numeric" />
                                            </div>
                                        </div>

                                        <div class="row g-2">
                                            <div class="col mb-0">
                                                <label for="emailWithTitle" class="form-label">Contact No.</label>
                                                <input name="mobile" type="text" id="emailWithTitle" class="form-control" value="{{$editData->mobile}}" placeholder="Ex. +8801723456789" />
                                            </div>
                                        </div>



                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Update Admin</button>
                                    </div>
                                </div>
                    </form>

@endsection