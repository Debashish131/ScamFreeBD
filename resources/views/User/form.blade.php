@extends('frontend.app')
@section('title','Form')
@push('css')
    <link href="assets/plugins/datetimepicker/css/classic.css" rel="stylesheet"/>
    <link href="assets/plugins/datetimepicker/css/classic.time.css" rel="stylesheet"/>
    <link href="assets/plugins/datetimepicker/css/classic.date.css" rel="stylesheet"/>
    <link rel="stylesheet"
          href="assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.min.css">


@endpush
@section('content')


    <div class="page-wrapper">
        <div class="page-content">


            <div class="card border-top border-0 border-5 border-danger">
                <div class="card-body p-5">
                    <div class="card-title d-flex align-items-center">
                        <div><i class="bx bxs-user me-1 font-22 text-danger"></i>
                        </div>
                        <h5 class="mb-0 text-danger">প্রতরণাকারীর তথ্য প্রদান করুন</h5>
                    </div>

                    <hr>
                    <form action="/storeData" method="POST" class="row g-3" enctype="multipart/form-data">
                        @csrf

                        <div class="col-md-12">
                            <label for="VictimName" class="form-label">প্রতরনার শিকার ব্যাক্তির নাম</label>
                            <div class="input-group"><span class="input-group-text bg-transparent"><i
                                        class='bx bxs-user text-primary'></i></span>
                                <input type="text" class="form-control border-start-0"
                                       id="VictimName" name="VictimName"
                                       placeholder="প্রতরনার শিকার ব্যাক্তির নাম"/>
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="VictimNumber" class="form-label">প্রতরনার শিকার ব্যক্তির নাম্বার</label>
                            <div class="input-group"><span class="input-group-text bg-transparent"><i
                                        class='bx bxs-phone text-primary'></i></span>
                                <input type="text" class="form-control border-start-0" id="VictimNumber"
                                       name="VictimNumber" placeholder="প্রতরনার শিকার ব্যক্তির নাম্বার লিখুন"/>
                            </div>
                        </div>


                        <div class="col-12">
                            <label for="FraudName" class="form-label">প্রতারণাকারী ব্যক্তির নাম (যদি জানা
                                থাকে)</label>
                            <div class="input-group"><span class="input-group-text bg-transparent"><i
                                        class='bx bxs-user-detail text-danger'></i></span>
                                <input type="text" class="form-control border-start-0" id="FraudName"
                                       name="FraudName" placeholder="প্রতারণাকারী ব্যক্তির নাম লিখুন"/>
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="FraudNumber" class="form-label">প্রতারণাকারী ব্যক্তির নাম্বার</label>
                            <div class="input-group"><span class="input-group-text bg-transparent"><i
                                        class='bx bxs-phone-incoming text-danger'></i></span>
                                <input type="text" class="form-control border-start-0" id="FraudNumber"
                                       name="FraudNumber" placeholder="প্রতারণাকারী ব্যক্তির নাম্বার লিখুন"/>
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="identify" class="form-label">প্রতারণাকারী কি পরিচয়ে ফোন দিয়েছিলো?</label>
                            <div class="input-group"><span class="input-group-text bg-transparent"><i
                                        class='bx bxs-pointer text-danger'></i></span>
                                <select class="form-control border-start-0" aria-label="Default select" name="identify"
                                        required>
                                    <option selected disabled>নির্বাচন করুন</option>
                                    <option value="বিকাশ">বিকাশ</option>
                                    <option value="রকেট">রকেট</option>
                                    <option value="নগদ">নগদ</option>
                                    <option value="ব্যাংক">ব্যাংক</option>
                                    <option value="অন্যান্য">অন্যান্য</option>
                                </select>
                            </div>
                        </div>


                        <div class="col-12">
                            <label for="Screenshot" class="form-label">কথা বলার সময় স্ক্রিনশট (যদি থাকে)</label>
                            <div class="input-group"><span class="input-group-text bg-transparent"><i
                                        class='bx bxs-file text-danger'></i></span>
                                <input type="file" class="form-control border-start-0" id="Screenshot"
                                       name="Screenshot" placeholder="কথা বলার সময় স্ক্রিনশট (যদি থাকে)"/>
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="date" class="form-label">প্রতরনা শিকার এর দিন</label>
                            <div class="input-group"><span class="input-group-text bg-transparent"><i
                                        class='bx bxs-calendar text-danger'></i></span>
                                <input type="date" class="form-control" name="date"/>
                            </div>
                        </div>

                                                <div class="col-12">
                                                    <label for="time" class="form-label">সময় (আনুমানিক)</label>
                                                    <div class="input-group"><span class="input-group-text bg-transparent"><i
                                                                class='bx bxs-time text-danger'></i></span>
                                                        <input type="text" class="form-control timepicker" name="time"/>
                                                    </div>
                                                </div>



                        <div class="col-12">
                            <label for="summary" class="form-label">ঘটনার সারাংশ</label>
                            <textarea class="form-control" id="summary" name="summary"
                                      placeholder="প্রতারনার ঘটনাটি সংক্ষেপে লিখুন"
                                      rows="3"></textarea>
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck2">
                                <label class="form-check-label" for="gridCheck2">উপরের তথ্য সত্য</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-success px-5">জমা দিন</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>


    @push('js')
        <script src="assets/plugins/datetimepicker/js/legacy.js"></script>
        <script src="assets/plugins/datetimepicker/js/picker.js"></script>
        <script src="assets/plugins/datetimepicker/js/picker.time.js"></script>
        <script src="assets/plugins/datetimepicker/js/picker.date.js"></script>
        <script src="assets/plugins/bootstrap-material-datetimepicker/js/moment.min.js"></script>
        <script
            src="assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.min.js"></script>
        <script>
            $('.datepicker').pickadate({
                selectMonths: true,
                selectYears: true
            }),
                $('.timepicker').pickatime()
        </script>
        <script>
            $(function () {
                $('#date-time').bootstrapMaterialDatePicker({
                    format: 'YYYY-MM-DD HH:mm'
                });
                $('#date').bootstrapMaterialDatePicker({
                    time: true
                });
                $('#time').bootstrapMaterialDatePicker({
                    date: true,
                    format: 'HH:mm'
                });
            });
        </script>

        <script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker();
            });
        </script>

    @endpush
@endsection
