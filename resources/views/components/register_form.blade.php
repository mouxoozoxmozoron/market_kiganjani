
    <div>
        <!-- Nothing worth having comes easy. - Theodore Roosevelt -->
        <div class="card-body">
            @if (session('failure'))
                <div class="alert alert-failure" role="alert">
                    {{ session('failure') }}
                </div>
            @endif

            {{-- {{ __('You are logged in!') }} --}}
        </div>

        <center class="login_form_box">
            <span>Sig up</span>
            <form class="login_form" action="{{ route('register_check') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- first name input -->
                <div data-mdb-input-init class="form-outline mb-4">
                    <input type="text" id="form2Example1" name="first_name" class="form-control" required />
                    <label class="form-label" for="form2Example1">First Name</label>
                </div>

                <!-- last name input -->
                <div data-mdb-input-init class="form-outline mb-4">
                    <input type="text" id="form2Example1" name="last_name" class="form-control" required />
                    <label class="form-label" for="form2Example1">Last Name</label>
                </div>
                <!-- phone number   -->
                <div data-mdb-input-init class="form-outline mb-4">
                    <input type="text" id="form2Example1" maxlength="14" name="phone_number" class="form-control"
                        required />
                    <label class="form-label" for="form2Example1">Phone number</label>
                </div>

                <!-- Email input -->
                <div data-mdb-input-init class="form-outline mb-4">
                    <input type="email" id="form2Example1" name="email" class="form-control" required />
                    <label class="form-label" for="form2Example1">Email address</label>
                </div>

                <!-- Password input -->
                <div data-mdb-input-init class="form-outline mb-4">
                    <input type="password" id="form2Example2" name="password" class="form-control" required />
                    <label class="form-label" for="form2Example2">Password</label>
                </div>

                <!-- profile image input -->
                <div data-mdb-input-init class="form-outline mb-4">
                    <input type="file" id="form2Example1" name="file" class="form-control" required
                        multiple />
                    <label class="form-label" for="form2Example1">Profile Image</label>
                    <ul class="file-list" id="fileList"></ul>
                </div>

                <!-- Submit button -->
                <button data-mdb-ripple-init type="submit" class="btn btn-primary btn-block mb-4">Sign up</button>

                <!-- Register buttons -->
                <div class="text-center">
                    <p> Registered? <a href="login">Login</a></p>

                </div>
            </form>
        </center>
    </div>


