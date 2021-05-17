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
         <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary pull-right">
    <em class="fa fa-plus-circle fa-fw mr-sm"></em>Add Item</button>
            @include('layouts.breadcrumb')
            <div data-toggle="notify" data-onload data-message="&lt;b&gt;Welcome Visitor!&lt;/b&gt; Dismiss this message with a click or wait for it to disappear." data-options="{&quot;status&quot;:&quot;danger&quot;, &quot;pos&quot;:&quot;top-right&quot;}"
            class="hidden-xs"></div>
            <div class="row">
               <div class="col-lg-4">
                  <!-- START widget-->
                  <div class="panel widget">
                     <img src="{{ asset('admin/apartments/apart5.jpeg')}}" style="width:318px; height:190px;" alt="Image" class="img-responsive">
                     <div class="badge-overlay">
                        <!-- Change Badge Position, Color, Text here-->
                        <span class="top-left badge orange">Available</span>
                    </div>
                     <div class="panel-body">
                        <div class="row row-table text-center mb-2">
                           <div class="col-xs-4">
                              <p>Rooms</p>
                              <h3 class="m0 text-primary">4</h3>
                           </div>
                           <div class="col-xs-4">
                              <p>Status</p>
                              <h3 class="m0 text-primary">Rent</h3>
                           </div>
                           <div class="col-xs-4">
                              <p>Amount</p>
                              <h3 class="m0 text-primary">250,000</h3>
                           </div>
                        </div>
                        <div class="row row-table text-center">
                            <h4 style="color:blue;">Kawempe</h4>
                        </div>
                     </div>
                  </div>
                  <!-- END widget-->
               </div>
               <div class="col-lg-4">
                  <!-- START widget-->
                  <div class="panel widget">
                     <img src="{{ asset('admin/apartments/apart4.jpeg')}}" style="width:318px; height:190px;" alt="Image" class="img-responsive">
                     <div class="badge-overlay">
                        <!-- Change Badge Position, Color, Text here-->
                        <span class="top-left badge orange">Available</span>
                    </div>
                     <div class="panel-body">
                        <div class="row row-table text-center">
                           <div class="col-xs-4">
                              <p>Rooms</p>
                              <h3 class="m0 text-primary">5</h3>
                           </div>
                           <div class="col-xs-4">
                              <p>Status</p>
                              <h3 class="m0 text-primary">Rent</h3>
                           </div>
                           <div class="col-xs-4">
                              <p>Amount</p>
                              <h3 class="m0 text-primary">250,000</h3>
                           </div>
                        </div>
                        <div class="row row-table text-center">
                            <h4 style="color:blue;">Makerere</h4>
                        </div>
                     </div>
                  </div>
                  <!-- END widget-->
               </div>
               <div class="col-lg-4">
                  <!-- START widget-->
                  <div class="panel widget">
                     <img src="{{ asset('admin/apartments/apart6.jpeg')}}" style="width:318px; height:190px;" alt="Image" class="img-responsive">
                     <div class="badge-overlay">
                        <!-- Change Badge Position, Color, Text here-->
                        <span class="top-left badge orange">Available</span>
                    </div>
                     <div class="panel-body">
                        <div class="row row-table text-center">
                           <div class="col-xs-4">
                              <p>Rooms</p>
                              <h3 class="m0 text-primary">5</h3>
                           </div>
                           <div class="col-xs-4">
                              <p>Status</p>
                              <h3 class="m0 text-primary">Rent</h3>
                           </div>
                           <div class="col-xs-4">
                              <p>Amount</p>
                              <h3 class="m0 text-primary">250,000</h3>
                           </div>
                        </div>
                        <div class="row row-table text-center">
                            <h4 style="color:blue;">Natete</h4>
                        </div>
                     </div>
                  </div>
                  <!-- END widget-->
               </div>
            <!-- END row-->
         </div>
         <div class="row">
               <div class="col-lg-4">
                  <!-- START widget-->
                  <div class="panel widget">
                     <img src="{{ asset('admin/apartments/apart1.jpeg')}}" style="width:318px; height:190px;" alt="Image" class="img-responsive">
                     <div class="badge-overlay">
                        <!-- Change Badge Position, Color, Text here-->
                        <span class="top-left badge orange">Available</span>
                    </div>
                     <div class="panel-body">
                        <div class="row row-table text-center">
                           <div class="col-xs-4">
                              <p>Rooms</p>
                              <h3 class="m0 text-primary">5</h3>
                           </div>
                           <div class="col-xs-4">
                              <p>Status</p>
                              <h3 class="m0 text-primary">Rent</h3>
                           </div>
                           <div class="col-xs-4">
                              <p>Amount</p>
                              <h3 class="m0 text-primary">250,000</h3>
                           </div>
                        </div>
                        <div class="row row-table text-center">
                            <h4 style="color:blue;">Mulago</h4>
                        </div>
                     </div>
                  </div>
                  <!-- END widget-->
               </div>
               <div class="col-lg-4">
                  <!-- START widget-->
                  <div class="panel widget">
                     <img src="{{ asset('admin/apartments/apart2.jpeg')}}" style="width:318px; height:190px;" alt="Image" class="img-responsive">
                     <div class="badge-overlay">
                        <!-- Change Badge Position, Color, Text here-->
                        <span class="top-left badge orange">Available</span>
                    </div>
                     <div class="panel-body">
                        <div class="row row-table text-center">
                           <div class="col-xs-4">
                              <p>Rooms</p>
                              <h3 class="m0 text-primary">5</h3>
                           </div>
                           <div class="col-xs-4">
                              <p>Status</p>
                              <h3 class="m0 text-primary">Rent</h3>
                           </div>
                           <div class="col-xs-4">
                              <p>Amount</p>
                              <h3 class="m0 text-primary">250,000</h3>
                           </div>
                        </div>
                        <div class="row row-table text-center">
                            <h4 style="color:blue;">Mengo</h4>
                        </div>
                     </div>
                  </div>
                  <!-- END widget-->
               </div>
               <div class="col-lg-4">
                  <!-- START widget-->
                  <div class="panel widget">
                     <img src="{{ asset('admin/apartments/apart3.jpeg')}}" style="width:318px; height:190px;" alt="Image" class="img-responsive">
                     <div class="badge-overlay">
                        <!-- Change Badge Position, Color, Text here-->
                        <span class="top-left badge orange">Available</span>
                    </div>
                     <div class="panel-body">
                        <div class="row row-table text-center">
                           <div class="col-xs-4">
                              <p>Rooms</p>
                              <h3 class="m0 text-primary">5</h3>
                           </div>
                           <div class="col-xs-4">
                              <p>Status</p>
                              <h3 class="m0 text-primary">Rent</h3>
                           </div>
                           <div class="col-xs-4">
                              <p>Amount</p>
                              <h3 class="m0 text-primary">250,000</h3>
                           </div>
                        </div>
                        <div class="row row-table text-center">
                            <h4 style="color:blue;">Bwaise</h4>
                        </div>
                     </div>
                  </div>
                  <!-- END widget-->
               </div>
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
   <!-- END Scripts-->
   <!-- START modal-->
   <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" class="modal fade">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <button type="button" data-dismiss="modal" aria-hidden="true" class="close">×</button>
               <h4 id="myModalLabel" class="modal-title">Add Apartment</h4>
            </div>
            <div class="modal-body">
            <div class="row">
               <div class="col-sm-12">
                  <!-- START panel-->
                  <div class="panel panel-default">
                     <div class="panel-heading"></div>
                     <div class="panel-body">
                        <form role="form">
                           <div class="form-group">
                              <label>Category</label>
                              <input type="text" placeholder="Enter email" class="form-control">
                           </div>
                           <div class="form-group">
                              <label>Numnber of Rooms</label>
                              <input type="text" placeholder="Number of rooms available" class="form-control">
                           </div>
                           <div class="form-group">
                              <label>Amount</label>
                              <input type="text" placeholder="Amount" class="form-control">
                           </div>
                           <div class="form-group">
                              <label>Status</label>
                              <input type="text" placeholder="Status" class="form-control">
                           </div>
                           <fieldset>
                        <div class="form-group">
                              <div id="upload-drop" class="box-placeholder text-center">
                                 <p>
                                    <em class="fa fa-cloud-upload fa-2x"></em>
                                 </p>Upload apartment by dropping them here or
                                 <div class="btn-link form-file">selecting one
                                    <input id="upload-select" type="file" name="upfile">
                                 </div>
                              </div>
                              <div id="progressbar" class="progress hidden">
                                 <div role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" class="progress-bar"></div>
                              </div>
                        </div>
                     </fieldset>
                     <div class="row text-center">
                           <button type="submit" class="btn btn-sm btn-primary text-center">Submit</button>
                     </div>
                        </form>
                     </div>
                  </div>
                  <!-- END panel-->
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- END modal-->
</body>
</html>