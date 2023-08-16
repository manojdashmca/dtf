<div class="dropdown ms-sm-3 header-item topbar-user">
    <button type="button" class="btn" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="d-flex align-items-center">
            <img class="rounded-circle header-profile-user" src="<?=session()->get('img')?>" alt="<?=session()->get('username')?>">
            <span class="text-start ms-xl-2">
                <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text"><?=session()->get('username')?></span>
                <span class="d-none d-xl-block ms-1 fs-13 text-muted user-name-sub-text">User</span>
            </span>
        </span>
    </button>
    <div class="dropdown-menu dropdown-menu-end">
        <!-- item-->
        <h6 class="dropdown-header">Welcome Diana!</h6>

        <a class="dropdown-item" href="/user-profile"><i class="mdi mdi-cog-outline text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Profile Settings</span></a>
        <a class="dropdown-item" href="/logout"><i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span class="align-middle" data-key="t-logout">Logout</span></a>
    </div>
</div>