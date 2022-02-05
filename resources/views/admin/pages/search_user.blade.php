@extends('admin.master_layout')

@section('pageTitle', 'Search User')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"> {{ "🔹 Search User" }} </h1>
    </div>

    <!-- Content -->
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">List of users</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Username</th>
                                <th>Mail</th>
                                <th>Password</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach(range(1, 100) as $i)
                                <tr>
                                    <td > 
                                        <a href={{ route('admin.view_profile') }}>
                                            {{ 'username_' . $i }} 
                                        </a>
                                        </td>
                                    <td> {{ 'username_' . $i . '@gmail.com'}} </td>
                                    <td>123</td>
                                    <td>
                                        <a class="custom-button" href={{ route('admin.edit_user') }} title="edit user">
                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0 0 172 172" style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><path d="M43,172c-23.74824,0 -43,-19.25176 -43,-43v-86c0,-23.74824 19.25176,-43 43,-43h86c23.74824,0 43,19.25176 43,43v86c0,23.74824 -19.25176,43 -43,43z" fill="#3498db"></path><g id="original-icon" fill="#ffffff" opacity="0" visibility="hidden"><path d="M86,34.4c-14.26054,0 -25.8,11.53946 -25.8,25.8c0,14.26055 11.53946,25.8 25.8,25.8c19.35,0 51.6,-25.8 51.6,-25.8c0,0 -32.25,-25.8 -51.6,-25.8zM86,98.9c-39.35507,0 -51.6,25.8 -51.6,25.8v12.9h58.05v-12.9h25.8v12.9h19.35v-12.9c0,0 -12.24492,-25.8 -51.6,-25.8z"></path></g><g id="subtracted-icon" fill="#ffffff"><path d="M137.6,60.2c0,0 -32.25,25.8 -51.6,25.8c-14.26054,0 -25.8,-11.53945 -25.8,-25.8c0,-14.26054 11.53946,-25.8 25.8,-25.8c19.35,0 51.6,25.8 51.6,25.8zM118.25,124.7h-25.8v12.9h-58.05v-12.9c0,0 12.24493,-25.8 51.6,-25.8c22.82918,0 36.53592,8.68158 44.02183,15.97268l-11.77183,11.77183z"></path></g><g><g id="Filled_3_" fill="#ffffff"><path d="M144.37628,120.78405l14.33416,14.33416l-36.88179,36.88179h-14.33416v-14.33416zM156.61765,108.54267l-7.16708,7.16708l14.33416,14.33416l7.16708,-7.16708c1.39758,-1.39758 1.39758,-3.66955 0,-5.06713l-9.26703,-9.26703c-1.40475,-1.39758 -3.66955,-1.39758 -5.06713,0z"></path></g><g id="Filled_3_" fill="#000000" opacity="0"><path d="M181.09234,133.01467l-49.12317,49.12317c-2.68766,2.68049 -6.3357,4.19274 -10.13425,4.19274h-14.33416c-7.91246,0 -14.33416,-6.4217 -14.33416,-14.33416v-14.33416c0,-3.79855 1.51225,-7.4466 4.19991,-10.13425l49.12317,-49.12317c6.9879,-6.9879 18.35489,-6.9879 25.33563,0l9.26703,9.26703c6.98074,6.9879 6.98074,18.35489 0,25.3428z"></path></g></g></g></svg>
                                        </a>
                                        @php
                                            $user_activated = rand(0,5);
                                        @endphp
                                        @if($user_activated == 0)
                                            <a class="custom-button" href={{ route('admin.add_user') }}  title="blocked">
                                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0 0 172 172" style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><path d="M43,172c-23.74824,0 -43,-19.25176 -43,-43v-86c0,-23.74824 19.25176,-43 43,-43h86c23.74824,0 43,19.25176 43,43v86c0,23.74824 -19.25176,43 -43,43z" fill="#e67e22"></path><g id="original-icon" fill="#ffffff" opacity="0" visibility="hidden"><path d="M86,34.4c-14.26054,0 -25.8,11.53946 -25.8,25.8c0,14.26055 11.53946,25.8 25.8,25.8c19.35,0 51.6,-25.8 51.6,-25.8c0,0 -32.25,-25.8 -51.6,-25.8zM86,98.9c-39.35507,0 -51.6,25.8 -51.6,25.8v12.9h58.05v-12.9h25.8v12.9h19.35v-12.9c0,0 -12.24492,-25.8 -51.6,-25.8z"></path></g><g id="subtracted-icon" fill="#ffffff"><path d="M137.6,60.2c0,0 -32.25,25.8 -51.6,25.8c-14.26054,0 -25.8,-11.53945 -25.8,-25.8c0,-14.26054 11.53946,-25.8 25.8,-25.8c19.35,0 51.6,25.8 51.6,25.8zM34.4,137.6v-12.9c0,0 12.24493,-25.8 51.6,-25.8c5.56887,0 10.59491,0.5166 15.12023,1.40359c-9.32454,9.11419 -15.12023,21.82416 -15.12023,35.86308c0,0.47936 0.00676,0.95717 0.02018,1.43333z"></path></g><g><g id="Filled_3_" fill="#ffffff"><path d="M136.16667,100.33333c-19.78717,0 -35.83333,16.04617 -35.83333,35.83333c0,19.78717 16.04617,35.83333 35.83333,35.83333c19.78717,0 35.83333,-16.04617 35.83333,-35.83333c0,-19.78717 -16.04617,-35.83333 -35.83333,-35.83333zM157.66667,143.33333h-43v-14.33333h43z"></path></g><g id="Filled_3_" fill="#000000" opacity="0"><path d="M186.33333,136.16667c0,27.66333 -22.50333,50.16667 -50.16667,50.16667c-27.66333,0 -50.16667,-22.50333 -50.16667,-50.16667c0,-27.66333 22.50333,-50.16667 50.16667,-50.16667c27.66333,0 50.16667,22.50333 50.16667,50.16667z"></path></g></g></g></svg>
                                            </a>
                                        @else
                                            <a class="custom-button" href={{ route('admin.add_user') }} title="activated">
                                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0 0 172 172" style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><path d="M43,172c-23.74824,0 -43,-19.25176 -43,-43v-86c0,-23.74824 19.25176,-43 43,-43h86c23.74824,0 43,19.25176 43,43v86c0,23.74824 -19.25176,43 -43,43z" fill="#2ecc71"></path><g id="original-icon" fill="#ffffff" opacity="0" visibility="hidden"><path d="M86,34.4c-14.26054,0 -25.8,11.53946 -25.8,25.8c0,14.26055 11.53946,25.8 25.8,25.8c19.35,0 51.6,-25.8 51.6,-25.8c0,0 -32.25,-25.8 -51.6,-25.8zM86,98.9c-39.35507,0 -51.6,25.8 -51.6,25.8v12.9h58.05v-12.9h25.8v12.9h19.35v-12.9c0,0 -12.24492,-25.8 -51.6,-25.8z"></path></g><g id="subtracted-icon" fill="#ffffff"><path d="M137.6,60.2c0,0 -32.25,25.8 -51.6,25.8c-14.26054,0 -25.8,-11.53945 -25.8,-25.8c0,-14.26054 11.53946,-25.8 25.8,-25.8c19.35,0 51.6,25.8 51.6,25.8zM34.4,137.6v-12.9c0,0 12.24493,-25.8 51.6,-25.8c5.56887,0 10.59491,0.5166 15.12023,1.40359c-9.32454,9.11419 -15.12023,21.82416 -15.12023,35.86308c0,0.47936 0.00676,0.95717 0.02018,1.43333z"></path></g><g><g id="Filled_3_" fill="#ffffff"><path d="M136.16667,100.33333c-19.78717,0 -35.83333,16.04617 -35.83333,35.83333c0,19.78717 16.04617,35.83333 35.83333,35.83333c19.78717,0 35.83333,-16.04617 35.83333,-35.83333c0,-19.78717 -16.04617,-35.83333 -35.83333,-35.83333zM132.58333,157.66667l-21.14167,-21.14167l10.03333,-10.03333l11.10833,11.10833l18.275,-18.275l10.03333,10.03333z"></path></g><g id="Filled_3_" fill="#000000" opacity="0"><path d="M186.33333,136.16667c0,27.66333 -22.50333,50.16667 -50.16667,50.16667c-27.66333,0 -50.16667,-22.50333 -50.16667,-50.16667c0,-27.66333 22.50333,-50.16667 50.16667,-50.16667c27.66333,0 50.16667,22.50333 50.16667,50.16667z"></path></g></g></g></svg>
                                            </a>      
                                        @endif
                                        <a class="custom-button" href={{ route('admin.add_user') }} title="remove user">
                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0 0 172 172" style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><path d="M43,172c-23.74824,0 -43,-19.25176 -43,-43v-86c0,-23.74824 19.25176,-43 43,-43h86c23.74824,0 43,19.25176 43,43v86c0,23.74824 -19.25176,43 -43,43z" fill="#e74c3c"></path><g id="original-icon" fill="#ffffff" opacity="0" visibility="hidden"><path d="M86,34.4c-14.26054,0 -25.8,11.53946 -25.8,25.8c0,14.26055 11.53946,25.8 25.8,25.8c19.35,0 51.6,-25.8 51.6,-25.8c0,0 -32.25,-25.8 -51.6,-25.8zM86,98.9c-39.35507,0 -51.6,25.8 -51.6,25.8v12.9h58.05v-12.9h25.8v12.9h19.35v-12.9c0,0 -12.24492,-25.8 -51.6,-25.8z"></path></g><g id="subtracted-icon" fill="#ffffff"><path d="M137.6,60.2c0,0 -32.25,25.8 -51.6,25.8c-14.26054,0 -25.8,-11.53945 -25.8,-25.8c0,-14.26054 11.53946,-25.8 25.8,-25.8c19.35,0 51.6,25.8 51.6,25.8zM34.4,137.6v-12.9c0,0 12.24493,-25.8 51.6,-25.8c5.60484,0 10.65981,0.52329 15.20786,1.42083c-9.3424,9.11124 -15.14336,21.83692 -15.14336,35.91751c0,0.45533 0.00607,0.90925 0.01812,1.36167z"></path></g><g><g id="Filled_3_" fill="#ffffff"><path d="M136.224,100.47667c-9.89,0 -18.84117,3.96317 -25.31983,10.44183c-6.47867,6.47867 -10.44183,15.42983 -10.44183,25.31983c0,19.78 15.98883,35.76167 35.76883,35.76167c19.78,0 35.76883,-15.98167 35.76883,-35.76883c-0.00717,-19.7585 -15.996,-35.74733 -35.776,-35.7545zM156.54867,126.09033l-10.13367,10.13367l10.13367,10.13367l-10.13367,10.13367l-10.13367,-10.13367l-10.13367,10.13367l-10.13367,-10.13367l10.13367,-10.13367l-10.13367,-10.13367l10.13367,-10.13367l10.13367,10.13367l10.13367,-10.13367z"></path></g><g id="Filled_3_" fill="#000000" opacity="0"><path d="M186.39783,136.23833c0,27.70633 -22.46033,50.16667 -50.16667,50.16667c-27.70633,0 -50.16667,-22.46033 -50.16667,-50.16667c0,-27.70633 22.46033,-50.16667 50.16667,-50.16667c27.70633,0 50.16667,22.46033 50.16667,50.16667z"></path></g></g></g></svg>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection
