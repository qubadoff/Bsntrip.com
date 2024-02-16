@extends('frontend.layouts.app')

@section('title', __("Add Business"))

@section('content')
    <div class="inner-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-content text-center">
                        <h1>
                            {{__("Enter your Business details and send.")}}
                        </h1>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="job-post-area pt-120 mb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-wrapper">
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-inner mb-25">
                                        <label for="jobtitle">Job Title*</label>
                                        <div class="input-area">
                                            <img src="assets/images/icon/company-2.svg" alt>
                                            <input type="text" id="jobtitle" name="jobtitle" placeholder="Senior UI/UX Engineer">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-inner mb-25">
                                        <label>Job Category*</label>
                                        <div class="input-area">
                                            <img src="assets/images/icon/category-2.svg" alt>
                                            <select class="select1">
                                                <option value="0">UI/UX Designer</option>
                                                <option value="1">Font End Developer</option>
                                                <option value="2">Next Js</option>
                                                <option value="4">Laravel Devloper</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-inner mb-25">
                                        <label for="vacancies">Vacancies*</label>
                                        <div class="input-area">
                                            <img src="assets/images/icon/user-2.svg" alt>
                                            <input type="text" id="vacancies" name="vacancies" placeholder="07 Person">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-inner">
                                        <div class="salary-wrap">
                                            <label class="label">Budget/Salary*</label>
                                            <div class="salery-select-area">
                                                <div class="single-salery">
                                                    <input class="form-check-input" type="radio" id="fixedPrice1" name="showInputBox" value="fixedPrice" checked>
                                                    <label for="fixedPrice1">Fixed Salary</label><br>
                                                </div>
                                                <div class="single-salery">
                                                    <input class="form-check-input" type="radio" id="rangePrice1" name="showInputBox" value="rangePrice">
                                                    <label for="rangePrice1">Salary Range</label><br>
                                                </div>
                                                <div class="single-salery">
                                                    <input class="form-check-input" type="radio" id="negotiable1" name="showInputBox" value="negotiable">
                                                    <label for="negotiable1">Negotiable</label><br>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="input-area  mb-25" id="fixedPrice">
                                                    <img src="assets/images/icon/salary-2.svg" alt>
                                                    <input type="text" name="job_fixed_price" placeholder="Salary" />
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div id="rangePrice" style="display: none;">
                                                    <div class="row">
                                                        <div class="col-lg-6 mb-25">
                                                            <div class="input-area">
                                                                <img src="assets/images/icon/salary-2.svg" alt>
                                                                <input type="text" name="job_range_price_one" placeholder="Max Salary" />
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="input-area">
                                                                <img src="assets/images/icon/salary-2.svg" alt>
                                                                <input type="text" name="job_range_price_two" placeholder="Min Salary" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-inner mb-25">
                                        <label>Job Type*</label>
                                        <div class="input-area">
                                            <img src="assets/images/icon/company-2.svg" alt>
                                            <select class="select1">
                                                <option value="0">Full Time</option>
                                                <option value="1">Part Time</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-inner mb-25">
                                        <label for="experiences">Experience Level*</label>
                                        <div class="input-area">
                                            <img src="assets/images/icon/email-2.svg" alt>
                                            <input type="text" id="experiences" name="experiences" placeholder="Type Experiences">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-inner select-jobtag mb-25">
                                        <label>Job Tag*</label>
                                        <div class="input-area">
                                            <img src="assets/images/icon/search-2.svg" alt>

                                            <select class="js-example-basic-multiple" data-placeholder="Select an option">
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-inner mb-25">
                                        <label for="datepicker9">Deadline*</label>
                                        <div class="input-area">
                                            <img src="assets/images/icon/calender2.svg" alt>
                                            <input type="text" id="datepicker9" name="deadline" placeholder="MM/DD/YY">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-inner mb-30">
                                        <label for="summernote1">Job Description*</label>
                                        <textarea name="editordata" id="summernote1" placeholder="Something Write Yourself...."></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-agreement form-inner d-flex justify-content-between flex-wrap">
                                        <div class="form-group two">
                                            <input type="checkbox" id="html">
                                            <label for="html">Here, I accepted company terms & conditions.</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-inner">
                                        <button class="primry-btn-2 lg-btn w-unset" type="submit">Post Now</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
