<div class="container-l2">
  <div class="t-header">
    <div class="navbar nav-default" role="navigation">
      <div class="navbar-header">
        <a class="navbar-brand" href="/"></a>
      </div>
      <div class="navbar-utility">
         <ul class="nav nav nav-pills">
           <li class="dropdown"> 
              <a href="#" class="dropdown-toggle btn btn-default" data-toggle="dropdown"><span class="fa fa-key"></span>Hi, John <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li class="dropdown-header"><a href="#"><span class="fa fa-pencil-square"></span>John H. Doe</a></li>
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Buying List</a></li>
                <li><a href="#">Selling List</a></li>
                <li><a href="#">Favourites</a></li>
                <li><a href="#">Billings</a></li>
                <li><a href="#">Message</a></li>
                <li><a href="#">Email</a></li>
                <li class="dropdown-footer"><a href="#">Profile</a><a href="#">Logout</a></li>
              </ul>
           </li>
           <li><a href="" class="btn btn-light">List a Property</a></li>
           <li> 
             <button type="button" class="navbar-toggle" data-toggle="offcanvas" data-recalc="false" data-target=".navbar-offcanvas" data-canvas=".canvas">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
          </li>
         </ul>
      </div>
      <div class="navbar-collapse " role="navigation">
        {{ Site::site_nav_menu(array(
                  'level' => 0,
                  'menu'  => 'Nav Menu',
                  'menu_class' => 'nav navbar-nav navbar-bottom navbar-right navbar-offcanvas offcanvas navbar-main '
                )) }}    

            <button class="btn btn-close"><span class="fa fa-times"></span></button>
      </div><!--/.nav-collapse -->
    </div>
  </div>
</div>