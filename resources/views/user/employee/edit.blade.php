@extends('user.layout.app')

@section('title', 'Edit Employee | Vidhi Logistics')

@section('content')
<div class="card mb-4">
    <h5 class="card-header">Personal Details</h5>
    <form class="card-body" id="form_id" enctype="multipart/form-data">
        @method('PUT')
        <input type="hidden" name="id" value="{{ $data->id }}">
        <div class="row g-3">
            <div class="col-md-6">
                <div class="mb-3">
                    <div class="form-floating">
                        <input type="text" name="emp_name" class="form-control" id="floatingInput"
                            placeholder="Name of Employees" aria-describedby="floatingInputHelp"
                            value="{{ $data->emp_name }}" />
                        <label for="floatingInput">Name</label>
                    </div>
                    <p class="error text-danger" id="emp_name_error"></p>
                </div>
                <div class="mb-3">
                    <div class="form-floating">
                        <input type="text" name="email" class="form-control" id="floatingInput" placeholder="E-Mail Id"
                            aria-describedby="floatingInputHelp" value="{{ $data->email }}" />
                        <label for="floatingInput">Email</label>
                    </div>
                    <p class="error text-danger" id="email_error"></p>
                </div>
                <div class="mb-3">
                    <div class="form-floating">
                        <input type="text" name="mobile_number" class="form-control" id="floatingInput"
                            placeholder="Mobile Number" aria-describedby="floatingInputHelp"
                            value="{{ $data->mobile_number }}" />
                        <label for="floatingInput">Mobile Number</label>
                    </div>
                    <p class="error text-danger" id="mobile_number_error"></p>

                </div>
                <div class="mb-3">
                    <div class="form-floating">
                        <input type="text" name="employee_id" class="form-control" id="floatingInput"
                            placeholder="Employee Id" aria-describedby="floatingInputHelp"
                            value="{{ $data->employee_id }}" />
                        <label for="floatingInput">Employee Id</label>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-floating">
                        <input type="text" name="identification" class="form-control" id="floatingInput"
                            placeholder="Identification" aria-describedby="floatingInputHelp"
                            value="{{ $data->identification }}" />
                        <label for="floatingInput">Identification</label>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-floating">
                        <input type="text" name="religion" class="form-control" id="floatingInput"
                            placeholder="Religion" aria-describedby="floatingInputHelp" value="{{ $data->religion }}" />
                        <label for="floatingInput">Religion</label>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-floating">
                        <input type="text" name="aadhar_number" class="form-control" id="floatingInput"
                            placeholder="Aadhar Number" aria-describedby="floatingInputHelp"
                            value="{{ $data->aadhar_number }}" />
                        <label for="floatingInput">Aadhar Number</label>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-floating">
                        <input type="text" name="pan_number" class="form-control" id="floatingInput"
                            placeholder="Pancard Number" aria-describedby="floatingInputHelp"
                            value="{{ $data->pan_number }}" />
                        <label for="floatingInput">Pancard Number</label>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-floating">
                        <input type="text" name="passport_number" class="form-control" id="floatingInput"
                            placeholder="Passport Number" aria-describedby="floatingInputHelp"
                            value="{{ $data->passport_number }}" />
                        <label for="floatingInput">Passport Number</label>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-floating">
                        <input type="text" name="voter_number" class="form-control" id="floatingInput"
                            placeholder="Voter Id Number" aria-describedby="floatingInputHelp"
                            value="{{ $data->voter_number }}" />
                        <label for="floatingInput">Voter Id Number</label>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-floating">
                        <input type="text" name="driving_licence_number" class="form-control" id="floatingInput"
                            placeholder="Driving Licence Number" aria-describedby="floatingInputHelp"
                            value="{{ $data->driving_licence_number }}" />
                        <label for="floatingInput">Driving Licence Number</label>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-floating">
                        <input type="text" name="pf_member_id" class="form-control" id="floatingInput"
                            placeholder="PF Member ID" aria-describedby="floatingInputHelp"
                            value="{{ $data->pf_member_id }}" />
                        <label for="floatingInput">PF Member ID</label>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-floating">
                        <input type="text" name="uan_number" class="form-control" id="floatingInput"
                            placeholder="UAN Number" aria-describedby="floatingInputHelp"
                            value="{{ $data->uan_number }}" />
                        <label for="floatingInput">UAN Number</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="defaultSelect" class="form-label">Gender</label>
                    <select id="defaultSelect" class="form-select" name="gender">
                        <option selected value="">Select</option>
                        <option value="male" {{ $data->gender == 'male' ? 'selected' : '' }}>Male</option>
                        <option value="female" {{ $data->gender == 'female' ? 'selected' : '' }}>Female</option>
                    </select>
                </div>
                <div class="mb-3">
                    <div class="form-floating">
                        <input type="text" name="caste" class="form-control" id="floatingInput" placeholder="Caste"
                            aria-describedby="floatingInputHelp" value="{{ $data->caste }}" />
                        <label for="floatingInput">Caste</label>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-floating">
                        <input type="text" name="sub_caste" class="form-control" id="floatingInput"
                            placeholder="sub Caste" aria-describedby="floatingInputHelp"
                            value="{{ $data->sub_caste }}" />
                        <label for="floatingInput">Sub Caste</label>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-floating">
                        <input type="text" name="blood_group" class="form-control" id="floatingInput"
                            placeholder="Blood Group" aria-describedby="floatingInputHelp"
                            value="{{ $data->blood_group }}" />
                        <label for="floatingInput">Blood Group</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="flatpickr-date" class="form-label">Birth Date</label>
                        <input type="date" class="form-control" name="birth_date" value="{{ $data->birth_date }}"
                            id="dob" onchange="calculateAge()" />
                    </div>
                    <div class="col-md-6 p-3">
                        <div class="form-floating">
                            <input type="text" name="age" class="form-control" id="year" placeholder="Age"
                                aria-describedby="floatingInputHelp" value="{{ $data->age }}" disabled />
                            <input type="hidden" name="calculated_age" id="calculated_age" />
                            <label for="age-calculate">Age</label>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Permanent Address</label>
                    <textarea class="form-control" name="permanent_address" id="exampleFormControlTextarea1"
                        rows="3">{{ $data->permanent_address }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Present Address</label>
                    <textarea class="form-control" name="present_address" id="exampleFormControlTextarea1"
                        rows="3">{{ $data->present_address }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="defaultSelect" class="form-label">Marital Status</label>
                    <select id="defaultSelect" class="form-select" name="marital_status">
                        <option selected value="">Select</option>
                        <option value="single" {{ $data->marital_status == 'single' ? 'selected' : '' }}>Single
                        </option>
                        <option value="married" {{ $data->marital_status == 'married' ? 'selected' : '' }}>Married
                        </option>
                        <option value="divorced" {{ $data->marital_status == 'divorced' ? 'selected' : '' }}>Divorced
                        </option>
                        <option value="widow" {{ $data->marital_status == 'widow' ? 'selected' : '' }}>widow</option>
                        <option value="other" {{ $data->marital_status == 'other' ? 'selected' : '' }}>Other</option>
                    </select>
                </div>
                <div class="col-md-6 col-12 mb-3">
                    <label for="flatpickr-date" class="form-label">Marriage Date</label>
                    <input type="date" class="form-control flatpickr-date" name="marriage_date" id="flatpickr-date11"
                        value="{{ $data->marriage_date }}" />
                </div>

                <div class="mb-3">
                    <div class="form-floating">
                        <input type="text" name="height" class="form-control" id="floatingInput" placeholder="Height"
                            aria-describedby="floatingInputHelp" value="{{ $data->height }}" />
                        <label for="floatingInput">Height In CM</label>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-floating">
                        <input type="text" name="weight" class="form-control" id="floatingInput" placeholder="weight"
                            aria-describedby="floatingInputHelp" value="{{ $data->weight }}" />
                        <label for="floatingInput">weight</label>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-floating">
                        <input type="text" name="emp_designation" class="form-control" id="floatingInput"
                            placeholder="Designation" aria-describedby="floatingInputHelp"
                            value="{{ $data->emp_designation }}" />
                        <label for="floatingInput">Designation</label>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-floating">
                        <input type="text" name="department" class="form-control" id="floatingInput"
                            placeholder="Department" aria-describedby="floatingInputHelp"
                            value="{{ $data->department }}" />
                        <label for="floatingInput">Department</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="defaultSelect" class="form-label">Category</label>
                    <select id="defaultSelect" class="form-select" name="category">
                        <option selected value="">Select</option>
                        <option value="direct" {{ $data->category == 'direct' ? 'selected' : '' }}>Direct</option>
                        <option value="indirect" {{ $data->category == 'indirect' ? 'selected' : '' }}>InDirect
                        </option>
                    </select>
                </div>
                <div class="col-md-6 col-12 mb-3">
                    <label for="flatpickr-date" class="form-label">Date Of Joining</label>
                    <input type="date" class="form-control flatpickr-date" name="date_of_joining" id="flatpickr-date11"
                        value="{{ $data->date_of_joining }}" />
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Details of surgical operation
                        undergone</label>
                    <textarea class="form-control" name="details_of_surgical_operation" id="exampleFormControlTextarea1"
                        rows="3">{{ $data->details_of_surgical_operation }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Details of civil or criminal
                        litigation</label>
                    <textarea class="form-control" name="details_of_civil_or_criminal_litigation"
                        id="exampleFormControlTextarea1"
                        rows="3">{{ $data->details_of_civil_or_criminal_litigation }}</textarea>
                </div>
            </div>

            <div class="col-md-6">
                <div class="mb-3">
                    <div class="form-floating">
                        <input type="text" name="bank_name" class="form-control" id="floatingInput"
                            placeholder="Bank Name" aria-describedby="floatingInputHelp"
                            value="{{ $data->bank_name }}" />
                        <label for="floatingInput">Bank Name</label>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-floating">
                        <input type="text" name="account_number" class="form-control" id="floatingInput"
                            placeholder="Account Number" aria-describedby="floatingInputHelp"
                            value="{{ $data->account_number }}" />
                        <label for="floatingInput">Account Number</label>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-floating">
                        <input type="text" name="ifsc_code" class="form-control" id="floatingInput"
                            placeholder="IFSC CODE" aria-describedby="floatingInputHelp"
                            value="{{ $data->ifsc_code }}" />
                        <label for="floatingInput">IFSC CODE</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Branch Address</label>
                    <textarea class="form-control" name="branch_address" id="exampleFormControlTextarea1"
                        rows="3">{{ $data->branch_address }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Employee Image</label>
                    <input class="form-control" name="emp_image" type="file" />
                    <input type="hidden" name="emp_image_old" type="file" value="{{ $data->emp_image }}">
                </div>
                @if (isset($data->emp_image) && !empty($data->emp_image))
                <a href="{{ asset('storage/uploads/personal_details/emp_photos/' . $data->emp_image) }}"
                    target="_blank"><img
                        src="{{ asset('storage/uploads/personal_details/emp_photos/' . $data->emp_image) }}" alt="photo"
                        height="100px" width="100px"></a>
                @endif
                <div class="mb-3">
                    <label for="formFile" class="form-label">Aadhar Card</label>
                    <input class="form-control" name="aadhar_image" type="file" />
                    <input type="hidden" name="aadhar_image_old" type="file" value="{{ $data->aadhar_image }}">
                </div>
                @if (isset($data->aadhar_image) && !empty($data->aadhar_image))
                <a href="{{ asset('storage/uploads/personal_details/aadhar_images/' . $data->aadhar_image) }}"
                    target="_blank"><img
                        src="{{ asset('storage/uploads/personal_details/aadhar_images/' . $data->aadhar_image) }}"
                        alt="Aadhar Image" height="100px" width="100px"></a>
                @endif
                <div class="mb-3">
                    <label for="formFile" class="form-label">Pan Card</label>
                    <input class="form-control" name="pan_image" type="file" />
                    <input type="hidden" name="pan_image_old" type="file" value="{{ $data->pan_image }}">
                </div>
                @if (isset($data->pan_image) && !empty($data->pan_image))
                <a href="{{ asset('storage/uploads/personal_details/pan_images/' . $data->pan_image) }}"
                    target="_blank"><img
                        src="{{ asset('storage/uploads/personal_details/pan_images/' . $data->pan_image) }}"
                        alt="Pan Image" height="100px" width="100px"></a>
                @endif
                <div class="mb-3">
                    <label for="formFile" class="form-label">Bank Cheque/Bank Passbook</label>
                    <input class="form-control" name="bank_passbook_image" type="file" />
                    <input type="hidden" name="bank_passbook_image_old" type="file"
                        value="{{ $data->bank_passbook_image }}">
                </div>
                @if (isset($data->bank_passbook_image) && !empty($data->bank_passbook_image))
                <a href="{{ asset('storage/uploads/personal_details/bank_passbook_images/' . $data->bank_passbook_image) }}"
                    target="_blank"><img
                        src="{{ asset('storage/uploads/personal_details/bank_passbook_images/' . $data->bank_passbook_image) }}"
                        alt="Pan Image" height="100px" width="100px"></a>
                @endif
                <div class="mb-3">
                    <label for="formFile" class="form-label">Cast Certificate</label>
                    <input class="form-control" name="cast_certificate_image" type="file" />
                    <input type="hidden" name="cast_certificate_image_old" type="file"
                        value="{{ $data->cast_certificate_image }}">
                </div>
                @if (isset($data->cast_certificate_image) && !empty($data->cast_certificate_image))
                <a href="{{ asset('storage/uploads/personal_details/cast_certificate_images/' . $data->cast_certificate_image) }}"
                    target="_blank"><img
                        src="{{ asset('storage/uploads/personal_details/cast_certificate_images/' . $data->cast_certificate_image) }}"
                        alt="Cast Certificate Image" height="100px" width="100px"></a>
                @endif
                <div class="mb-3">
                    <label for="formFile" class="form-label">Passport</label>
                    <input class="form-control" name="passport_image" type="file" />
                    <input type="hidden" name="passport_image_old" type="file" value="{{ $data->passport_image }}">
                </div>
                @if (isset($data->passport_image) && !empty($data->passport_image))
                <a href="{{ asset('storage/uploads/personal_details/passport_images/' . $data->passport_image) }}"
                    target="_blank"><img
                        src="{{ asset('storage/uploads/personal_details/passport_images/' . $data->passport_image) }}"
                        alt="Passport Image" height="100px" width="100px"></a>
                @endif
                <div class="mb-3">
                    <label for="formFile" class="form-label">Voter Id</label>
                    <input class="form-control" name="voter_image" type="file" />
                    <input type="hidden" name="voter_image_old" type="file" value="{{ $data->voter_image }}">
                </div>
                @if (isset($data->voter_image) && !empty($data->voter_image))
                <a href="{{ asset('storage/uploads/personal_details/voter_images/' . $data->voter_image) }}"
                    target="_blank"><img
                        src="{{ asset('storage/uploads/personal_details/voter_images/' . $data->voter_image) }}"
                        alt="Voter Image" height="100px" width="100px"></a>
                @endif
                <div class="mb-3">
                    <label for="formFile" class="form-label">Driving Licence</label>
                    <input class="form-control" name="drg_licence_image" type="file" />
                    <input type="hidden" name="drg_licence_image_old" type="file"
                        value="{{ $data->drg_licence_image }}">
                </div>
                @if (isset($data->drg_licence_image) && !empty($data->drg_licence_image))
                <a href="{{ asset('storage/uploads/personal_details/drg_licence_images/' . $data->drg_licence_image) }}"
                    target="_blank"><img
                        src="{{ asset('storage/uploads/personal_details/drg_licence_images/' . $data->drg_licence_image) }}"
                        alt="Driving Licence Image" height="100px" width="100px"></a>
                @endif
                <div class="mb-3">
                    <label for="formFile" class="form-label">Rationcard</label>
                    <input class="form-control" name="rationcard_image" type="file" />
                    <input type="hidden" name="rationcard_image_old" type="file" value="{{ $data->rationcard_image }}">
                </div>
                @if (isset($data->rationcard_image) && !empty($data->rationcard_image))
                <a href="{{ asset('storage/uploads/personal_details/rationcard_images/' . $data->rationcard_image) }}"
                    target="_blank"><img
                        src="{{ asset('storage/uploads/personal_details/rationcard_images/' . $data->rationcard_image) }}"
                        alt="Rationcard Image" height="100px" width="100px"></a>
                @endif
                <div class="mb-3">
                    <label for="formFile" class="form-label">Blood Group</label>
                    <input class="form-control" name="blood_group_image" type="file" />
                    <input type="hidden" name="blood_group_image_old" type="file"
                        value="{{ $data->blood_group_image }}">
                </div>
                @if (isset($data->blood_group_image) && !empty($data->blood_group_image))
                <a href="{{ asset('storage/uploads/personal_details/blood_group_images/' . $data->blood_group_image) }}"
                    target="_blank"><img
                        src="{{ asset('storage/uploads/personal_details/blood_group_images/' . $data->blood_group_image) }}"
                        alt="Blood Group Image" height="100px" width="100px"></a>
                @endif
                <div class="mb-3">
                    <label for="formFile" class="form-label">SLC</label>
                    <input class="form-control" name="slc_image" type="file" />
                    <input type="hidden" name="slc_image_old" type="file" value="{{ $data->slc_image }}">
                </div>
                @if (isset($data->slc_image) && !empty($data->slc_image))
                <a href="{{ asset('storage/uploads/personal_details/slc_images/' . $data->slc_image) }}"
                    target="_blank"><img
                        src="{{ asset('storage/uploads/personal_details/slc_images/' . $data->slc_image) }}"
                        alt="SLC Image" height="100px" width="100px"></a>
                @endif
                <div class="mb-3">
                    <label for="formFile" class="form-label">Salary Slip</label>
                    <input class="form-control" name="salaryslip_image" type="file" />
                    <input type="hidden" name="salaryslip_image_old" type="file" value="{{ $data->salaryslip_image }}">
                </div>
                @if (isset($data->salaryslip_image) && !empty($data->salaryslip_image))
                <a href="{{ asset('storage/uploads/personal_details/salaryslip_images/' . $data->salaryslip_image) }}"
                    target="_blank"><img
                        src="{{ asset('storage/uploads/personal_details/salaryslip_images/' . $data->salaryslip_image) }}"
                        alt="Salaryslip Image" height="100px" width="100px"></a>
                @endif
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Language</label>
                    <textarea class="form-control" name="language" id="exampleFormControlTextarea1"
                        rows="3">{{ $data->language }}</textarea>
                </div>
                <div class="mb-3">
                    <div class="form-floating">
                        <input type="text" name="current_salary" class="form-control" id="floatingInput"
                            placeholder="Current Salary" aria-describedby="floatingInputHelp"
                            value="{{ $data->current_salary }}" />
                        <label for="floatingInput">Current Salary</label>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-floating">
                        <input type="text" name="expected_salary" class="form-control" id="floatingInput"
                            placeholder="Expected Salary" aria-describedby="floatingInputHelp"
                            value="{{ $data->expected_salary }}" />
                        <label for="floatingInput">Expected Salary</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Reason For Job change</label>
                    <textarea class="form-control" name="reason_for_job_change" id="exampleFormControlTextarea1"
                        rows="3">{{ $data->reason_for_job_change }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="defaultSelect" class="form-label">Quality Knowledge</label>
                    <select id="defaultSelect" class="form-select" name="Quality_knowledge">
                        <option selected value="">Select</option>
                        <option value="yes" {{ $data->Quality_knowledge == 'yes' ? 'selected' : '' }}>Yes</option>
                        <option value="no" {{ $data->Quality_knowledge == 'no' ? 'selected' : '' }}>no</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="defaultSelect" class="form-label">Computer Knowledge</label>
                    <select id="defaultSelect" class="form-select" name="compuer_knowledge">
                        <option selected value="">Select</option>
                        <option value="Ms-office" {{ $data->compuer_knowledge == 'Ms-office' ? 'selected' : '' }}>
                            Ms-Office</option>
                        <option value="AutoCAD" {{ $data->compuer_knowledge == 'AutoCAD' ? 'selected' : '' }}>AutoCAD
                        </option>
                        <option value="Other" {{ $data->compuer_knowledge == 'Other' ? 'selected' : '' }}>Other
                        </option>
                    </select>
                </div>
                <div class="mb-3">
                    <div class="form-floating">
                        <input type="text" name="notice_period" class="form-control" id="floatingInput"
                            placeholder="Expected Salary" aria-describedby="floatingInputHelp"
                            value="{{ $data->notice_period }}" />
                        <label for="floatingInput">Notice Period</label>
                    </div>
                </div>
            </div>
            <hr>
            {{-- START ACADEMIC DETAILS --}}
            {{-- <div class="col-md-12">
                <div class="mb-4">
                    <h5 class="card-header">Academic Details</h5>
                    @if (count($data->academicdetails) > 0)
                    @foreach ($data->academicdetails as $academic_data)
                    <div class="row g-3 academic-row" data-id="{{ $academic_data->id }}">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-12 col-xl-12 text-end">
                            <a class="btn btn-danger btn-lg mb-3 delete-academic" data-id="{{ $academic_data->id }}"><i
                                    class="fa-solid fa-trash plus-icon-color"></i></a>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <div class="form-floating">
                                    <input type="text" name="institute_university[]" class="form-control"
                                        id="floatingInput" placeholder="Institute/University"
                                        aria-describedby="floatingInputHelp"
                                        value="{{ $academic_data->institute_university }}" />
                                    <label for="floatingInput">Institute/University</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <div class="form-floating">
                                    <input type="text" name="year_of_passing[]" class="form-control" id="floatingInput"
                                        placeholder="Year Of Passing" aria-describedby="floatingInputHelp"
                                        value="{{ $academic_data->year_of_passing }}" />
                                    <label for="floatingInput">Year Of Passing</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <div class="form-floating">
                                    <input type="text" name="marks[]" class="form-control" id="floatingInput"
                                        placeholder="Marks" aria-describedby="floatingInputHelp"
                                        value="{{ $academic_data->marks }}" />
                                    <label for="floatingInput">Marks</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Education Certificate</label>
                                <input class="form-control" name="education_image[]" type="file" />
                            </div>
                            @if (isset($academic_data->education_image) && !empty($academic_data->education_image))
                            <a href="{{ asset('storage/uploads/education_images/' . $academic_data->education_image) }}"
                                target="_blank"><img
                                    src="{{ asset('storage/uploads/education_images/' . $academic_data->education_image) }}"
                                    alt="Academic Image" height="100px" width="100px"></a>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Remarks</label>
                                <textarea class="form-control" name="remarks[]" id="exampleFormControlTextarea1"
                                    rows="1">{{ $academic_data->remarks }}</textarea>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="mt-3 append-academic"></div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-12 col-xl-12 text-end">
                        <a class="btn btn-primary btn-lg" id="add-more-academic"><i
                                class="fa-solid fa-plus plus-icon-color"></i></a>
                    </div>
                    @else
                    <div class="row g-3">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-12 col-xl-12 text-end">
                            <a class="btn btn-danger btn-sm"><i class="fa-solid fa-trash plus-icon-color"></i></a>
                        </div>
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
                    </div>
                    @endif
                </div>
            </div> --}}
                <div class="col-md-12">
                    <div class="mb-4">
                        <h5 class="card-header">Academic Details</h5>
                        {{-- {{ dd($data->academicdetails) }} --}}
                        @if (count($data->academicdetails) > 0)
                        @foreach ($data->academicdetails as $academic_data)
                        <div class="row g-3 academic-row" data-id="{{ $academic_data->id }}">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-12 col-xl-12 text-end">
                                <a class="btn btn-danger btn-lg mb-3 delete-academic"
                                    data-id="{{ $academic_data->id }}"><i
                                        class="fa-solid fa-trash plus-icon-color"></i></a>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <div class="form-floating">
                                        <input type="text" name="institute_university[]" class="form-control"
                                            id="floatingInput" placeholder="Institute/University"
                                            aria-describedby="floatingInputHelp"
                                            value="{{ $academic_data->institute_university }}" />
                                        <label for="floatingInput">Institute/University</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <div class="form-floating">
                                        <input type="text" name="year_of_passing[]" class="form-control"
                                            id="floatingInput" placeholder="Year Of Passing"
                                            aria-describedby="floatingInputHelp"
                                            value="{{ $academic_data->year_of_passing }}" />
                                        <label for="floatingInput">Year Of Passing</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <div class="form-floating">
                                        <input type="text" name="marks[]" class="form-control" id="floatingInput"
                                            placeholder="Marks" aria-describedby="floatingInputHelp"
                                            value="{{ $academic_data->marks }}" />
                                        <label for="floatingInput">Marks</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Education Certificate</label>
                                    <input class="form-control" name="education_image[]" type="file" />
                                    <input type="hidden" name="academic_id[]" value="{{ $academic_data->id }}">
                                </div>
                                @if (isset($academic_data->education_image) &&
                                !empty($academic_data->education_image))
                                <a href="{{ asset('storage/uploads/education_images/' . $academic_data->education_image) }}"
                                    target="_blank"><img
                                        src="{{ asset('storage/uploads/education_images/' . $academic_data->education_image) }}"
                                        alt="Academic Image" height="100px" width="100px"></a>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Remarks</label>
                                    <textarea class="form-control" name="remarks[]" id="exampleFormControlTextarea1"
                                        rows="1">{{ $academic_data->remarks }}</textarea>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <div class="mt-3 append-academic"></div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-12 col-xl-12 text-end">
                            <a class="btn btn-primary btn-lg" id="add-more-academic"><i
                                    class="fa-solid fa-plus plus-icon-color"></i></a>
                        </div>
                        @else
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
                        @endif
                    </div>
                </div>
            {{-- END ACADEMIC DETAILS --}}
            <hr>
            {{-- START EXPERIENCE DETAILS --}}
            <div class="col-md-12">
                <div class="mb-4">
                    <h5 class="card-header">Experience Details</h5>
                    @if (count($data->experiencedetails) > 0)
                    @foreach ($data->experiencedetails as $experience_data)
                    <div class="row g-3 experience-row" data-id="{{ $experience_data->id }}">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-12 col-xl-12 text-end">
                            <a class="btn btn-danger btn-lg mb-3 delete-experience"
                                data-id="{{ $experience_data->id }}"><i
                                    class="fa-solid fa-trash plus-icon-color"></i></a>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <div class="form-floating">
                                    <input type="text" name="company_name[]" class="form-control" id="floatingInput"
                                        placeholder="Company Name" aria-describedby="floatingInputHelp"
                                        value="{{ $experience_data->company_name }}" />
                                    <label for="floatingInput">Company Name</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <div class="form-floating">
                                    <input type="text" name="duration[]" class="form-control" id="floatingInput"
                                        placeholder="Duration" aria-describedby="floatingInputHelp"
                                        value="{{ $experience_data->duration }}" />
                                    <label for="floatingInput">Duration</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <div class="form-floating">
                                    <input type="text" name="designation[]" class="form-control" id="floatingInput"
                                        placeholder="Designation" aria-describedby="floatingInputHelp"
                                        value="{{ $experience_data->designation }}" />
                                    <label for="floatingInput">Designation</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Nature Of Work</label>
                                <textarea class="form-control" name="nature_of_work[]" id="exampleFormControlTextarea1"
                                    rows="1">{{ $experience_data->nature_of_work }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Experience Certificate</label>
                                <input class="form-control" name="experience_certificate_image[]" type="file" />
                                <input type="hidden" name="experience_certificate_image_old"
                                    value="{{ $experience_data->experience_certificate_image }}">
                            </div>
                            @if (isset($experience_data->experience_certificate_image) &&
                            !empty($experience_data->experience_certificate_image))
                            <a href="{{ asset('storage/uploads/experience_images/' . $experience_data->experience_certificate_image) }}"
                                target="_blank"><img
                                    src="{{ asset('storage/uploads/experience_images/' . $experience_data->experience_certificate_image) }}"
                                    alt="Experience Certificate Image" height="100px" width="100px"></a>
                            @endif
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <div class="form-floating">
                                    <input type="text" name="reference[]" class="form-control" id="floatingInput"
                                        placeholder="Reference" aria-describedby="floatingInputHelp"
                                        value="{{ $experience_data->reference }}" />
                                    <label for="floatingInput">Reference</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="mt-3 append-experience"></div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-12 col-xl-12 text-end">
                        <a class="btn btn-primary btn-lg" id="add-more-experience"><i
                                class="fa-solid fa-plus plus-icon-color"></i></a>
                    </div>
                    @else
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
                                <label for="exampleFormControlTextarea1" class="form-label">Nature Of
                                    Work</label>
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
                    @endif
                </div>
            </div>
            {{-- END EXPERIENCE DETAILS --}}
            <hr>
            {{-- START FAMILY DETAILS --}}
            <div class="col-md-12">
                <div class="mb-4">
                    <h5 class="card-header">Family Details</h5>
                    @if (count($data->familydetails) > 0)
                    @foreach ($data->familydetails as $family_data)
                    <div class="row g-3 family-row" data-id="{{ $family_data->id }}">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-12 col-xl-12 text-end">
                            <a class="btn btn-danger btn-lg mb-3 delete-family" data-id="{{ $family_data->id }}"><i
                                    class="fa-solid fa-trash plus-icon-color"></i></a>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <div class="form-floating">
                                    <input type="text" name="fm_name[]" class="form-control" id="floatingInput"
                                        placeholder="Name" aria-describedby="floatingInputHelp"
                                        value="{{ $family_data->fm_name }}" />
                                    <label for="floatingInput">Name</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <div class="form-floating">
                                    <input type="text" name="relation[]" class="form-control" id="floatingInput"
                                        placeholder="Relation" aria-describedby="floatingInputHelp"
                                        value="{{ $family_data->relation }}" />
                                    <label for="floatingInput">Relation</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-4">
                                <div class="form-floating">
                                    <input type="text" name="education[]" class="form-control" id="floatingInput"
                                        placeholder="Education" aria-describedby="floatingInputHelp"
                                        value="{{ $family_data->education }}" />
                                    <label for="floatingInput">Education</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Occupation
                                    Detail</label>
                                <textarea class="form-control" name="occupation_detail[]"
                                    id="exampleFormControlTextarea1"
                                    rows="1">{{ $family_data->occupation_detail }}</textarea>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="mt-3 append-family"></div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-12 col-xl-12 text-end">
                        <a class="btn btn-primary btn-lg" id="add-more-family"><i
                                class="fa-solid fa-plus plus-icon-color"></i></a>
                    </div>
                    @else
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
                                <label for="exampleFormControlTextarea1" class="form-label">Occupation
                                    Detail</label>
                                <textarea class="form-control" name="occupation_detail[]"
                                    id="exampleFormControlTextarea1" rows="1"></textarea>
                            </div>
                        </div>
                        <div class="mt-3 append-family"></div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-12 col-xl-12 text-end">
                            <a class="btn btn-primary btn-lg" id="add-more-family"><i
                                    class="fa-solid fa-plus plus-icon-color"></i></a>
                        </div>
                    </div>
                    @endif
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
                                        placeholder="Offered Salary" aria-describedby="floatingInputHelp"
                                        value="{{ $data->hrdetails[0]->offered_salary }}" />
                                    <label for="floatingInput">Offered Salary</label>
                                </div>
                                <p class="error text-danger" id="offered_salary_error"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <div class="form-floating">
                                    <input type="text" name="revised_salary" class="form-control" id="floatingInput"
                                        placeholder="Revised Salary" aria-describedby="floatingInputHelp"
                                        value="{{ $data->hrdetails[0]->revised_salary }}" />
                                    <label for="floatingInput">Revised Salary</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-4">
                                <label for="flatpickr-date" class="form-label">Date Of Revise Salary</label>
                                <input type="date" class="form-control" name="date_of_revise_salary"
                                    placeholder="YYYY-MM-DD" id="flatpickr-date1"
                                    value="{{ $data->hrdetails[0]->date_of_revise_salary }}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="defaultSelect" class="form-label">Mobile Permission</label>
                                <select id="defaultSelect" class="form-select" name="mobile_permission">
                                    <option selected value="">Select</option>
                                    <option value="yes" {{ $data->hrdetails[0]->mobile_permission == 'yes' ?
                                        'selected' : '' }}>
                                        Yes</option>
                                    <option value="no" {{ $data->hrdetails[0]->mobile_permission == 'no' ?
                                        'selected' : '' }}>
                                        No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="defaultSelect" class="form-label">Job Time</label>
                                <select id="defaultSelect" class="form-select" name="job_time">
                                    <option selected value="">Select</option>
                                    <option value="08:30 To 17:00" {{ $data->hrdetails[0]->job_time ==
                                        '08:30 To
                                        17:00'
                                        ? 'selected'
                                        : '' }}>
                                        08:30
                                        To 17:00</option>
                                    <option value="09:00 To 17:30" {{ $data->hrdetails[0]->job_time ==
                                        '09:00 To
                                        17:30'
                                        ? 'selected'
                                        : '' }}>
                                        09:00
                                        To 17:30</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <div class="form-floating">
                                    <input type="text" name="probation_period" class="form-control" id="floatingInput"
                                        placeholder="Probation Period" aria-describedby="floatingInputHelp"
                                        value="{{ $data->hrdetails[0]->probation_period }}" />
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
                                        placeholder="Training Given By" aria-describedby="floatingInputHelp"
                                        value="{{ $data->employeetraininghistory[0]->training_given_by }}" />
                                    <label for="floatingInput">Training Given By</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="flatpickr-date" class="form-label">Date Of Training</label>
                                <input type="date" class="form-control" name="date_of_training" id="flatpickr-date1"
                                    value="{{ $data->employeetraininghistory[0]->date_of_training }}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Description Of
                                    Training</label>
                                <textarea class="form-control" name="description_of_training"
                                    id="exampleFormControlTextarea1"
                                    rows="3">{{ $data->employeetraininghistory[0]->description_of_training }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Remark</label>
                                <textarea class="form-control" name="remark" id="exampleFormControlTextarea1"
                                    rows="3">{{ $data->employeetraininghistory[0]->remark }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- END EMPLOYEE TRAINING HISTORY CARD --}}

        </div>
        <div class="pt-4">
            <button type="submit" class="btn btn-primary me-sm-1">Submit</button>
            <a href="{{ url('/employee-detail') }}" class="btn btn-danger w-sm">Cancel</a>

        </div>
    </form>
</div>

<!-- Clone Academic  -->
<div class="clone-academic" style="display:none">
    <div class="closet-div">
        <div class="col-12 col-sm-12 col-md-6 col-lg-12 col-xl-12 text-end">
            <a class="btn btn-danger btn-lg mb-3" id="delete-academic"><i
                    class="fa-solid fa-trash plus-icon-color"></i></a>
        </div>
        <div class="mb-3">
            <div class="row">
                <div class="col-md-4">
                    <div class="mb-3">
                        <div class="form-floating">
                            <input type="hidden" name="academic_id[]" value="0">
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
            <a class="btn btn-danger btn-lg mb-3" id="delete-experience"><i
                    class="fa-solid fa-trash plus-icon-color"></i></a>
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
            <a class="btn btn-danger btn-lg mb-3" id="delete-family"><i
                    class="fa-solid fa-trash plus-icon-color"></i></a>
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
            $('.delete-academic').on('click', function() {
                var id = $(this).data('id');
                $.ajax({
                    url: "{{ url('delete-academics') }}/" + id,
                    type: "GET",
                    success: function(response) {
                        if (response.status == 'success') {
                            $('.academic-row[data-id="' + id + '"]').remove();
                        }
                    },
                    error: function(error) {
                        console.error('Error deleting academic detail:', error);
                    }
                });
            });

            $(document).on('click', "#add-more-experience", function(e) {
                var html = $(".clone-experience").children().clone();
                $(".append-experience").append(html);
            });
            $(document).on('click', "#delete-experience", function(e) {
                var self = $(this);
                self.closest('.closet-div-experience').remove();
            });
            $('.delete-experience').on('click', function() {
                var id = $(this).data('id');
              $.ajax({
                    url: "{{ url('delete-experience') }}/" + id,
                    type: "GET",
                    success: function(response) {
                        if (response.status == 'success') {
                            $('.experience-row[data-id="' + id + '"]').remove();
                        }
                    },
                    error: function(error) {
                        console.error('Error deleting experience detail:', error);
                    }
                });
            });


            $(document).on('click', "#add-more-family", function(e) {
                var html = $(".clone-family").children().clone();
                $(".append-family").append(html);
            });
            $(document).on('click', "#delete-family", function(e) {
                var self = $(this);
                self.closest('.closet-div-family').remove();
            });
            $('.delete-family').on('click', function() {
                var id = $(this).data('id');
                $.ajax({
                    url: "{{ url('delete-family') }}/" + id,
                    type: "GET",
                    success: function(response) {
                        if (response.status == 'success') {
                            $('.family-row[data-id="' + id + '"]').remove();
                        }
                    },
                    error: function(error) {
                        console.error('Error deleting family detail:', error);
                    }
                });
            });

            $(document).on("submit", "#form_id", function(e) {
                e.preventDefault();
                // show_loader();
                // var url = "{{ url('job-applicant') }}";
                var formData = new FormData($('#form_id')[0]);

                $.ajax({
                    url: '{{ url("employee-detail/$data->id") }}',
                    type: "POST",
                    dataType: "json",
                    headers: {
                        'X-CSRF-TOKEN': _token
                    },
                    data: formData,
                    processData: false,
                    contentType: false, // Set content type to false for file uploads
                    success: function(response) {
                        $('.error').text('');
                        // if (response.status == 'success') {
                        //     window.location.href = "{{ url('job-applicant') }}";
                        // }
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