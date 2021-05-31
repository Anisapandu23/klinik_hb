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
      <a href="http://www.creative-tim.com" class="simple-text logo-normal">
        Creative Tim
        <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
      </a>
    </div>
    <div class="sidebar-wrapper">
      <ul class="nav">
        <li class="active" >
          <a href="{{route('admin.dashboard')}}">
            <i class="nc-icon nc-bank"></i>
            <p>Dashboard</p>
          </a>
        </li>
        <li>
          <a href="{{route('pasien.index')}}">
            <i class="nc-icon nc-badge"></i>
            <p>Data Pasien</p>
          </a>
        </li>
        <li>
          <a href="{{route('rekamMedik.index')}}">
            <i class="nc-icon nc-single-copy-04"></i>
            <p>REKAM MEDIK PASIEN</p>
          </a>
        </li>
        <li>
          <a href="{{route('obat.index')}}">
            <i class="nc-icon nc-atom"></i>
            <p>Data Obat</p>
          </a>
        </li>
        <li>
          <a href="./user.html">
            <i class="nc-icon nc-paper"></i>
            <p>Report</p>
          </a>
        </li>
      </ul>
    </div>
  </div>
  <div class="main-panel">