<?php
namespace App\View;

use Illuminate\View\View;

class Register
{

    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }
    public function compose(View $view)
    {
        $view->with('welcome',$this->data);
    }
}
