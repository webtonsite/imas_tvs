<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Page;
use App\Jobs\UploadPagePhoto;

class PageController extends Controller
{

    public function index()
    {
        $pages = Page::all();
        $data = [
            'pages' => $pages,
        ];
        return view('admin.pages.index', $data);
    }

    public function create()
    {
        return view('admin.pages.create');
    }

    public function store(Request $request)
    {
        $page = Page::create($request->all());
        return redirect()
                    ->route('pages.index')
                    ->with('success', "Created successfuly");
    }

    public function edit(Page $page)
    {
        $data = [
            'page' => $page,
        ];
        return view('admin.pages.edit', $data);
    }

    public function update(Request $request, Page $page)
    {
        $page->update($request->all());

        if (isset($request->photo))
            UploadPagePhoto::dispatchNow($page, $request->file('photo'));

        return redirect()
                    ->route('pages.index')
                    ->with('success', "Updated successfuly");
    }

    public function destroy(Page $page)
    {
        $page->delete();
        return redirect()
                    ->back()
                    ->with('success', "Deleted successfuly");
    }
}
