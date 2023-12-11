@extends('user.layout.app')

@section('title', 'Add Employee | Vidhi Logistics')
@section('content')

<!-- Multi Column with Form Separator -->
<div class="card mb-4">
    <h5 class="card-header">Personal Details</h5>
    <form class="card-body" id="form_id" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="row g-3">
            <div class="col-md-6">
                <div class="mb-3">
                    <div class="form-floating">
                        <input type="text" name="emp_name" class="form-control" id="floatingInput"
                            placeholder="Name of Employees" aria-describedby="floatingInputHelp" />
                        <label for="floatingInput">Name</label>
                    </div>
                    <p class="error text-danger" id="emp_name_error"></p>
                </div>
                <div class="mb-3">
                    <div class="form-floating">
                        <input type="text" name="email" class="form-control" id="floatingInput" placeholder="E-Mail Id"
                            aria-describedby="floatingInputHelp" />
                        <label for="floatingInput">Email</label>
                    </div>
                    <p class="error text-danger" id="email_error"></p>
                </div>
                <div class="mb-3">
                    <div class="form-floating">
                        <input type="text" name="mobile_number" class="form-control" id="floatingInput"
                            placeholder="Mobile Number" aria-describedby="floatingInputHelp" />
                        <label for="floatingInput">Mobile Number</label>
                    </div>
                    <p class="error text-danger" id="mobile_number_error"></p>

                </div>
                <div class="mb-3">
                    <div class="form-floating">
                        <input type="text" name="employee_id" class="form-control" id="floatingInput"
                            placeholder="Employee Id" aria-describedby="floatingInputHelp" />
                        <label for="floatingInput">Employee Id</label>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-floating">
                        <input type="text" name="identification" class="form-control" id="floatingInput"
                            placeholder="Identification" aria-describedby="floatingInputHelp" />
                        <label for="floatingInput">Identification</label>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-floating">
                        <input type="text" name="religion" class="form-control" id="floatingInput"
                            placeholder="Religion" aria-describedby="floatingInputHelp" />
                        <label for="floatingInput">Religion</label>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-floating">
                        <input type="text" name="aadhar_number" class="form-control" id="floatingInput"
                            placeholder="Aadhar Number" aria-describedby="floatingInputHelp" />
                        <label for="floatingInput">Aadhar Number</label>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-floating">
                        <input type="text" name="pan_number" class="form-control" id="floatingInput"
                            placeholder="Pancard Number" aria-describedby="floatingInputHelp" />
                        <label for="floatingInput">Pancard Number</label>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-floating">
                        <input type="text" name="passport_number" class="form-control" id="floatingInput"
                            placeholder="Passport Number" aria-describedby="floatingInputHelp" />
                        <label for="floatingInput">Passport Number</label>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-floating">
                        <input type="text" name="voter_number" class="form-control" id="floatingInput"
                            placeholder="Voter Id Number" aria-describedby="floatingInputHelp" />
                        <label for="floatingInput">Voter Id Number</label>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-floating">
                        <input type="text" name="driving_licence_number" class="form-control" id="floatingInput"
                            placeholder="Driving Licence Number" aria-describedby="floatingInputHelp" />
                        <label for="floatingInput">Driving Licence Number</label>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-floating">
                        <input type="text" name="pf_member_id" class="form-control" id="floatingInput"
                            placeholder="PF Member ID" aria-describedby="floatingInputHelp" />
                        <label for="floatingInput">PF Member ID</label>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-floating">
                        <input type="text" name="uan_number" class="form-control" id="floatingInput"
                            placeholder="UAN Number" aria-describedby="floatingInputHelp" />
                        <label for="floatingInput">UAN Number</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="defaultSelect" class="form-label">Gender</label>
                    <select id="defaultSelect" class="form-select" name="gender">
                        <option selected value="">Select</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
                <div class="mb-3">
                    <div class="form-floating">
                        <input type="text" name="caste" class="form-control" id="floatingInput" placeholder="Caste"
                            aria-describedby="floatingInputHelp" />
                        <label for="floatingInput">Caste</label>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-floating">
                        <input type="text" name="sub_caste" class="form-control" id="floatingInput"
                            placeholder="sub Caste" aria-describedby="floatingInputHelp" />
                        <label for="floatingInput">Sub Caste</label>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-floating">
                        <input type="text" name="blood_group" class="form-control" id="floatingInput"
                            placeholder="Blood Group" aria-describedby="floatingInputHelp" />
                        <label for="floatingInput">Blood Group</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="flatpickr-date" class="form-label">Birth Date</label>
                        <input type="date" class="form-control" name="birth_date" placeholder="YYYY-MM-DD" id="dob"
                            onchange="calculateAge()" />
                    </div>
                    <div class="col-md-6 p-3">
                        <div class="form-floating">
                            <input type="text" name="age" class="form-control" id="year" placeholder="Age"
                                aria-describedby="floatingInputHelp" disabled />
                            <input type="hidden" name="calculated_age" id="calculated_age" />
                            <label for="age-calculate">Age</label>
                        </div>
                    </div>
                </div>
                {{-- <div class="row">
                    <div class="col-md-6">
                        <label for="flatpickr-date" class="form-label">Birth Date</label>
                        <input type="date" class="form-control" name="birth_date" placeholder="YYYY-MM-DD" id="dob1" />
                    </div>
                    <div class="col-md-6 p-3">
                        <div class="form-floating">
                            <input type="text" name="age" class="form-control" id="year1" placeholder="Age"
                                aria-describedby="floatingInputHelp" />
                            <label for="age-calculate">Age</label>
                        </div>
                    </div>
                </div> --}}
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Permanent Address</label>
                    <textarea class="form-control" name="permanent_address" id="exampleFormControlTextarea1"
                        rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Present Address</label>
                    <textarea class="form-control" name="present_address" id="exampleFormControlTextarea1"
                        rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="defaultSelect" class="form-label">Marital Status</label>
                    <select id="defaultSelect" class="form-select" name="marital_status">
                        <option selected value="">Select</option>
                        <option value="single">Single</option>
                        <option value="married">Married</option>
                        <option value="divorced">Divorced</option>
                        <option value="widow">widow</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                <div class="col-md-6 col-12 mb-3">
                    <label for="flatpickr-date" class="form-label">Marriage Date</label>
                    <input type="date" class="form-control flatpickr-date" name="marriage_date" placeholder="YYYY-MM-DD"
                        id="flatpickr-date11" />
                </div>

                <div class="mb-3">
                    <div class="form-floating">
                        <input type="text" name="height" class="form-control" id="floatingInput" placeholder="Height"
                            aria-describedby="floatingInputHelp" />
                        <label for="floatingInput">Height In CM</label>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-floating">
                        <input type="text" name="weight" class="form-control" id="floatingInput" placeholder="weight"
                            aria-describedby="floatingInputHelp" />
                        <label for="floatingInput">weight</label>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-floating">
                        <input type="text" name="emp_designation" class="form-control" id="floatingInput"
                            placeholder="Designation" aria-describedby="floatingInputHelp" />
                        <label for="floatingInput">Designation</label>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-floating">
                        <input type="text" name="department" class="form-control" id="floatingInput"
                            placeholder="Department" aria-describedby="floatingInputHelp" />
                        <label for="floatingInput">Department</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="defaultSelect" class="form-label">Category</label>
                    <select id="defaultSelect" class="form-select" name="category">
                        <option selected value="">Select</option>
                        <option value="direct">Direct</option>
                        <option value="indirect">InDirect</option>
                    </select>
                </div>
                <div class="col-md-6 col-12 mb-3">
                    <label for="flatpickr-date" class="form-label">Date Of Joining</label>
                    <input type="date" class="form-control flatpickr-date" name="date_of_joining"
                        placeholder="YYYY-MM-DD" id="flatpickr-date11" />
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Details of surgical operation
                        undergone</label>
                    <textarea class="form-control" name="details_of_surgical_operation" id="exampleFormControlTextarea1"
                        rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Details of civil or criminal
                        litigation</label>
                    <textarea class="form-control" name="details_of_civil_or_criminal_litigation"
                        id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
            </div>

            <div class="col-md-6">
                <div class="mb-3">
                    <div class="form-floating">
                        <input type="text" name="bank_name" class="form-control" id="floatingInput"
                            placeholder="Bank Name" aria-describedby="floatingInputHelp" />
                        <label for="floatingInput">Bank Name</label>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-floating">
                        <input type="text" name="account_number" class="form-control" id="floatingInput"
                            placeholder="Account Number" aria-describedby="floatingInputHelp" />
                        <label for="floatingInput">Account Number</label>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-floating">
                        <input type="text" name="ifsc_code" class="form-control" id="floatingInput"
                            placeholder="IFSC CODE" aria-describedby="floatingInputHelp" />
                        <label for="floatingInput">IFSC CODE</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Branch Address</label>
                    <textarea class="form-control" name="branch_address" id="exampleFormControlTextarea1"
                        rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Employee Image</label>
                    <input class="form-control" name="emp_image" type="file" />
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Aadhar Card</label>
                    <input class="form-control" name="aadhar_image" type="file" />
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Pan Card</label>
                    <input class="form-control" name="pan_image" type="file" />
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Bank Cheque/Bank Passbook</label>
                    <input class="form-control" name="bank_passbook_image" type="file" />
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Cast Certificate</label>
                    <input class="form-control" name="cast_certificate_image" type="file" />
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Passport</label>
                    <input class="form-control" name="passport_image" type="file" />
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Voter Id</label>
                    <input class="form-control" name="voter_image" type="file" />
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Driving Licence</label>
                    <input class="form-control" name="drg_licence_image" type="file" />
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Rationcard</label>
                    <input class="form-control" name="rationcard_image" type="file" />
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Blood Group</label>
                    <input class="form-control" name="blood_group_image" type="file" />
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">SLC</label>
                    <input class="form-control" name="slc_image" type="file" />
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Salary Slip</label>
                    <input class="form-control" name="salaryslip_image" type="file" />
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Language</label>
                    <textarea class="form-control" name="language" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <div class="form-floating">
                        <input type="text" name="current_salary" class="form-control" id="floatingInput"
                            placeholder="Current Salary" aria-describedby="floatingInputHelp" />
                        <label for="floatingInput">Current Salary</label>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-floating">
                        <input type="text" name="expected_salary" class="form-control" id="floatingInput"
                            placeholder="Expected Salary" aria-describedby="floatingInputHelp" />
                        <label for="floatingInput">Expected Salary</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Reason For Job change</label>
                    <textarea class="form-control" name="reason_for_job_change" id="exampleFormControlTextarea1"
                        rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="defaultSelect" class="form-label">Quality Knowledge</label>
                    <select id="defaultSelect" class="form-select" name="Quality_knowledge">
                        <option selected value="">Select</option>
                        <option value="yes">Yes</option>
                        <option value="no">no</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="defaultSelect" class="form-label">Computer Knowledge</label>
                    <select id="defaultSelect" class="form-select" name="compuer_knowledge">
                        <option selected value="">Select</option>
                        <option value="Ms-office">Ms-Office</option>
                        <option value="AutoCAD">AutoCAD</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
                <div class="mb-3">
                    <div class="form-floating">
                        <input type="text" name="notice_period" class="form-control" id="floatingInput"
                            placeholder="Expected Salary" aria-describedby="floatingInputHelp" />
                        <label for="floatingInput">Notice Period</label>
                    </div>
                </div>
            </div>
            <hr>
            {{-- START ACADEMIC DETAILS --}}
            <div class="col-md-12">
                <div class="mb-4">
                    <h5 class="card-header">Academic Details</h5>
                    <div class="row g-3">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <div class="form-floating">
                                    <input type="text" name="institute_university[]" class="form-control"
                                        id="floatingInput" placeholder="Institute/University"
                                        aria-describedby="floatingInputHelp" />
                                    <label for="floatingInput">Institute/University</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <div class="form-floating">
                                    <input type="text" name="year_of_passing[]" class="form-control" id="floatingInput"
                                        placeholder="Year Of Passing" aria-describedby="floatingInputHelp" />
                                    <label for="floatingInput">Year Of Passing</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <div class="form-floating">
                                    <input type="text" name="marks[]" class="form-control" id="floatingInput"
                                        placeholder="Marks" aria-describedby="floatingInputHelp" />
                                    <label for="floatingInput">Marks</label>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Education Certificate</label>
                                <input class="form-control" name="education_image[]" type="file" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Remarks</label>
                                <textarea class="form-control" name="remarks[]" id="exampleFormControlTextarea1"
                                    rows="1"></textarea>
                            </div>
                        </div>
                        <div class="mt-3 append-academic"></div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-12 col-xl-12 text-end">
                            <a class="btn btn-primary btn-lg" id="add-more-academic"><i
                                    class="fa-solid fa-plus plus-icon-color"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- END ACADEMIC DETAILS --}}
            <hr>
            {{-- START EXPERIENCE DETAILS --}}
            <div class="col-md-12">
                <div class="mb-4">
                    <h5 class="card-header">Experience Details</h5>
                    <div class="row g-3">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <div class="form-floating">
                                    <input type="text" name="company_name[]" class="form-control" id="floatingInput"
                                        placeholder="Company Name" aria-describedby="floatingInputHelp" />
                                    <label for="floatingInput">Company Name</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <div class="form-floating">
                                    <input type="text" name="duration[]" class="form-control" id="floatingInput"
                                        placeholder="Duration" aria-describedby="floatingInputHelp" />
                                    <label for="floatingInput">Duration</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <div class="form-floating">
                                    <input type="text" name="designation[]" class="form-control" id="floatingInput"
                                        placeholder="Designation" aria-describedby="floatingInputHelp" />
                                    <label for="floatingInput">Designation</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Nature Of Work</label>
                                <textarea class="form-control" name="nature_of_work[]" id="exampleFormControlTextarea1"
                                    rows="1"></textarea>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Experience Certificate</label>
                                <input class="form-control" name="experience_certificate_image[]" type="file" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <div class="form-floating">
                                    <input type="text" name="reference[]" class="form-control" id="floatingInput"
                                        placeholder="Reference" aria-describedby="floatingInputHelp" />
                                    <label for="floatingInput">Reference</label>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3 append-experience"></div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-12 col-xl-12 text-end">
                            <a class="btn btn-primary btn-lg" id="add-more-experience"><i
                                    class="fa-solid fa-plus plus-icon-color"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- END EXPERIENCE DETAILS --}}
            <hr>
            {{-- START FAMILY DETAILS --}}
            <div class="col-md-12">
                <div class="mb-4">
                    <h5 class="card-header">Family Details</h5>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <div class="form-floating">
                                    <input type="text" name="fm_name[]" class="form-control" id="floatingInput"
                                        placeholder="Name" aria-describedby="floatingInputHelp" />
                                    <label for="floatingInput">Name</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <div class="form-floating">
                                    <input type="text" name="relation[]" class="form-control" id="floatingInput"
                                        placeholder="Relation" aria-describedby="floatingInputHelp" />
                                    <label for="floatingInput">Relation</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-4">
                                <div class="form-floating">
                                    <input type="text" name="education[]" class="form-control" id="floatingInput"
                                        placeholder="Education" aria-describedby="floatingInputHelp" />
                                    <label for="floatingInput">Education</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Occupation Detail</label>
                                <textarea class="form-control" name="occupation_detail[]"
                                    id="exampleFormControlTextarea1" rows="1"></textarea>
                            </div>
                        </div>
                        <div class="mt-3 append-family"></div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-12 col-xl-12 text-end">
                            <a class="btn btn-primary btn-lg" id="add-more-family"><i class="fa-solid fa-plus plus-icon-color"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- END FAMILY DETAILS --}}
            <hr>
            {{-- START HR DEPARTMENT DETAILS --}}
            <div class="col-md-12">
                <div class="mb-4">
                    <h5 class="card-header">HR Department Details</h5>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <div class="form-floating">
                                    <input type="text" name="offered_salary" class="form-control" id="floatingInput"
                                        placeholder="Offered Salary" aria-describedby="floatingInputHelp" />
                                    <label for="floatingInput">Offered Salary</label>
                                </div>
                                <p class="error text-danger" id="offered_salary_error"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <div class="form-floating">
                                    <input type="text" name="revised_salary" class="form-control" id="floatingInput"
                                        placeholder="Revised Salary" aria-describedby="floatingInputHelp" />
                                    <label for="floatingInput">Revised Salary</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-4">
                                <label for="flatpickr-date" class="form-label">Date Of Revise Salary</label>
                                <input type="date" class="form-control" name="date_of_revise_salary"
                                    placeholder="YYYY-MM-DD" id="flatpickr-date1" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="defaultSelect" class="form-label">Mobile Permission</label>
                                <select id="defaultSelect" class="form-select" name="mobile_permission">
                                    <option selected value="">Select</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="defaultSelect" class="form-label">Job Time</label>
                                <select id="defaultSelect" class="form-select" name="job_time">
                                    <option selected value="">Select</option>
                                    <option value="08:30 To 17:00">08:30 To 17:00</option>
                                    <option value="09:00 To 17:30">09:00 To 17:30</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <div class="form-floating">
                                    <input type="text" name="probation_period" class="form-control" id="floatingInput"
                                        placeholder="Probation Period" aria-describedby="floatingInputHelp" />
                                    <label for="floatingInput">Probation Period</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- END HR DEPARTMENT DETAILS --}}
            <hr>
            {{-- START EMPLOYEE TRAINING HISTORY CARD --}}
            <div class="col-md-12">
                <div class="mb-4">
                    <h5 class="card-header">Employee Training History Card</h5>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <div class="form-floating">
                                    <input type="text" name="training_given_by" class="form-control" id="floatingInput"
                                        placeholder="Training Given By" aria-describedby="floatingInputHelp" />
                                    <label for="floatingInput">Training Given By</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="flatpickr-date" class="form-label">Date Of Training</label>
                                <input type="date" class="form-control" name="date_of_training" placeholder="YYYY-MM-DD"
                                    id="flatpickr-date1" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Description Of
                                    Training</label>
                                <textarea class="form-control" name="description_of_training"
                                    id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Remark</label>
                                <textarea class="form-control" name="remark" id="exampleFormControlTextarea1"
                                    rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- END EMPLOYEE TRAINING HISTORY CARD --}}

        </div>
        <div class="pt-4">
            <button type="submit" class="btn btn-primary me-sm-1">Submit</button>
            {{-- <button type="reset" class="btn btn-label-secondary">Cancel</button> --}}
            <a href="{{ url('/employee-detail') }}" class="btn btn-danger w-sm">Cancel</a>

        </div>
    </form>
