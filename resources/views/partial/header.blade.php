<!-- ======= Header ======= -->
<header id="header">
        <div class="container d-flex align-items-center">
    
          <h1 class="logo mr-auto"><a href="index.html">BizLand<span>.</span></a></h1>
    
          <nav class="nav-menu d-none d-lg-block">
            <ul>
              <li class=" {{ Request::is('/') ? 'active' : '' }}"><a href="{{route('home')}}">Home</a></li>
              <li class=""><a href="#about">About</a></li>
              <li class=""><a href="#services">Services</a></li>
              <li class=""><a href="#portfolio">Portfolio</a></li>
              <li class="{{ Request::is('team') ? 'active' : '' }}"><a href="{{route('team')}}">Team</a></li>
              <li class="{{ Request::is('contact') ? 'active' : '' }}"><a href="{{route('contact')}}">Contact</a></li>
              <li class="drop-down"><a href="">Drop Down</a>
                <ul>
                  <li><a href="#">Drop Down 1</a></li>
                  <li class="drop-down"><a href="#">Deep Drop Down</a>
                    <ul>
                      <li><a href="#">Deep Drop Down 1</a></li>
                      <li><a href="#">Deep Drop Down 2</a></li>
                      <li><a href="#">Deep Drop Down 3</a></li>
                      <li><a href="#">Deep Drop Down 4</a></li>
                      <li><a href="#">Deep Drop Down 5</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Drop Down 2</a></li>
                  <li><a href="#">Drop Down 3</a></li>
                  <li><a href="#">Drop Down 4</a></li>
                </ul>
              </li>
            </ul>
          </nav><!-- .nav-menu -->
        </div>
</header>
<!-- End Header -->