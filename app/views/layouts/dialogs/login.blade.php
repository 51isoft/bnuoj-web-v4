<div id="logindialog" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="loginModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="loginModal">Login</h4>
            </div>
            <form action="ajax/login.php" method="post" id="login_form" class="ajform form-horizontal" role="form">
                <div class="modal-body">
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="username">Username </label>
                        <div class="col-sm-9">
                            <input class="form-control" type='text' name='username' id='username' placeholder="Username" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="password">Password </label>
                        <div class="col-sm-9">
                            <input class="form-control" type='password' name='password' id='password' placeholder="Password" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                            <div class="checkbox">
                                <label>
                                    <input name='cksave' type="checkbox"> Remember me
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <span id="msgbox" style="display:none"></span>
                    <input name='login' class="btn btn-primary" type='submit' value='Login' />
                    <a class='toregister btn btn-default' href="#">Register</a>
                </div>
            </form>
        </div>
    </div>
</div>