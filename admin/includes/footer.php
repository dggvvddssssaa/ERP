<?php
// Kiểm tra biến $path, nếu chưa có thì để rỗng
$path = isset($path) ? $path : "";
?>

<!-- Core -->
<!-- QUAN TRỌNG: Thêm <?php echo $path; ?> vào trước assets -->
<script src="<?php echo $path; ?>assets/js/popper.min.js"></script>
<script src="<?php echo $path; ?>assets/js/bootstrap.min.js"></script>

<!-- Vendor JS -->
<script src="<?php echo $path; ?>assets/js/on-screen.umd.min.js"></script>
<script src="<?php echo $path; ?>assets/js/nouislider.min.js"></script>
<script src="<?php echo $path; ?>assets/js/smooth-scroll.polyfills.min.js"></script>
<script src="<?php echo $path; ?>assets/js/countUp.umd.js"></script>
<script src="<?php echo $path; ?>assets/js/apexcharts.min.js"></script>
<script src="<?php echo $path; ?>assets/js/simple-datatables.js"></script>
<script src="<?php echo $path; ?>assets/js/sweetalert2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js"></script>
<script src="<?php echo $path; ?>assets/js/datepicker.min.js"></script>
<script src="<?php echo $path; ?>assets/js/main.min.js"></script>
<script src="<?php echo $path; ?>assets/js/dropzone.min.js"></script>
<script src="<?php echo $path; ?>assets/js/choices.min.js"></script>
<script src="<?php echo $path; ?>assets/js/notyf.min.js"></script>
<script src="<?php echo $path; ?>assets/js/leaflet.js"></script>
<script src="<?php echo $path; ?>assets/js/svg-pan-zoom.min.js"></script>
<script src="<?php echo $path; ?>assets/js/svgMap.min.js"></script>
<script src="<?php echo $path; ?>assets/js/simplebar.min.js"></script>
<script src="<?php echo $path; ?>assets/js/Sortable.min.js"></script>

<!-- Volt JS -->
<script src="<?php echo $path; ?>assets/js/volt.js"></script>

</body>

</html>