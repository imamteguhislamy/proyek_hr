  <!-- Mini Modal SOP-->
  <div class="modal fade modal-mini modal-primary" id="myModalSOP" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body" align="center">
          <br>
          </i><h5> Apa Yakin Untuk Menghapus SOP Ini?</h5>
        </div>
        <div class="row">
          <div class="col-md-6" align="center">
            <button type="button" class="btn btn-round btn-primary" data-dismiss="modal">Tidak</button>
          </div>
          <div class="col-md-6" align="center">
            <a href="<?php echo base_url()?>user/hapus_sop" class="btn btn-round btn-danger">Ya</button></a>
          </div>
        </div>
        <br>
      </div>
    </div>
  </div>
  <!--  End Modal -->

    <!-- Mini Modal Jabatan-->
  <div class="modal fade modal-mini modal-primary" id="myModalJabatan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body" align="center">
          <br>
          <h5> Apa Yakin Untuk Menghapus Jabatan Ini?</h5>
        </div>
        <div class="row">
          <div class="col-md-6" align="center">
            <button type="button" class="btn btn-round btn-primary" data-dismiss="modal">Tidak</button>
          </div>
          <div class="col-md-6" align="center">
            <a href="<?php echo base_url()?>user/hapus_jabatan" class="btn btn-round btn-danger">Ya</button></a>
          </div>
        </div>
        <br>
      </div>
    </div>
  </div>
  <!--  End Modal -->

  <!--   Core JS Files   -->
  <script src="<?php echo base_url()?>bootstrap/assets/js/core/jquery.min.js"></script>
  <script src="<?php echo base_url()?>bootstrap/assets/js/core/popper.min.js"></script>
  <script src="<?php echo base_url()?>bootstrap/assets/js/core/bootstrap.min.js"></script>
  <script src="<?php echo base_url()?>bootstrap/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="<?php echo base_url()?>bootstrap/assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="<?php echo base_url()?>bootstrap/assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?php echo base_url()?>bootstrap/assets/js/now-ui-dashboard.min.js?v=1.1.0" type="text/javascript"></script>
  <!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="<?php echo base_url()?>bootstrap/assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

    });
  </script>
</body>

</html>