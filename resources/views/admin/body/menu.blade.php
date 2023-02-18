<div class="vertical-menu" style="background-color: #D6DBDF;  ">

    <div data-simplebar class="h-100">
    @php
    $id = Auth::user()->id;
    $admindata = App\Models\User::find($id);
    @endphp
        <!-- User details -->
        <div class="user-profile text-center mt-3">
            <div class="">
            <img  class="rounded-circle avatar-xl" src="{{ (!empty($admindata->profile_image))? url('upload/admin_images/'.$admindata->profile_image):url('upload/no_image.png') }}" alt="" class="avatar-md rounded-circle">
            </div>

            <div class="mt-3">
                <h4 class="font-size-16 mb-1">
                    @if (Auth::check())
                                        <span class="d-none d-xl-inline-block ms-1">{{Auth::user()->name}}</span>
                                        @endif
                </h4>
                <span class="text-muted"><i class="ri-record-circle-line align-middle font-size-14 text-success"></i>{{Auth::user()->role}}</span>
            </div>
        </div>


        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>
                <li>
                    <a href="/dashboard" class="waves-effect">
                        <i class="ri-store-fill"></i>
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('user.index')}}" class="waves-effect">
                        <i class="ri-account-box-fill"></i>
                        <span>User</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('package.index')}}" class="waves-effect">
                        <i class="ri-account-box-fill"></i>
                        <span>Travel Package</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('foto.index')}}" class="waves-effect">
                        <i class="ri-account-box-fill"></i>
                        <span>Foto</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('transaksi.index')}}" class="waves-effect">
                        <i class="ri-grid-fill"></i>
                        <span>Transaksi</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('detail.index')}}" class="waves-effect">
                        <i class="ri-booklet-fill"></i>
                        <span>Transaksi Detail</span>
                    </a>
                </li>


  </ul>
        </div>
        <!-- Sidebar -->
    </div>
    </div>
