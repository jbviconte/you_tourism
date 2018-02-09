<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
		<meta name="description" content="description">
		<meta name="author" content="DevOOPS">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="{{ asset('back/plugins/bootstrap/bootstrap.css') }}" rel="stylesheet">
		<link href="{{ asset('back/plugins/jquery-ui/jquery-ui.min.css') }}" rel="stylesheet">
		<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
		<link href="{{ asset('back/plugins/fancybox/jquery.fancybox.css') }}" rel="stylesheet">
		<link href="{{ asset('back/plugins/fullcalendar/fullcalendar.css') }}" rel="stylesheet">
		<link href="{{ asset('back/plugins/xcharts/xcharts.min.css') }}" rel="stylesheet">
		<link href="{{ asset('back/plugins/select2/select2.css') }}" rel="stylesheet">
		<link href="{{ asset('back/plugins/justified-gallery/justifiedGallery.css') }}" rel="stylesheet">
		<link href="{{ asset('back/css/style_v2.css') }}" rel="stylesheet">
		<link href="{{ asset('back/plugins/chartist/chartist.min.css') }}" rel="stylesheet">
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
				<script src="http://getbootstrap.com/docs-assets/js/html5shiv.js"></script>
				<script src="http://getbootstrap.com/docs-assets/js/respond.min.js"></script>
		<![endif]-->
  </head>
  <body>

    <header id="menu">
      <div class="container-fluid expanded-panel">
    		<div class="row">
    			<div id="logo" class="col-xs-12 col-sm-2">
    				<a href="{{ route('home') }}">You Tourism</a>
    			</div>
    			<div id="top-panel" class="col-xs-12 col-sm-10">
    				<div class="row">
    					<div class="col-xs-8 col-sm-4">
    						<div id="search">
    							<input type="text" placeholder="search"/>
    							<i class="fa fa-search"></i>
    						</div>
    					</div>
    					<div class="col-xs-4 col-sm-8 top-panel-right">

    						<ul class="nav navbar-nav pull-right panel-menu">
    							<li class="hidden-xs">
    								<a href="index.html" class="modal-link">
    									<i class="fa fa-bell"></i>
    									<span class="badge">7</span>
    								</a>
    							</li>
    							<li class="hidden-xs">
    								<a class="ajax-link" href="ajax/calendar.html">
    									<i class="fa fa-calendar"></i>
    									<span class="badge">7</span>
    								</a>
    							</li>
    							<li class="hidden-xs">
    								<a href="ajax/page_messages.html" class="ajax-link">
    									<i class="fa fa-envelope"></i>
    									<span class="badge">7</span>
    								</a>
    							</li>
    							<li class="dropdown">
    								<a href="#" class="dropdown-toggle account" data-toggle="dropdown">
    									<div class="avatar">
    										<img src="back/img/avatar-1577909_640.png" class="img-circle" alt="avatar" />
    									</div>
    									<i class="fa fa-angle-down pull-right"></i>
    									<div class="user-mini pull-right">
    										<span class="welcome">Bienvenue,</span>
    										<span>nom de la personne connecté</span>
    									</div>
    								</a>
    								<ul class="dropdown-menu">
    									<li>
    										<a href="ajax/page_messages.html" class="ajax-link">
    											<i class="fa fa-envelope"></i>
    											<span>Messages</span>
    										</a>
    									</li>
    									<li>
    										<a href="ajax/gallery_simple.html" class="ajax-link">
    											<i class="fa fa-picture-o"></i>
    											<span>Albums</span>
    										</a>
    									</li>
    									<li>
    										<a href="ajax/calendar.html" class="ajax-link">
    											<i class="fa fa-tasks"></i>
    											<span>Tasks</span>
    										</a>
    									</li>
    									<li>
                          <a href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    Se déconnecté
                          </a>
    									</li>
    								</ul>
    							</li>
    						</ul>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </header>

    <div id="main" class="container-fluid">
      <div class="row">
  		  <div id="sidebar-left" class="col-xs-2 col-sm-2">
  			  <ul class="nav main-menu">

              <li><a class="ajax-link add-full" href="back/ajax/page_messages.html">Messages</a></li>
              <li><a class="ajax-link" href="back/ajax/page_contacts.html">Contacts</a></li>

			    </ul>
        </div>
        <div id="content" class="col-xs-12 col-sm-10">
    			<div id="about">
    				<div class="about-inner">
    					<h4 class="page-header">Open-source admin theme for you</h4>

    				</div>
    			</div>
    			<div class="preloader">
    				<img src="back/img/devoops_getdata.gif" class="devoops-getdata" alt="preloader"/>
    			</div>
    			<div id="ajax-content"></div>
    		</div>
        <div class="content">
          @yield('content')
        </div>
		  </div>
    </div>




    <!--End Container-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!--<script src="http://code.jquery.com/jquery.js"></script>-->
    <script src="{{ asset('back/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('back/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('back/plugins/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('back/plugins/justified-gallery/jquery.justifiedGallery.min.js') }}"></script>
    <script src="{{ asset('back/plugins/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('back/plugins/tinymce/jquery.tinymce.min.js') }}"></script>
    <!-- All functions for this theme + document.ready processing -->
    <script src="{{ asset('back/js/devoops.js') }}"></script>
  </body>
</html>
