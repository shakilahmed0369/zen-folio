<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar">
    <form class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i
                        class="fas fa-search"></i></a></li>
        </ul>
    </form>
    <ul class="navbar-nav navbar-right">

        <li class="dropdown"><a href="#" data-toggle="dropdown"
                class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                <img alt="image" src="assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
                <div class="d-sm-none d-lg-inline-block">Hi, Ujang Maman</div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a href="#" class="dropdown-item has-icon text-danger">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
            </div>
        </li>
    </ul>
</nav>
<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Stisla</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li><a class="nav-link" href=""><i class="far fa-square"></i> <span>Dashboard</span></a></li>

            <li><a class="nav-link" href="{{ route('admin.hero-section.index') }}"><i class="far fa-square"></i> <span>Hero Section</span></a></li>

            <li><a class="nav-link" href="{{ route('admin.about-section.index') }}"><i class="far fa-square"></i> <span>About Section</span></a></li>

            <li><a class="nav-link" href="{{ route('admin.skill-section.index') }}"><i class="far fa-square"></i> <span>Skill Section</span></a></li>


            <li><a class="nav-link" href="{{ route('admin.love-to-do.index') }}"><i class="far fa-square"></i> <span>Love to Do Section</span></a></li>

            <li><a class="nav-link" href="{{ route('admin.projects.index') }}"><i class="far fa-square"></i> <span>Projects</span></a></li>

            <li><a class="nav-link" href="{{ route('admin.contact.index') }}"><i class="far fa-square"></i> <span>Contact</span></a></li>
            <li><a class="nav-link" href="{{ route('admin.socials.index') }}"><i class="far fa-square"></i> <span>Socials</span></a></li>
        </ul>
    </aside>
</div>
