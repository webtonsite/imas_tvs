<table class="table table-hover">
    <thead>
        <tr>
            <th></th>
            <th>ID</th>
            <th>Title</th>
            <th>Created</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($pages as $page)
            <tr>
                <td>
                    <img class="img-thumbnail" style="width:50px" src="/storage/{{ $page->photo_url }}">
                </td>
                <td>{{ $page->id }}</td>
                <td>{{ $page->title }}</td>
                <td>{{ $page->created_at }}</td>
                <td>
                    <!-- ACTIONS -->
                    <div class="float-left pr-1">
                        <a target="_blank" href="{{route('page', ['id' => $page->id])}}" class="btn btn-success">Open</a>
                    </div>
                    <div class="float-left pr-1">
                        <a href="{{route('pages.edit', ['page' => $page->id])}}" class="btn btn-primary">Edit</a>
                    </div>
                    <div class="float-left">
                        {{Form::open([
                            'route'=>['pages.destroy', 
                            $page->id], 'method'=>'DELETE'])}}

                            {{Form::button('Delete', ['class'=>'btn btn-danger btn-full', 'type'=>'submit', 'onclick'=>'return confirm("are you sure?")'])}}
                        {{ Form::close() }}
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>