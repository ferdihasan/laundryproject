<div class="d-flex flex-column flex-shrink-0 p-3 m-1 bg-body-tertiary rounded-3 shadow" style="width: 240px; height: 88vh">
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="/laundry/tambah" class="nav-link link-body-emphasis {{ ($title === "Tambah Laundry") ? 'active shadow' : '' }}"><i class="bi bi-plus-square"></i> Tambah Loundry</a>
        </li>
        <li class="nav-item">
            <a href="/pelanggan/tambah" class="nav-link link-body-emphasis {{ ($title === "Tambah Pelanggan") ? 'active shadow' : '' }}"><i class="bi bi-plus-square"></i> Tambah Pelanggan</a>
        </li>
        <hr>
        <li>
            <a href="/administrator" class="nav-link link-body-emphasis {{ ($title === "Administrator") ? 'active shadow' : '' }}"><i class="bi bi-card-list"></i> Dashboards</a>
        </li>
        <li>
            <a href="/laundry/aktif" class="nav-link link-body-emphasis {{ ($title === "Aktif Laundry") ? 'active shadow' : '' }}"><i class="bi bi-table"></i> Aktif Laundry</a>
        </li>
        <li>
            <a href="/laundry/siap" class="nav-link link-body-emphasis {{ ($title === "Siap diambil") ? 'active shadow' : '' }}"><i class="bi bi-table"></i> Siap diambil</a>
        </li>
        <li>
            <a href="/laundry/selesai" class="nav-link link-body-emphasis {{ ($title === "Selesai Laundry") ? 'active shadow' : '' }}"><i class="bi bi-table"></i> Selesai Laundry</a>
        </li>
        <li>
            <a href="/pelanggan" class="nav-link link-body-emphasis {{ ($title === "Daftar Pelanggan") ? 'active shadow' : '' }}"><i class="bi bi-people"></i> Daftar Pelanggan</a>
        </li>
    </ul>
</div>