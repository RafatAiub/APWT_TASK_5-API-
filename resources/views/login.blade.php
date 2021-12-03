
@extends("master")
@section("content")

                <div class="container custom-login">
                    <div class="row">
                      <div class="col-sm-10 col-md-8 col-lg-6 mx-auto">
                        <div class="card border-0 shadow rounded-4 my-5">
                          <div class="card-body p-4 p-sm-5">
                            <h1 class="card-title text-center mb-5 fw-light fs-5">Sign In</h1>
                            <form action="login" method="POST">
                              <div class="form-floating mb-3">
                                  @csrf
                                <input type="email" name="email"class="form-control" id="floatingInput" placeholder="name@example.com" required>
                                <label for="floatingInput">Email address</label>
                              </div>
                              <div class="form-floating mb-3">
                                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" required>
                                <label for="floatingPassword">Password</label>
                              </div>

                              {{-- <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" value="" id="rememberPasswordCheck">
                                <label class="form-check-label" for="rememberPasswordCheck">
                                  Remember password
                                </label>
                              </div> --}}
                              <div class="d-grid">
                                <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">
                                    Login
                                </button>
                              </div>
                              <hr class="my-4">

                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

@endsection

