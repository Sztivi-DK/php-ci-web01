<?php

namespace App\Controllers;

class WebPages extends BaseController
{
    private function layout($page): string
    {
    return view('layout/begin')
        . view($page)
        . view('layout/aside')
        . view('layout/end');
    }
    public function home(): string
    {
        return $this->layout('pages/home');
    }
    public function services(): string
    {
        return $this->layout('pages/services');
    }
    public function contact(): string
    {
        return $this->layout('pages/contact');
    }
}
