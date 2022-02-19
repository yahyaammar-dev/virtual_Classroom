<div class="register">
    <div class="row">
        <div class="col-md-3 register-left">
            <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
            <h3>Welcome</h3>
            <p>Join Virtual Classroom to learn, teach and manage anything!</p>
            <a href="http://localhost:8001/"><input type="submit" name="" value="Login"/></a><br/>
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
                    <h3  class="register-heading">Apply as a Sub-Admin</h3>
                    <form action="signupsubadmin" method="POST" class="row register-form">
                        @CSRF
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="user" placeholder="User Name *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="pass" placeholder="Password *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Email *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="phone" placeholder="Phone *" value="" />
                            </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" maxlength="10" minlength="10" class="form-control" name="address" placeholder="Address *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" maxlength="10" minlength="10" class="form-control" name="idcard" placeholder="ID card number" value="" />
                        </div>
                            <input type="submit" class="btnRegister"  value="Register"/>
                        </div>
                    </form>
                </div>

                <div class="tab-pane fade show" id="teacher" role="tabpanel" aria-labelledby="profile-tab">



                    <h3  class="register-heading">Signup as a Teacher</h3>
                    <form class="row register-form" action="SignupTeacher" method="POST">
                        <div class="col-md-6">
                            @CSRF
                            <div class="form-group">
                                <input type="text" class="form-control" name="user" placeholder="User Name *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="password" name="idcard" class="form-control" placeholder="Password *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="text" name="salary" class="form-control" placeholder="salary *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="text" name="address" class="form-control" placeholder="address *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="text" name="username" class="form-control" placeholder="username *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="text" name="password" class="form-control" placeholder="password *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="text" name="phone" class="form-control" placeholder="phone *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="email *" value="" />
                            </div>
                            <div class="form-group">
                                <select name="admin" id="admin">

                                    <?php 
                                    foreach($admins as $admin){
                                       ?> <option value="<?php echo $admin["user"];?> "><?php echo $admin["user"];?> </option>    <?php
                                    }
                                    ?>

                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Address *" value="" />
                            </div>
                            <input type="submit" class="btnRegister"  value="Register"/>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade show" id="student" role="tabpanel" aria-labelledby="student-tab">
                    <h3  class="register-heading">Signup as a Student</h3>
                    <form class="row register-form" action="SignupStudent" method="POST">
                        <div class="col-md-6">
                            @CSRF
                            <div class="form-group">
                                <input type="text" class="form-control" name="user" placeholder="User Name *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="text" name="address" class="form-control" placeholder="Phone *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="text" name="email" class="form-control" placeholder="Phone *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="text" name="password" class="form-control" placeholder="Phone *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="text" name="phone" class="form-control" placeholder="Phone *" value="" />
                            </div>
                            <div class="form-group">
                                <select name="course" id="course">

                                <?php 
                                    foreach($classrooms as $classroom){
                                       ?> <option value="<?php echo $classroom["user"];?> "><?php echo $classroom["user"];?> </option>    <?php
                                    }
                                    ?>


                                </select>
                            </div>

                            <div class="form-group">
                                <select name="admin" id="admin">

                                    <?php 
                                    foreach($admins as $admin){
                                       ?> <option value="<?php echo $admin["user"];?> "><?php echo $admin["user"];?> </option>    <?php
                                    }
                                    ?>
                                    
                                </select>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Address *" value="" />
                            </div>
                            <input type="submit" class="btnRegister"  value="Register"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>