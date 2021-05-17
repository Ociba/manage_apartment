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
            @include('layouts.breadcrumb')
            <div data-toggle="notify" data-onload data-message="&lt;b&gt;Welcome Visitor!&lt;/b&gt; Dismiss this message with a click or wait for it to disappear." data-options="{&quot;status&quot;:&quot;danger&quot;, &quot;pos&quot;:&quot;top-right&quot;}"
            class="hidden-xs"></div>
            <div class="row">
               <div id="portlet-1" data-toggle="portlet" class="col-lg-4">
                  <!-- START panel-->
                  <div id="panel-1" class="panel panel-primary">
                     <div class="panel-heading portlet-handler">Receipt
                        <a href="#" data-perform="panel-collapse" data-toggle="tooltip" title="Collapse Panel" class="pull-right">
                           <em class="fa fa-minus"></em>
                        </a>
                     </div>
                     <div class="panel-body">
                        <p><img src="{{ asset('admin/receipts/receipt1.jpeg')}}" style="width:285px; height:170px;"></p>
                     </div>
                     <div class="panel-footer text-center" >
                     <a href=""><i class="fa fa-trash" style="color:red; margin-right:40px;"></i></a>
                     <a href="/admin/receipts/receipt1.jpeg" download><i class="fa fa-download" style="color:blue; margin-right:40px;" aria-hidden="true"></i></a>
                    </div>
                  </div>
                  <!-- END panel-->
                  <!-- START panel-->
                  <div id="panel-2" class="panel panel-primary">
                     <div class="panel-heading portlet-handler">Receipt
                        <a href="#" data-perform="panel-collapse" data-toggle="tooltip" title="Collapse Panel" class="pull-right">
                           <em class="fa fa-minus"></em>
                        </a>
                     </div>
                     <div class="panel-body">
                        <p><img src="{{ asset('admin/receipts/receipt2.jpeg')}}" style="width:285px; height:170px;"></p>
                     </div>
                     <div class="panel-footer text-center" >
                     <a href=""><i class="fa fa-trash" style="color:red; margin-right:40px;"></i></a>
                     <a href="/admin/receipts/receipt2.jpeg" download><i class="fa fa-download" style="color:blue; margin-right:40px;" aria-hidden="true"></i></a>
                    </div>
                  </div>
                  <!-- END panel-->
                  <!-- START panel-->
                  <div id="panel-3" class="panel panel-primary">
                     <div class="panel-heading portlet-handler">Receipt</div>
                     <div class="panel-body">
                        <p><img src="{{ asset('admin/receipts/receipt3.png')}}" style="width:285px; height:170px;"></p>
                     </div>
                     <div class="panel-footer text-center" >
                     <a href=""><i class="fa fa-trash" style="color:red; margin-right:40px;"></i></a>
                     <a href="/admin/receipts/receipt3.png" download><i class="fa fa-download" style="color:blue; margin-right:40px;" aria-hidden="true"></i></a>
                    </div>
                  </div>
                  <!-- END panel-->
               </div>
               <div id="portlet-2" data-toggle="portlet" class="col-lg-4">
                  <!-- START panel-->
                  <div id="panel-6" class="panel panel-primary">
                     <div class="panel-heading portlet-handler">Receipt</div>
                     <div class="panel-body">
                        <p><img src="{{ asset('admin/receipts/receipt4.png')}}" style="width:285px; height:170px;"></p>
                     </div>
                     <div class="panel-footer text-center" >
                     <a href=""><i class="fa fa-trash" style="color:red; margin-right:40px;"></i></a>
                     <a href="/admin/receipts/receipt4.png" download><i class="fa fa-download" style="color:blue; margin-right:40px;" aria-hidden="true"></i></a>
                    </div>
                  </div>
                  <!-- END panel-->
                  <!-- START panel-->
                  <div id="panel-7" class="panel panel-primary">
                     <div class="panel-heading portlet-handler">Receipt</div>
                     <div class="panel-body">
                        <p><img src="{{ asset('admin/receipts/receipt5.jpeg')}}" style="width:285px; height:170px;"></p>
                     </div>
                     <div class="panel-footer text-center" >
                     <a href=""><i class="fa fa-trash" style="color:red; margin-right:40px;"></i></a>
                     <a href="/admin/receipts/receipt5.jpeg" download><i class="fa fa-download" style="color:blue; margin-right:40px;" aria-hidden="true"></i></a>
                    </div>
                  </div>
                  <!-- END panel-->
                  <!-- START panel-->
                  <div id="panel-8" class="panel panel-primary">
                     <div class="panel-heading portlet-handler">Receipt</div>
                     <div class="panel-body">
                        <p><img src="{{ asset('admin/receipts/receipt6.png')}}" style="width:285px; height:170px;"></p>
                     </div>
                     <div class="panel-footer text-center" >
                     <a href=""><i class="fa fa-trash" style="color:red; margin-right:40px;"></i></a>
                     <a href="/admin/receipts/receipt6.png" download><i class="fa fa-download" style="color:blue; margin-right:40px;" aria-hidden="true"></i></a>
                    </div>
                  </div>
                  <!-- END panel-->
               </div>
               <div id="portlet-3" data-toggle="portlet" class="col-lg-4">
                  <!-- START panel-->
                  <div id="panel-11" class="panel panel-primary">
                     <div class="panel-heading portlet-handler">Receipt</div>
                     <div class="panel-body">
                        <p><img src="{{ asset('admin/receipts/receipt7.jpeg')}}" style="width:285px; height:170px;"></p>
                     </div>
                     <div class="panel-footer text-center" >
                     <a href=""><i class="fa fa-trash" style="color:red; margin-right:40px;"></i></a>
                     <a href="/admin/receipts/receipt7.jpeg" download><i class="fa fa-download" style="color:blue; margin-right:40px;" aria-hidden="true"></i></a>
                    </div>
                  </div>
                  <!-- END panel-->
                  <!-- START panel-->
                  <div id="panel-12" class="panel panel-primary">
                     <div class="panel-heading portlet-handler">Receipt</div>
                     <div class="panel-body">
                        <p><img src="{{ asset('admin/receipts/receipt7.jpeg')}}" style="width:285px; height:170px;"></p>
                     </div>
                     <div class="panel-footer text-center" >
                     <a href=""><i class="fa fa-trash" style="color:red; margin-right:40px;"></i></a>
                     <a href="/admin/receipts/receipt7.jpeg" download><i class="fa fa-download" style="color:blue; margin-right:40px;" aria-hidden="true"></i></a>
                    </div>
                  </div>
                  <!-- END panel-->
                  <!-- START panel-->
                  <div id="panel-13" class="panel panel-primary">
                     <div class="panel-heading portlet-handler">Receipt</div>
                     <div class="panel-body">
                        <p><img src="{{ asset('admin/receipts/receipt1.jpeg')}}" style="width:285px; height:170px;"></p>
                     </div>
                     <div class="panel-footer text-center" >
                     <a href=""><i class="fa fa-trash" style="color:red; margin-right:40px;"></i></a>
                     <a href="/admin/receipts/receipt1.jpeg" download><i class="fa fa-download" style="color:blue; margin-right:40px;" aria-hidden="true"></i></a>
                    </div>
                  </div>
                  <!-- END panel-->
               </div>
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
</body>
</html>