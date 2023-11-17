@extends('server.layouts.masterlayout')

@section('content')

<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <!-- Search field -->
                        <div class="card">
                            <div class="card-body">
                                <h5 class="mb-3">User Search Results</h5>
        
                                <form action="{{route('cr_search')}}" method="get">
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
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">CR /</span> CR's Table</h4>



        <hr class="my-5" />


        <div class="add_member">
            <div class="col-lg-4 col-md-6">

                <div class="mt-3 mb-3">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCenter">
                        Add CR
                    </button>

                    <!-- Modal -->
                    <form action="{{route('cr_registration')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalCenterTitle">Add New CR</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>

                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col mb-3">
                                                <label for="nameWithTitle" class="form-label">Name</label>
                                                <input name="cr_name" type="text" id="nameWithTitle" class="form-control" placeholder="Enter Name" />
                                            </div>
                                        </div>

                                        <div class="row g-2">
                                            <div class="col mb-0">
                                                <label for="emailWithTitle" class="form-label">Email</label>
                                                <input name="email" type="text" id="emailWithTitle" class="form-control" placeholder="sample@gmail.com" />
                                            </div>

                                        </div>

                                        <div class="row g-2">
                                            <div class="col mb-0">
                                                <label for="emailWithTitle" class="form-label">Contact No.</label>
                                                <input name="mobile" type="text" id="emailWithTitle" class="form-control" placeholder="Ex. 01610158095" />
                                            </div>
                                        </div>

                                        <div class="row g-2">
                                            <div class="col mb-0">
                                                <label for="emailWithTitle" class="form-label">Facebook Link</label>
                                                <input name="fb_link" type="text" id="emailWithTitle" class="form-control" placeholder="https://www.facebook.com/rifatrrayhan" />
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
                                            <label for="emailWithTitle" class="form-label">Program</label>
                                            <select id="program" class="form-select" aria-label="Default select example" name="program" required>                                
                                                <option value="CSE-Day">CSE-Day</option>
                                                <option value="CSE-Evening">CSE-Evening</option>
                                            </select>
                                        </div>

                                    </div>

                                    <div class="row g-2">
                                        <div class="col mb-0">
                                            <label for="emailWithTitle" class="form-label">Semester</label>
                                            <select id="program" class="form-select" aria-label="Default select example" name="semester" required>                                
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
                                                <label for="emailWithTitle" class="form-label">Image</label>
                                                <input name="image" type="file" id="emailWithTitle" class="form-control" data-fouc/>
                                            </div>
                                        </div>



                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Register CR</button>
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
            <h5 class="card-header">NUBCC CR List</h5>
            <div class="table-responsive text-nowrap">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Facebook</th>
                            <th>Student ID</th>
                            <th>Program</th>
                            <th>Semester</th>
                            <th>Section</th>
                            <th>Images</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    @foreach($crs as $cr)
                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$cr->id}}</strong></td>
                            <td>{{$cr->cr_name}}</td>
                            <td>{{$cr->email}}</td>
                            <td>{{$cr->mobile}}</td>
                            <td>{{$cr->fb_link}}</td>
                            <td>{{$cr->student_id}}</td>
                            <td>{{$cr->program}}</td>
                            <td>{{$cr->semester}}</td>
                            <td>{{$cr->section}}</td>
                            <td><img src="{{asset('uploads/images/crs')}}/{{$cr->image}}" style="width: 100px; height: 80px;"></td>
                            @if ($cr->is_active == 1)
                                <td><span class="badge bg-label-danger me-1">pending</span></td>
                            @else
                                <td><span class="badge bg-label-success me-1">Confirmed</span></td>
                            @endif
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        @if ($cr->is_active == 1)
                                            <form action="{{route('cr_confirmation')}}" method="post">
                                                @csrf
                                                <input type="hidden" name="id" value="{{$cr->id}}">
                                                <button class="btn btn-sm btn-success" type="submit"><i class="fa-solid fa-check"></i></button>
                                            </form>
                                        @endif

                                        <form action="{{route('cr_edit')}}" method="get">
												@csrf
												<input type="hidden" name="id" value="{{$cr->id}}">
												<button class="dropdown-item" type="submit"><i class="bx bx-edit-alt me-1"></i> Edit</button>
						                </form>
                                        
                                        <form action="{{route('cr_delete')}}" method="get">
												@csrf
												<input type="hidden" name="id" value="{{$cr->id}}">
												<button class="dropdown-item" type="submit" onclick="return confirm('Are you sure?')"><i class="bx bx-trash me-1"></i> Delete</button>
						                </form>
                                    </div>
                                </div>
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