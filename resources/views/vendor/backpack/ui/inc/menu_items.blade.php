{{-- This file is used for menu items by any Backpack v6 theme --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<x-backpack::menu-dropdown title="Authentication" icon="la la-gear">
<x-backpack::menu-dropdown-item title="Users" icon="la la-user" :link="backpack_url('user')" />
</x-backpack::menu-dropdown>

<x-backpack::menu-dropdown title="ProjectManager" icon="la la-user">
<x-backpack::menu-dropdown-item title="Assignments" icon="la la-comment-o" :link="backpack_url('assignment')" />  
<x-backpack::menu-dropdown-item title="Devices" icon="la la-truck" :link="backpack_url('device')" />
<x-backpack::menu-dropdown-item title="Device requisitions" icon="la la-paste" :link="backpack_url('device-requisition')" />
</x-backpack::menu-dropdown>

<x-backpack::menu-dropdown title="MonitoringOfficer" icon="la la-user">
<x-backpack::menu-dropdown-item title="Reports" icon="la la-calendar" :link="backpack_url('report')" />
</x-backpack::menu-dropdown>

<x-backpack::menu-dropdown title="Accountant" icon="la la-user">
<x-backpack::menu-dropdown-item title="Customers" icon="la la-group" :link="backpack_url('customer')" />
<x-backpack::menu-dropdown-item title="Reports" icon="la la-calendar" :link="backpack_url('report')" />
<x-backpack::menu-dropdown-item title="Vehicles" icon="la la-automobile" :link="backpack_url('vehicle')" />
</x-backpack::menu-dropdown>

<x-backpack::menu-dropdown title="Technician" icon="la la-user">
<x-backpack::menu-dropdown-item title="Assignments" icon="la la-comment-o" :link="backpack_url('assignment')" />  
<x-backpack::menu-dropdown-item title="Customers" icon="la la-group" :link="backpack_url('customer')" />  
<x-backpack::menu-dropdown-item title="Job cards" icon="la la-money" :link="backpack_url('job-card')" />
</x-backpack::menu-dropdown>





