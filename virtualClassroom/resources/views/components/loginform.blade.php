<div class="register">
    <div class="row">
        <div class="col-md-3 register-left">
            <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
            <h3>Welcome</h3>
            <p>Join Virtual Classroom to learn, teach and manage anything!</p>
            <a href="http://localhost:8001/signup"><input type="submit" name="" value="Signup"/></a><br/>
        </div>
        <div class="col-md-9 register-right">
            <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Admin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">SubAdmin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="teacher-tab" data-toggle="tab" href="#teacher" role="tab" aria-controls="teacher" aria-selected="false">Teacher</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="student-tab" data-toggle="tab" href="#student" role="tab" aria-controls="student" aria-selected="false">Student</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h3 class="register-heading">Login as a Admin</h3>
                    <form class="row register-form" action="loginadmin" method="POST">
                        @CSRF
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Email *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="password" name="pass" class="form-control" placeholder="Password *" value="" />
                            </div>
                            <input type="submit" name="submit" class="btnRegister"  value="Register"/>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <h3  class="register-heading">Login as a Sub-Admin</h3>
                    <form class="row register-form" action="subadminlogin" method="POST">
                        @CSRF
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Email *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="password" name="pass" class="form-control" placeholder="Password *" value="" />
                            </div>
                            <input type="submit" name="submit" class="btnRegister"  value="Register"/>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade show" id="teacher" role="tabpanel" aria-labelledby="profile-tab">
                    <h3  class="register-heading">Login as a Teacher</h3>
                    <form class="row register-form" method="POST" action="LoginTeacher">
                        @csrf
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Email *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="password" name="pass" class="form-control" placeholder="Password *" value="" />
                            </div>
                            <input type="submit" class="btnRegister"  value="Register"/>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade show" id="student" role="tabpanel" aria-labelledby="student-tab">
                    <h3  class="register-heading">Login as a Student</h3>
                    <form class="row register-form" method="POST" action="LoginStudent">
                        @csrf
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Email *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="password" name="pass" class="form-control" placeholder="Password *" value="" />
                            </div>
                            <input type="submit" class="btnRegister"  value="Register"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>