@if(Session::has('success'))

	<div class="alert alert-success alert-dismissible" role="alert">
	    <button type="button" class="close" data-dismiss="alert">
	        <span aria-hidden="true">×</span>
	    </button>
	    <strong>{{ session('success') }}</strong>
	</div> 
          
@endif  