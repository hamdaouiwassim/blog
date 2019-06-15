@include('admin/layouts/scc')
<script src="//feather.aviary.com/imaging/v3/editor.js"></script>
<script src="https://static.filestackapi.com/v3/filestack-0.1.10.js"></script>

    <!-- PLUGINS -->
    <script src="./toastr/toastr.js"></script>
    <link rel="stylesheet" href="./toastr/build/toastr.min.css">

<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">


            <li>
                <a href="#"><i class="fa fa-image"></i> Charte graphique <span class="fa fa-angle-down"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{url('/index')}}"><i class="fa fa-edit"></i> Creation</a>
                    </li>
                    <li>
                        <a href="{{url('/chart/list')}}"><i class="fa fa-bars"></i> Consultation</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="{{url('/envoi')}}"><i class="fa fa-envelope"></i> Envoi</a>
            </li>
            <li>
                <a href="{{url('/import')}}"><i class="fa fa-file"></i> Envoi csv </a>
            </li>

            <li>
                <a href="#"><i class="fa fa-user"></i> Clients <span class="fa fa-angle-down"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{url('/admin/clients.create')}}"><i class="fa fa-user-plus"></i> Ajout</a>
                    </li>
                    <li>
                        <a href="{{url('/clients')}}"><i class="fa fa-bars"></i> Liste</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-users"></i> Groupe<span class="fa fa-angle-down"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{url('/groupes/create')}}"><i class="fa fa-user-plus"></i> Ajout</a>
                    </li>
                    <li>
                        <a href="{{url('/groupes')}}"><i class="fa fa-bars"></i> Liste</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="/compagnes"><i class="fa fa-chart"></i>Compagnes de mailing</a>
            </li>
            <li>
                <a href="/statistiques"><i class="fa fa-Charts"></i> Statistiques</a>
            </li>






<!-- /.navbar-static-side -->
</nav>

<div id="page-wrapper">
<div class="row">

    <!-- /.col-lg-12 -->
    @include('admin/layouts/nav')