</div>

<!-- Clone Academic  -->
<div class="clone-academic" style="display:none">
    <div class="closet-div">
        <div class="col-12 col-sm-12 col-md-6 col-lg-12 col-xl-12 text-end">
            <a class="btn btn-danger btn-lg mb-3" id="delete-academic"><i class="fa-solid fa-trash plus-icon-color"></i></a>
        </div>
        <div class="mb-3">
            <div class="row">
                <div class="col-md-4">
                    <div class="mb-3">
                        <div class="form-floating">
                            <input type="text" name="institute_university[]" class="form-control" id="floatingInput"
                                placeholder="Institute/University" aria-describedby="floatingInputHelp" />
                            <label for="floatingInput">Institute/University</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <div class="form-floating">
                            <input type="text" name="year_of_passing[]" class="form-control" id="floatingInput"
                                placeholder="Year Of Passing" aria-describedby="floatingInputHelp" />
                            <label for="floatingInput">Year Of Passing</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <div class="form-floating">
                            <input type="text" name="marks[]" class="form-control" id="floatingInput"
                                placeholder="Marks" aria-describedby="floatingInputHelp" />
                            <label for="floatingInput">Marks</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-3">
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Education Certificate</label>
                        <input class="form-control" name="education_image[]" type="file" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Remarks</label>
                        <textarea class="form-control" name="remarks[]" id="exampleFormControlTextarea1"
                            rows="1"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Clone Experience  -->
