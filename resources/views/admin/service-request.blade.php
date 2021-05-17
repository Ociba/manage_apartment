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
                                 <th>Rendering engine</th>
                                 <th>Browser</th>
                                 <th>Platform(s)</th>
                                 <th class="sort-numeric">Engine version</th>
                                 <th class="sort-alpha">CSS grade</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr class="gradeX">
                                 <td>Trident</td>
                                 <td>Internet Explorer 4.0</td>
                                 <td>Win 95+</td>
                                 <td>4</td>
                                 <td>X</td>
                              </tr>
                              <tr class="gradeC">
                                 <td>Trident</td>
                                 <td>Internet Explorer 5.0</td>
                                 <td>Win 95+</td>
                                 <td>5</td>
                                 <td>C</td>
                              </tr>
                              <tr class="gradeA">
                                 <td>Trident</td>
                                 <td>Internet Explorer 5.5</td>
                                 <td>Win 95+</td>
                                 <td>5.5</td>
                                 <td>A</td>
                              </tr>
                              <tr class="gradeA">
                                 <td>Trident</td>
                                 <td>Internet Explorer 6</td>
                                 <td>Win 98+</td>
                                 <td>6</td>
                                 <td>A</td>
                              </tr>
                              <tr class="gradeA">
                                 <td>Trident</td>
                                 <td>Internet Explorer 7</td>
                                 <td>Win XP SP2+</td>
                                 <td>7</td>
                                 <td>A</td>
                              </tr>
                              <tr class="gradeA">
                                 <td>Trident</td>
                                 <td>AOL browser (AOL desktop)</td>
                                 <td>Win XP</td>
                                 <td>6</td>
                                 <td>A</td>
                              </tr>
                              <tr class="gradeA">
                                 <td>Gecko</td>
                                 <td>Firefox 1.0</td>
                                 <td>Win 98+ / OSX.2+</td>
                                 <td>1.7</td>
                                 <td>A</td>
                              </tr>
                              <tr class="gradeA">
                                 <td>Gecko</td>
                                 <td>Firefox 1.5</td>
                                 <td>Win 98+ / OSX.2+</td>
                                 <td>1.8</td>
                                 <td>A</td>
                              </tr>
                              <tr class="gradeA">
                                 <td>Gecko</td>
                                 <td>Firefox 2.0</td>
                                 <td>Win 98+ / OSX.2+</td>
                                 <td>1.8</td>
                                 <td>A</td>
                              </tr>
                              <tr class="gradeA">
                                 <td>Gecko</td>
                                 <td>Firefox 3.0</td>
                                 <td>Win 2k+ / OSX.3+</td>
                                 <td>1.9</td>
                                 <td>A</td>
                              </tr>
                              <tr class="gradeA">
                                 <td>Gecko</td>
                                 <td>Camino 1.0</td>
                                 <td>OSX.2+</td>
                                 <td>1.8</td>
                                 <td>A</td>
                              </tr>
                              <tr class="gradeA">
                                 <td>Gecko</td>
                                 <td>Camino 1.5</td>
                                 <td>OSX.3+</td>
                                 <td>1.8</td>
                                 <td>A</td>
                              </tr>
                              <tr class="gradeA">
                                 <td>Gecko</td>
                                 <td>Netscape 7.2</td>
                                 <td>Win 95+ / Mac OS 8.6-9.2</td>
                                 <td>1.7</td>
                                 <td>A</td>
                              </tr>
                              <tr class="gradeA">
                                 <td>Gecko</td>
                                 <td>Netscape Browser 8</td>
                                 <td>Win 98SE+</td>
                                 <td>1.7</td>
                                 <td>A</td>
                              </tr>
                              <tr class="gradeA">
                                 <td>Gecko</td>
                                 <td>Netscape Navigator 9</td>
                                 <td>Win 98+ / OSX.2+</td>
                                 <td>1.8</td>
                                 <td>A</td>
                              </tr>
                              <tr class="gradeA">
                                 <td>Gecko</td>
                                 <td>Mozilla 1.0</td>
                                 <td>Win 95+ / OSX.1+</td>
                                 <td>1</td>
                                 <td>A</td>
                              </tr>
                              <tr class="gradeA">
                                 <td>Gecko</td>
                                 <td>Mozilla 1.1</td>
                                 <td>Win 95+ / OSX.1+</td>
                                 <td>1.1</td>
                                 <td>A</td>
                              </tr>
                              <tr class="gradeA">
                                 <td>Gecko</td>
                                 <td>Mozilla 1.2</td>
                                 <td>Win 95+ / OSX.1+</td>
                                 <td>1.2</td>
                                 <td>A</td>
                              </tr>
                              <tr class="gradeA">
                                 <td>Gecko</td>
                                 <td>Mozilla 1.3</td>
                                 <td>Win 95+ / OSX.1+</td>
                                 <td>1.3</td>
                                 <td>A</td>
                              </tr>
                              <tr class="gradeA">
                                 <td>Gecko</td>
                                 <td>Mozilla 1.4</td>
                                 <td>Win 95+ / OSX.1+</td>
                                 <td>1.4</td>
                                 <td>A</td>
                              </tr>
                              <tr class="gradeA">
                                 <td>Gecko</td>
                                 <td>Mozilla 1.5</td>
                                 <td>Win 95+ / OSX.1+</td>
                                 <td>1.5</td>
                                 <td>A</td>
                              </tr>
                              <tr class="gradeA">
                                 <td>Gecko</td>
                                 <td>Mozilla 1.6</td>
                                 <td>Win 95+ / OSX.1+</td>
                                 <td>1.6</td>
                                 <td>A</td>
                              </tr>
                              <tr class="gradeA">
                                 <td>Gecko</td>
                                 <td>Mozilla 1.7</td>
                                 <td>Win 98+ / OSX.1+</td>
                                 <td>1.7</td>
                                 <td>A</td>
                              </tr>
                              <tr class="gradeA">
                                 <td>Gecko</td>
                                 <td>Mozilla 1.8</td>
                                 <td>Win 98+ / OSX.1+</td>
                                 <td>1.8</td>
                                 <td>A</td>
                              </tr>
                              <tr class="gradeA">
                                 <td>Gecko</td>
                                 <td>Seamonkey 1.1</td>
                                 <td>Win 98+ / OSX.2+</td>
                                 <td>1.8</td>
                                 <td>A</td>
                              </tr>
                              <tr class="gradeA">
                                 <td>Gecko</td>
                                 <td>Epiphany 2.20</td>
                                 <td>Gnome</td>
                                 <td>1.8</td>
                                 <td>A</td>
                              </tr>
                              <tr class="gradeA">
                                 <td>Webkit</td>
                                 <td>Safari 1.2</td>
                                 <td>OSX.3</td>
                                 <td>125.5</td>
                                 <td>A</td>
                              </tr>
                              <tr class="gradeA">
                                 <td>Webkit</td>
                                 <td>Safari 1.3</td>
                                 <td>OSX.3</td>
                                 <td>312.8</td>
                                 <td>A</td>
                              </tr>
                              <tr class="gradeA">
                                 <td>Webkit</td>
                                 <td>Safari 2.0</td>
                                 <td>OSX.4+</td>
                                 <td>419.3</td>
                                 <td>A</td>
                              </tr>
                              <tr class="gradeA">
                                 <td>Webkit</td>
                                 <td>Safari 3.0</td>
                                 <td>OSX.4+</td>
                                 <td>522.1</td>
                                 <td>A</td>
                              </tr>
                              <tr class="gradeA">
                                 <td>Webkit</td>
                                 <td>OmniWeb 5.5</td>
                                 <td>OSX.4+</td>
                                 <td>420</td>
                                 <td>A</td>
                              </tr>
                              <tr class="gradeA">
                                 <td>Webkit</td>
                                 <td>iPod Touch / iPhone</td>
                                 <td>iPod</td>
                                 <td>420.1</td>
                                 <td>A</td>
                              </tr>
                              <tr class="gradeA">
                                 <td>Webkit</td>
                                 <td>S60</td>
                                 <td>S60</td>
                                 <td>413</td>
                                 <td>A</td>
                              </tr>
                              <tr class="gradeA">
                                 <td>Presto</td>
                                 <td>Opera 7.0</td>
                                 <td>Win 95+ / OSX.1+</td>
                                 <td>-</td>
                                 <td>A</td>
                              </tr>
                              <tr class="gradeA">
                                 <td>Presto</td>
                                 <td>Opera 7.5</td>
                                 <td>Win 95+ / OSX.2+</td>
                                 <td>-</td>
                                 <td>A</td>
                              </tr>
                              <tr class="gradeA">
                                 <td>Presto</td>
                                 <td>Opera 8.0</td>
                                 <td>Win 95+ / OSX.2+</td>
                                 <td>-</td>
                                 <td>A</td>
                              </tr>
                              <tr class="gradeA">
                                 <td>Presto</td>
                                 <td>Opera 8.5</td>
                                 <td>Win 95+ / OSX.2+</td>
                                 <td>-</td>
                                 <td>A</td>
                              </tr>
                              <tr class="gradeA">
                                 <td>Presto</td>
                                 <td>Opera 9.0</td>
                                 <td>Win 95+ / OSX.3+</td>
                                 <td>-</td>
                                 <td>A</td>
                              </tr>
                              <tr class="gradeA">
                                 <td>Presto</td>
                                 <td>Opera 9.2</td>
                                 <td>Win 88+ / OSX.3+</td>
                                 <td>-</td>
                                 <td>A</td>
                              </tr>
                              <tr class="gradeA">
                                 <td>Presto</td>
                                 <td>Opera 9.5</td>
                                 <td>Win 88+ / OSX.3+</td>
                                 <td>-</td>
                                 <td>A</td>
                              </tr>
                              <tr class="gradeA">
                                 <td>Presto</td>
                                 <td>Opera for Wii</td>
                                 <td>Wii</td>
                                 <td>-</td>
                                 <td>A</td>
                              </tr>
                              <tr class="gradeA">
                                 <td>Presto</td>
                                 <td>Nokia N800</td>
                                 <td>N800</td>
                                 <td>-</td>
                                 <td>A</td>
                              </tr>
                              <tr class="gradeA">
                                 <td>Presto</td>
                                 <td>Nintendo DS browser</td>
                                 <td>Nintendo DS</td>
                                 <td>8.5</td>
                                 <td>C/A<sup>1</sup>
                                 </td>
                              </tr>
                              <tr class="gradeC">
                                 <td>KHTML</td>
                                 <td>Konqureror 3.1</td>
                                 <td>KDE 3.1</td>
                                 <td>3.1</td>
                                 <td>C</td>
                              </tr>
                              <tr class="gradeA">
                                 <td>KHTML</td>
                                 <td>Konqureror 3.3</td>
                                 <td>KDE 3.3</td>
                                 <td>3.3</td>
                                 <td>A</td>
                              </tr>
                              <tr class="gradeA">
                                 <td>KHTML</td>
                                 <td>Konqureror 3.5</td>
                                 <td>KDE 3.5</td>
                                 <td>3.5</td>
                                 <td>A</td>
                              </tr>
                              <tr class="gradeX">
                                 <td>Tasman</td>
                                 <td>Internet Explorer 4.5</td>
                                 <td>Mac OS 8-9</td>
                                 <td>-</td>
                                 <td>X</td>
                              </tr>
                              <tr class="gradeC">
                                 <td>Tasman</td>
                                 <td>Internet Explorer 5.1</td>
                                 <td>Mac OS 7.6-9</td>
                                 <td>1</td>
                                 <td>C</td>
                              </tr>
                              <tr class="gradeC">
                                 <td>Tasman</td>
                                 <td>Internet Explorer 5.2</td>
                                 <td>Mac OS 8-X</td>
                                 <td>1</td>
                                 <td>C</td>
                              </tr>
                              <tr class="gradeA">
                                 <td>Misc</td>
                                 <td>NetFront 3.1</td>
                                 <td>Embedded devices</td>
                                 <td>-</td>
                                 <td>C</td>
                              </tr>
                              <tr class="gradeA">
                                 <td>Misc</td>
                                 <td>NetFront 3.4</td>
                                 <td>Embedded devices</td>
                                 <td>-</td>
                                 <td>A</td>
                              </tr>
                              <tr class="gradeX">
                                 <td>Misc</td>
                                 <td>Dillo 0.8</td>
                                 <td>Embedded devices</td>
                                 <td>-</td>
                                 <td>X</td>
                              </tr>
                              <tr class="gradeX">
                                 <td>Misc</td>
                                 <td>Links</td>
                                 <td>Text only</td>
                                 <td>-</td>
                                 <td>X</td>
                              </tr>
                              <tr class="gradeX">
                                 <td>Misc</td>
                                 <td>Lynx</td>
                                 <td>Text only</td>
                                 <td>-</td>
                                 <td>X</td>
                              </tr>
                              <tr class="gradeC">
                                 <td>Misc</td>
                                 <td>IE Mobile</td>
                                 <td>Windows Mobile 6</td>
                                 <td>-</td>
                                 <td>C</td>
                              </tr>
                              <tr class="gradeC">
                                 <td>Misc</td>
                                 <td>PSP browser</td>
                                 <td>PSP</td>
                                 <td>-</td>
                                 <td>C</td>
                              </tr>
                              <tr class="gradeU">
                                 <td>Other browsers</td>
                                 <td>All others</td>
                                 <td>-</td>
                                 <td>-</td>
                                 <td>U</td>
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