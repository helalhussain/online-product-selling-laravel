
<!--------------------sidebar------------------------>

 <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user">
      <!-- <img class="app-sidebar__user-avatar" src="" alt="User Image"> -->
        <div>
          <p class="app-sidebar__user-name">Online kenabecha</p>
          <p class="app-sidebar__user-designation"></p>
        </div>
      </div>
      <ul class="app-menu">
        
        <li class="treeview"><a class="app-menu__item" href="admin.php" data-toggle="treeview"><i class="app-menu__icon fa fa-envelope"></i><span class="app-menu__label">Inbox</span><i class="treeview-indicator fa fa-angle-right"></i></a>

        </li>
        <li class="treeview" ><a class="app-menu__item" href="admin-outbox.php"><i class="app-menu__icon fa fa-send"></i><span class="app-menu__label">Outbox</span><i class="treeview-indicator fa fa-angle-right"></i></a></li>

        <li class="treeview"><a class="app-menu__item" href="admin-replay.php" data-toggle="treeview"><i class="app-menu__icon fa fa-plus"></i><span class="app-menu__label">Compose Message</span><i class="treeview-indicator fa fa-angle-right"></i></a></li> 

        </li>
        <li class="treeview" ><a class="app-menu__item" href="admin-undo.php" data-toggle="treeview"><i class="app-menu__icon fa fa-trash"></i><span class="app-menu__label">Trash</span><i class="treeview-indicator fa fa-angle-right"></i></a>

        </li>
        <li class="treeview" style=""><a class="app-menu__item" href="admin-setting.php" data-toggle="treeview"><i class="app-menu__icon fa fa-cog fa-lg"></i><span class="app-menu__label">Settings</span><i class="treeview-indicator fa fa-angle-right"></i></a>
        </li>

        <li class="treeview" style="background: black;"><a class="app-menu__item" href="" data-toggle="treeview"><i class="app-menu__icon fa-lg"></i><span class="app-menu__label">Banner ads</span><i class="treeview-indicator fa fa-angle-right"></i></a>
        </li>

      </ul>
    </aside>
    <!---------------sidebar-end----------------->
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="pp-menu__icon fa fa-cog"></i>Setting</h1>
          
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class=" fa fa-cog fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Setting</a></li>
        </ul>
      </div>

     
      <!-----------------list-header---------------------->
            <ul class="list-group">
                      <a href="#" style="text-decoration: none;">
                        <li class="list-group "style="background:#009688;">
      
                            <div class="row pt-3 pl-4 pr-4">
                              <div class="col-lg-3">
                              <h3 class="text-white">Setting</h3>
                              </div>
                              <div class="col-lg-3"></div>
                              <div class="col-lg-4">
                                
                            <div class="input-group mb-3">
                             
                              <div class="input-group-append">
                                
                              </div>
                            </div>
                              </div>
                            </div>
                      </li>
                      </a>
                      <!--------------------------setting-form-start------------------------------>
                      <div class="bg-white">
                <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                  <form action="" method="POST">
                                
                                      <br>
                                      <h5 class="font-weight-bold" style="color:#009688;">Contact details</h5><hr>
                                      <br>
                                      <label class="font-weight-bold text-info">Name </label><br>
                                      <span>Online Kenabecha</span><br><br>
                                      <label class="font-weight-bold text-info">Email </label><br>
                                      <span>onlinekenabecha@gmail.com</span><br><br>

                      <br>
                      <h5 class="font-weight-bold " style="color:#009688;">Change password</h5><hr><br>
                      <div class="form-group ">
                        <label class="font-weight-bold"style="color:#009688;">Current Password</label>
                          <div class="input-group-append">
                          <input type="password" class="form-control text-info password1" name="password" autocomplete="off" placeholder="Current Password" >
                            <a class="eyepass1" style=" position: relative;left:-23px; top:8px;"><i class="fa fa-eye eye1" style="color:#009688;"></i></a>	
                          </div>
                          <span class="password_error"style="color:red;font-size:14px;"> </span>
                        </div>
                        <div class="form-group ">
                        <label class="font-weight-bold" style="color:#009688;">New Password</label>
                          <div class="input-group-append">
                          <input type="password" class="form-control text-info password1" name="password" autocomplete="off" placeholder="New Password" >
                            <a class="eyepass1" style=" position: relative;left:-23px; top:8px;"><i class="fa fa-eye eye1" style="color:#009688;"></i></a>	
                          </div>
                          <span class="password_error"style="color:red;font-size:14px;"> </span>
                        </div>
                        <div class="form-group ">
                        <label class="font-weight-bold" style="color:#009688;">Confirm Password</label>
                          <div class="input-group-append">
                          <input type="password" class="form-control text-info password1" name="password" autocomplete="off" placeholder="Confirm Password" >
                            <a class="eyepass1" style=" position: relative;left:-23px; top:8px;"><i class="fa fa-eye eye1" style="color:#009688;"></i></a>	
                          </div>
                          <span class="password_error"style="color:red;font-size:14px;"> </span>
                        </div>
                                      <div class="form-group">
                          <button class="btn btn text-white" style="font-weight:bold;background:#009688;" type="submit" name="">Post Ad</button>
                      </div>
                  </form><br><br>
                  </div>
                  <div class="col-lg-2"></div>
                </div>
                </div>
                <!----------------------------Seting-form-end------------------------------------------->
                
              </ul>
                </div>
              
              </div>

    
      		<div class="col-lg-1"></div>
      	</div>
    </main>
