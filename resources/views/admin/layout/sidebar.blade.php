<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-secondary navbar-dark">
        <a href="" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fas fa-tractor me-2"></i>AgroMarket</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="{{asset("assets/img/user.jpg")}}" alt="" style="width: 40px; height: 40px;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">Karyono</h6>
                <span>Admin</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="{{route('admin')}}" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fas fa-users me-2"></i>Users Manage</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{route('admin.users')}}" class="dropdown-item">Users</a>
                    <a href="{{route('admin.users.roles')}}" class="dropdown-item">Roles</a>
                    <a href="{{route('admin.users.permission')}}" class="dropdown-item">Permission</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fab fa-product-hunt me-2"></i>Products</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{route('admin.product')}}" class="dropdown-item">Product</a>
                    <a href="{{route('admin.product.categories')}}" class="dropdown-item">Categories</a>
                </div>
            </div>
            <a href="{{route('admin.order')}}" class="nav-item nav-link"><i class="fas fa-shopping-bag me-2"></i>Orders</a>
            <a href="{{route('admin.customer')}}" class="nav-item nav-link"><i class="fas fa-user-friends me-2"></i>Customers</a>
            <a href="{{route('admin.promotion')}}" class="nav-item nav-link"><i class="fas fa-tags me-2"></i>Promotions</a>
            <a href="{{route('admin.staticContent')}}" class="nav-item nav-link"><i class="fas fa-tasks me-2"></i>Static Content</a>
            <a href="{{route('admin.product.categories')}}" class="nav-item nav-link"><i class="fas fa-photo-video me-2"></i>Article</a>
            <a href="{{route('admin.product.categories')}}" class="nav-item nav-link"><i class="fas fa-newspaper me-2"></i>Site Settings</a>
            <a href="{{route('admin.product.categories')}}" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Reports</a>
            <a href="#" class="nav-item nav-link"><i class="fas fa-retweet me-2"></i>Ext Integrations</a>
            <a href="#" class="nav-item nav-link"><i class="fas fa-shipping-fast me-2"></i>Support Center</a>
            <a href="/" class="nav-item nav-link"><i class="fas fa-sign-out-alt me-2"></i>Logout</a>
        </div>
    </nav>
</div>