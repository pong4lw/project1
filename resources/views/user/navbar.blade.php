<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="{{ url('/user') }}">顧客管理</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">

    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="ダッシュボード">
                <a class="nav-link" href="{{ url('/user') }}">
                    <i class="fa fa-fw fa-bullhorn"></i>
                    <span class="nav-link-text">ダッシュボード</span>
                </a>
            </li>

        </ul>
        <ul class="navbar-nav sidenav-toggler">
            <li class="nav-item">
                <a class="nav-link text-center" id="sidenavToggler">
                    <i class="fa fa-fw fa-angle-left"></i>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
               <!-- <a href="{{ url('/user/logout') }}" class="nav-link" data-toggle="modal" data-target="{{ url('/user/logout') }}"> -->
                 <a href="{{ route('logout') }}" class="nav-link">
                    <i class="fa fa-fw fa-sign-out"></i>  Logout</a>
            </li>
        </ul>
    </div>
</nav>
