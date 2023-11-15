@extends('client.layouts.masterlayout')

@section('content')
<main id="main">


<!-- ======= T-Shirt Section ======= -->
<section id="blog" class="blog">
   

        <!-- Project Start -->
        <div class="container-xxl py-2">
            <div class="container">
                <div class="text-center mx-auto mb-0 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h6 class="text-primary">Exciting Launch From Our NUBCC</h6>
                    <h4 class="display-7 mb-0">Exclusive Premium Jersy</h4>
                </div>


                <div class="row">

                    <div class="shirt col-md-4 col-sm-12">
                        <div class="flip-card">
                            <div class="flip-card-front">
                                <div class="inner">
                                    <img src="assets/img/front_shadow.png" class="icon">
                                </div>
                            </div>


                            <div class="flip-card-back">
                                <div class="inner">
                                    <img src="assets/img/back_shadow.png" class="icon">
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="shirt-details col-md-8 col-sm-12 p-5 d-flex justify-content-center">
                        <div class="contents w-md-75 w-sm-100">
                            <h5>🎉Exciting News! Get ready to level up your style 👕</h5>
                            <p class="my-4">
                            <address class="text-muted">NUB Computer Club (NUBCC) proudly unveils the highly anticipated premium jersey for the Department of Computer Science and Engineering at Northern University Bangladesh (NUB).
                            </address>
                            <span class="d-block text-muted">For Alumni, they can receive via courier. Inside Dhaka 70 Taka, Outside Dhaka 120 Taka</span>
                            </p>
                            
                             <details>
                                <summary>
                                    Click here for Size Details (Inches):
                                </summary>
                                <span>


                                    <span class="d-block text-muted ms-3">M - Length:27", Chest-38"</span>
                                    <span class="d-block text-muted ms-3">S - Length:26", Chest-36"</span>
                                    <span class="d-block text-muted ms-3">L - Length:28", Chest-40"</span>
                                    <span class="d-block text-muted ms-3">XL - Length:29", Chest-42"</span>
                                    <span class="d-block text-muted ms-3">XXL - Length:30", Chest-44"</span>
                                    <span class="d-block text-muted ms-3">3XL - Length:30", Chest-46"</span>
                                    <span class="d-block text-muted ms-3">4XL - Length:31", Chest-48"</span>
                                    <span class="d-block text-muted ms-3">5XL - Length:31", Chest-50"</span>
                                </span>
                            </details>

                            <h4 class="my-4">Price: <span>369.00</span> Tk</h4>

                            <span class="d-block my-3 text-dark fw-bold"><span class="text-warning">For NUBCC Member</span> (Special Discount)</span>
                            <span class="my-4 fw-bold fs-4">Price: <del class="text-danger">369</del> <span class="text-dark">339.00</span> Tk Only</span>


                            
                <div class="mt-3 mb-3">
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCenter">
                      Order Now
                  </button>

                  <!-- Modal -->
                  <form action="{{route('tshirt_insert')}}" method="post">
                  @csrf
                      <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <h5 class="modal-title" id="modalCenterTitle">Buy NUBCC Premium Jersy</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                      <div class="row">
                                          <div class="col mb-3">
                                              <label for="cat" class="form-label">Select Category</label>
                                              <select id="cat" class="form-select" aria-label="Default select example" name="category" onchange="fixAmount()">
                                                <option selected>Select Category</option>
                                                <option value="1">Respected Faculty</option>
                                                <option value="2">Beloved Alumni</option>
                                                <option value="3">Administrative Officer</option>
                                                <option value="4">General Student</option>
                                                <option value="5">NUBCC Member</option>
                                              </select>

                                              <div class="alumni_op my-2" id="alumni">
                                                <span class="d-block">Delivery Options of Alumni:</span>
                                                <input type="radio" id="delivery_charge1" name="delivery_charge" value="70" onclick="fixAlumnuiAmount(1)"><span class="ms-2 text-muted">Inside Dhaka - 70 tk</span><br>
                                                <input type="radio" id="delivery_charge2" name="delivery_charge" value="120" onclick="fixAlumnuiAmount(2)"><span class="ms-2 text-muted">Outside Dhaka - 120 tk</span><br>
                                                <input type="radio" id="delivery_charge3" name="delivery_charge" value="0" onclick="fixAlumnuiAmount(3)"><span class="ms-2 text-muted">From Campus - 0 tk</span>
                                                <span class="d-block my-2">
                                                    <input type="text" class="form-control" name="address" placeholder="Delivery Address"> 
                                                </span>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="row r-2">
                                          <div class="col mb-3">
                                              <label for="nameWithTitle" class="form-label">Name</label>
                                              <input type="text" id="nameWithTitle" class="form-control" name="buyer_name"  placeholder="Full Name" />
                                          </div>
                                      </div>
                                    <div class="row g-2">
                                          <div class="col mb-0">
                                              <label for="emailWithTitle" class="form-label">Semester</label>
                                              <input type="text" id="emailWithTitle" class="form-control" name="semester"  placeholder="NUB ID" required/>
                                          </div>
                                      </div>
                                      <div class="row g-2">
                                          <div class="col mb-0">
                                              <label for="emailWithTitle" class="form-label">NUB ID</label>
                                              <input type="text" id="emailWithTitle" class="form-control" name="nub_id"  placeholder="NUB ID" />
                                          </div>
                                      </div>
                                      <div class="row g-2">
                                          <div class="col mb-0">
                                              <label for="emailWithTitle" class="form-label">Email</label>
                                              <input type="email" id="emailWithTitle" class="form-control" name="email" placeholder="E-mail" />
                                          </div>

                                      </div>
                                      <div class="row g-2">
                                          <div class="col mb-0">
                                              <label for="contact" class="form-label">Contact</label>
                                              <input type="text" id="conatct" class="form-control" name="contact" placeholder="Contact No." />
                                          </div>

                                      </div>

                                      
                                      <div class="row g-2">
                                          <div class="col mb-0">
                                              <label for="emailWithTitle" class="form-label">Quantity</label>
                                              <select id="size" class="form-select" aria-label="Default select example" name="quantity">
                                
                                                <option value="1">1</option>

                                              </select>
                                              {{-- <input type="text" id="emailWithTitle" class="form-control" name="quantity"  value="1" disabled
                                               /> --}}
                                          </div>
                                      </div>
                                      <div class="row g-2">

                                        <div class="col mb-3">
                                              <label for="size" class="form-label">Select Size</label>
                                              <select id="size" class="form-select" aria-label="Default select example" name="size">
                                
                                                <option value="S">S - Length:26", Chest-36"</option>
                                                <option value="M">M - Length:27", Chest-38"</option>
                                                <option value="L">L - Length:28", Chest-40"</option>
                                                <option value="XL">XL - Length:29", Chest-42"</option>
                                                <option value="XXL">XXL - Length:30", Chest-44"</option>
                                                <option value="3XL">3XL - Length:30", Chest-46"</option>
                                                <option value="4XL">4XL - Length:31", Chest-48"</option>
                                                <option value="5XL">5XL - Length:31", Chest-50"</option>

                                              </select>
                                          </div>

                                      </div>
                                      <div class="row g-2 my-3">
                                          <div class="col mb-0">
                                              <span class="h3">Total Amount: <span class="text-danger" id="price">0.00 tk</span></span>
                                              <span class="text-warning d-block">(Send Money To Our Bkash/Nagad: 01617756829)</span>
                                              <input type="text" id="amount" name="amount" hidden>
                                          </div>
                                      </div>
                                      <div class="row g-2">

                                        <div class="col mb-3">
                                              <label for="size" class="form-label">Select Size</label>
                                              <select id="size" class="form-select" aria-label="Default select example" name="payment_method">
                                
                                                <option value="Bkash">Bkash</option>
                                                <option value="Nagad">Nagad</option>

                                              </select>
                                          </div>

                                      </div>
                                      <div class="row g-2">
                                        <div class="col mb-0">
                                            <label for="bkash_contact" class="form-label">Payment Number</label>
                                            <input type="text" id="bkash_conatct" class="form-control" name="payment_num" placeholder="Payment No." />
                                        </div>

                                    </div>
                                      <div class="row g-2">
                                          <div class="col mb-0">
                                              <label for="emailWithTitle" class="form-label">Transaction ID</label>
                                              <input type="text" id="emailWithTitle" class="form-control" name="trans_id"
                                              placeholder="Transaction ID"/>
                                          </div>
                                      </div>

                                      <div class="row g-2">
                                        <div class="col mb-0">
                                            <label for="bkash_contact" class="form-label">Sent Number (The Number To Which The Money Was Sent)</label>
                                            <input type="text" id="bkash_conatct" class="form-control" name="sent_num" placeholder="Sent No." required/>
                                        </div>

                                    </div>

                                  </div>
                                  <div class="modal-footer">
                                      <button type="submit" class="btn btn-primary">Complete Order</button>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </form>
              </div>

                        </div>

                    </div>

                </div>
                
            </div>
        </div>
        <!-- Project End -->
</section><!-- End Blog Section -->

</main><!-- End #main -->
@endsection