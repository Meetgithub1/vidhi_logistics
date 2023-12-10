<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .personal_details table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        .academic,
        .experience,
        .family {
            padding-top: 10px;
            padding-bottom: 20px;
            padding-left: 30px;
            padding-right: 40px;
            text-align: center;
        }


        .experience-th,
        .academic-th,
        .family-th {
            text-align: center;
        }

        /* .academic-th{
            text-align: center;
        } */
    </style>
</head>

<body>
    <table class="personal_details" style="width:100%">
        <tr>
            <th colspan="3" style="text-align:center">ADVANCE DIESEL ENGINES PVT.LTP-METODA</th>
        </tr>
        <tr>
            <th colspan="3" style="text-align:center">EMPLOYEE APPLICATION CUM BIO DATA CUM HISTORY CARD</th>
        </tr>

        <tr>
            <td>Post Applied For:</td>
            <td>Dept:</td>
            <td>Form Date:</td>
        </tr>
        <tr>
            <th colspan="3">Personal Details:</th>
        </tr>
        <tr>
            <td colspan="3">Name of Employee's: {{ $data->emp_name }}</td>
        </tr>
        <tr>
            <td rowspan="3">Present Address:</td>
            <td>Identification:</td>
            <td></td>
        </tr>
        <tr>
            <td>Gender: {{ $data->gender }}</td>
            <td></td>
        </tr>
        <tr>
            <td>Religion: {{ $data->religion }}</td>
            <td></td>
        </tr>
        <tr>
            <td rowspan="3">Permanent Address:</td>
            <td>Caste:</td>
            <td></td>
        </tr>
        <tr>
            <td>Sub Caste:</td>
            <td></td>
        </tr>
        <tr>
            <td>Blood Group:</td>
            <td></td>
        </tr>
        <tr>
            <td>Date of Birth:</td>
            <td>Age:</td>
            <td></td>

        </tr>
        <tr>
            <td>Bank Name:</td>
            <td>A/c. No.</td>
            <td></td>
        </tr>
        <tr>
            <td>Branch Address:</td>
            <td>IFSC:</td>
            <td></td>
        </tr>
        <tr>
            <td>Marital Status:</td>
            <td>Marriage Date:</td>
            <td>Weight:</td>
        </tr>
        <tr>
            <td>Email ID:</td>
            <td>Cell No:</td>
            <td>Height:</td>
        </tr>
        <tr>
            <td>Aadhar Card No:</td>
            <td colspan="2">Passport No:</td>
        </tr>
        <tr>
            <td>PAN No:</td>
            <td colspan="2">Election Card:</td>
        </tr>
        <tr>
            <td>Driving Licence No:</td>
            <td colspan="2">Language Known:</td>
        </tr>
        <tr>
            <td>Detais of surgical operation undergone</td>
            <td colspan="2"></td>
        </tr>
        <tr>
            <td>Detais of civil or criminal litigation, if any</td>
            <td colspan="2"></td>
        </tr>
    </table>

    <div style="border: 1px solid black;">
        <b> Academic Details:</b>
    </div>
    <table style="width:100%">
        <tr>
            <th class="academic-th">Sr.No.</th>
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

    {{-- START EXPERIENCE DETAILS --}}
    <div style="border: 1px solid black;">
        <b> Experience Details:</b>
    </div>
    <table style="width:100%">
        <tr>
            <th class="experience-th">Sr.No.</th>
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
            <td class="experience">{{ $id++ }}</td>
            <td class="experience">{{ $e->company_name }}</td>
            <td class="experience">{{ $e->duration }}</td>
            <td class="experience">{{ $e->designation }}</td>
            <td class="experience">{{ $e->nature_of_work }}</td>
            <td class="experience">{{ $e->reference }}</td>
        </tr>
        @endforeach
    </table>
    {{-- END EXPERIENCE DETAILS --}}

    {{-- START FAMILY DETAILS --}}
    <div style="border: 1px solid black;">
        <b> Family Details:</b>
    </div>
    <table style="width:100%">
        <tr>
            <th class="family-th">Sr.No.</th>
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
            <td class="family">{{ $id++ }}</td>
            <td class="family">{{ $f->fm_name }}</td>
            <td class="family">{{ $f->relation }}</td>
            <td class="family">{{ $f->education }}</td>
            <td class="family">{{ $f->occupation_detail }}</td>
        </tr>
        @endforeach
    </table>

    <div style="border: 1px solid black; height:80px;text-align: right;">
        <span><b>Employee's Signature</b></span>
    </div>

    {{-- END EXPERIENCE DETAILS --}}

    {{-- START H.R DEPARTMENT DETAILS --}}
    <div style="border: 1px solid black;">
        <b>(A) H.R Department (OFFICE USE ONLY) :</b>
    </div>
    <table style="width:100%">
        <tr>
            <td>Offered Salary:</td>
            <td>Revised Salary:</td>
        </tr>
        <tr>
            <td>Date Of Revise Salary:</td>
            <td>Mobile Permission:</td>
        </tr>
        <tr>
            <td>Job Time: {{ $data['hrdetails'][0]['job_time'] }}</td>
            <td>Probation Period:</td>
        </tr>
    </table>
    {{-- END H.R DEPARTMENT DETAILS --}}

</body>

</html>