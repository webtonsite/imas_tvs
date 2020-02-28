@if($errors->any())
    @foreach ($errors->all() as $error)
		<div class="alert alert-danger alert-dismissible fade in" role="alert">
		    <button type="button" class="close" data-dismiss="alert">
		        <span aria-hidden="true">×</span>
		    </button>
		    <strong>{{ $error }}</strong>
		</div>
    @endforeach
@endif