<div class="clone-experience" style="display:none">
    <div class="closet-div-experience">
        <div class="col-12 col-sm-12 col-md-6 col-lg-12 col-xl-12 text-end">
            <a class="btn btn-danger btn-lg mb-3" id="delete-experience"><i class="fa-solid fa-trash plus-icon-color"></i></a>
        </div>
        <div class="mb-3">
            <div class="row">
                <div class="col-md-4">
                    <div class="mb-3">
                        <div class="form-floating">
                            <input type="text" name="company_name[]" class="form-control" id="floatingInput"
                                placeholder="Company Name" aria-describedby="floatingInputHelp" />
                            <label for="floatingInput">Company Name</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <div class="form-floating">
                            <input type="text" name="duration[]" class="form-control" id="floatingInput"
                                placeholder="Duration" aria-describedby="floatingInputHelp" />
                            <label for="floatingInput">Duration</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <div class="form-floating">
                            <input type="text" name="designation[]" class="form-control" id="floatingInput"
                                placeholder="Designation" aria-describedby="floatingInputHelp" />
                            <label for="floatingInput">Designation</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Nature Of Work</label>
                        <textarea class="form-control" name="nature_of_work[]" id="exampleFormControlTextarea1"
                            rows="1"></textarea>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Experience Certificate</label>
                        <input class="form-control" name="experience_certificate_image[]" type="file" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <div class="form-floating">
                            <input type="text" name="reference[]" class="form-control" id="floatingInput"
                                placeholder="Reference" aria-describedby="floatingInputHelp" />
                            <label for="floatingInput">Reference</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Clone Family  -->
