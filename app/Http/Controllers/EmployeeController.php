<?php

namespace App\Http\Controllers;

use App\Models\AcademicDetails;
use App\Models\EmployeesDetails;
use App\Models\EmployeeTrainingHistory;
use App\Models\ExperienceDetails;
use App\Models\FamilyDetails;
use App\Models\HrDetails;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $photo_path = 'storage/uploads/personal_details/emp_photos';

    protected $aadhar_path = 'storage/uploads/personal_details/aadhar_images';

    protected $pan_path = 'storage/uploads/personal_details/pan_images';

    protected $bank_passbook_path = 'storage/uploads/personal_details/bank_passbook_images';

    protected $cast_certificate_path = 'storage/uploads/personal_details/cast_certificate_images';

    protected $passport_path = 'storage/uploads/personal_details/passport_images';

    protected $voter_path = 'storage/uploads/personal_details/voter_images';

    protected $licence_path = 'storage/uploads/personal_details/drg_licence_images';

    protected $rationcard_path = 'storage/uploads/personal_details/rationcard_images';

    protected $bloodgroup_path = 'storage/uploads/personal_details/blood_group_images';

    protected $slc_path = 'storage/uploads/personal_details/slc_images';

    protected $salaryslip_path = 'storage/uploads/personal_details/salaryslip_images';

    protected $education_path = 'storage/uploads/education_images';

    protected $experience_path = 'storage/uploads/experience_images';

    public function index()
    {
        return view('user.employee.dashboard');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.employee.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $post_data = $request->all();
        // dd($post_data);
        $validator = Validator::make($request->all(), [
            'emp_name' => 'required',
            // 'email' => 'email|unique:employees_details',
            // 'mobile_number' => 'required|numeric|digits:10',
        ], [
            'emp_name.required' => 'Name field is required.',
        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        try {
            $employeeData = [
                'emp_name' => $post_data['emp_name'],
                'email' => $post_data['email'],
                'mobile_number' => $post_data['mobile_number'],
                'employee_id' => $post_data['employee_id'],
                'permanent_address' => $post_data['permanent_address'],
                'present_address' => $post_data['present_address'],
                'identification' => $post_data['identification'],
                'religion' => $post_data['religion'],
                'caste' => $post_data['caste'],
                'sub_caste' => $post_data['sub_caste'],
                'blood_group' => $post_data['blood_group'],
                'age' => $post_data['calculated_age'],
                'bank_name' => $post_data['bank_name'],
                'account_number' => $post_data['account_number'],
                'ifsc_code' => $post_data['ifsc_code'],
                'branch_address' => $post_data['branch_address'],
                'marriage_date' => $post_data['marriage_date'],
                'birth_date' => $post_data['birth_date'],
                'aadhar_number' => $post_data['aadhar_number'],
                'uan_number' => $post_data['uan_number'],
                'pf_member_id' => $post_data['pf_member_id'],
                'passport_number' => $post_data['passport_number'],
                'pan_number' => $post_data['pan_number'],
                'driving_licence_number' => $post_data['driving_licence_number'],
                'voter_number' => $post_data['voter_number'],
                'height' => $post_data['height'],
                'weight' => $post_data['weight'],
                'emp_designation' => $post_data['emp_designation'],
                'department' => $post_data['department'],
                'date_of_joining' => $post_data['date_of_joining'],
                'gender' => $post_data['gender'],
                'category' => $post_data['category'],
                'marital_status' => $post_data['marital_status'],
                'details_of_surgical_operation' => $post_data['details_of_surgical_operation'],
                'details_of_civil_or_criminal_litigation' => $post_data['details_of_civil_or_criminal_litigation'],
                'language' => $post_data['language'],
                'current_salary' => $post_data['current_salary'],
                'expected_salary' => $post_data['expected_salary'],
                'reason_for_job_change' => $post_data['reason_for_job_change'],
                'emp_image' => isset($post_data['emp_image']) && ! empty($post_data['emp_image']) ? upload_file($request->file('emp_image'), $this->photo_path) : null,
                'aadhar_image' => isset($post_data['aadhar_image']) && ! empty($post_data['aadhar_image']) ? upload_file($request->file('aadhar_image'), $this->aadhar_path) : null,
                'pan_image' => isset($post_data['pan_image']) && ! empty($post_data['pan_image']) ? upload_file($request->file('pan_image'), $this->pan_path) : null,
                'bank_passbook_image' => isset($post_data['bank_passbook_image']) && ! empty($post_data['bank_passbook_image']) ? upload_file($request->file('bank_passbook_image'), $this->bank_passbook_path) : null,
                'cast_certificate_image' => isset($post_data['cast_certificate_image']) && ! empty($post_data['cast_certificate_image']) ? upload_file($request->file('cast_certificate_image'), $this->cast_certificate_path) : null,
                'passport_image' => isset($post_data['passport_image']) && ! empty($post_data['passport_image']) ? upload_file($request->file('passport_image'), $this->passport_path) : null,
                'voter_image' => isset($post_data['voter_image']) && ! empty($post_data['voter_image']) ? upload_file($request->file('voter_image'), $this->voter_path) : null,
                'drg_licence_image' => isset($post_data['drg_licence_image']) && ! empty($post_data['drg_licence_image']) ? upload_file($request->file('drg_licence_image'), $this->licence_path) : null,
                'rationcard_image' => isset($post_data['rationcard_image']) && ! empty($post_data['rationcard_image']) ? upload_file($request->file('rationcard_image'), $this->rationcard_path) : null,
                'blood_group_image' => isset($post_data['blood_group_image']) && ! empty($post_data['blood_group_image']) ? upload_file($request->file('blood_group_image'), $this->bloodgroup_path) : null,
                'slc_image' => isset($post_data['slc_image']) && ! empty($post_data['slc_image']) ? upload_file($request->file('slc_image'), $this->slc_path) : null,
                'salaryslip_image' => isset($post_data['salaryslip_image']) && ! empty($post_data['salaryslip_image']) ? upload_file($request->file('salaryslip_image'), $this->salaryslip_path) : null,
                'Quality_knowledge' => $post_data['Quality_knowledge'],
                'compuer_knowledge' => $post_data['compuer_knowledge'],
                'notice_period' => $post_data['notice_period'],
            ];
            // dd($employeeData);
            // For Begin a transaction
            DB::beginTransaction();
            $employee = EmployeesDetails::create($employeeData);

            // START ACADEMIC DETAILS STORE

            // $last_entry = EmployeesDetails::latest()->first();

            $academicDetails = $request->institute_university;
            foreach ($academicDetails as $index => $academicDetail) {
                // dd($request->input('year_of_passing')[$index]);
                // ... other data

                $educationImageFile = $request->file("education_image.$index");
                $educationImage = null;

                if (isset($educationImageFile) && $educationImageFile->isValid()) {
                    $educationImage = upload_file($educationImageFile, $this->education_path);
                }

                $academicData = [
                    'employee_detail_id' => $employee->id,
                    'institute_university' => $academicDetail,
                    'year_of_passing' => $request->input('year_of_passing')[$index],
                    'marks' => $request->input('marks')[$index],
                    'education_image' => $educationImage,
                    'remarks' => $request->input('remarks')[$index],
                ];

                AcademicDetails::create($academicData);
            }
            // END ACADEMIC DETAILS STORE

            // START EMPLOYEE DETAILS STORE
            $experienceDetails = $request->company_name;
            foreach ($experienceDetails as $index => $experienceDetail) {
                $experienceImageFile = $request->file("experience_certificate_image.$index");
                $experienceImage = null;

                if (isset($experienceImageFile) && $experienceImageFile->isValid()) {
                    $experienceImage = upload_file($experienceImageFile, $this->experience_path);
                }

                $academicData = [
                    'employee_detail_id' => $employee->id,
                    'company_name' => $experienceDetail,
                    'duration' => $request->input('duration')[$index],
                    'designation' => $request->input('designation')[$index],
                    'nature_of_work' => $request->input('nature_of_work')[$index],
                    'reference' => $request->input('reference')[$index],
                    'experience_certificate_image' => $experienceImage,
                ];

                ExperienceDetails::create($academicData);
            }

            // END EMPLOYEE DETAILS STORE

            // START FAMILY DETAILS STORE
            $familyDetails = $request->fm_name;
            foreach ($familyDetails as $index => $familyDetail) {
                $familyDetail = [
                    'employee_detail_id' => $employee->id,
                    'fm_name' => $familyDetail,
                    'relation' => $request->input('relation')[$index],
                    'education' => $request->input('education')[$index],
                    'occupation_detail' => $request->input('occupation_detail')[$index],
                ];
                FamilyDetails::create($familyDetail);
            }
            // END FAMILY DETAILS STORE

            // START HR DEPARTMENT DETAILS STORE
            $hr_details = $request->all();
            $hrData = [
                'employee_detail_id' => $employee->id,
                'offered_salary' => $hr_details['offered_salary'],
                'revised_salary' => $hr_details['revised_salary'],
                'date_of_revise_salary' => $hr_details['date_of_revise_salary'],
                'mobile_permission' => $hr_details['mobile_permission'],
                'job_time' => $hr_details['job_time'],
                'probation_period' => $hr_details['probation_period'],
            ];
            $employee = HrDetails::create($hrData);
            // END HR DEPARTMENT DETAILS STORE

            // START EMPLOYEE TRAINING HISTORY CARD
            $employee_training_histories = $request->all();
            $employee_training_data = [
                'employee_detail_id' => $employee->id,
                'description_of_training' => $employee_training_histories['description_of_training'],
                'training_given_by' => $employee_training_histories['training_given_by'],
                'date_of_training' => $employee_training_histories['date_of_training'],
                'remark' => $employee_training_histories['remark'],
            ];
            $employee = EmployeeTrainingHistory::create($employee_training_data);
            // END EMPLOYEE TRAINING HISTORY CARD

            // Do something
            // Session::flash('status', 'success');
            // Session::flash('message', 'Employee Created Successfully.');
            session()->flash('success', 'Employee Created Successfully.');
            DB::commit();

            return response()->json(['status' => 'success', 'message' => 'Employee Created Successfully.']);
            // Commit the transaction
        } catch (\Throwable $e) {
            // An error occured
            // dd($e);
            DB::rollback();
            Session::flash('status', 'fail');
            Session::flash('message', "Something Wen't wrong please try again latter.");

            return response()->json(['error' => "Something Wen't wrong please try again later."]);

            // and throw the error again.
            throw $e;
        }

        // if ($employee) {
        //     // Session::flash('status', 'success');
        //     // Session::flash('message', 'Employee Created Successfully.');
        //     return response()->json(array('status' => 'success', 'message' => "Employee Created Successfully."));
        // } else {
        //     // Session::flash('status', 'fail');
        //     // Session::flash('message', "Something Wen't wrong please try again latter.");
        //     return response()->json(array('error' => "Something Wen't wrong please try again latter."));
        // }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // $employee = EmployeesDetails::with('experiencedetails')->get();
        // $data = ExperienceDetails::find($id);
        // return view('user.employee.edit', ['data' => $data, 'category' => $employee]);

        $data = EmployeesDetails::with(['academicdetails', 'experiencedetails', 'familydetails', 'hrdetails', 'employeetraininghistory'])->where('id', $id)->first();

        // dd($data);
        return view('user.employee.edit')->with(['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $post_data = $request->all();

        // Validate the request data
        $validator = Validator::make($request->all(), [
            'emp_name' => 'required',
            // Add validation rules for other fields as needed
        ], [
            'emp_name.required' => 'Name field is required.',
            // Add custom error messages for other fields as needed
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        try {
            // Begin a transaction
            DB::beginTransaction();

            // Find the employee by ID
            $employee = EmployeesDetails::findOrFail($id);

            // Update the employee data
            $employee->update([
                'emp_name' => $post_data['emp_name'],
                'email' => $post_data['email'],
                'mobile_number' => $post_data['mobile_number'],
                'employee_id' => $post_data['employee_id'],
                'permanent_address' => $post_data['permanent_address'],
                'present_address' => $post_data['present_address'],
                'identification' => $post_data['identification'],
                'religion' => $post_data['religion'],
                'caste' => $post_data['caste'],
                'sub_caste' => $post_data['sub_caste'],
                'blood_group' => $post_data['blood_group'],
                'age' => $post_data['calculated_age'],
                'bank_name' => $post_data['bank_name'],
                'account_number' => $post_data['account_number'],
                'ifsc_code' => $post_data['ifsc_code'],
                'branch_address' => $post_data['branch_address'],
                'marriage_date' => $post_data['marriage_date'],
                'birth_date' => $post_data['birth_date'],
                'aadhar_number' => $post_data['aadhar_number'],
                'uan_number' => $post_data['uan_number'],
                'pf_member_id' => $post_data['pf_member_id'],
                'passport_number' => $post_data['passport_number'],
                'pan_number' => $post_data['pan_number'],
                'driving_licence_number' => $post_data['driving_licence_number'],
                'voter_number' => $post_data['voter_number'],
                'height' => $post_data['height'],
                'weight' => $post_data['weight'],
                'emp_designation' => $post_data['emp_designation'],
                'department' => $post_data['department'],
                'date_of_joining' => $post_data['date_of_joining'],
                'gender' => $post_data['gender'],
                'category' => $post_data['category'],
                'marital_status' => $post_data['marital_status'],
                'details_of_surgical_operation' => $post_data['details_of_surgical_operation'],
                'details_of_civil_or_criminal_litigation' => $post_data['details_of_civil_or_criminal_litigation'],
                'language' => $post_data['language'],
                'current_salary' => $post_data['current_salary'],
                'expected_salary' => $post_data['expected_salary'],
                'reason_for_job_change' => $post_data['reason_for_job_change'],
                'emp_image' => isset($post_data['emp_image']) && ! empty($post_data['emp_image']) ? upload_file($request->file('emp_image'), $this->photo_path, $employee->emp_image) : null,
                'aadhar_image' => isset($post_data['aadhar_image']) && ! empty($post_data['aadhar_image']) ? upload_file($request->file('aadhar_image'), $this->aadhar_path) : null,
                'pan_image' => isset($post_data['pan_image']) && ! empty($post_data['pan_image']) ? upload_file($request->file('pan_image'), $this->pan_path) : null,
                'bank_passbook_image' => isset($post_data['bank_passbook_image']) && ! empty($post_data['bank_passbook_image']) ? upload_file($request->file('bank_passbook_image'), $this->bank_passbook_path) : null,
                'cast_certificate_image' => isset($post_data['cast_certificate_image']) && ! empty($post_data['cast_certificate_image']) ? upload_file($request->file('cast_certificate_image'), $this->cast_certificate_path) : null,
                'passport_image' => isset($post_data['passport_image']) && ! empty($post_data['passport_image']) ? upload_file($request->file('passport_image'), $this->passport_path) : null,
                'voter_image' => isset($post_data['voter_image']) && ! empty($post_data['voter_image']) ? upload_file($request->file('voter_image'), $this->voter_path) : null,
                'drg_licence_image' => isset($post_data['drg_licence_image']) && ! empty($post_data['drg_licence_image']) ? upload_file($request->file('drg_licence_image'), $this->licence_path) : null,
                'rationcard_image' => isset($post_data['rationcard_image']) && ! empty($post_data['rationcard_image']) ? upload_file($request->file('rationcard_image'), $this->rationcard_path) : null,
                'blood_group_image' => isset($post_data['blood_group_image']) && ! empty($post_data['blood_group_image']) ? upload_file($request->file('blood_group_image'), $this->bloodgroup_path) : null,
                'slc_image' => isset($post_data['slc_image']) && ! empty($post_data['slc_image']) ? upload_file($request->file('slc_image'), $this->slc_path) : null,
                'salaryslip_image' => isset($post_data['salaryslip_image']) && ! empty($post_data['salaryslip_image']) ? upload_file($request->file('salaryslip_image'), $this->salaryslip_path) : null,
                'Quality_knowledge' => $post_data['Quality_knowledge'],
                'compuer_knowledge' => $post_data['compuer_knowledge'],
                'notice_period' => $post_data['notice_period'],
            ]);

            // Update academic details

            $academicDetails = $request->institute_university;
            foreach ($academicDetails as $index => $academicDetail) {
                $academic = AcademicDetails::updateOrCreate([
                    'id' => $request->academic_id[$index],
                ],
                    [
                        'employee_detail_id' => $employee->id,
                        'institute_university' => $academicDetail,
                        'year_of_passing' => $request->input('year_of_passing')[$index],
                        'marks' => $request->input('marks')[$index],
                        'remarks' => $request->input('remarks')[$index],

                    ]
                );

                // Handle Education Certificate Image
                $educationImageFile = $request->file("education_image.$index");
                if ($educationImageFile) {
                    // dd($educationImageFile);
                    // Upload and save the new image
                    $educationImage = upload_file($educationImageFile, $this->education_path,$academic->education_image);
                    // dd($educationImage);
                    AcademicDetails::where('id', $request->academic_id[$index])->update(['education_image' => $educationImage]);
                }
            }

            // Commit the transaction
            DB::commit();

            return response()->json(['status' => 'success', 'message' => 'Employee updated successfully.']);
        } catch (\Throwable $e) {
            dd($e);
            // Rollback the transaction on error
            DB::rollback();

            return response()->json(['error' => 'Something went wrong. Please try again later.']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function datatable(Request $request)
    {
        if ($request->ajax()) {
            $data = EmployeesDetails::get();

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $action = '<a href="'.url('employee-detail/'.$data['id']).'" class="view btn btn-sm btn-success"><i class="fa-solid fa-eye"></i></a> <a href="'.url('employee-detail/'.$data['id'].'/edit').'" class="edit btn btn-sm btn-primary"><i class="fa-solid fa-pen-to-square"></i></a> <a href="javascript:void(0)" class="delete_btn delete btn btn-sm btn-danger" data-id="'.$data->id.'"><i class="fa-solid fa-trash"></i></a>
                    
                    <a href="'.url('print_pdf', $data['id']).'" class="btn btn-sm btn-warning" data-id="'.$data->id.'"><i class="fa-solid fa-file-pdf"></i></a>
                    
                    <a href="javascript:void(0)" class="btn btn-sm btn-info" data-id="'.$data->id.'"><i class="fa-solid fa-print"></i></a>';

                    return $action;
                })
                ->escapeColumns(['*'])
                ->make(true);
        }
    }

    public function print_pdf($id)
    {

        // $employee = EmployeesDetails::find($id);
        $data = EmployeesDetails::with(['academicdetails', 'experiencedetails', 'familydetails', 'hrdetails', 'employeetraininghistory'])->where('id', $id)->first();
        // dd($data['hrdetails'][0]['job_time']);
        $pdf = PDF::loadview('user.employee.emp_pdf', compact('data'));

        return $pdf->download('employee_details.pdf');
    }

    public function delete_academic($id)
    {
        $delete_academic = AcademicDetails::where('id', $id)->delete();
        if ($delete_academic) {
            return response()->json(['status' => 'success']);
        } else {
            return response()->json(['error' => "Something Wen't wrong please try again latter."]);
        }
    }

    public function delete_experience($id)
    {
        $delete_experience = ExperienceDetails::where('id', $id)->delete();
        if ($delete_experience) {
            return response()->json(['status' => 'success']);
        } else {
            return response()->json(['error' => "Something Wen't wrong please try again latter."]);
        }
    }

    public function delete_family($id)
    {
        $delete_family = FamilyDetails::where('id', $id)->delete();
        if ($delete_family) {
            return response()->json(['status' => 'success']);
        } else {
            return response()->json(['error' => "Something Wen't wrong please try again latter."]);
        }
    }
}
