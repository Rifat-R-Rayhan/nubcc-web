@extends('server.layouts.masterlayout')

@section('content')

<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Admin /</span> Admins Table</h4>



        <hr class="my-5" />


        <div class="add_admin">
            <div class="col-lg-4 col-md-6">

                <div class="mt-3 mb-3">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCenter">
                        Add Admin
                    </button>

                    <!-- Modal -->
                    <form action="{{route('admin_insert')}}" method="post">
                    @csrf
                        <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalCenterTitle">Add New Admin</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col mb-3">
                                                <label for="nameWithTitle" class="form-label">Name</label>
                                                <input name="admin_name" type="text" id="nameWithTitle" class="form-control" placeholder="Enter Name" />
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
                                                <label for="emailWithTitle" class="form-label">Password</label>
                                                <input name="password" type="text" id="emailWithTitle" class="form-control" placeholder="Alpha Numeric" />
                                            </div>
                                        </div>

                                        <div class="row g-2">
                                            <div class="col mb-0">
                                                <label for="emailWithTitle" class="form-label">Contact No.</label>
                                                <input name="mobile" type="text" id="emailWithTitle" class="form-control" placeholder="Ex. +8801723456789" />
                                            </div>
                                        </div>



                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Register Admin</button>
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
                            <th>Email</th>
                            {{-- <th>Password</th> --}}
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    @foreach($admins as $admin)
                        <tr>
                            <td><strong>{{$admin->id}}</strong></td>
                            <td>{{$admin->admin_name}}</td>
                            <td>{{$admin->email}}</td>
                            {{-- <td>{{$admin->password}}</td> --}}
                            <td><span class="badge bg-label-primary me-1">Active</span></td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <form action="{{route('admin_edit')}}" method="get">
												@csrf
												<input type="hidden" name="id" value="{{$admin->id}}">
												<button class="dropdown-item" type="submit"><i class="bx bx-edit-alt me-1"></i> Edit</button>
						                </form>
                                        
                                        <form action="{{route('admin_delete')}}" method="get">
												@csrf
												<input type="hidden" name="id" value="{{$admin->id}}">
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