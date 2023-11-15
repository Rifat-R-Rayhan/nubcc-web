@extends('server.layouts.masterlayout')

@section('content')

                    <!-- Modal -->
                    <form action="{{route('member_update')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{$editData->id}}">
                    
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalCenterTitle">Update member Information</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col mb-3">
                                                <label for="nameWithTitle" class="form-label">Name</label>
                                                <input name="member_name" type="text" id="nameWithTitle" class="form-control" value="{{$editData->member_name}}" />
                                            </div>
                                        </div>

                                        <div class="row g-2">
                                            <div class="col mb-0">
                                                <label for="emailWithTitle" class="form-label">Designation</label>
                                                <input name="designation" type="text" id="emailWithTitle" class="form-control" value="{{$editData->designation}}"/>
                                            </div>

                                        </div>

                                        <div class="row g-2">
                                            <div class="col mb-0">
                                                <label for="emailWithTitle" class="form-label">Email</label>
                                                <input name="email" type="text" id="emailWithTitle" class="form-control" value="{{$editData->email}}"/>
                                            </div>

                                        </div>

                                        <div class="row g-2">
                                            <div class="col mb-0">
                                                <label for="emailWithTitle" class="form-label">Password</label>
                                                <input name="password" type="text" id="emailWithTitle" class="form-control" value="{{$editData->password}}"/>
                                            </div>
                                        </div>

                                        <div class="row g-2">
                                            <div class="col mb-0">
                                                <label for="emailWithTitle" class="form-label">Contact No.</label>
                                                <input name="mobile" type="text" id="emailWithTitle" class="form-control" value="{{$editData->mobile}}"/>
                                            </div>
                                        </div>

                                        <div class="row g-2">
                                            <div class="col mb-0">
                                                <label for="emailWithTitle" class="form-label">Facebook Link</label>
                                                <input name="fb_link" type="text" id="emailWithTitle" class="form-control" value="{{$editData->fb_link}}"/>
                                            </div>
                                        </div>

                                        <div class="row g-2">
                                            <div class="col mb-0">
                                                <label for="emailWithTitle" class="form-label">Student ID</label>
                                                <input name="student_id" type="text" id="emailWithTitle" class="form-control" value="{{$editData->student_id}}"/>
                                            </div>

                                        </div>


                                        <div class="row g-2">
                                        <div class="col mb-0">
                                            <label for="emailWithTitle" class="form-label">Semester</label>
                                            <select id="program" class="form-select" name="semester" aria-label="Default select example" value="{{$editData->semester}}" required>                                
                                                <option value="Spring {{2000+ (date('y')-4)}}">Spring {{2000+ (date('y')-4)}}</option>
                                                <option value="Fall {{2000+ (date('y')-4)}}">Fall {{2000+ (date('y')-4)}}</option>
                                                <option value="Summer {{2000+ (date('y')-4)}}">Summer {{2000+ (date('y')-4)}}</option>
                                                <option value="Spring {{2000+ (date('y')-3)}}">Spring {{2000+ (date('y')-3)}}</option>
                                                <option value="Fall {{2000+ (date('y')-3)}}">Fall {{2000+ (date('y')-3)}}</option>
                                                <option value="Summer {{date('y')-3}}">Summer {{2000+ (date('y')-3)}}</option>
                                                <option value="Spring {{date('y')-2}}">Spring {{2000+ (date('y')-2)}}</option>
                                                <option value="Fall {{2000+ (date('y')-2)}}">Fall {{2000+ (date('y')-2)}}</option>
                                                <option value="Summer {{2000+ (date('y')-2)}}">Summer {{2000+ (date('y')-2)}}</option>
                                                <option value="Spring {{2000+ (date('y')-1)}}">Spring {{2000+ (date('y')-1)}}</option>
                                                <option value="Fall {{2000+ (date('y')-1)}}">Fall {{2000+ (date('y')-1)}}</option>
                                                <option value="Summer {{2000+ (date('y')-1)}}">Summer {{2000+ (date('y')-1)}}</option>
                                                <option value="Spring {{2000+ date('y') }}">Spring {{2000+ date('y') }}</option>
                                                <option value="Fall {{2000+ date('y') }}">Fall {{2000+ date('y') }}</option>
                                                <option value="Summer {{2000+ date('y') }}">Summer {{2000+ date('y') }}</option>
                                                <option value="Spring {{2000+ (date('y')+1) }}">Spring {{ 2000+ (date('y')+1) }}</option>
                                            </select>
                                        </div>

                                    </div>

                                        <div class="row g-2">
                                            <div class="col mb-0">
                                                <label for="emailWithTitle" class="form-label">Image</label>
                                                <input name="newimage" type="file" class="file-input">
                                                <img src="{{asset('uploads/images/members')}}/{{$editData->image}}" style="width:100px;height:100px">
                                                <input name="oldimage" type="hidden" class="form-control" value="{{$editData->image}}">
                                            </div>
                                        </div>



                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Update member</button>
                                    </div>
                                </div>
                    </form>

@endsection