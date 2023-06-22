<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title> Expert Dashboard</title>
  {{-- <script src="{{ asset('js/app.js') }}"></script> --}}

  <!-- plugins:css -->
  <link rel="stylesheet" href="/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="/vendors/base/vendor.bundle.base.css">

  <link rel="stylesheet" href="/css/style1.0.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="/images/favicon.png" />
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
   <x-menu-admin/>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
    <x-navigation-comp />
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="d-flex justify-content-between align-items-center">
                <div>
                  <h4 class="font-weight-bold mb-0">Hello {{ Auth::guard('experts')->user()->fullname }}</h4>
                </div>
                <div>
                    <button type="button" class="btn btn-primary btn-icon-text btn-rounded">
                      <i class="ti-clipboard btn-icon-prepend"></i>Report
                    </button>
                </div>
              </div>
            </div>
          </div>
         <x-appoint-cards-stats/>









          <div class="row">
            <div class="col-md-10 grid-margin stretch-card">
              <div class="card col-md-10">
                <div class="card-body">
                  <p class="card-title mb-0">Top Products</p>
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Client</th>
                          <th>Email</th>
                          <th>Appointment</th>
                          <th>Status</th>
                          <th>Amount</th>
                          <th>Date</th>
                          <th>Feed-Back</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach (Auth::guard('experts')->user()->users()->get() as $appoint )


                        <tr>
                          <td>{{$appoint->name}}</td>
                          <td>{{$appoint->email}}</td>
                          <td>{{$appoint->pivot->id}}</td>
                          <td>
                          @switch($appoint->pivot->status)
                              @case('completed')
                                 <label class="badge badge-success">Completed</label></td>
                                  @break
                              @case('onHold')
                                 <label class="badge badge-warning">In progress</label></td>
                                  @break

                              @case('canceled')

                              <label class="badge badge-danger">Canceled</label></td>


                             @break

                              @default

                          @endswitch
                        </td>
                          <td>{{$appoint->pivot->status}}</td>
                          <td>{{$appoint->pivot->date}}</td>
                          <td><label class="badge badge-danger">Pending</label></td>
                        </tr>
                        @endforeach

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

          </div>

        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2018 <a href="https://www.templatewatch.com/" target="_blank">Templatewatch</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->

  <script src="vendors/chart.js/Chart.min.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>

</html>

