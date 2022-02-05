@extends('admin.master_layout')

@section('pageTitle', 'Add Category')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"> {{ "🔹 Add Category" }} </h1>
    </div>

    <!-- Content -->
    <div class="row justify-content-center">

        <div class="col-xl-5 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div >
                        <div >
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Fill in category's informations:</h1>
                                </div>
                                <form class="user">
                                    <div class="form-group">
                                        <input type="category_name" class="form-control form-control-user"
                                            id="category_name"
                                            placeholder="Category name">
                                    </div>
                                    <nav class="navbar navbar-expand navbar-light bg-light mb-4">
                                        <span>Parent category</span>
                                        <ul class="navbar-nav ml-auto">
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" id="parent_category"
                                                    role="button" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    Choose
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right animated--grow-in"
                                                    aria-labelledby="parent_category">
                                                    @foreach(range(1, 5) as $i)
                                                        <a class="dropdown-item" href="#"> {{ 'Category' . $i }} </a>
                                                    @endforeach
                                                </div>
                                            </li>
                                        </ul>
                                    </nav>

                                    <a href="#" class="btn btn-primary btn-user btn-block">
                                        ADD THIS CATEGORY
                                    </a>
                                    <hr>
                                    
                                </form>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
@endsection
