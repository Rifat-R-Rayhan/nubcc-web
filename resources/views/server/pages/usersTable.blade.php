@extends('server.layouts.masterlayout')

@section('content')

<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

                        <!-- Search field -->
                        <div class="card">
                            <div class="card-body">
                                <h5 class="mb-3">User Search Results</h5>
        
                                <form action="{{route('user_search')}}" method="get">
                                    @csrf
                                    <div class="input-group mb-3">
                                        <div class="form-group-feedback form-group-feedback-left">
                                            <input type="search" name="search" class="form-control form-control-lg" placeholder="Search by Student ID or Name">
                                            <div class="form-control-feedback form-control-feedback-lg">
                                                <i class="icon-search4 text-muted"></i>
                                            </div>
                                        </div>
        
                                        <div class="input-group-append ms-2">
                                            <button type="submit" class="btn btn-primary btn-lg">Search</button>
                                        </div>
                                    </div>
        
                                    
                                </form>
                            </div>
                        </div>
                        <!-- /search field --> 

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Users /</span> Users Table</h4>



        <hr class="my-5" />

        <div class="add_user">
            <div class="col-lg-4 col-md-6">

                <div class="mt-3 mb-3">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCenter">
                        Add Member
                    </button>

                    <form action="{{route('user_insert')}}" method="POST" enctype="multipart/form-data">
                    <!-- Modal -->
                    @csrf
                    <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalCenterTitle">Add New Member</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col mb-3">
                                            <label for="nameWithTitle" class="form-label">Name</label>
                                            <input type="text" id="nameWithTitle" class="form-control" name="username" placeholder="Enter Name" required />
                                        </div>
                                    </div>
                                    <div class="row g-2">
                                        <div class="col mb-0">
                                            <label for="emailWithTitle" class="form-label">Program</label>
                                            <select id="program" class="form-select" aria-label="Default select example" name="program" required>                                
                                                <option value="CSE-Day">CSE-Day</option>
                                                <option value="CSE-Evening">CSE-Evening</option>
                                              </select>
                                        </div>

                                    </div>

                                    <div class="row g-2">
                                        <div class="col mb-0">
                                            <label for="emailWithTitle" class="form-label">Student ID</label>
                                            <input type="text" id="emailWithTitle" class="form-control" name="student_id" placeholder="4122********" required/>
                                        </div>

                                    </div>

                                    <div class="row g-2">
                                        <div class="col mb-0">
                                            <label for="emailWithTitle" class="form-label">Semester</label>
                                            <select id="program" class="form-select" name="semester" aria-label="Default select example" name="semester" required>                                
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
                                            <select id="program" class="form-select" name="section" aria-label="Default select example" name="section" required>                                
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
                                            <input type="text" id="emailWithTitle" class="form-control" name="email" placeholder="sample@gmail.com" required/>
                                        </div>

                                    </div>

                                    <div class="row g-2">
                                        <div class="col mb-0">
                                            <label for="emailWithTitle" class="form-label">Password</label>
                                            <input type="password" id="emailWithTitle" class="form-control" name="password" placeholder="Enter Password" required/>
                                        </div>
            
                                    </div>

                                    <div class="row g-2">
                                        <div class="col mb-0">
                                            <label for="emailWithTitle" class="form-label">Contact</label>
                                            <input type="text" id="emailWithTitle" class="form-control" name="contact" placeholder="01610158095" required/>
                                        </div>

                                    </div>

                                    <div class="row g-2">
                                        <div class="col mb-0">
                                            <label for="emailWithTitle" class="form-label">Blood Groop</label>
                                            <select id="program" class="form-select" name="blood_group" aria-label="Default select example" name="blood_group" required>                                
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
                                            <input type="text" id="emailWithTitle" class="form-control" name="present_address" required />
                                        </div>
                                    </div>
                                    <div class="row g-2">
                                        <div class="col mb-0">
                                            <label for="emailWithTitle" class="form-label">Permanent Address</label>
                                            <input type="text" id="emailWithTitle" class="form-control" name="permanent_address" required />
                                        </div>
                                    </div>

                                    <div class="row g-2">
                                        <div class="col mb-0">
                                            <label for="emailWithTitle" class="form-label">Professional Skill (If you any have)</label>
                                            <input type="text" id="emailWithTitle" class="form-control" name="professional_skill"/>
                                        </div>
                                    </div>

                                    <div class="row g-2">
                                        <div class="col mb-0">
                                            <label for="emailWithTitle" class="form-label">Your Interest</label>
                                            <input type="text" id="emailWithTitle" class="form-control" name="interest" required/>
                                        </div>
                                    </div>

                                    <div class="row g-2">
                                        <div class="col mb-0">
                                            <label for="emailWithTitle" class="form-label">Your Future Goal</label>
                                            <input type="text" id="emailWithTitle" class="form-control" name="goal" required/>
                                        </div>
                                    </div>

                                    <div class="row g-2">
                                        <div class="col mb-0">
                                            <label for="emailWithTitle" class="form-label">Do you have leadership or Volunteering experience? (If Yes, Pls Explain)</label>
                                            <input type="text" id="emailWithTitle" class="form-control" name="leadership" required/>
                                        </div>
                                    </div>

                                    <div class="row g-2">
                                        <div class="col mb-0">
                                            <label for="emailWithTitle" class="form-label">Image</label>
                                            <input name="image" type="file" id="emailWithTitle" class="form-control" data-fouc/>
                                        </div>
                                    </div>

                                    <div class="row g-2">
                                        <div class="col mb-0">
                                            <label for="emailWithTitle" class="form-label">Transaction ID</label>
                                            <input name="trans_id" type="text" id="emailWithTitle" class="form-control" data-fouc/>
                                        </div>
                                    </div>



                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Register</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>

                </div>
            </div>
        </div>

        <!-- Hoverable Table rows -->
        <div class="card">
            <h5 class="card-header">NUBCC Member List</h5>
            <div class="table-responsive text-nowrap">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Program</th>
                            <th>Student ID</th>
                            <th>Semester</th>
                            <th>Section</th>
                            <th>Email</th>
                            <th>Contact</th>
                            <th>Blood Group</th>
                            <th>Present Address</th>
                            <th>Permanent Address</th>
                            <th>Professional Skill</th>
                            <th>Interest</th>
                            <th>Goal</th>
                            <th>Leadership</th>
                            <th>Image</th>
                            <th>Transaction ID</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    @foreach($users as $user)
                        <tr>
                            <td><strong>{{$user->id}}</strong></td>
                            <td>{{$user->username}}</td>
                            <td>{{$user->program}}</td>
                            <td>{{$user->student_id}}</td>
                            <td>{{$user->semester}}</td>
                            <td>{{$user->section}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->contact}}</td>
                            <td>{{$user->blood_group}}</td>
                            <td>{{$user->present_address}}</td>
                            <td>{{$user->permanent_address}}</td>
                            <td>{{$user->professional_skill}}</td>
                            <td>{{$user->interest}}</td>
                            <td>{{$user->goal}}</td>
                            <td>{{$user->leadership}}</td>
                            <td><img src="{{asset('uploads/images/users')}}/{{$user->image}}" style="width: 60px; height: auto; border-radius:50%; border:3px solid rgb(96, 96, 231);"></td>
                            <td>{{$user->trans_id}}</td>
                            
                            @if ($user->is_active == 1)
                                <td><span class="badge bg-label-danger me-1">pending</span></td>
                            @else
                                <td><span class="badge bg-label-success me-1">Confirmed</span></td>
                            @endif

                            <td class="d-flex gap-2">
                                @if ($user->is_active == 1)
                                    <form action="{{route('user_update')}}" method="post">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$user->id}}">
                                        <button class="btn btn-sm btn-success" type="submit"><i class="fa-solid fa-check"></i></button>
                                    </form>
                               
                                @endif

                                
                                <form action="{{route('user_delete')}}" method="get">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$user->id}}">
                                    <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Are you sure?')"><i class="fa-solid fa-trash-can"></i></button>
                                </form>
                                

                            </td>
                        </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
        <!--/ Hoverable Table rows -->



    </div>
    <!-- / Content -->

    <!-- Footer -->
    <footer class="content-footer footer bg-footer-theme">
        <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
            <div class="mb-2 mb-md-0">
                ©copyright
                <script>
                    document.write(new Date().getFullYear());
                </script>
                NUBCC, Developed by
                <a href="https://themeselection.com" target="_blank" class="footer-link fw-bolder">NUBCC_OFFICIAL</a>
            </div>
            <div>
                <a href="#" class="footer-link me-4" target="_blank">License</a>
                <a href="#" target="_blank" class="footer-link me-4">Policies</a>
            </div>
        </div>
    </footer>
    <!-- / Footer -->

    <div class="content-backdrop fade"></div>
</div>
<!-- Content wrapper -->

@endsection