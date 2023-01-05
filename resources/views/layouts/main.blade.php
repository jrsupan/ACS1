<!DOCTYPE html>
<html lang="en">
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
     <link rel="stylesheet" href="{{ URL::to('css/app.css') }}">
    <title>ACS</title>

    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="images/android-desktop.png">
    <link rel="shortcut icon" href="https://scontent.fmnl2-1.fna.fbcdn.net/v/t1.0-1/p720x720/10369744_314262405394212_4353569338034276272_n.jpg?_nc_cat=0&oh=3411c9a82e7c3dde746ed54ecbe28b19&oe=5C230E52">
    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">
    <link rel="apple-touch-icon-precomposed" href="images/ios-desktop.png">
    
    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <link rel="shortcut icon" href="images/favicon.png">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.cyan-light_blue.min.css">
    <link rel="stylesheet" href="styles.css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="text/javascript" src="js/date_time.js"></script>
<style>
  h4 {
    text-align: center;
}
#view-source {
      position: fixed;
      display: block;
      right: 0;
      bottom: 0;
      margin-right: 40px;
      margin-bottom: 40px;
      z-index: 900;
    }


</style>
  <!--   <link href="css/sb-admin.css" rel="stylesheet">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
 -->
  
  </head>
  <body>
     <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
      <header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--black-600">
        <div class="mdl-layout__header-row">
          <span class="mdl-layout-title"></span>
          <div class="mdl-layout-spacer"></div>
           <span id="date_time"></span>
            <script type="text/javascript">window.onload = date_time('date_time');</script>
          <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="hdrbtn">
            <i class="material-icons">more_vert</i>
          </button>
          <ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right" for="hdrbtn">
            <li class="mdl-menu__item">{{ Auth::user()->name }}</li>
            <li class="mdl-menu__item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">Logout</li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
              </form>
          </ul>
        </div>
      </header>
      <div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
        <header class="demo-drawer-header">
         
          <img src="https://scontent.fmnl2-1.fna.fbcdn.net/v/t1.0-1/p720x720/10369744_314262405394212_4353569338034276272_n.jpg?_nc_cat=0&oh=3411c9a82e7c3dde746ed54ecbe28b19&oe=5C230E52" class="demo-avatar" height="42" width="42"><font size="+1">     Arandia College</font>
        
          <!-- <div class="demo-avatar-dropdown" >
          </div> -->
        </header>
        <nav class="demo-navigation mdl-navigation mdl-color--blue-blue-800">
          <a class="mdl-navigation__link" href="{{route('home')}}"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">home</i>    Home</a>
          <a class="mdl-navigation__link" href="{{ route('student.index') }}"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">people</i>    Student</a>
          <a class="mdl-navigation__link" href="{{ route('staff.index') }}"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">people</i>    Staff</a>
          <a class="mdl-navigation__link" href="{{ route('level.index') }}"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">inbox</i>    GradeLevel</a>
          <a class="mdl-navigation__link" href="{{ route('schoolyear.index') }}"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">school</i>   SchoolYear</a>
          <a class="mdl-navigation__link" href="{{ route('attendance.index') }}"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">report</i>   Attendance</a>
          <a class="mdl-navigation__link" href="{{ route('announcement.index') }}"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">forum</i>   Announcement</a>

         
        </nav>
      </div>
      <main class="mdl-layout__content mdl-color--grey-100">
        <div class="mdl-grid demo-content"> 
   @yield('content')

     </div>
      </main>
    </div>  
  
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  </body>
</html>

