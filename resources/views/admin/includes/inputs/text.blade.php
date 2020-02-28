{{--
	['title'=>'Title', 
	 'name'=>'input_name', 
	 'placeholder'=>'enter text'
	 'required'=>'required']
--}}

<div class="form-group">
    <label>
    	{{ $title }}
    	@if(isset($required) && !empty($required))
    		<span class="text-danger">*</span>
    	@endif
    </label>

    {!! Form::text(
            $name, null, 
            [ 'class' => 'form-control', 
              'placeholder'=>isset($placeholder) ? $placeholder : "Enter $title", 
              $required
            ]
        ) 
    !!}

</div>