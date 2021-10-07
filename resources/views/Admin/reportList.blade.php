@extends('Admin.AdminMaster')
@section('title','Report List')
@push('css')
    <link href="assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet"/>
@endpush
@section('maincontent')
    <div class="page-wrapper">
        <div class="page-content">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">

                        <br>
                        <table id="example" class="table table-striped table-bordered" style="width:100%">

                            <thead>
                            <tr>
                                <th>Problem Type</th>
                                <th>Subject</th>
                                <th>Describe Shortly</th>
                                <th>User</th>


                            </tr>
                            </thead>
                            <tbody>
                            @foreach($report as $val)
                                <tr>
                                    <td>{{$val->problem_type}}</td>
                                    <td>{{$val->subject}}</td>
                                    <td>{{$val->describe}}</td>
                                    <td>{{$val->creator}}</td>

                                    {{--                                    @if($val->Is_approve==0)--}}
                                    {{--                                        <td><span style="color: #bd2130">Pending</span></td>--}}
                                    {{--                                    @else--}}
                                    {{--                                        <td><span style="color: #00b300">Approve</span></td>--}}
                                    {{--                                    @endif--}}

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
                $('#example').DataTable();
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
