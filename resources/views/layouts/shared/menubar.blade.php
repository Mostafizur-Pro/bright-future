<div class="navbar bg-base-300">
  <div class="navbar-start">
    <div class="dropdown">
      <label tabindex="0" class="btn btn-ghost lg:hidden">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
        </svg>
      </label>
      <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-50 p-2 shadow-lg bg-white rounded-lg w-52">
        <li><a>Item 1</a></li>
        <li>
          <a>Parent</a>
          <ul class="p-2">
            <li><a>Submenu 1</a></li>
            <li><a>Submenu 2</a></li>
          </ul>
        </li>
        <li><a>Item 3</a></li>
      </ul>
    </div>
    <a class="btn btn-ghost normal-case text-xl">BRIGHT FUTURE</a>
  </div>

  <div class="navbar-center hidden lg:flex">
    <ul class="menu menu-horizontal px-1">
      <li><a>HOME</a></li>
      <li class="dropdown">
        <label tabindex="0">COURSE</label>
        <ul tabindex="0" class="dropdown-content z-50 menu p-2 shadow-lg bg-white rounded-lg w-52">
          <li><a>AutoCAD 2d</a></li>
          <li><a>AutoCAD 3d</a></li>
          
        </ul>
      </li>
      <li><a>ABOUT</a></li>
    </ul>
  </div>
  <div class="navbar-end">
    <a class="btn">LOGIN</a>
  </div>
</div>
