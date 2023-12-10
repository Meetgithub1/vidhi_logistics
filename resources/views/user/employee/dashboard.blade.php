@extends('user.layout.app')

@section('title', 'Vidhi Logistics')

@section('content')
<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header">
        <div class="row ">
          <div class="col-6">
            <h5 class="card-title mb-0">Employee</h5>
          </div>
          <div class="col-6 text-end"><a href="{{ url('employee-detail/create') }}" class="btn btn-primary"><i
                class="ri-add-fill"></i> Add Employee</a></div>
        </div>
      </div>
      <div class="card-body">
        <table id="alternative-pagination1"
          class="table nowrap dt-responsive align-middle table-hover table-bordered data-table" style="width:100%">
          <thead>
            <tr>
              <th>ID</th>
              <th>EMPLOYEE NAME</th>
              <th>EMAIL</th>
              <th>MOBILE NO.</th>
              <th>ACTION</th>
            </tr>
          </thead>
        </table>
      </div>
    </div>
  </div>
</div>
<!--end row-->
@endsection

@section('script')
<script>
  $(document).ready(function () {

    var table = $('.data-table').DataTable({
                stateSave: true,
                processing: true,
                serverSide: true,
                ajax: {
                    type: 'get',

                    url: '{{ url('employee-datatable') }}',
                    // headers: {
                    //     'X-CSRF-TOKEN': "{{ @csrf_token() }}"
                    // },
                },

                columns: [
                    {
                        data: 'id',
                        name: 'id',
                    },
                    {
                        data: 'emp_name',
                        name: 'emp_name'
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
                    {
                        data: 'mobile_number',
                        name: 'mobile_number'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: true,
                        searchable: true
                    }
                ]

            });

            
        @if(session('success'))
        toastr.success("{{ session('success') }}");
        @endif

});

</script>
@endsection