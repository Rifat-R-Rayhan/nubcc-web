@extends('client.layouts.masterlayout')

@section('content')
<main id="main">



<section style="background-color: #eee;">

    
    

    <div class="container py-5">
        <p class="text-muted display-6">Welcome To Your Profile!</p>
        <div class="row">
            <div class="col-lg-4">
                <div class="card mb-4" style="background:linear-gradient(#7F00FF,#E100FF);">
                    <div class="card-body text-center">
                    <img src="{{asset('uploads/images/users')}}/{{$data->image}}" style="width: 160px; height: 160px; border-radius: 50%; border:4px solid white;">
                        <h5 class="my-3 text-white">{{$data->username}}</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Full Name</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{$data->username}}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Email</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{$data->email}}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Program</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{$data->program}}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Student ID</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{$data->student_id}}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Semester</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{$data->semester}}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Section</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{$data->section}}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Contact</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{$data->contact}}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Blood Group</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{$data->blood_group}}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Present Address</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{$data->present_address}}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Permanent Address</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{$data->permanent_address}}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Action</p>
                            </div>
                            <div class="col-sm-9">
                                {{-- <a href="{{route('generate-pdf')}}"><button type="button" class="btn btn-primary">PDF</button></a> --}}

                                <form action="{{route('user-edit')}}" method="get">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$data->id}}">
                                    <div class="">
                                        <button class="btn btn-success d-inline-block" type="submit"><i class="bx bx-edit-alt me-1"></i> UPDATE</button>
                                    </div>
                                    
                                </form>
                                {{-- <a class="dropdown-item" href="{{route('user-logout')}}">
                                    <i class="bx bx-power-off me-2"></i>
                                    <span class="align-middle">Log Out</span>
                                </a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




</main><!-- End #main -->
@endsection