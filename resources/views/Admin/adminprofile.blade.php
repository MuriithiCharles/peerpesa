@extends('layouts.app')



<link rel="stylesheet" type="text/css" href="/css/datatables.min.css"/>

<script type="text/javascript" src="/js/datatables.min.js"></script>


@section('content')
    <div style="background: rgba(245,245,345,0.7); margin-left: 30px; width: 55%; border-radius: 5px">
        <br>
    <div style=" margin:20px; ">
    <table id="datatable-buttons" class="table table-striped table-bordered" style="color: grey">
        <thead>
        <th><strong>Name</strong></th>
        <th><strong>E-Mail</strong></th>
        <th><strong>Admin</strong></th>
        <th><strong>User</strong></th>
        <th><strong>Accountant</strong></th>
        <th><strong>HR</strong></th>

        <th></th>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
               <form action="{{ url('/admin/assign-roles') }}" method="post">
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }} <input type="hidden" name="email" value="{{ $user->email }}"></td>
                   <td><input type="checkbox" {{ $user->hasRole('Admin') ? 'checked' : '' }} name="role_admin"></td>
                   <td><input type="checkbox" {{ $user->hasRole('User') ? 'checked' : '' }} name="role_user"></td>
                    <td><input type="checkbox" {{ $user->hasRole('Accountant') ? 'checked' : '' }} name="role_accountant"></td>
                   <td><input type="checkbox" {{ $user->hasRole('HR') ? 'checked' : '' }} name="role_HR"></td>

                   {{ csrf_field() }}
                    <td><button type="submit" style=" font-size: smaller">Assign Roles</button></td>
                </form>
            </tr>
        @endforeach
        </tbody>
    </table>

      <script>
          var resizefunc = [];
      </script>

      <!-- jQuery  -->
      <script src="/assets/js/jquery.min.js"></script>
      <script src="/assets/js/detect.js"></script>
      <script src="/assets/js/fastclick.js"></script>
      <script src="/assets/js/jquery.blockUI.js"></script>
      <script src="/assets/js/waves.js"></script>
      <script src="/assets/js/jquery.nicescroll.js"></script>
      <script src="/assets/js/jquery.slimscroll.js"></script>
      <script src="/assets/js/jquery.scrollTo.min.js"></script>

      <!-- Modal-Effect -->
      <script src="assets/plugins/custombox/dist/custombox.min.js"></script>
      <script src="assets/plugins/custombox/dist/legacy.min.js"></script>

      <!-- Datatables-->
      <script src="/assets/plugins/datatables/jquery.dataTables.min.js"></script>
      <script src="/assets/plugins/datatables/dataTables.bootstrap.js"></script>
      <script src="/assets/plugins/datatables/dataTables.buttons.min.js"></script>
      <script src="/assets/plugins/datatables/buttons.bootstrap.min.js"></script>
      <script src="/assets/plugins/datatables/jszip.min.js"></script>
      <script src="/assets/plugins/datatables/pdfmake.min.js"></script>
      <script src="/assets/plugins/datatables/vfs_fonts.js"></script>
      <script src="/assets/plugins/datatables/buttons.html5.min.js"></script>
      <script src="/assets/plugins/datatables/buttons.print.min.js"></script>
      <script src="/assets/plugins/datatables/dataTables.fixedHeader.min.js"></script>
      <script src="/assets/plugins/datatables/dataTables.keyTable.min.js"></script>
      <script src="/assets/plugins/datatables/dataTables.responsive.min.js"></script>
      <script src="/assets/plugins/datatables/responsive.bootstrap.min.js"></script>
      <script src="/assets/plugins/datatables/dataTables.scroller.min.js"></script>

      <!-- Datatable init js -->
      <script src="/assets/pages/datatables.init.js"></script>

      <!-- KNOB JS -->
      <!--[if IE]>
      <script type="text/javascript" src="/assets/plugins/jquery-knob/excanvas.js"></script>
      <![endif]-->
      <script src="/assets/plugins/jquery-knob/jquery.knob.js"></script>

      <!--Morris Chart-->
      <script src="/assets/plugins/morris/morris.min.js"></script>
      <script src="/assets/plugins/raphael/raphael-min.js"></script>

      <!-- Dashboard init -->
      <script src="/assets/pages/jquery.dashboard.js"></script>

      <!-- App js -->
      <script src="/assets/js/jquery.core.js"></script>
      <script src="/assets/js/jquery.app.js"></script>

      <script type="text/javascript">
          $(document).ready(function() {
              $('#datatable').dataTable();
              $('#datatable-keytable').DataTable( { keys: true } );
              $('#datatable-responsive').DataTable();
              $('#datatable-scroller').DataTable( { ajax: "/assets/plugins/datatables/json/scroller-demo.json", deferRender: true, scrollY: 380, scrollCollapse: true, scroller: true } );
              var table = $('#datatable-fixed-header').DataTable( { fixedHeader: true } );
          } );
          TableManageButtons.init();

      </script>
    </div>
    </div>

    @php(require_once('C:\xampp\htdocs\peerpesa\resources\views\layouts\footer.php') )

@endsection
