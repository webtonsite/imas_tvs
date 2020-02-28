{{--
	['title'=>'Title', 
	'name'=>'input_name',  
	'placeholder'=>'enter text',
	'required'=>'']
--}}

<div class="form-group">
    <label>
    	{{ $title }}
    	@if(isset($required) && $required)
    		<span class="text-danger">*</span>
    	@endif
    </label>
    {!! Form::textarea($name, null, ['class' => 'form-control', 'placeholder'=>$placeholder, $required, 'rows'=>4]) !!}

</div>