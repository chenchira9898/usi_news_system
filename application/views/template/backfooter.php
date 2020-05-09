<!-- Main Footer -->
<footer class="main-footer">
  <!-- To the right -->
  <div class="pull-right hidden-xs">
    PR SYSTEM 
  </div>
  <!-- Default to the left -->
  <strong>Copyright &copy; 2018 All rights reserved.
</footer>
</div><!-- ./wrapper -->
</div>
</body>
</html>
<script>		
$(document).ready(function() {
    $('#example1').DataTable( {
      "aaSorting" :[[0,'desc']],
	  //"lengthMenu":[[20,50, 100, -1], [20,50, 100,"All"]]
	});
} );
 
	</script>

<script>
$(function () {
$('#example1').DataTable()
$('#example2').DataTable({
'paging'      : true,
'lengthChange': false,
'searching'   : false,
'ordering'    : true,
'info'        : true,
'autoWidth'   : false
})
})
</script>