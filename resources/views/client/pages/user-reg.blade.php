@extends('client.layouts.masterlayout')

@section('content')
<main id="main">

    <form action="{{route('user-add')}}" method="POST" enctype="multipart/form-data">
        <!-- Modal -->
        @if(Session::has('success'))
        <div class="alert alert-success">{{Session::get('success')}}</div>
        @endif
        @if(Session::has('fail'))
            <div class="alert alert-danger">{{Session::get('fail')}}</div>
        @endif

        @csrf
        <div id="modalCenter" tabindex="-1" aria-hidden="true" style="margin-top: 150px">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <img
                        src="../backend/assets/img/icons/nubcc_logo.png"
                        alt="girl-doing-yoga-light"
                        width="100"
                        class="img-fluid"
                        data-app-dark-img="illustrations/girl-doing-yoga-dark.png"
                        data-app-light-img="illustrations/girl-doing-yoga-light.png"
                      />
                        <h5 class="modal-title mb-3" id="modalCenterTitle">NUBCC Member Registration Form !</h5>
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
                                <input type="text" id="emailWithTitle" class="form-control" name="professional_skill" required/>
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
                                <input name="image" type="file" id="emailWithTitle" class="form-control" data-fouc required/>
                            </div>
                        </div>

                        <div class="row g-2">
                            <div class="col mb-0">
                                <label for="emailWithTitle" class="form-label">Transaction ID</label>
                                <input name="trans_id" type="text" id="emailWithTitle" class="form-control" data-fouc />
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

</main><!-- End #main -->
@endsection