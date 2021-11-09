<div class="app-sidebar__overlay" data-toggle="sidebar"></div>

<aside class="app-sidebar">

<ul class="app-menu">
<li><a class="app-menu__item active#" href="#"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>




<li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-briefcase"></i><span class="app-menu__label">Product</span><i class="treeview-indicator fa fa-angle-right"></i></a>
<ul class="treeview-menu">
<li><a class="treeview-item" href="{{route('product.create')}}"><i class="icon fa fa-circle-o"></i> New Product</a></li>
<li><a class="treeview-item" href="{{route('product.index')}}"><i class="icon fa fa-circle-o"></i> Manage Products</a></li>
</ul>
</li>



<li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">Customer</span><i class="treeview-indicator fa fa-angle-right"></i></a>
<ul class="treeview-menu">
<li><a class="treeview-item" href="{{route('customer.create')}}"><i class="icon fa fa-plus-o"></i> Add Customer</a></li>
<li><a class="treeview-item" href="{{route('customer.index')}}"><i class="icon fa fa-edit-o"></i> Manage Customer</a></li>
</ul>
</li>
<li class="treeview "><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-indent"></i><span class="app-menu__label">Invoice</span><i class="treeview-indicator fa fa-angle-right"></i></a>
<ul class="treeview-menu">
<li><a class="treeview-item " href="{{route('invoice.create')}}"><i class="icon fa fa-plus"></i>Create Invoice </a></li>
<li><a class="treeview-item" href="{{route('invoice.index')}}"><i class="icon fa fa-edit"></i>Manage Invoice</a></li>
</ul>
</li>

<li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-handshake-o"></i><span class="app-menu__label">Supplier</span><i class="treeview-indicator fa fa-angle-right"></i></a>
<ul class="treeview-menu">
<li><a class="treeview-item" href="{{route('supplier.create')}}"><i class="icon fa fa-circle-o"></i> Add Supplier</a></li>
<li><a class="treeview-item" href="{{route('supplier.index')}}"><i class="icon fa fa-circle-o"></i> Manage Suppliers</a></li>
</ul>
</li>
<li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-bell-o"></i><span class="app-menu__label">Oder</span><i class="treeview-indicator fa fa-angle-right"></i></a>
<ul class="treeview-menu">
<li><a class="treeview-item" href="{{route('order.create')}}"><i class="icon fa fa-circle-o"></i> Add Order</a></li>
<li><a class="treeview-item" href="{{route('order.index')}}"><i class="icon fa fa-circle-o"></i> Manage Orders</a></li>
</ul>
</aside>