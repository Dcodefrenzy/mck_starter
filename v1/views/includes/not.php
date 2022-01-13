
<script src="/da/assets/plugins/sweetalert/js/sweetalert.min.js"></script>

<?php if(isset($_SESSION['success'])): ?>
  <script type="text/javascript">
  swal("Done!", '<?php echo $_SESSION['success'] ?>', "success");
  </script>
<?php   unset($_SESSION['success']); endif; ?>

<?php if (isset($_SESSION['failed'])): ?>
  <script type="text/javascript">
 swal("Failed!", "<?php echo $_SESSION['failed'] ?>", "error");
  </script>
<?php  unset($_SESSION['failed']); endif; ?>
