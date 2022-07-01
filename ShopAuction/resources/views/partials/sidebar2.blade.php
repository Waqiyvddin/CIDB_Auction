<aside class="aside is-placed-left is-expanded">
    <div class="aside-tools pl-5">
      <div class="">
        <img src="{{ asset('img/logo_cidb.png') }}" width="120px" height="45px" class="flex-none">
      </div>
    </div>
    <div class="menu is-menu-main">
      <p class="menu-label">General</p>
      <ul class="menu-list">
        <li class="--set-active-index-html">
          <a href="{{ route('dashboard') }}">
            <span class="icon"><i class="mdi mdi-desktop-mac"></i></span>
            <span class="menu-item-label">{{__('Dashboard')}}</span>
          </a>
        </li>
      </ul>
      <p class="menu-label">Examples</p>
      <ul class="menu-list">
        <li class="--set-active-profile-html">
          <a href="{{ route('staf') }}">
            <span class="icon"><i class="mdi mdi-account-circle"></i></span>
            <span class="menu-item-label">{{__('Staf')}}</span>
          </a>
        </li>
        
        <li>
          <a class="dropdown">
            <span class="icon"><i class="mdi mdi-view-list"></i></span>
            <span class="menu-item-label">Products</span>
            <span class="icon"><i class="mdi mdi-plus"></i></span>
          </a>
          <ul>
            <li>
              <a href="">
                <span>Buy</span>
              </a>
            </li>
            <li>
              <a href="">
                <span>Bid</span>
              </a>
            </li>
          </ul>
        </li>
      </ul>
      <p class="menu-label">About</p>
      <ul class="menu-list">
        <li>
          <a href="https://justboil.me" onclick="alert('Coming soon'); return false" target="_blank" class="has-icon">
            <span class="icon"><i class="mdi mdi-credit-card-outline"></i></span>
            <span class="menu-item-label">Premium Demo</span>
          </a>
        </li>
        <li>
          <a href="https://justboil.me/tailwind-admin-templates" class="has-icon">
            <span class="icon"><i class="mdi mdi-help-circle"></i></span>
            <span class="menu-item-label">About</span>
          </a>
        </li>
        <li>
          <a href="https://github.com/justboil/admin-one-tailwind" class="has-icon">
            <span class="icon"><i class="mdi mdi-github-circle"></i></span>
            <span class="menu-item-label">GitHub</span>
          </a>
        </li>
      </ul>
    </div>
  </aside>
  