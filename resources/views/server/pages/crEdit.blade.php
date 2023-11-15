@extends('server.layouts.masterlayout')

@section('content')

                    <!-- Modal -->
                    <form action="{{route('cr_update')}}" method="post" enctype="multipart/form-data">
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
                                                <input name="cr_name" type="text" id="nameWithTitle" class="form-control" value="{{$editData->cr_name}}" />
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
                                                <select id="program" class="form-select" name="semester" aria-label="Default select example">                                
                                                    <option value="{{$editData->semester}}" selected>{{$editData->semester}}</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                </select>
                                            </div>
                
                                        </div>
                
                                        <div class="row g-2">
                                            <div class="col mb-0">
                                                <label for="emailWithTitle" class="form-label">Section</label>
                                                <select id="program" class="form-select" name="section" aria-label="Default select example" name="section" value="{{$editData->section}}">                                
                                                    <option value="A">A</option>
                                                    <option value="B">B</option>
                                                    <option value="C">C</option>
                                                    <option value="D">D</option>
                                                    <option value="E">E</option>
                                                    <option value="F">F</option>
                                                    <option value="G">G</option>
                                                    <option value="H">H</option>
                                                    <option value="I">I</option>
                                                    <option value="J">J</option>
                                                    <option value="K">K</option>
                                                </select>
                                            </div>
                
                                        </div>

                                        <div class="row g-2">
                                            <div class="col mb-0">
                                                <label for="emailWithTitle" class="form-label">Image</label>
                                                <input name="newimage" type="file" class="file-input">
                                                <img src="{{asset('uploads/images/crs')}}/{{$editData->image}}" style="width:100px;height:100px">
                                                <input name="oldimage" type="hidden" class="form-control" value="{{$editData->image}}">
                                            </div>
                                        </div>



                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Update CR</button>
                                    </div>
                                </div>
                    </form>

@endsection