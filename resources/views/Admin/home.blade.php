@extends('Admin.AdminMaster')
@section('title','Admin Dashboard')

@section('maincontent')
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
                <div class="col">
                    <div class="card radius-10 overflow-hidden">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0">Total User</p>
                                    <h5 class="mb-0">{{$count = \App\User::all()->count()+50}}</h5>
                                </div>
                                <div class="ms-auto">	<i class='bx bx-user font-30'></i>
                                </div>
                            </div>
                        </div>
                        <div class="" id="w-chart4"></div>
                    </div>
                </div>
                <div class="col">
                    <div class="card radius-10 overflow-hidden">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0">Total Complain </p>
                                    <h5 class="mb-0">{{$count = \App\Form::all()->count()+20}}</h5>
                                </div>
                                <div class="ms-auto">	<i class='bx bx-list-check font-30'></i>
                                </div>
                            </div>
                        </div>
                        <div class="" id="w-chart6"></div>
                    </div>
                </div>
                <div class="col">
                    <div class="card radius-10 overflow-hidden">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0">Pending Complain</p>
                                    <h5 class="mb-0">{{$count = \App\Form::where('Is_approve', '=', 0)->count()}}</h5>
                                </div>
                                <div class="ms-auto">	<i class='bx bx-bulb font-30'></i>
                                </div>
                            </div>
                        </div>
                        <div class="" id="w-chart2"></div>
                    </div>
                </div>
                <div class="col">
                    <div class="card radius-10 overflow-hidden">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0">Comments</p>
                                    <h5 class="mb-0">869</h5>
                                </div>
                                <div class="ms-auto">	<i class='bx bx-chat font-30'></i>
                                </div>
                            </div>
                        </div>
                        <div class="" id="w-chart8"></div>
                    </div>
                </div>
{{--                <div class="col-lg-12">--}}
{{--                    <div class="card radius-10">--}}
{{--                        <div class="card-body">--}}
{{--                            <div class="d-flex align-items-center">--}}
{{--                                <div>--}}
{{--                                    <p class="mb-0 text-secondary">Store Visitors</p>--}}
{{--                                    <h4 class="my-1">59K</h4>--}}
{{--                                    <p class="mb-0 font-13 text-danger"><i class='bx bxs-down-arrow align-middle'></i>12.4% Since last week</p>--}}
{{--                                </div>--}}
{{--                                <div class="widgets-icons bg-light-danger text-danger ms-auto"><i class='bx bxs-binoculars'></i>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div id="chart3"></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
            <!--end row-->


            <div class="row row-cols-1 row-cols-lg-3">
                <div class="col d-flex">
                    <div class="card radius-10 w-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <h5 class="mb-0">Top Categories</h5>
                                </div>
                                <div class="font-22 ms-auto"><i class='bx bx-dots-horizontal-rounded'></i>
                                </div>
                            </div>
                            <div class="mt-5" id="chart15"></div>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex bg-transparent justify-content-between align-items-center">Kids <span class="badge bg-success rounded-pill">50</span>
                            </li>
                            <li class="list-group-item d-flex bg-transparent justify-content-between align-items-center">Women <span class="badge bg-danger rounded-pill">10</span>
                            </li>
                            <li class="list-group-item d-flex bg-transparent justify-content-between align-items-center">Men <span class="badge bg-primary rounded-pill">65</span>
                            </li>
                            <li class="list-group-item d-flex bg-transparent justify-content-between align-items-center">Furniture <span class="badge bg-warning text-dark rounded-pill">14</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col d-flex">
                    <div class="card radius-10 w-100">
                        <div class="card-body">
                            <p class="font-weight-bold mb-1 text-secondary">Visitors</p>
                            <div class="d-flex align-items-center">
                                <div>
                                    <h4 class="mb-0">43,540</h4>
                                </div>
                                <div class="">
                                    <p class="mb-0 align-self-center font-weight-bold text-success ms-2">4.4 <i class='bx bxs-up-arrow-alt mr-2'></i>
                                    </p>
                                </div>
                            </div>
                            <div id="chart21"></div>
                        </div>
                    </div>
                </div>
                <div class="col d-flex">
                    <div class="card radius-10 w-100 overflow-hidden">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <h5 class="mb-0">Sales Overiew</h5>
                                </div>
                                <div class="font-22 ms-auto"><i class='bx bx-dots-horizontal-rounded'></i>
                                </div>
                            </div>
                            <div class="mt-5" id="chart20"></div>
                        </div>
                        <div class="card-footer bg-transparent border-top-0">
                            <div class="d-flex align-items-center justify-content-between text-center">
                                <div>
                                    <h6 class="mb-1 font-weight-bold">$289.42</h6>
                                    <p class="mb-0 text-secondary">Last Week</p>
                                </div>
                                <div class="mb-1">
                                    <h6 class="mb-1 font-weight-bold">$856.14</h6>
                                    <p class="mb-0 text-secondary">Last Month</p>
                                </div>
                                <div>
                                    <h6 class="mb-1 font-weight-bold">$987,25</h6>
                                    <p class="mb-0 text-secondary">Last Year</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->

        </div>
    </div>
    <!--end page wrapper -->
    @push('js')
        <script src="assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
{{--        <script src="assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>--}}


        {{--Widgets--}}
        <script src="assets/js/widgets.js"></script>
        {{--Widgets END--}}


        <script src="assets/plugins/jquery-knob/excanvas.js"></script>
        <script src="assets/plugins/jquery-knob/jquery.knob.js"></script>
        <script>
            $(function() {
                $(".knob").knob();
            });
        </script>
    @endpush

@endsection
