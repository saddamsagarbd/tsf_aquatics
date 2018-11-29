
        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Your Website 2018</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('admin_css/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admin_css/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    

    <!-- Core plugin JavaScript-->
    <script src="{{asset('admin_css/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Page level plugin JavaScript-->
    <script src="{{asset('admin_css/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('admin_css/vendor/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{asset('admin_css/vendor/datatables/dataTables.bootstrap4.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('admin_css/js/sb-admin.min.js')}}"></script>

    <!-- Demo scripts for this page-->
    <script src="{{asset('admin_css/js/demo/datatables-demo.js')}}"></script>
    <script src="{{asset('admin_css/js/demo/chart-area-demo.js')}}"></script>

    <!-- bootbox cdn link-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>

    <script type="text/javascript">
      $(document).on("click","#delete", function(e){
        e.preventDefault();
        var link = $(this).attr("href");
        bootbox.confirm("Are you want to Delete",function(confirmed){

          if(confirmed){
            window.location.href=link;
          };

        });

      });
    </script>

  </body>

</html>
