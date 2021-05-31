<!--
=========================================================
 Paper Dashboard 2 - v2.0.0
=========================================================

 Product Page: https://www.creative-tim.com/product/paper-dashboard-2
 Copyright 2019 Creative Tim (https://www.creative-tim.com)
 Licensed under MIT (https://github.com/creativetimofficial/paper-dashboard/blob/master/LICENSE)

 Coded by Creative Tim

=========================================================

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->



<!DOCTYPE html>
<html lang="en">

<head>
  @include('templates.partials.admin._head')
</head>


<body class="">

  <!-- sidebar -->
  @include('templates.partials.admin._sidebar')
  <!-- end sidebar -->

  <!-- Navbar -->
  @include('templates.partials.admin._navbar')
  <!-- End Navbar -->


  {{--start main--}}
  @yield('content')
  {{--end main--}}

  @include('templates.partials.admin._footer')
  </div>
  </div>
  <!--   Core JS Files   -->


  <!-- script -->
  @include('templates.partials.admin._script')
  <!-- end script -->
</body>
</html>