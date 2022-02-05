@extends('admin.master_layout')

@section('pageTitle', 'Search Category')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"> {{ "🔹 Search Category" }} </h1>
    </div>

    <!-- Content -->
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">List of categories</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Category name</th>
                                <th>Parent category</th>
                                <th>Num post(s)</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach(range(1, 100) as $i)
                                <tr>
                                    <td> {{ 'category_' . $i }} </td>
                                    <td> {{ 'category_' . mt_rand(1, 100)}} </td>
                                    <td>{{ mt_rand(1, 100) }}</td>
                                    <td>
                                        <a class="custom-button" href={{ route('admin.add_user') }} title="edit category">
                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0 0 172 172" style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><path d="M43,172c-23.74824,0 -43,-19.25176 -43,-43v-86c0,-23.74824 19.25176,-43 43,-43h86c23.74824,0 43,19.25176 43,43v86c0,23.74824 -19.25176,43 -43,43z" fill="#3498db"></path><g id="original-icon" fill="#ffffff" opacity="0" visibility="hidden"><path d="M54.696,119.712h77.056v-89.096h-77.056c-7.96709,0 -14.448,6.48091 -14.448,14.448v82.87847c0,7.41213 6.48091,13.44153 14.448,13.44153h77.056v-4.816h-77.056c-5.22047,0 -9.632,-3.95063 -9.632,-8.62553c0,-4.61847 4.23281,-8.23047 9.632,-8.23047zM59.512,51.084c0,-0.66784 0.53616,-1.204 1.204,-1.204h52.976c0.66784,0 1.204,0.53616 1.204,1.204v12.04c0,0.66784 -0.53616,1.204 -1.204,1.204h-52.976c-0.66784,0 -1.204,-0.53616 -1.204,-1.204z"></path></g><g id="subtracted-icon" fill="#ffffff"><path d="M45.064,127.94247c0,4.67491 4.41153,8.62553 9.632,8.62553l47.87021,0l-4.09047,4.128c-0.22881,0.22881 -0.43859,0.45761 -0.63251,0.688h-43.14723c-7.96709,0 -14.448,-6.02941 -14.448,-13.44153v-82.87847c0,-7.96709 6.48091,-14.448 14.448,-14.448h77.056l0,76.49846l-12.48302,12.59754h-64.57298c-5.39919,0 -9.632,3.612 -9.632,8.23047zM59.512,63.124c0,0.66784 0.53616,1.204 1.204,1.204h52.976c0.66784,0 1.204,-0.53616 1.204,-1.204v-12.04c0,-0.66784 -0.53616,-1.204 -1.204,-1.204h-52.976c-0.66784,0 -1.204,0.53616 -1.204,1.204z"></path></g><g><g id="Layer_9" fill="#ffffff"><path d="M167.872,100.448c-2.752,-2.752 -6.192,-4.128 -9.632,-4.128c-3.784,0 -7.568,1.72 -10.32,4.128l-44.72,45.064c-0.344,0.344 -0.688,1.032 -1.032,1.376l-5.848,20.64c-0.344,1.032 0,2.408 1.032,3.44c0.688,0.688 1.376,1.032 2.408,1.032c0.344,0 0.688,0 1.032,0l20.64,-5.504c0.688,0 1.032,-0.344 1.376,-1.032l45.064,-45.064c2.752,-2.752 4.128,-6.192 4.128,-9.976c0,-3.784 -1.376,-7.568 -4.128,-9.976zM152.736,105.608c2.752,-2.752 7.568,-3.096 10.32,-0.344c1.376,1.376 2.064,3.096 2.064,5.16c0,2.064 -0.688,3.784 -2.064,5.16l-2.064,2.064l-10.32,-10.32zM108.36,150.328l9.976,9.632l-13.76,3.784z"></path></g><g fill="#000000" opacity="0"><g id="IOS" font-family="Inter, sans-serif" font-weight="400" font-size="16" text-anchor="start" visibility="hidden"></g><g id="IOS_copy"><path d="M157.98774,89.44c-5.504,0 -11.008,2.064 -14.792,6.192l-2.408,2.408l-4.816,4.816v0l-37.496,37.84c-1.376,1.376 -2.064,2.752 -2.752,4.472l-5.848,20.64c-1.032,3.44 0,7.568 2.408,9.976c2.064,2.064 4.816,3.096 7.568,3.096c1.032,0 1.72,0 2.752,-0.344l20.64,-5.504c1.72,-0.344 3.44,-1.376 4.472,-2.752l43.688,-43.344c0.688,-0.688 1.032,-1.376 1.376,-2.064c7.912,-8.256 7.912,-21.328 0,-29.584c-3.784,-3.784 -9.288,-5.848 -14.792,-5.848z"></path></g></g></g></g></svg>
                                        </a>
                                        <a class="custom-button" href={{ route('admin.add_user') }}  title="remove category">
                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0 0 172 172" style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><path d="M43,172c-23.74824,0 -43,-19.25176 -43,-43v-86c0,-23.74824 19.25176,-43 43,-43h86c23.74824,0 43,19.25176 43,43v86c0,23.74824 -19.25176,43 -43,43z" fill="#e74c3c"></path><g id="original-icon" fill="#ffffff" opacity="0" visibility="hidden"><path d="M54.696,119.712h77.056v-89.096h-77.056c-7.96709,0 -14.448,6.48091 -14.448,14.448v82.87847c0,7.41213 6.48091,13.44153 14.448,13.44153h77.056v-4.816h-77.056c-5.22047,0 -9.632,-3.95063 -9.632,-8.62553c0,-4.61847 4.23281,-8.23047 9.632,-8.23047zM59.512,51.084c0,-0.66784 0.53616,-1.204 1.204,-1.204h52.976c0.66784,0 1.204,0.53616 1.204,1.204v12.04c0,0.66784 -0.53616,1.204 -1.204,1.204h-52.976c-0.66784,0 -1.204,-0.53616 -1.204,-1.204z"></path></g><g id="subtracted-icon" fill="#ffffff"><path d="M45.064,127.94247c0,4.67491 4.41153,8.62553 9.632,8.62553h41.63681c-0.00853,0.34301 -0.01281,0.68703 -0.01281,1.032c0,1.27521 0.0586,2.5374 0.17325,3.784h-41.79725c-7.96709,0 -14.448,-6.02941 -14.448,-13.44153v-82.87847c0,-7.96709 6.48091,-14.448 14.448,-14.448h77.056l0,66.11994c-13.79692,1.97839 -25.4489,10.84588 -31.32951,22.97606h-45.72649c-5.39919,0 -9.632,3.612 -9.632,8.23047zM59.512,63.124c0,0.66784 0.53616,1.204 1.204,1.204h52.976c0.66784,0 1.204,-0.53616 1.204,-1.204v-12.04c0,-0.66784 -0.53616,-1.204 -1.204,-1.204h-52.976c-0.66784,0 -1.204,0.53616 -1.204,1.204z"></path></g><g><g fill="#ffffff"><g id="Слой_2" font-family="Inter, sans-serif" font-weight="400" font-size="16" text-anchor="start" visibility="hidden"></g><g id="Android_x5F_4" font-family="Inter, sans-serif" font-weight="400" font-size="16" text-anchor="start" visibility="hidden"></g><g id="Android_x5F_5" font-family="Inter, sans-serif" font-weight="400" font-size="16" text-anchor="start" visibility="hidden"></g><g id="Windows_x5F_8" font-family="Inter, sans-serif" font-weight="400" font-size="16" text-anchor="start" visibility="hidden"></g><g id="Windows_x5F_10" font-family="Inter, sans-serif" font-weight="400" font-size="16" text-anchor="start" visibility="hidden"></g><g id="Color" font-family="Inter, sans-serif" font-weight="400" font-size="16" text-anchor="start" visibility="hidden"></g><g id="IOS" font-family="Inter, sans-serif" font-weight="400" font-size="16" text-anchor="start" visibility="hidden"></g><g id="IOS_copy"><path d="M158.24,144.48h-41.28v-13.76h41.28zM172,137.6c0,-18.92 -15.48,-34.4 -34.4,-34.4c-18.92,0 -34.4,15.48 -34.4,34.4c0,18.92 15.48,34.4 34.4,34.4c18.92,0 34.4,-15.48 34.4,-34.4zM165.12,137.6c0,15.136 -12.384,27.52 -27.52,27.52c-15.136,0 -27.52,-12.384 -27.52,-27.52c0,-15.136 12.384,-27.52 27.52,-27.52c15.136,0 27.52,12.384 27.52,27.52z"></path></g></g><g fill="#000000" opacity="0"><g id="IOS" font-family="Inter, sans-serif" font-weight="400" font-size="16" text-anchor="start" visibility="hidden"></g><g id="IOS_copy"><path d="M137.6,178.88c22.704,0 41.28,-18.576 41.28,-41.28c0,-22.704 -18.576,-41.28 -41.28,-41.28c-22.704,0 -41.28,18.576 -41.28,41.28c0,22.704 18.576,41.28 41.28,41.28z"></path></g></g></g></g></svg>
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
