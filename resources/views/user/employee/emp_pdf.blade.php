<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* @font-face {
            font-family: 'Calibri Regular';
            src: url('{{ asset(' font/Calibri Regular.ttf') }}') format('truetype');
        }

        * {
            font-family: 'Calibri Regular';
        } */

        .page-break {
            page-break-after: always;
        }

        .image-container {
            page-break-before: always;
        }

        .personal_details table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        .academic,
        .experience,
        .family,
        .employee-training {
            text-align: center;
        }

        .academic-th,
        .experience-th,
        .family-th,
        .employee-training-th {
            text-align: center;
        }

        .table-width {
            width: 280px;
            height: auto;
        }

        .table-width2 {
            width: 190px;
        }
    </style>
</head>

<body>
    <table class="personal_details" style="width:100%">
        <tr>
            <th colspan="4" style="text-align:center;">VIDHI LOGISTICS METODA</th>
        </tr>
        <tr>
            <th colspan="4" style="text-align:center;">EMPLOYEE APPLICATION CUM BIO DATA CUM HISTORY CARD</th>
        </tr>

        <tr>
            <td colspan="2"><b>Post Applied For:</b> {{ $data->emp_designation }}</td>
            <td colspan="2"><b>Dept:</b> {{ $data->department }}</td>
        </tr>
        <tr>
            <th colspan="4">Personal Details:</th>
        </tr>
        <tr>
            <td colspan="4"><b>Name of Employee's:</b> {{ $data->emp_name }}</td>
        </tr>
        <tr>
            <td rowspan="3" colspan="2" class="table-width"><b>Present Address:</b> {{ $data->present_address }}</td>
            <td class="table-width2"><b>Identification:</b> {{ $data->identification }}</td>
            <td rowspan="9">
                @if (isset($data->emp_image) && !empty($data->emp_image))
                <a href="{{ asset('storage/uploads/personal_details/emp_photos/' . $data->emp_image) }}"
                    target="_blank"><img
                        src="{{ asset('storage/uploads/personal_details/emp_photos/' . $data->emp_image) }}"
                        alt="Aadhar Image" width="200px"></a>
                @endif
            </td>
        </tr>
        <tr>
            <td class="table-width2"><b>Gender:</b> {{ $data->gender }}</td>
        </tr>
        <tr>
            <td class="table-width2"><b>Religion:</b> {{ $data->religion }}</td>
        </tr>
        <tr>
            <td rowspan="3" colspan="2" class="table-width"><b>Permanent Address:</b> {{ $data->permanent_address }}
            </td>
            <td class="table-width2"><b>Caste:</b> {{ $data->caste }}</td>
        </tr>
        <tr>
            <td class="table-width2"><b>Sub Caste:</b> {{ $data->sub_caste }}</td>
        </tr>
        <tr>
            <td class="table-width2"><b>Blood Group:</b> {{ $data->blood_group }}</td>
        </tr>
        <tr>
            <td colspan="2" class="table-width"><b>Date of Birth:</b> {{ date('d-m-Y', strtotime($data->birth_date)); }}
            </td>
            <td class="table-width2"><b>Age:</b> {{ $data->age }}</td>
        </tr>
        <tr>
            <td colspan="2" class="table-width"><b>Bank Name:</b> {{ $data->bank_name }} </td>
            <td class="table-width2"><b>A/c. No</b> {{ $data->account_number}}</td>
        </tr>
        <tr>
            <td colspan="2" class="table-width"><b>Branch Address:</b> {{ $data->branch_address}}</td>
            <td class="table-width2"><b>IFSC:</b> {{ $data->ifsc_code}}</td>
        </tr>
        <tr>
            <td colspan="2" class="table-width"><b>Marital Status:</b> {{ $data->marital_status }}</td>
            <td><b>Marriage Date:</b> {{ date('d-m-Y', strtotime($data->marriage_date)); }}</td>

            <td><b>Weight:</b> {{ $data->weight }}</td>
        </tr>
        <tr>
            <td colspan="2" class="table-width"><b>Email ID:</b> {{ $data->email }}</td>
            <td><b>Cell No:</b> {{ $data->mobile_number }}</td>
            <td><b>Height:</b> {{ $data->height }}</td>
        </tr>
        <tr>
            <td colspan="2" class="table-width"><b>Aadhar Card No:</b> {{ $data->aadhar_number }}</td>
            <td colspan="2"><b>Passport No:</b> {{ $data->passport_number }}</td>
        </tr>
        <tr>
            <td colspan="2" class="table-width"><b>PAN No:</b> {{ $data->pan_number }}</td>
            <td colspan="2"><b>Election Card:</b> {{ $data->voter_number }}</td>
        </tr>
        <tr>
            <td colspan="2" class="table-width"><b>Driving Licence No:</b> {{ $data->driving_licence_number }}</td>
            <td class="language" colspan="2"><b>Language Known:</b> {{ $data->language }}</td>
        </tr>
        <tr>
            <td colspan="2" class="table-width"><b>Detais of surgical operation undergone:</b> </td>
            <td colspan="2">{{ $data->details_of_surgical_operation}}</td>
        </tr>
        <tr>
            <td colspan="2" class="table-width" style="border-bottom:0px;"><b>Detais of civil or criminal litigation, if
                    any:</b></td>
            <td colspan="2" style="border-bottom:0px;">{{ $data->details_of_civil_or_criminal_litigation}}</td>
        </tr>
    </table>

    {{-- START ACADEMIC DETAILS --}}
    <div style="border: 1px solid black;border-bottom:0px;">
        <b> Academic Details:</b>
    </div>
    <table style="width:100%">
        <tr>
            <th class="academic-th">Sr. No.</th>
            <th class="academic-th">Name of Institue/University</th>
            <th class="academic-th">Year of Passing</th>
            <th class="academic-th">% Marks </th>
            <th class="academic-th">Remarks</th>
        </tr>
        @php
        $id = 1;
        @endphp
        @foreach ($data['academicdetails'] as $a)
        <tr>
            <td class="academic">{{ $id++ }}</td>
            <td class="academic">{{ $a->institute_university }}</td>
            <td class="academic">{{ $a->year_of_passing }}</td>
            <td class="academic">{{ $a->marks }}</td>
            <td class="academic">{{ $a->remarks }}</td>
        </tr>
        @endforeach
    </table>

    <div class="page-break"></div>

    <table class="personal_details" style="width:100%">
        <tr>
            <th colspan="3" style="text-align:center">VIDHI LOGISTICS METODA</th>
        </tr>
        <tr>
            <th colspan="3" style="text-align:center;border-bottom:0px;">EMPLOYEE APPLICATION CUM BIO DATA CUM HISTORY
                CARD</th>
        </tr>
    </table>

    {{-- START EXPERIENCE DETAILS --}}
    <div style="border: 1px solid black;border-bottom:0px;">
        <b>Experience Details:</b>
    </div>
    <table style="width:100%;">
        <tr>
            <th class="experience-th">Sr. No.</th>
            <th class="experience-th">Company Name</th>
            <th class="experience-th">Duration</th>
            <th class="experience-th">Designation</th>
            <th class="experience-th">Nature Of Work</th>
            <th class="experience-th">Reference</th>
        </tr>
        @php
        $id = 1;
        @endphp
        @foreach ($data['experiencedetails'] as $e)
        <tr>
            <td class="experience" style="border-bottom:0px;">{{ $id++ }}</td>
            <td class="experience" style="border-bottom:0px;">{{ $e->company_name }}</td>
            <td class="experience" style="border-bottom:0px;">{{ $e->duration }}</td>
            <td class="experience" style="border-bottom:0px;">{{ $e->designation }}</td>
            <td class="experience" style="border-bottom:0px;">{{ $e->nature_of_work }}</td>
            <td class="experience" style="border-bottom:0px;">{{ $e->reference }}</td>
        </tr>
        @endforeach
    </table>
    {{-- END EXPERIENCE DETAILS --}}

    {{-- START FAMILY DETAILS --}}
    <div style="border: 1px solid black;border-bottom:0px;">
        <b> Family Details:</b>
    </div>
    <table style="width:100%">
        <tr>
            <th class="family-th">Sr. No.</th>
            <th class="family-th">Name</th>
            <th class="family-th">Relation</th>
            <th class="family-th">Education</th>
            <th class="family-th">Occupation Detail</th>
        </tr>
        @php
        $id = 1;
        @endphp
        @foreach ($data['familydetails'] as $f)
        <tr>
            <td class="family" style="border-bottom:0px;">{{ $id++ }}</td>
            <td class="family" style="border-bottom:0px;">{{ $f->fm_name }}</td>
            <td class="family" style="border-bottom:0px;">{{ $f->relation }}</td>
            <td class="family" style="border-bottom:0px;">{{ $f->education }}</td>
            <td class="family" style="border-bottom:0px;">{{ $f->occupation_detail }}</td>
        </tr>
        @endforeach
    </table>

    <div style="border: 1px solid black; height:80px;border-bottom:0px;">
        <b style="float:right;margin-top:55px">Employee's Signature</b>
    </div>

    {{-- END EXPERIENCE DETAILS --}}

    {{-- START H.R DEPARTMENT DETAILS --}}
    <div style="border: 1px solid black;border-bottom:0px;">
        <b>(A) H.R Department (OFFICE USE ONLY) :</b>
    </div>
    <table style="width:100%;">
        <tr>
            <td><b>Offered Salary:</b> {{ $data['hrdetails'][0]['offered_salary'] }} </td>
            <td><b>Revised Salary:</b> {{ $data['hrdetails'][0]['revised_salary'] }} </td>
        </tr>
        <tr>
            <td><b>Date Of Revise Salary:</b> {{ date('d-m-Y',
                strtotime($data['hrdetails'][0]['date_of_revise_salary'])); }}</td>
            <td><b>Mobile Permission:</b> {{ $data['hrdetails'][0]['mobile_permission'] }}</td>
        </tr>
        <tr>
            <td style="border-bottom:0px;"><b>Job Time:</b> {{ $data['hrdetails'][0]['job_time'] }}</td>
            <td style="border-bottom:0px;"><b>Probation Period:</b> {{ $data['hrdetails'][0]['probation_period'] }}
            </td>
        </tr>
    </table>
    {{-- END H.R DEPARTMENT DETAILS --}}

    {{-- START EMPLOYEE TRAINING HISTORY CARD --}}

    {{-- {{ dd($data) }} --}}
    <div style="border: 1px solid black;border-bottom:0px;">
        <b>Employee Training History Card</b>
    </div>
    <table style="width:100%;">
        <tr>
            <th class="employee-training-th">Sr. No.</th>
            <th class="employee-training-th">Desciption of Training Received</th>
            <th class="employee-training-th">Training Given By</th>
            <th class="employee-training-th">Date of Training</th>
            <th class="employee-training-th">Remark</th>
        </tr>
        @php
        $id = 1;
        @endphp
        @foreach ($data['employeetraininghistory'] as $eth)
        <tr>
            <td class="employee-training" style="border-bottom:0px;">{{ $id++ }}</td>
            <td class="employee-training" style="border-bottom:0px;">{{ $eth->description_of_training }}</td>
            <td class="employee-training" style="border-bottom:0px;">{{ $eth->training_given_by }}</td>
            <td class="employee-training" style="border-bottom:0px;">{{ date('d-m-Y', strtotime($eth->date_of_training))
                }}</td>
            <td class="employee-training" style="border-bottom:0px;">{{ $eth->remark }}</td>
        </tr>
        @endforeach
    </table>
    {{-- END EMPLOYEE TRAINING HISTORY CARD --}}
    <div style="border: 1px solid black; height:80px;">
        <b style="float:left;margin-top:55px">Vidhi Logistics Management</b>
        <b style="float:right;margin-top:55px">HR Managar</b>
    </div>


    @if (isset($data->aadhar_image) && !empty($data->aadhar_image))
    <div class="image-container">
        <a href="{{ asset('storage/uploads/personal_details/aadhar_images/' . $data->aadhar_image) }}"
            target="_blank"><img
                src="{{ asset('storage/uploads/personal_details/aadhar_images/' . $data->aadhar_image) }}"
                alt="Aadhar Image" height="1000px" width="700px"></a>
    </div>
    @endif

    @if (isset($data->pan_image) && !empty($data->pan_image))
    <div class="image-container">
        <a href="{{ asset('storage/uploads/personal_details/pan_images/' . $data->pan_image) }}" target="_blank"><img
                src="{{ asset('storage/uploads/personal_details/pan_images/' . $data->pan_image) }}" alt="Pan Image"
                height="1000px" width="700px"></a>
    </div>
    @endif

    @if (isset($data->bank_passbook_image) && !empty($data->bank_passbook_image))
    <div class="image-container">
        <a href="{{ asset('storage/uploads/personal_details/bank_passbook_images/' . $data->bank_passbook_image) }}"
            target="_blank"><img
                src="{{ asset('storage/uploads/personal_details/bank_passbook_images/' . $data->bank_passbook_image) }}"
                alt="Pan Image" height="1000px" width="700px"></a>
    </div>
    @endif

    @if (isset($data->cast_certificate_image) && !empty($data->cast_certificate_image))
    <div class="image-container">
        <a href="{{ asset('storage/uploads/personal_details/cast_certificate_images/' . $data->cast_certificate_image) }}"
            target="_blank"><img
                src="{{ asset('storage/uploads/personal_details/cast_certificate_images/' . $data->cast_certificate_image) }}"
                alt="Pan Image" height="1000px" width="700px"></a>
    </div>
    @endif

    @if (isset($data->passport_image) && !empty($data->passport_image))
    <div class="image-container">
        <a href="{{ asset('storage/uploads/personal_details/passport_images/' . $data->passport_image) }}"
            target="_blank"><img
                src="{{ asset('storage/uploads/personal_details/passport_images/' . $data->passport_image) }}"
                alt="Pan Image" height="1000px" width="700px"></a>
            </div>
            @endif

</body>

</html>