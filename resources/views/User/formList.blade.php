@extends('frontend.app')
@section('title','List')
@push('css')
    <link href="assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet"/>
@endpush
@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <div class="card">
{{--                @if ($message = Session::get('success'))--}}

{{--                    <div class="alert alert-success alert-block">--}}

{{--                        <button type="button" class="close" data-dismiss="alert">×</button>--}}

{{--                        <strong>{{ $message }}</strong>--}}

{{--                    </div>--}}

{{--                @endif--}}
                <div class="card-body">
                    <div class="table-responsive">
                        {{--                        <div class="ms-auto"><a href="/form" class="btn btn-primary radius-30 mt-2 mt-lg-0"><i class="bx bxs-plus-square"></i>Add New</a></div>--}}

                        <br>
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>প্রতরনার শিকার</th>
                                <th>নাম্বার</th>
                                <th>প্রতারণাকারীর নাম</th>
                                <th>প্রতারণাকারীর নাম্বার</th>
                                <th>প্রতারণাকারীর পরিচয়</th>
                                <th>স্ক্রিনশট</th>
                                <th>প্রতরনা শিকার</th>
                                <th>ঘটনার সারাংশ</th>
                                <th>স্ট্যাটাস</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($form as $val)
                                <tr>
                                    <td>{{$val->id}}</td>
                                    <td>{{$val->VictimName}}</td>
                                    <td>{{$val->VictimNumber}}</td>
                                    <td>{{$val->FraudName}}</td>
                                    <td>{{$val->FraudNumber}}</td>
                                    <td>{{$val->identify}}</td>
                                    <td><img src="categorypic/{{$val['Screenshot']}}" alt="No image found"
                                             height="80"
                                             width="80"></td>
                                    <td>{{\Carbon\Carbon::parse($val['created_at'])->diffForHumans()}}</td>
{{--                                    <td>{{\Carbon\Carbon::parse($val['time'])->diffForHumans()}}</td>--}}
                                    <td>{{$val->summary}}</td>
                                    @if($val->Is_approve==0)
                                        <td><span style="color: #bd2130">Pending</span></td>
                                    @else
                                        <td><span style="color: #00b300">Approve</span></td>
                                    @endif

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
    @push('js')
        <script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
        <script src="assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
        <script>
            $(document).ready(function () {
                $('#example').DataTable(
                    { "order": [[ 0, "desc" ]]}
                );
            });
        </script>
        <script>
            $(document).ready(function () {
                var table = $('#example2').DataTable({
                    lengthChange: false,
                    buttons: ['copy', 'excel', 'pdf', 'print']
                });

                table.buttons().container()
                    .appendTo('#example2_wrapper .col-md-6:eq(0)');
            });
        </script>

    @endpush
@endsection
