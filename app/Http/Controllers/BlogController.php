<?php
namespace App\Http\Controllers;


class BlogController extends Controller
{
    public function login()
    {
        return view('blog.login');
    }

    public function index()
    {
        return view('blog.index');
    }

    public function technology()
    {
        return view('blog.technology');
    }

    public function ridicule()
    {
        return view('blog.ridicule');
    }

    public function faith()
    {
        return view('blog.faith');
    }

}