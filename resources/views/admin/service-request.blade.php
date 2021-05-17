<!DOCTYPE html>
<html lang="en" class="no-ie">
<head>
   <!-- Meta-->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
   <meta name="description" content="">
   <meta name="keywords" content="">
   <meta name="author" content="">
   @include('layouts.css')
   <!-- Data Table styles-->
   <link rel="stylesheet" href="{{ asset('admin/vendor/datatable/extensions/datatable-bootstrap/css/dataTables.bootstrap.css')}}">
   <link rel="stylesheet" href="{{ asset('admin/vendor/datatable/extensions/ColVis/css/dataTables.colVis.css')}}">
</head>

<body>
   <!-- START Main wrapper-->
   <div class="wrapper">
      <!-- START Top Navbar-->
      <nav role="navigation" class="navbar navbar-default navbar-top navbar-fixed-top">
         <!-- START Nav wrapper-->
         <div class="nav-wrapper">
            <!-- START Left navbar-->
            @include('layouts.topnav')
            <!-- END Left navbar-->
            
            <!-- END Right Navbar-->
         </div>
         <!-- END Nav wrapper-->
        
      </nav>
      <!-- END Top Navbar-->
      <!-- START aside-->
      <aside class="aside">
         @include('layouts.sidebar')
      </aside>
      <!-- End aside-->
      <!-- START aside-->
      <aside class="offsidebar">
         @include('layouts.right-sidebar')
      </aside>
      <!-- END aside-->
      <!-- START Main section-->
      <section>
         <!-- START Page content-->
         <div class="main-content">
            @include('layouts.breadcrumb')
            <div data-toggle="notify" data-onload data-message="&lt;b&gt;Welcome Visitor!&lt;/b&gt; Dismiss this message with a click or wait for it to disappear." data-options="{&quot;status&quot;:&quot;danger&quot;, &quot;pos&quot;:&quot;top-right&quot;}"
            class="hidden-xs"></div>
             <!-- START DATATABLE 1 -->
             <div class="row">
               <div class="col-lg-12">
                  <div class="panel panel-default">
                     <div class="panel-body">
                        <table id="datatable1" class="table table-striped table-hover">
                           <thead>
                              <tr>
                                 <th>Apartment</th>
                                 <th>Amount</th>
                                 <th>Contact</th>
                                 <th>Message</th>
                                 <th>Action</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr class="gradeX">
                                 <td><img src="{{ asset('admin/apartments/apart5.jpeg')}}" style="width:100px; height:60px;" alt="Image" class="img-responsive"></td>
                                 <td>Ugx 250,000</td>
                                 <td>0775601763</td>
                                 <td>I need Apart which is self contained</td>
                                 <td>
                                 <button type="button" class="mb-sm btn btn-primary">Edit</button>
                                 <button type="button" class="mb-sm btn btn-danger">Delete</button>
                                 </td>
                              </tr>
                              <tr class="gradeC">
                                 <td><img src="{{ asset('admin/apartments/apart6.jpeg')}}" style="width:100px; height:60px;" alt="Image" class="img-responsive"></td>
                                 <td>Ugx 250,000</td>
                                 <td>0775601763</td>
                                 <td>I need Apart which is self contained</td>
                                 <td>
                                 <button type="button" class="mb-sm btn btn-primary">Edit</button>
                                 <button type="button" class="mb-sm btn btn-danger">Delete</button>
                                 </td>
                              </tr>
                              <tr class="gradeA">
                                 <td><img src="{{ asset('admin/apartments/apart4.jpeg')}}" style="width:100px; height:60px;" alt="Image" class="img-responsive"></td>
                                 <td>Ugx 250,000</td>
                                 <td>0775601763</td>
                                 <td>I need Apart which is self contained</td>
                                 <td>
                                 <button type="button" class="mb-sm btn btn-primary">Edit</button>
                                 <button type="button" class="mb-sm btn btn-danger">Delete</button>
                                 </td>
                              </tr>
                              <tr class="gradeA">
                                 <td><img src="{{ asset('admin/apartments/apart4.jpeg')}}" style="width:100px; height:60px;" alt="Image" class="img-responsive"></td>
                                 <td>Ugx 250,000</td>
                                 <td>0775601763</td>
                                 <td>I need Apart which is self contained</td>
                                 <td>
                                 <button type="button" class="mb-sm btn btn-primary">Edit</button>
                                 <button type="button" class="mb-sm btn btn-danger">Delete</button>
                                 </td>
                              </tr>
                              <tr class="gradeA">
                                 <td><img src="{{ asset('admin/apartments/apart3.jpeg')}}" style="width:100px; height:60px;" alt="Image" class="img-responsive"></td>
                                 <td>Ugx 250,000</td>
                                 <td>0775601763</td>
                                 <td>I need Apart which is self contained</td>
                                 <td>
                                 <button type="button" class="mb-sm btn btn-primary">Edit</button>
                                 <button type="button" class="mb-sm btn btn-danger">Delete</button>
                                 </td>
                              </tr>
                              <tr class="gradeA">
                                <td><img src="{{ asset('admin/apartments/apart5.jpeg')}}" style="width:100px; height:60px;" alt="Image" class="img-responsive"></td>
                                 <td>Ugx 250,000</td>
                                 <td>0775601763</td>
                                 <td>I need Apart which is self contained</td>
                                 <td>
                                 <button type="button" class="mb-sm btn btn-primary">Edit</button>
                                 <button type="button" class="mb-sm btn btn-danger">Delete</button>
                                 </td>
                              </tr>
                              <tr class="gradeA">
                                 <td><img src="{{ asset('admin/apartments/apart2.jpeg')}}" style="width:100px; height:60px;" alt="Image" class="img-responsive"></td>
                                 <td>Ugx 250,000</td>
                                 <td>0775601763</td>
                                 <td>I need Apart which is self contained</td>
                                 <td>
                                 <button type="button" class="mb-sm btn btn-primary">Edit</button>
                                 <button type="button" class="mb-sm btn btn-danger">Delete</button>
                                 </td>
                              </tr>
                              
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
            <!-- END DATATABLE 1 -->
            <!-- END row-->
         </div>
         <!-- END Page content-->
         <!-- START Page footer-->
         @include('layouts.footer')
         <!-- END Page Footer-->
      </section>
      <!-- END Main section-->
   </div>
   <!-- END Main wrapper-->
   <!-- START Scripts-->
   <!-- Main vendor Scripts-->
   @include('layouts.javascript')
    <!-- Data Table Scripts-->
    <script src="{{ asset('admin/vendor/datatable/media/js/jquery.dataTables.min.js')}}"></script>
   <script src="{{ asset('admin/vendor/datatable/extensions/datatable-bootstrap/js/dataTables.bootstrap.js')}}"></script>
   <script src="{{ asset('admin/vendor/datatable/extensions/datatable-bootstrap/js/dataTables.bootstrapPagination.js')}}"></script>
   <script src="{{ asset('admin/vendor/datatable/extensions/ColVis/js/dataTables.colVis.min.js')}}"></script>
   <!-- END Scripts-->
</body>
</html>