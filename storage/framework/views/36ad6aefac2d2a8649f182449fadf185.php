<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div>
    <div class="brand-logo d-flex align-items-center justify-content-between">
        <a href="./index.html" class="text-nowrap logo-img">
        <img src="../assets/images/logos/dark-logo.svg" width="180" alt="" />
        </a>
        <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
        <i class="ti ti-x fs-8"></i>
        </div>
    </div>
    <!-- Sidebar navigation-->
    <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
        <ul id="sidebarnav">
        <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Home</span>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="/" aria-expanded="false">
            <span>
                <i class="ti ti-layout-dashboard"></i>
            </span>
            <span class="hide-menu">Dashboard</span>
            </a>
        </li>
        <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Students</span>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="<?php echo e(route('students.list')); ?>" aria-expanded="false">
            <span>
                <i class="ti ti-article"></i>
            </span>
            <span class="hide-menu">Students List</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="<?php echo e(route('students.new')); ?>" aria-expanded="false">
            <span>
                <i class="ti ti-alert-circle"></i>
            </span>
            <span class="hide-menu">New Student</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="<?php echo e(route('students.by_phone')); ?>" aria-expanded="false">
            <span>
                <i class="ti ti-cards"></i>
            </span>
            <span class="hide-menu">Search By Phone</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="<?php echo e(route('students.by_name')); ?>" aria-expanded="false">
            <span>
                <i class="ti ti-file-description"></i>
            </span>
            <span class="hide-menu">Search By Name</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="<?php echo e(route('students.by_field')); ?>" aria-expanded="false">
            <span>
                <i class="ti ti-typography"></i>
            </span>
            <span class="hide-menu">Search By Field</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="<?php echo e(route('students.by_dynamic')); ?>" aria-expanded="false">
            <span>
                <i class="ti ti-typography"></i>
            </span>
            <span class="hide-menu">Search Dynamically</span>
            </a>
        </li>
        <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">AUTH</span>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="./authentication-login.html" aria-expanded="false">
            <span>
                <i class="ti ti-login"></i>
            </span>
            <span class="hide-menu">Login</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="./authentication-register.html" aria-expanded="false">
            <span>
                <i class="ti ti-user-plus"></i>
            </span>
            <span class="hide-menu">Register</span>
            </a>
        </li>
        <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">EXTRA</span>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="./icon-tabler.html" aria-expanded="false">
            <span>
                <i class="ti ti-mood-happy"></i>
            </span>
            <span class="hide-menu">Icons</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="./sample-page.html" aria-expanded="false">
            <span>
                <i class="ti ti-aperture"></i>
            </span>
            <span class="hide-menu">Sample Page</span>
            </a>
        </li>
        </ul>

    </nav>
    <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<?php /**PATH C:\Users\Mahmoud Emara\Desktop\LearnPlus\resources\views/menu-bar.blade.php ENDPATH**/ ?>