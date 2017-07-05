<?php
namespace App\Http\Controllers;


class BlogController extends Controller
{
    public function login()
    {
        return view('blog.login');
    }

}