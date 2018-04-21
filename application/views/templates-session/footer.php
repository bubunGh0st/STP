<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Student Time Planner 2018</small>
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
            <h5 class="modal-title" id="exampleModalLabel">Leaving soon?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal"><i class="fa fa-remove"></i> Cancel</button>
            <a class="btn btn-danger" href="<?php echo(site_url('home'));?>"><i class="fa fa-sign-out"></i> Sign Out</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo(base_url());?>js/sb-admin.min.js"></script>
</html>
