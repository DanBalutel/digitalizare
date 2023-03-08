<div class="page-header">
  <div class="header-wrapper row m-0">
    <form class="form-inline search-full col" action="#" method="get">
      <div class="form-group w-100">
        <div class="Typeahead Typeahead--twitterUsers">
          <div class="u-posRelative">
            <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text" placeholder="Caută .."
              name="q" title="" autofocus>
            <div class="spinner-border Typeahead-spinner" role="status"><span class="sr-only">Loading...</span></div><i
              class="close-search" data-feather="x"></i>
          </div>
          <div class="Typeahead-menu"></div>
        </div>
      </div>
    </form>
    <div class="header-logo-wrapper col-auto p-0">
      <div class="logo-wrapper"><a href="index"><img class="img-fluid" src="/assets/images/logo/logo.png" alt=""></a>
      </div>
      <div class="toggle-sidebar"><img class="img-fluid" src="/assets/images/logo/logo.png" width="50" alt=""></a></div>
    </div>
    <div class="nav-right col-xxl-7 col-xl-6 col-md-7 col-8 pull-right right-header p-0 ms-auto">
      <ul class="nav-menus">
        <li class="mr-3 p-0" style="color: #57c07a; margin-right: 2rem;">
          <h6 class="mb-0" style="color: #01cdff;">Pontaj la</h6>
          <h6 class="mb-0" style="color: #08a8fd;" id="dateNow"></h6>
          <h6 class="mb-0" style="color: #4286f1;" id="timer"></h6>
        </li>
        <li>
          <div class="mode">
            <svg>
              <use href="/assets/svg/icon-sprite.svg#moon"></use>
            </svg>
          </div>
        </li>
        <li class="onhover-dropdown">
          <div class="notification-box">
            <svg>
              <use href="/assets/svg/icon-sprite.svg#notification"></use>
            </svg><span class="badge rounded-pill badge-secondary">4 </span>
          </div>
          <div class="onhover-show-div notification-dropdown">
            <h6 class="f-18 mb-0 dropdown-title">Notificări </h6>
            <ul>
              <li class="b-l-primary border-4">
                <p>Delivery processing <span class="font-danger">10 min.</span></p>
              </li>
              <li class="b-l-success border-4">
                <p>Order Complete<span class="font-success">1 hr</span></p>
              </li>
              <li class="b-l-secondary border-4">
                <p>Tickets Generated<span class="font-secondary">3 hr</span></p>
              </li>
              <li class="b-l-warning border-4">
                <p>Delivery Complete<span class="font-warning">6 hr</span></p>
              </li>
              <li><a class="f-w-700" href="#">Marchează citite</a></li>
            </ul>
          </div>
        </li>
        <li class="profile-nav onhover-dropdown pe-0 py-0">
          <div class="media profile-media"><img class="b-r-10" width="50"
              src="https://area4u.ro/wp-content/uploads/2023/02/Imagine-WhatsApp-2023-02-08-la-18.14.3812-300x300.jpg"
              alt="">
            <div class="media-body"><span id="loggedName"></span>
              <p class="mb-0 font-roboto" id="loggedPosition"><i class="middle fa fa-angle-down"></i></p>
            </div>
            <ul class="profile-dropdown onhover-show-div">
              <li><a href="user-profile"><i data-feather="user"></i><span>Cont </span></a></li>
              <li><a href="email-application"><i data-feather="mail"></i><span>Inbox</span></a></li>
              <li><a href="to-do"><i data-feather="file-text"></i><span>Taskboard</span></a></li>
              <li><a href="edit-profile"><i data-feather="settings"></i><span>Settings</span></a></li>
              <li><a href="index.php"></i><span onclick="logOut();">Log out</span></a></li>
            </ul>
        </li>
      </ul>
    </div>
    <script class="result-template" type="text/x-handlebars-template">
            <div class="ProfileCard u-cf">                        
            <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
            <div class="ProfileCard-details">
            <div class="ProfileCard-realName">{{name}}</div>
            </div>
            </div>
          </script>
    <script class="empty-template"
      type="text/x-handlebars-template"><div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div></script>
  </div>
</div>