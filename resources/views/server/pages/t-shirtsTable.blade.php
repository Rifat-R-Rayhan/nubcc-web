@extends('server.layouts.masterlayout')

@section('content')

<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->
                    <!-- Search field -->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="mb-3">T-Shirt Search Results</h5>
    
                            <form action="{{route('tshirt_search')}}" method="get">
                                @csrf
                                <div class="input-group mb-3">
                                    <div class="form-group-feedback form-group-feedback-left">
                                        <input type="search" name="search" class="form-control form-control-lg" placeholder="Search by NUB_ID or Payment Number">
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
                    <a style="margin-left: 30px" href="{{route('tshirt_export')}}">Dowload Excel File</a>
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Events /</span> T-Shirt Tables</h4>



        <hr class="my-5" />



        <!-- Hoverable Table rows -->
        <div class="card">
            <h5 class="card-header">T-Shirt Order List</h5>
            <div class="table-responsive text-nowrap">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Order ID</th>
                            <th>Category</th>
                            <th>Name</th>
                            <th>Semester</th>
                            <th>NUB ID</th>
                            <th>Email</th>
                            <th>Contact</th>
                            <th>Quantity</th>
                            <th>Size</th>
                            <th>Amount</th>
                            <th>Payment Method</th>
                            <th>Payment Number</th>
                            <th>Transaction ID</th>
                            <th>Sent Number</th>
                            <th>Address</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach($tshirts as $tshirt)
                        <tr>
                            <td><strong>{{$tshirt->id}}</strong></td>
                            <td>{{$tshirt->category}}</td>
                            <td>{{$tshirt->buyer_name}}</td>
                            <td>{{$tshirt->semester}}</td>
                            <td>{{$tshirt->nub_id}}</td>
                            <td>{{$tshirt->email}}</td>
                            <td>{{$tshirt->contact}}</td>
                            <td>{{$tshirt->quantity}}</td>
                            <td>{{$tshirt->size}}</td>
                            <td>{{$tshirt->amount}}</td>
                            <td>{{$tshirt->payment_method}}</td>
                            <td>{{$tshirt->payment_num}}</td>
                            <td>{{$tshirt->trans_id}}</td>
                            <td>{{$tshirt->sent_num}}</td>
                            <td>{{$tshirt->address}}</td>


                            @if ($tshirt->is_active == 1)
                                <td><span class="badge bg-label-danger me-1">pending</span></td>
                            @else
                                <td><span class="badge bg-label-success me-1">Confirmed</span></td>
                            @endif

                            
                            <td class="d-flex gap-2">
                                @if ($tshirt->is_active == 1)
                                    <form action="{{route('tshirt_update')}}" method="post">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$tshirt->id}}">
                                        <button class="btn btn-sm btn-success" type="submit"><i class="fa-solid fa-check"></i></button>
                                    </form>
                               
                                @endif

                                
                                <form action="{{route('tshirt_delete')}}" method="get">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$tshirt->id}}">
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