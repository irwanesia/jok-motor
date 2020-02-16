<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Teknik Industri <?= date('Y'); ?></span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Yakin ingin logout?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Pilih "Logout" jika anda ingin keluar!.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?= base_url('auth/logout'); ?>">Logout</a>
            </div>
        </div>
    </div>
</div>



<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="<?= base_url('assets/'); ?>assets/js/jquery-3.3.1.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>
<script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/jquery-3.4.0.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/bootstrap.bundle.js"></script>
<script src="<?= base_url('assets/'); ?>summernote/summernote-bs4.js"></script>
<script src="<?= base_url('assets/'); ?>DataTables/datatables.min.js"></script>
<script src="<?= base_url('assets/'); ?>DataTables/Bootstrap-4-4.1.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/js/jquery-3.4.0.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/js/bootstrap.bundle.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/summernote/summernote-bs4.js"></script>
<script type="text/javascript">
    // untuk mengatur upload image
    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });


    $(document).ready(function() {
        $('#summernote').summernote({
            height: "300px",
            callbacks: {
                onImageUpload: function(image) {
                    uploadImage(image[0]);
                },
                onMediaDelete: function(target) {
                    deleteImage(target[0].src);
                }
            }
        });

        // function uploadImage(image) {
        //     var data = new FormData();
        //     data.append("image", image);
        //     $.ajax({
        //         url: "<?php echo site_url('artikel/upload_image') ?>",
        //         cache: false,
        //         contentType: false,
        //         processData: false,
        //         data: data,
        //         type: "POST",
        //         success: function(url) {
        //             $('#summernote').summernote("insertImage", url);
        //         },
        //         error: function(data) {
        //             console.log(data);
        //         }
        //     });
        // }

        // function deleteImage(src) {
        //     $.ajax({
        //         data: {
        //             src: src
        //         },
        //         type: "POST",
        //         url: "<?php echo site_url('artikel/delete_image') ?>",
        //         cache: false,
        //         success: function(response) {
        //             console.log(response);
        //         }
        //     });
        // }

        // $('#table').DataTable();

    });
</script>
</body>

</html>