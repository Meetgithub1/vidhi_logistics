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
        <table id="datatable" class="table nowrap dt-responsive align-middle table-hover table-bordered data-table"
          style="width:100%">
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
{{-- <button type="button" class="btn btn-primary" id="confirm-text">Alert</button> --}}

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

            $(document).on("click", ".delete_btn", function() {

                  $.ajaxSetup({
                      headers: {
                          'X-CSRF-TOKEN': "{{ @csrf_token() }}"
                      },
                  });
                  var table = $('#datatable').dataTable();
                  var id = $(this).data("id");
                  Swal.fire({
                  title: 'Are you sure?',
                  text: "You won't be able to revert this!",
                  icon: 'warning',
                  showCancelButton: true,
                  confirmButtonText: 'Yes, delete it!',
                  customClass: {
                    confirmButton: 'btn btn-primary me-3',
                    cancelButton: 'btn btn-label-secondary'
                  },
                  buttonsStyling: false
                }).then(function(result) {
                      if (result.value) {
                          $.ajax({
                              type: "DELETE",
                              url: "{{ url('employee-detail') }}/" + id,
                              dataType: "json",
                              success: function(response) {
                                  if (response.status == "success") {
                                      // Swal.fire('Deleted!', 'Your data has been deleted.',
                                      //     'success');
                                      Swal.fire({
                                        icon: 'success',
                                        title: 'Deleted!',
                                        text: 'Your file has been deleted.',
                                        customClass: {
                                          confirmButton: 'btn btn-success'
                                        }
                                      });
                                      table.fnDraw();
                                  }
                              },
                              // error: function(e) {
                              //     // Swal.fire('Error!', 'Something went wrong.', 'error');
                              //     swal("Data Not Deleted!", "Please Try Again!","error");
                              // }
                          });
                      }
                  });
              });

            
        @if(session('success'))
        toastr.success("{{ session('success') }}");
        @endif

});

</script>
@endsection