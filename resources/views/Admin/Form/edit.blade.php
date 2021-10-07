@extends('Admin.AdminMaster')
@section('maincontent')
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
                    <form action="/updateScamData{{$form->id}}" method="POST" class="row g-3">
                        @csrf

                        <div class="col-md-12">
                            <label for="VictimName" class="form-label">প্রতরনার শিকার ব্যাক্তির নাম</label>
                            <div class="input-group"><span class="input-group-text bg-transparent"><i
                                        class='bx bxs-user text-primary'></i></span>
                                <input type="text" class="form-control border-start-0"
                                       id="VictimName" name="VictimName" value="{{$form->VictimName}}"
                                       placeholder="প্রতরনার শিকার ব্যাক্তির নাম"/>
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="VictimNumber" class="form-label">প্রতরনার শিকার ব্যক্তির নাম্বার</label>
                            <div class="input-group"><span class="input-group-text bg-transparent"><i
                                        class='bx bxs-phone text-primary'></i></span>
                                <input type="text" class="form-control border-start-0" id="VictimNumber"
                                       name="VictimNumber" value="{{$form->VictimNumber}}"
                                       placeholder="প্রতরনার শিকার ব্যক্তির নাম্বার লিখুন"/>
                            </div>
                        </div>


                        <div class="col-12">
                            <label for="FraudName" class="form-label">প্রতারণাকারী ব্যক্তির নাম (যদি জানা
                                থাকে)</label>
                            <div class="input-group"><span class="input-group-text bg-transparent"><i
                                        class='bx bxs-user-detail text-danger'></i></span>
                                <input type="text" class="form-control border-start-0" id="FraudName"
                                       name="FraudName" value="{{$form->FraudName}}"
                                       placeholder="প্রতারণাকারী ব্যক্তির নাম লিখুন"/>
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="FraudNumber" class="form-label">প্রতারণাকারী ব্যক্তির নাম্বার</label>
                            <div class="input-group"><span class="input-group-text bg-transparent"><i
                                        class='bx bxs-phone-incoming text-danger'></i></span>
                                <input type="text" class="form-control border-start-0" id="FraudNumber"
                                       name="FraudNumber" value="{{$form->FraudNumber}}"
                                       placeholder="প্রতারণাকারী ব্যক্তির নাম্বার লিখুন"/>
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
@endsection
