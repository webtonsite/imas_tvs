<div class="col-sm-6">
    <input type="hidden" name="user_id" value="{{ auth()->id() }}">
    <div class="card-box">
        @include('admin.includes.inputs.text',
          ['title'=>'Title',
           'name'=>'title',
           'placeholder'=>'enter title', 
           'required'=>'required'])

        @include('admin.includes.inputs.textarea',
          ['title'=>'Description', 
           'name'=>'description',  
           'placeholder'=>'enter description',
           'required'=>''])
    </div>
</div>


<div class="col-sm-6">
    <div class="card-box">
        @if(isset($page))
            @include('admin.includes.inputs.select_photo', 
              ['photo_url'=>$page->photo_url])
        @else
            @include('admin.includes.inputs.select_photo', 
              ['photo_url'=>''])
        @endif
    </div>
</div> 

<div class="col-sm-12">
    <!-- SUBMIT -->
    <div class="card-box mt-3 float-left">
        <div class="form-group text-right m-b-0">
            <button class="btn btn-primary" type="submit">
                Submit
            </button>
            <a href="{{ route('pages.index') }}" class="btn btn-default">
                Cancel
            </a>
        </div>
    </div>
</div>

