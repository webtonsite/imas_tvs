<?php

namespace App\Services;

use App\Page;

class PagePhotoService
{
	private $page;

	function __construct(Page $page)
	{
		$this->page = $page;
	}

	function upload_public($file){
        $filename = time() .'_'. $file->getClientOriginalName();
        if ($file->storeAs('public', $filename)){
            $this->page->photo_url = $filename;
            $this->page->update();
            return true;
        }
        return false;
	}
}