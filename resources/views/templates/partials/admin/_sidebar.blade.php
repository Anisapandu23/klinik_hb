<div class="wrapper ">
  <div class="sidebar" data-color="white" data-active-color="danger">
    <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
    <div class="logo">
      <a href="http://www.creative-tim.com" class="simple-text logo-mini">
        <div class="logo-image-small">
          <img src="{{asset('admin/img/logo-small.png')}}">
        </div>
      </a>
      <a href="{{route('admin.dashboard')}}" class="simple-text logo-normal">
        administrator
        <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
      </a>
    </div>
    <div class="sidebar-wrapper">
      <ul class="nav">
        <li @if (Request::is('admin/dashboard')) class="active"
                   @else class="false" @endif class="dropdown-toggle">
          <a href="{{route('admin.dashboard')}}" >
          <i class="nc-icon nc-chart-bar-32"></i>
            <p>Dashboard</p>
          </a>
        </li>
        <li @if (Request::is('admin/pasien')) class="active"
                   @else class="false" @endif class="dropdown-toggle">
          <a href="{{route('pasien.index')}}">
            <i class="nc-icon nc-badge"></i>
            <p>Data Pasien</p>
          </a>
        </li>
        <li @if (Request::is('admin/rekamMedik')) class="active"
                   @else class="false" @endif class="dropdown-toggle">
          <a href="{{route('rekamMedik.index')}}">
            <i class="nc-icon nc-sound-wave"></i>
            <p>REKAM MEDIK PASIEN</p>
          </a>
        </li>
        <li @if (Request::is('admin/obat')) class="active"
                   @else class="false" @endif class="dropdown-toggle">
          <a href="{{route('obat.index')}}">
            <i class="nc-icon nc-money-coins"></i>
            <p>Data Obat</p>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="nc-icon nc-paper"></i>
            <p>Report</p>
          </a>
        </li>
      </ul>
    </div>
  </div>
  <div class="main-panel">