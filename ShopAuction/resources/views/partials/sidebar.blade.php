  <!-- start sidebar -->
  <div id="sideBar" class="relative flex flex-col flex-wrap bg-green-200 border-r border-gray-300 p-6 flex-none w-64 md:-ml-64 md:fixed md:top-0 md:z-30 md:h-screen md:shadow-xl animated faster">
    

    <!-- sidebar content -->
    <div class="flex flex-col">

      <!-- sidebar toggle -->
      <div class="text-right hidden md:block mb-4">
        <button id="sideBarHideBtn">
          <i class="fad fa-times-circle"></i>
        </button>
      </div>
      <!-- end sidebar toggle -->

      <p class="uppercase text-xs text-gray-600 mb-4 tracking-wider">Main</p>

      <!-- link -->
      <a href="{{ route('dashboard') }}" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
        <i class="fad fa-chart-pie text-xs mr-2"></i>                
        {{__('Dashboard')}}
      </a>
      <!-- end link -->

      <!-- Staf -->
      <a href="{{ route('staf') }}" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
        <i class="fad fa-chart-pie text-xs mr-2"></i>                
        {{__('Staf')}}
      </a>
      <!-- end Staf -->


      <!-- link -->
      {{--  --}}
      {{-- <a href="{{route('list-application.index')}}" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
        <i class="fad fa-shopping-cart text-xs mr-2"></i>
        {{__('My Application')}}
      </a> --}}
      <!-- end link -->

      

      <p class="uppercase text-xs text-gray-600 mb-4 mt-4 tracking-wider">apps</p>


      <!-- link -->
      {{--  --}}
      {{-- <a href="{{route('admin.index')}}" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
        <i class="fad fa-shopping-cart text-xs mr-2"></i>
        {{__('All Application')}}
      </a> --}}
      <!-- end link -->

      <!-- link -->
      {{-- <a href="{{route('notification')}}" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
        <i class="fad fa-envelope-open-text text-xs mr-2"></i>
        Notifications
      </a> --}}
      <!-- end link -->

      <!-- link -->
      <a href="#" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
        <i class="fad fa-comments text-xs mr-2"></i>
        Performances
      </a>
      <!-- end link -->

      <!-- link -->
      <a href="#" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
        <i class="fad fa-shield-check text-xs mr-2"></i>
        Analytics
      </a>
      <!-- end link -->

      <p class="uppercase text-xs text-gray-600 mb-4 mt-4 tracking-wider">User/Setting</p>

      {{-- @role('Super-Admin|Admin') --}}
      <!-- link -->
      {{--  --}}
      {{-- <a href="{{route('user.index')}}" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
        <i class="fad fa-shopping-cart text-xs mr-2"></i>
        {{__('User Management')}}
      </a> --}}
      <!-- end link -->
      {{-- @endrole --}}
      

    </div>
    <!-- end sidebar content -->
    

  </div>
  <!-- end sidbar -->