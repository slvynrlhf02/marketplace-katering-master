 <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
     <div class="app-brand demo">
         <a href="" class="app-brand-link">
             <span class="app-brand-logo demo">
                 <img src="{{ asset('template\img\logo_lama.png') }}" width="25" viewBox="0 0 25 42" alt="">
             </span>
             <span class="text-secondary fw-bolder ms-2">Marketplace Katering</span>
         </a>

         <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
             <i class="bx bx-chevron-left bx-sm align-middle"></i>
         </a>
     </div>

     <div class="menu-inner-shadow"></div>

     <ul class="menu-inner py-1">
         <!-- Dashboard -->
         <li class="menu-item {{ request()->routeIs('dashboard') ? 'active open' : '' }}">
             <a href="{{ route('dashboard') }}" class="menu-link">
                 <div data-i18n="Analytics">Dashboard</div>
             </a>
         </li>
         @if(auth()->user()->role === 'merchant')
         <li class="menu-item {{ request()->is('merchant/profile*') ? 'active open' : '' }}">
            <a href="{{ route('merchant.profile') }}" class="menu-link">
                <div data-i18n="Analytics">Merchant Profile</div>
            </a>
        </li>
        <li class="menu-item {{ request()->is('merchant/menus*') ? 'active open' : '' }}">
            <a href="{{ route('merchant.menus') }}" class="menu-link">
                <div data-i18n="Analytics">Menu</div>
            </a>
        </li>
        <li class="menu-item {{ request()->is('merchant/orders*') ? 'active open' : '' }}">
            <a href="{{ route('merchant.orders') }}" class="menu-link">
                <div data-i18n="Analytics">Orders</div>
            </a>
        </li>
@else

<li class="menu-item {{ request()->is('customerCMS*') ? 'active open' : '' }}">
    <a href="{{ route('customerCMS') }}" class="menu-link">
        <div data-i18n="Analytics">Customer</div>
    </a>
</li>
         @endif


     </ul>
 </aside>
