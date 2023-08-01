@extends('layout.masterSign')
@section('title', 'Register')
@section('content')
<section style="background-color: #eee;">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-12 col-xl-11">
          <div class="card text-black" style="border-radius: 25px;">
            <div class="card-body p-md-5">
              <div class="row justify-content-center">
                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                  <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4">Register</p>

                  <form class="mx-1 mx-md-4" action="/register" method="POST">
                    @csrf
                    <div class="d-flex flex-row align-items-center mb-2">
                        <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control" />
                        </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-2">
                        <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" />
                        </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-2">
                        <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">
                          <label class="form-label" for="linkedin_username">LinkedIn Username</label>
                          <input type="text" name="linkedin_username" id="linkedin_username" class="form-control" />
                        </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-2">
                        <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">
                          <label class="form-label" for="mobile_number">Mobile Number</label>
                          <input type="tel" name="mobile_number" id="mobile_number" class="form-control" />
                        </div>
                    </div>

                    <div class="d-flex flex-column mb-3">
                        <p class="mb-2 pb-1">Gender: </p>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="male"
                              value="Male" />
                            <label class="form-check-label" for="male">Male</label>
                          </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="gender" id="female"
                            value="Female" />
                          <label class="form-check-label" for="female">Female</label>
                        </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-2">
                        <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">
                            <label class="form-label mr-2" for="job">Job</label>
                            <select id="job" name="job_id" class="select">
                                @foreach($jobs as $job)
                                    <option value="{{ $job->id }}">{{ $job->jobName }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-2">
                        <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control" />
                        </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-2">
                        <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                        <p>Registration Price: IDR 100K </p>
                    </div>

                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                      <button type="submit" class="btn btn-primary btn-lg">Register</button>
                    </div>

                    <p>
                        Already have an account? <a href="/login">Login here</a>
                    </p>
                  </form>

                </div>
                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                  <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                    class="img-fluid" alt="Sample image">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
