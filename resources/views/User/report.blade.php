@extends('frontend.app')
@section('title','Report/Support')
@push('css')

@endpush
@section('content')
    <div class="page-wrapper">
        <div class="page-content">


            <div class="card border-top border-0 border-5 border-danger">
                <div class="card-body p-5">
                    <div class="card-title d-flex align-items-center">
                        <div><i class="bx bxs-user me-1 font-22 text-danger"></i>
                        </div>
                        <h5 class="mb-0 text-danger">Report</h5>
                    </div>

                    <hr>
                    <form action="/saveReport" method="POST" class="row g-3" enctype="multipart/form-data">
                        @csrf

                        <div class="col-12">
                            <label for="problem_type" class="form-label">Problem Type</label>
                            <div class="input-group"><span class="input-group-text bg-transparent"><i
                                        class='bx bxs-pointer text-danger'></i></span>
                                <select class="form-control border-start-0" aria-label="Default select" name="problem_type"
                                        required>
                                    <option selected disabled>Select</option>
                                    <option value="Input Wrong Information">Accident input Wrong Information</option>
                                    <option value="Report a bug">Report a bug</option>
                                    <option value="Other">Other</option>

                                </select>
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="subject" class="form-label">Subject</label>
                            <div class="input-group"><span class="input-group-text bg-transparent"><i
                                        class='bx bxs-phone text-primary'></i></span>
                                <input type="text" class="form-control border-start-0" id="subject"
                                       name="subject" placeholder="Write problem problem Shortly"/>
                            </div>
                        </div>



                        <div class="col-12">
                            <label for="describe" class="form-label">Describe issue</label>
                            <textarea class="form-control" id="describe" name="describe"
                                      placeholder="Describe the problem Shortly"
                                      rows="3"></textarea>
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-primary px-5">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
