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
            <li class="nav-item {{ $type_menu === 'dashboard' ? 'active' : '' }}">
                <a href="{{ url('dashboard') }}"
                    class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>

            <li class="menu-header">Activities</li>
            <li class="nav-item {{ $type_menu === 'table-activity' ? 'active' : '' }}">
                <a href="{{ url('dashboard/activity/table') }}"
                    class="nav-link"><i class="fa-solid fa-table"></i><span>Table</span></a>
            </li>
            <li class="nav-item {{ $type_menu === 'trash-table-activity' ? 'active' : '' }}">
                <a href="{{ url('dashboard/activity/trash-data') }}"
                class="nav-link"><i class="fa-solid fa-trash"></i><span>Trash</span></a>
            </li>

            <li class="menu-header">Category</li>
            <li class="nav-item {{ $type_menu === 'table-category' ? 'active' : '' }}">
                <a href="{{ url('dashboard/category/table') }}"
                    class="nav-link"><i class="fa-solid fa-table"></i></i><span>Table</span></a>
            </li>
            <li class="nav-item {{ $type_menu === 'trash-table-category' ? 'active' : '' }}">
                <a href="{{ url('dashboard/category/trash-data') }}"
                    class="nav-link"><i class="fa-solid fa-trash"></i><span>Trash</span></a>
            </li>

            <li class="menu-header">Publisher</li>
            <li class="nav-item {{ $type_menu === 'table-publisher' ? 'active' : '' }}">
                <a href="{{ url('dashboard/publisher/table') }}"
                    class="nav-link"><i class="fa-solid fa-table"></i></i><span>Table</span></a>
            </li>
            <li class="nav-item {{ $type_menu === 'trash-table-publisher' ? 'active' : '' }}">
                <a href="{{ url('dashboard/publisher/trash-data') }}"
                    class="nav-link"><i class="fa-solid fa-trash"></i><span>Trash</span></a>
            </li>

            <li class="menu-header">Payment</li>
            <li class="nav-item {{ $type_menu === 'table-payment' ? 'active' : '' }}">
                <a href="{{ url('dashboard/payment/table') }}"
                    class="nav-link"><i class="fa-solid fa-table"></i></i><span>Table</span></a>
            </li>
            <li class="nav-item {{ $type_menu === 'trash-table-payment' ? 'active' : '' }}">
                <a href="{{ url('dashboard/payment/trash-data') }}"
                    class="nav-link"><i class="fa-solid fa-trash"></i><span>Trash</span></a>
            </li>

            <li class="menu-header">Tag</li>
            <li class="nav-item {{ $type_menu === 'table-tag' ? 'active' : '' }}">
                <a href="{{ url('dashboard/tag/table') }}"
                    class="nav-link"><i class="fa-solid fa-table"></i></i><span>Table</span></a>
            </li>
            <li class="nav-item {{ $type_menu === 'trash-table-tag' ? 'active' : '' }}">
                <a href="{{ url('dashboard/tag/trash-data') }}"
                    class="nav-link"><i class="fa-solid fa-trash"></i><span>Trash</span></a>
            </li>

            <li class="menu-header">Gallery</li>
            <li class="nav-item {{ $type_menu === 'table-gallery' ? 'active' : '' }}">
                <a href="{{ url('dashboard/gallery/table') }}"
                    class="nav-link"><i class="fa-solid fa-table"></i></i><span>Table</span></a>
            </li>
            <li class="nav-item {{ $type_menu === 'trash-gallery-table' ? 'active' : '' }}">
                <a href="{{ url('dashboard/gallery/trash-data') }}"
                    class="nav-link"><i class="fa-solid fa-trash"></i><span>Trash</span></a>
            </li>

            <li class="menu-header">Message</li>
            <li class="nav-item {{ $type_menu === 'table-message' ? 'active' : '' }}">
                <a href="{{ url('dashboard/message/table') }}"
                    class="nav-link"><i class="fa-solid fa-table"></i></i><span>Table</span></a>
            </li>
            {{-- <li class="nav-item {{ $type_menu === 'trash-message-table' ? 'active' : '' }}">
                <a href="{{ url('dashboard/message/trash-data') }}"
                    class="nav-link"><i class="fa-solid fa-trash"></i><span>Trash</span></a>
            </li> --}}
    </aside>
</div>
