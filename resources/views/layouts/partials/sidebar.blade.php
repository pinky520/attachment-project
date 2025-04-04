<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            <div class="sb-sidenav-menu-heading">Core</div>
            <a class="nav-link" href={{url('admin/dashboard')}}>
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt" color='blue'></i></div>
                Home Page
            </a>

            <div class="sb-sidenav-menu-heading">Interface</div>
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon"><i class="fas fa-building"color='white'></i></div>
                Venues
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link"  href={{url('admin/addvenue')}}>Add Venue</a>
                    <a class="nav-link" href={{url('admin/bookvenue')}}>Venue Booking Requests</a>
                </nav>
            </div>
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                <div class="sb-nav-link-icon"><i class="fas fa-book-open"color='blue'></i></div>
                Resources
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                    <a class="nav-link" href={{url('admin/addresource')}}>Add Resource</a>
                    <a class="nav-link collapsed" href={{url('admin/bookresource')}}>
                        Resource Booking Requests
                    </a>
                    <a class="nav-link collapsed" href={{url('admin/suppliers')}}>
                        Resource Acquisitions
                    </a>
                    <a class="nav-link collapsed" href={{url('admin/repairs')}}>
                        Resource Repairs
                    </a>
                </nav>
            </div>
    </div>

    <div class="sb-sidenav-footer">
        <div class="small">Logged in as:</div>
        Admin
    </div>

</nav>
