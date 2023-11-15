@extends('client.layouts.masterlayout')

@section('content')
<main id="main">




    <div class="w-75" style="margin: 150px auto;">
<!-- Modal -->
                    <form action="{{route('user-update')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{$editData->id}}">
                    
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalCenterTitle">Update Your Information</h5>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col mb-3">
                                                <label for="nameWithTitle" class="form-label">Name</label>
                                                <input type="text" id="nameWithTitle" class="form-control" name="username" value="{{$editData->username}}" placeholder="Enter Name" required />
                                            </div>
                                        </div>
                                        <div class="row g-2">
                                            <div class="col mb-0">
                                                <label for="emailWithTitle" class="form-label">Program</label>
                                                <select id="program" class="form-select" aria-label="Default select example" name="program" value="{{$editData->program}}" required>                                
                                                    <option value="CSE-Day">CSE-Day</option>
                                                    <option value="CSE-Evening">CSE-Evening</option>
                                                  </select>
                                            </div>
                
                                        </div>
                
                                        <div class="row g-2">
                                            <div class="col mb-0">
                                                <label for="emailWithTitle" class="form-label">Student ID</label>
                                                <input type="text" id="emailWithTitle" class="form-control" name="student_id" value="{{$editData->student_id}}" placeholder="4122********" required/>
                                            </div>
                
                                        </div>
                
                                        <div class="row g-2">
                                            <div class="col mb-0">
                                                <label for="semester" class="form-label">Semester</label>
                                     
                                                <select id="semester" class="form-select" name="semester" aria-label="Default select example" value="{{$editData->semester}}" required>                                
                                                    <option selected value="{{$editData->semester}}">{{$editData->semester}}</option>
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
                                                <label for="emailWithTitle" class="form-label">Section</label>
                                                <select id="program" class="form-select" name="section" aria-label="Default select example" name="section" value="{{$editData->section}}" required>                                
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
                                                <label for="emailWithTitle" class="form-label">Email</label>
                                                <input type="text" id="emailWithTitle" class="form-control" name="email" placeholder="sample@gmail.com" value="{{$editData->email}}" required/>
                                            </div>
                
                                        </div>
{{--                 
                                        <div class="row g-2">
                                            <div class="col mb-0">
                                                <label for="emailWithTitle" class="form-label">Password</label>
                                                <input type="password" id="emailWithTitle" class="form-control" name="password" value="{{$editData->password}}" placeholder="Enter Password" required/>
                                            </div>
                
                                        </div>
                 --}}
                                        <div class="row g-2">
                                            <div class="col mb-0">
                                                <label for="emailWithTitle" class="form-label">Contact</label>
                                                <input type="text" id="emailWithTitle" class="form-control" name="contact" value="{{$editData->contact}}" placeholder="01610158095" required/>
                                            </div>
                
                                        </div>
                
                                        <div class="row g-2">
                                            <div class="col mb-0">
                                                <label for="emailWithTitle" class="form-label">Blood Groop</label>
                                                <select id="program" class="form-select" name="blood_group" aria-label="Default select example" value="{{$editData->blood_group}}" name="blood_group" required>                                
                                                    <option value="A+">A+</option>
                                                    <option value="A-">A-</option>
                                                    <option value="B+">B+</option>
                                                    <option value="B-">B-</option>
                                                    <option value="AB+">AB+</option>
                                                    <option value="AB-">AB-</option>
                                                    <option value="O+">O+</option>
                                                    <option value="O-">O-</option>
                                                  </select>
                                            </div>
                                        </div>
                                        <div class="row g-2">
                                            <div class="col mb-0">
                                                <label for="emailWithTitle" class="form-label">Present Address<Address></Address></label>
                                                <input type="text" id="emailWithTitle" class="form-control" name="present_address" value="{{$editData->present_address}}" required />
                                            </div>
                                        </div>
                                        <div class="row g-2">
                                            <div class="col mb-0">
                                                <label for="emailWithTitle" class="form-label">Permanent Address</label>
                                                <input type="text" id="emailWithTitle" class="form-control" name="permanent_address" value="{{$editData->permanent_address}}" required />
                                            </div>
                                        </div>
                
                                        <div class="row g-2">
                                            <div class="col mb-0">
                                                <label for="emailWithTitle" class="form-label">Professional Skill (If you any have)</label>
                                                <input type="text" id="emailWithTitle" class="form-control" name="professional_skill" value="{{$editData->professional_skill}}" required/>
                                            </div>
                                        </div>
                
                                        <div class="row g-2">
                                            <div class="col mb-0">
                                                <label for="emailWithTitle" class="form-label">Your Interest</label>
                                                <input type="text" id="emailWithTitle" class="form-control" name="interest" value="{{$editData->interest}}" required/>
                                            </div>
                                        </div>
                
                                        <div class="row g-2">
                                            <div class="col mb-0">
                                                <label for="emailWithTitle" class="form-label">Your Future Goal</label>
                                                <input type="text" id="emailWithTitle" class="form-control" name="goal" value="{{$editData->goal}}" required/>
                                            </div>
                                        </div>
                
                                        <div class="row g-2 mb-4">
                                            <div class="col mb-0">
                                                <label for="emailWithTitle" class="form-label">Do you have leadership or Volunteering experience? (If Yes, Pls Explain)</label>
                                                <input type="text" id="emailWithTitle" class="form-control" name="leadership" value="{{$editData->leadership}}" required/>
                                            </div>
                                        </div>
                

                                        <div class="row g-2">
                                            <div class="col mb-0">
                                                <label for="emailWithTitle" class="form-label">Image</label>
                                                <input name="newimage" type="file" class="file-input">
                                                <img src="{{asset('uploads/images/users')}}/{{$editData->image}}" style="width:80px;height:auto;border-radius:50%;border:3px solid rgb(129, 129, 240);">
                                                <input name="oldimage" type="hidden" class="form-control" value="{{$editData->image}}">
                                            </div>
                                        </div>



                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Update Profile</button>
                                    </div>
                                </div>
                    </form>

                </div>
                    
</main><!-- End #main -->
@endsection