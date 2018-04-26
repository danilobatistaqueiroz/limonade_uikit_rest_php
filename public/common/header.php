<ul class="uk-switcher uk-margin">
  <li class="uk-active">
    <nav class="uk-navbar-container uk-margin uk-navbar" uk-navbar="">
      <div class="uk-navbar-left" style="height: 40px;">
        <a class="uk-navbar-item uk-logo" href="#">
          <span class="uk-icon uk-margin-small-right" uk-icon="icon: home"></span>
        </a>
        <ul class="uk-navbar-nav">
          <li>
            <a onclick="loadProductScreen();">
              <span class="uk-icon uk-margin-small-right" uk-icon="icon: refresh"></span>Products
            </a>
          </li>
          <li>
            <a onclick="loadUserScreen();">
              <span class="uk-icon uk-margin-small-right" uk-icon="icon: users"></span>Users
            </a>
          </li>
          <li>
            <a href="#put">
              <span class="uk-icon uk-margin-small-right" uk-icon="icon: mail"></span>Contact
            </a>
          </li>
          <li>
            <a href="#" onclick="$('#divMain').css({marginLeft:'0px'});$('#divMain').width('100%');$('#divSideBar').hide();">
              <span class="uk-icon uk-margin-small-right" uk-icon="icon: info"></span>Info
            </a>
          </li>
        </ul>
      </div>
      <div class="uk-navbar-right">
        <ul class="uk-navbar-nav">
          <li>
            <a href="#"><span class="uk-icon uk-margin-small-right" uk-icon="icon: user"></span>Danilo</a>
            <div class="uk-navbar-dropdown" style="margin-top:0px;">
                <ul class="uk-nav uk-navbar-dropdown-nav">
                    <li><a href="#">Your Account</a></li>
                    <li>
                      <a href="#">
                        <span class="uk-icon uk-margin-small-right" uk-icon="icon: cart">ShopCart</span>
                      </a>
                    </li>
                    <li class="uk-nav-divider"></li>
                    <li><a href="#">Logout</a></li>
                </ul>
            </div>
          </li>
        </ul>
      </div>
    </nav>
  </li>
</ul>
<style>
  .uk-navbar-container{
    position: fixed; z-index: 3; width: 100%; margin-top: -15px;
  }
</style>
