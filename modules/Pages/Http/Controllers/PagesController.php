<?php
    /**
     * Created by PhpStorm.
     * User: GAlima
     * Date: 21/11/2017
     * Time: 08:16
     */

    namespace Modules\Pages\Http\Controllers;
    use App\Http\Controllers\Controller;
    use Modules\Pages\Page;

    class PagesController  extends  Controller
    {

        public function index (  )
        {
            $pages = Page::all ();
            return view ('Page::index', ['pages' => $pages]);
        }

    }