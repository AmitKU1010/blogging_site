	<!-- Back to top -->
	<a href="#top" id="back-to-top" ><i class="fa fa-rocket"></i></a>

	<!-- Custom Script Js-->
	<script src="{{ asset('assets/js/app.js') }}"></script>


	<!-- Dashboard Core -->
	<script src="{{ asset('assets/js/vendors/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/bootstrap-4.3.1-dist/js/popper.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/bootstrap-4.3.1-dist/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/js/vendors/jquery.sparkline.min.js') }}"></script>
	<script src="{{ asset('assets/js/vendors/selectize.min.js') }}"></script>
	<script src="{{ asset('assets/js/vendors/jquery.tablesorter.min.js') }}"></script>
	<script src="{{ asset('assets/js/vendors/circle-progress.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/rating/jquery.rating-stars.js') }}"></script>
 
	<!-- WYSIWYG Editor js -->
	<script src="{{ asset('assets/plugins/wysiwyag/jquery.richtext.js') }}"></script>
	<script src="{{ asset('assets/js/formeditor.js') }}"></script>

	<!-- Fullside-menu Js-->
	<script src="{{ asset('assets/plugins/toggle-sidebar/sidemenu.js') }}"></script>

	<!--Select2 js -->
	<script src="{{ asset('assets/plugins/select2/select2.full.min.js') }}"></script>

	<!-- Timepicker js -->
	<script src="{{ asset('assets/plugins/time-picker/jquery.timepicker.js') }}"></script>
	<script src="{{ asset('assets/plugins/time-picker/toggles.min.js') }}"></script>

	<!-- Datepicker js -->
	<script src="{{ asset('assets/plugins/date-picker/spectrum.js') }}"></script>
	<script src="{{ asset('assets/plugins/date-picker/jquery-ui.js') }}"></script>
	<script src="{{ asset('assets/plugins/input-mask/jquery.maskedinput.js') }}"></script>

	<!-- Inline js -->
	<script src="{{ asset('assets/js/select2.js') }}"></script>
	<script src="{{ asset('assets/js/formelements.js') }}"></script>
 
	<!-- file uploads js -->
    <script src="{{ asset('assets/plugins/fileuploads/js/dropify.js') }}"></script>

	<!-- CHARTJS CHART -->
	<script src="{{ asset('assets/plugins/chart/Chart.bundle.js') }}"></script>
	<script src="{{ asset('assets/plugins/chart/utils.js') }}"></script>

	<!--Morris.js Charts Plugin -->
	<script src="{{ asset('assets/plugins/morris/raphael-min.js') }}"></script>
	<script src="{{ asset('assets/plugins/morris/morris.js') }}"></script>

	<!--InputMask Js-->
	<script src="{{ asset('assets/plugins/jquery-inputmask/jquery.inputmask.bundle.min.js') }}"></script>

	<!-- Input Mask Plugin -->
	<script src="{{ asset('assets/plugins/input-mask/jquery.mask.min.js') }}"></script>
	<script src="{{ asset('assets/js/index5.js') }}"></script>

	<!--Counters -->
	<script src="{{ asset('assets/plugins/counters/counterup.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/counters/waypoints.min.js') }}"></script>

	<!-- Custom scroll bar Js-->
	<script src="{{ asset('assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js') }}"></script>

	<!--Counters -->
	<script src="{{ asset('assets/plugins/counters/counterup.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/counters/waypoints.min.js') }}"></script>

	<!-- Data tables -->
	<script src="{{ asset('assets/plugins/datatable/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/datatable/dataTables.bootstrap4.min.js') }}"></script>
	<script src="{{ asset('assets/js/datatable.js') }}"></script>

	<!-- Cover-image Js-->
	<script src="{{ asset('assets/js/cover-image.js') }}"></script>

	<!-- Custom Js-->
	<script src="{{ asset('assets/js/admin-custom.js') }}"></script>


     <!-- text editor -->
    <script src="{{asset('assets/tinymce/tinymce.min.js')}}"></script>

<script type="text/javascript">
		 tinymce.init({
   selector: 'textarea#editor',  //Change this value according to your HTML
   auto_focus: 'element1',
   width: "1060",
   height: "200"
   });
   $(document).ready(function(){
	 $('#buttonpost').on("click", function(){
   tinyMCE.triggerSave();
   var value = $("textarea#editor").val();  
   $("#display-post").html(value);
   $(".texteditor-container").hide();
   return false;
  });
 });
</script>



	
