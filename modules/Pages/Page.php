<?php
    /**
     * Created by PhpStorm.
     * User: GAlima
     * Date: 21/11/2017
     * Time: 08:16
     */
    namespace Modules\Pages;
    use Illuminate\Database\Eloquent\Model;

    class Page extends  Model
    {

        protected $fillable = [
            'title',
            'body'
        ];

    }