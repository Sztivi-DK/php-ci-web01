<?php

namespace App\Controllers;

class WebPages extends BaseController
{
    private function layout($page): string
    {
    return view('parts/begin')
        . view($page)
        . view('parts/aside')
        . view('parts/end');
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
