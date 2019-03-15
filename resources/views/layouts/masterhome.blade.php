<!DOCTYPE html>
 <html lang="en">
 
 <head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="">
   <meta name="author" content="Ansonika">
   <title>UDEMA - Admin dashboard</title>
     
   <!-- Favicons-->
   <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
   <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
   <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
   <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
   <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">
     
   <!-- Bootstrap core CSS-->
   <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <!-- Main styles -->
   <link href="css/admin.css" rel="stylesheet">
   <!-- Icon fonts-->
   <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
   <!-- Plugin styles -->
   <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
   <!-- Your custom styles -->
   <link href="css/custom.css" rel="stylesheet">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
     
 </head>

 <body class="fixed-nav sticky-footer" id="page-top">

 @yield('content')

 <!-- /container-wrapper-->
 <footer class="sticky-footer">
       <div class="container">
         <div class="text-center">
           <small>Copyright © EVOLUTION <?php echo date("Y"); ?></small>
         </div>
       </div>
     </footer>
     <!-- Scroll to Top Button-->
     <a class="scroll-to-top rounded" href="#page-top">
       <i class="fa fa-angle-up"></i>
     </a>
     <!-- Logout Modal-->
     <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog" role="document">
         <div class="modal-content">
           <div class="modal-header">
             <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
             <button class="close" type="button" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">×</span>
             </button>
           </div>
           <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
           <div class="modal-footer">
           <a class="btn btn-primary" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
             <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        </div>
         </div>
       </div>
     </div>
     <!-- Bootstrap core JavaScript-->
     <script src="vendor/jquery/jquery.min.js"></script>
     <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
     <!-- Core plugin JavaScript-->
     <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
     <!-- Page level plugin JavaScript-->
     <script src="vendor/chart.js/Chart.min.js"></script>
     <script src="vendor/datatables/jquery.dataTables.js"></script>
     <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
     <script src="vendor/jquery.selectbox-0.2.js"></script>
     <script src="vendor/retina-replace.min.js"></script>
     <script src="vendor/jquery.magnific-popup.min.js"></script>
     <!-- Custom scripts for all pages-->
     <script src="js/admin.js"></script>
     
 </body>
 </html>
 