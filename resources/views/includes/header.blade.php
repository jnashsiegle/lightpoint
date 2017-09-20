<nav class = "navbar navbar-default">
    <div class = "container-fluid">
        <header class = "navbar-header">
            <a href="#"><img class = "navbar-brand" src = "/images/lightpointLogo.svg" alt = "Brand"></a>
                <ul class="navbar-nav pull-right">
                    <li class = "nav-item">
                      <a class = "nav-link" href="#" data-toggle="modal" data-target="#login-modal">Client Log In</a>
                    </li>
                </ul>
        </header>
    </div><!--end container-fluid-->
</nav>
                    <!--login Modal-->
                    <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="login-modal" aria-hidden="true" style="display: none;">
                      <div class="modal-dialog">
                            <div class="loginmodal-container">
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                                <h1>Login to Your Account</h1><br>
                              <form>
                                <div class = "input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input type="text" class = "form-control" name="user" placeholder="Username">
                              </div>
                              <div class = "input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <input type="password" class = "form-control" name="password" placeholder="Password">
                              </div>
                                <button name="login" class="login pull-right">Log In</button>
                              </form>

                              <div class="login-help">
                                <a href="#">Forgot Password</a>
                              </div>
                            </div>
                        </div>
                      </div>
                      <!--end login modal-->

                    <!-- Modal for random code-->
                    <div class="modal fade" id="randomModal" tabindex="-1" role="dialog" aria-labelledby="randomModal" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <p><a href = "#contact">Contact Us</a> with the following alphanumeric code to get your FREE initial consultation and find out how we can help you with your website and online presence needs!</p>
                            <p><?php
                                $character_array = array_merge(range('a', 'z'), range(0, 9));
                                $string = "";
                                    for ($i = 0; $i < 6; $i++) {
                                        $string .= $character_array[rand(0, (count($character_array) - 1))];
                                    }
                                echo "Here is your code:" ." " . '<span id = "code">'.$string.'</span>'
                                ?> </p>
                          </div>
                          <div class="modal-footer">
                            <button data-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- end Modal -->
