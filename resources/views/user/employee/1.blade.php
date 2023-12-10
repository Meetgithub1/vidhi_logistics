<div class="row">
    <form action="">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-4">
                    <h5 class="card-header">Personal Details</h5>
                    <div class="card-body">
                        <div class="mb-3">
                            <div class="form-floating">
                                <input type="text" name="name" class="form-control" id="floatingInput"
                                    placeholder="Name of Employee's" aria-describedby="floatingInputHelp" />
                                <label for="floatingInput">Name</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="form-floating">
                                <input type="text" name="email" class="form-control" id="floatingInput"
                                    placeholder="E-Mail Id" aria-describedby="floatingInputHelp" />
                                <label for="floatingInput">Email</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="form-floating">
                                <input type="text" name="mobile_number" class="form-control" id="floatingInput"
                                    placeholder="Mobile Number" aria-describedby="floatingInputHelp" />
                                <label for="floatingInput">Mobile Number</label>
                            </div>
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
                            <label for="defaultSelect" class="form-label">Gender</label>
                            <select id="defaultSelect" class="form-select" name="gender">
                                <option selected value="">Select</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <div class="form-floating">
                                <input type="text" name="caste" class="form-control" id="floatingInput"
                                    placeholder="Caste" aria-describedby="floatingInputHelp" />
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
                                <input type="date" class="form-control" name="birth_date" placeholder="YYYY-MM-DD"
                                    id="flatpickr-date1" />
                            </div>
                            <div class="col-md-6 p-3">
                                <div class="form-floating">
                                    <input type="text" name="age" class="form-control" id="floatingInput"
                                        placeholder="Age" aria-describedby="floatingInputHelp" />
                                    <label for="floatingInput">Age</label>
                                </div>
                            </div>
                        </div>
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
                            <input type="date" class="form-control flatpickr-date" name="marriage_date"
                                placeholder="YYYY-MM-DD" id="flatpickr-date" />
                        </div>

                        <div class="mb-3">
                            <div class="form-floating">
                                <input type="text" name="height" class="form-control" id="floatingInput"
                                    placeholder="Height" aria-describedby="floatingInputHelp" />
                                <label for="floatingInput">Height In CM</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="form-floating">
                                <input type="text" name="weight" class="form-control" id="floatingInput"
                                    placeholder="weight" aria-describedby="floatingInputHelp" />
                                <label for="floatingInput">weight</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="form-floating">
                                <input type="text" name="designation" class="form-control" id="floatingInput"
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
                                placeholder="YYYY-MM-DD" id="flatpickr-date" />
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Details of surgical operation
                                undergone</label>
                            <textarea class="form-control" name="details_of_surgical_operation"
                                id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Details of civil or criminal
                                litigation</label>
                            <textarea class="form-control" name="details_of_civil_or_criminal_litigation"
                                id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Language</label>
                            <textarea class="form-control" name="language" id="exampleFormControlTextarea1"
                                rows="3"></textarea>
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
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-4">
                    {{-- <h5 class="card-header">File Input</h5> --}}
                    <div class="card-body">
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
                    </div>
                </div>
                <div class="card mb-4">
                    <h5 class="card-header">File Input</h5>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Employee Image</label>
                            <input class="form-control" name="emp_image" type="file" id="formFile" />
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Aadhar Card</label>
                            <input class="form-control" name="aadhar_image" type="file" id="formFile" />
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Pan Card</label>
                            <input class="form-control" name="pan_image" type="file" id="formFile" />
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Bank Cheque/Bank Passbook</label>
                            <input class="form-control" name="bank_passbook_image" type="file" id="formFile" />
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Cast Certificate</label>
                            <input class="form-control" name="cast_certificate_image" type="file" id="formFile" />
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Passport</label>
                            <input class="form-control" name="passport_image" type="file" id="formFile" />
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Voter Id</label>
                            <input class="form-control" name="voter_image" type="file" id="formFile" />
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Driving Licence</label>
                            <input class="form-control" name="drg_licence_image" type="file" id="formFile" />
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Rationcard</label>
                            <input class="form-control" name="rationcard_image" type="file" id="formFile" />
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Blood Group</label>
                            <input class="form-control" name="blood_group_image" type="file" id="formFile" />
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">SLC</label>
                            <input class="form-control" name="slc_image" type="file" id="formFile" />
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Salary Slip</label>
                            <input class="form-control" name="salaryslip_image" type="file" id="formFile" />
                        </div>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="mb-3">
                            <div class="form-floating">
                                <input type="text" name="aadhar_number" class="form-control" id="floatingInput"
                                    placeholder="Aadhar Number" aria-describedby="floatingInputHelp" />
                                <label for="floatingInput">Aadhar Number</label>
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
                            <div class="form-floating">
                                <input type="text" name="pf_member_id" class="form-control" id="floatingInput"
                                    placeholder="PF Member ID" aria-describedby="floatingInputHelp" />
                                <label for="floatingInput">PF Member ID</label>
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
                                <input type="text" name="pan_number" class="form-control" id="floatingInput"
                                    placeholder="Pancard Number" aria-describedby="floatingInputHelp" />
                                <label for="floatingInput">Pancard Number</label>
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
                                <input type="text" name="voter_number" class="form-control" id="floatingInput"
                                    placeholder="Voter Id Number" aria-describedby="floatingInputHelp" />
                                <label for="floatingInput">Voter Id Number</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <h5 class="card-header">Academic Details</h5>
                    <div class="card-body">
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <div class="form-floating">
                                            <input type="text" name="institute_university[]" class="form-control"
                                                id="floatingInput" placeholder="Institute University"
                                                aria-describedby="floatingInputHelp" />
                                            <label for="floatingInput">Institute University</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <div class="form-floating">
                                            <input type="text" name="year_of_passing[]" class="form-control"
                                                id="floatingInput" placeholder="Year Of Passing"
                                                aria-describedby="floatingInputHelp" />
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
                                        <input class="form-control" name="education_image[]" type="file"
                                            id="formFile" />
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
                        <div class="mt-3 append-academic"></div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-12 col-xl-12 text-end">
                            <a class="btn btn-primary btn-lg" id="add-more-academic"><i
                                    class="fa-solid fa-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-3">
            {{-- <div class="text-end">
                <button class="btn btn-success w-sm">Submit</button>
                <a href="{{ url('/employee') }}" class="btn btn-danger w-sm mx-3">Cancel</a>
            </div> --}}
            <div class="pt-4">
                <button type="submit" class="btn btn-primary me-sm-2">Submit</button>
                <a href="{{ url('/employee-detail') }}" class="btn btn-danger">Cancel</a>
                {{-- <button type="reset" class="btn btn-label-secondary">Cancel</button> --}}
            </div>
        </div>
    </form>
</div>