<div class="clone-family" style="display:none">
    <div class="closet-div-family">
        <div class="col-12 col-sm-12 col-md-6 col-lg-12 col-xl-12 text-end">
            <a class="btn btn-danger btn-lg mb-3" id="delete-family"><i class="fa-solid fa-trash plus-icon-color"></i></a>
        </div>
        <div class="mb-3">
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <div class="form-floating">
                            <input type="text" name="fm_name[]" class="form-control" id="floatingInput"
                                placeholder="Name" aria-describedby="floatingInputHelp" />
                            <label for="floatingInput">Name</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <div class="form-floating">
                            <input type="text" name="relation[]" class="form-control" id="floatingInput"
                                placeholder="Relation" aria-describedby="floatingInputHelp" />
                            <label for="floatingInput">Relation</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-4">
                        <div class="form-floating">
                            <input type="text" name="education[]" class="form-control" id="floatingInput"
                                placeholder="Education" aria-describedby="floatingInputHelp" />
                            <label for="floatingInput">Education</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Occupation Detail</label>
                        <textarea class="form-control" name="occupation_detail[]" id="exampleFormControlTextarea1"
                            rows="1"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Clone Family  -->

@endsection

@section('script')
<script>
    function calculateAge() {
    const currentDate = new Date();
    const userinput = document.getElementById("dob").value;
    const dob = new Date(userinput);

    const currentYear = currentDate.getFullYear();
    const birthYear = dob.getFullYear();

    const ageInYears = currentYear - birthYear;

    // Set the value of the visible input field with the calculated age
    document.getElementById("year").value = ageInYears;

    // Set the value of the hidden input field with the calculated age
    document.getElementById("calculated_age").value = ageInYears;
}


    $(document).ready(function() {
        $(document).on('click', "#add-more-academic", function(e) {
                var html = $(".clone-academic").children().clone();
                $(".append-academic").append(html);
            });
            $(document).on('click', "#delete-academic", function(e) {
                var self = $(this);
                self.closest('.closet-div').remove();
            });

        $(document).on('click', "#add-more-experience", function(e) {
                var html = $(".clone-experience").children().clone();
                $(".append-experience").append(html);
            });
            $(document).on('click', "#delete-experience", function(e) {
                var self = $(this);
                self.closest('.closet-div-experience').remove();
            });

            $(document).on('click', "#add-more-family", function(e) {
                var html = $(".clone-family").children().clone();
                $(".append-family").append(html);
            });
            $(document).on('click', "#delete-family", function(e) {
                var self = $(this);
                self.closest('.closet-div-family').remove();
            });

          

            $(document).on("submit", "#form_id", function(e) {
                e.preventDefault();
                // show_loader();
                var url = "{{ url('employee-detail') }}";
                var formData = new FormData($('#form_id')[0]);
                $.ajax({
                    url: url,
                    type: "POST",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    dataType: "json",
                    data: formData,
                    processData: false,
                    contentType: false, // Set content type to false for file uploads
                    success: function(response) {
                        $('.error').text('');
                        if (response.status == 'success') {
                            // toastr.success(response.message, 'Success');
                            window.location.href = "{{ url('employee-detail') }}"
                            // setTimeout(function () {
                            //         window.location.href = "{{ url('employee-detail') }}";
                            //     }, 2000);
                        }
                    },
                    error: function(error) {
                        if (error.status === 422) {
                            $('.error').text('');
                            $.each(error.responseJSON.errors, function(key, value) {
                                // console.log(key);
                                $('#' + key + '_error').text(value[0]);
                            });
                        }
                        // hide_loader();
                    }
                });
            });
    });
</script>
@endsection