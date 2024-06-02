<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            <div class="sb-sidenav-menu-heading">Core</div>
            <a class="nav-link" href="{{route('category.index')}}">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
               Category
            </a>
            <a class="nav-link" href="{{ route('project.index') }}">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Project
            </a>
            <a class="nav-link" href="{{ route('status.index') }}">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Status
            </a>
            <a class="nav-link" href="/task">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Task
            </a>
        </div>
    </div>
</nav>