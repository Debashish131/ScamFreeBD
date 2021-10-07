@extends('Admin.AdminMaster')
@section('title','Scam Report List')
@push('css')
    <link href="assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet"/>
@endpush


@section('maincontent')
    <div class="page-wrapper">
        <div class="page-content">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">

                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Victim Name</th>
                                <th>Victim Number</th>
                                <th>Fraud Name</th>
                                <th>Fraud Number</th>
                                <th>Screenshot</th>
                                <th>Identity</th>
                                <th>Date</th>
                                <th>Summary</th>
                                <th>Status</th>
                                <th>Action</th>
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
                                    <td><img src="categorypic/{{$val['Screenshot']}}" alt="No image found"
                                             height="80"
                                             width="80"></td>
                                    <td>{{$val->identify}}</td>
                                    <td>{{\Carbon\Carbon::parse($val['created_at'])->diffForHumans()}}</td>
                                    <td>{{$val->summary}}</td>

                                    @if($val->Is_approve==0)
                                        <td><span style="color: #bd2130">Pending</span></td>
                                    @else
                                        <td><span style="color: #00b300">Solved</span></td>
                                    @endif
                                    <td>
                                        <div class="d-flex order-actions">
                                            <a href="/scamEdit{{$val->id}}" class=""><i
                                                    class='bx bxs-edit text-primary'></i></a>

                                            <a href="/scamApprove{{$val->id}}" class="ms-3"><i
                                                    class='fadeIn animated bx bx-check text-success'></i></a>
                                            &nbsp; &nbsp;
                                            <a href="/ScamDelete{{$val->id}}" class=""
                                               onclick="return confirm('Are you sure?')"><i
                                                    class='bx bxs-trash text-danger'></i></a>
                                        </div>
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
