@extends('guest.master_layout')

@section('pageTitle', 'Landing')
@section('content')
@foreach(range(1, 5) as $i)
            <div class="py-0">
                <div class="container">
                    <div class="half-post-entry d-block d-lg-flex bg-light">
                    {{-- <div class="img-bg" style="background-image: url('ui_resources/meranda-master/images/big_img_1.jpg')"></div> --}}
                    <div class="contents">
                        <h2><a href="blog-single.html"> {{ "Post Title " . $i }} </a></h2>
                        
                        <div class="post-meta">
                        <span class="d-block"><a href="#"> {{ "Author " . $i }} </a> in <a href="#"> {{ "Category" .$i }} </a></span>
                        <span class="date-read"><span class="mx-1">&bullet;</span> Jun 14 </span>
                        </div>

                    </div>
                    </div>
                </div>
            </div>
            <br>
@endforeach

@endsection