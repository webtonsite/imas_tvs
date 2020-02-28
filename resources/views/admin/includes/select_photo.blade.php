<div class="form-group">
    <label>Photo</label>
    <div class="fileupload fileupload-new" data-provides="fileupload">
        @if(isset($photo_url) && !empty($photo_url))
            <div class="img-thumbnail">
                <img style="width: 100px" src="/storage/{{ $photo_url }}" />
            </div>
        @endif
        {{ Form::file('photo', ['id'=>'photo', 'class'=>'btn-default']) }}
    </div>
</div>
