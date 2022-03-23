<?php

namespace Serendipitynl\Flasher;

use Illuminate\Support\Collection;

class Flash {

    public function success($message) {
        $this->addMessage($message, 'success');
    }

    public function error($message) {
        $this->addMessage($message, 'error');
    }


    public function addMessage($message = '', $type = 'success') {
        session()->push('laravel-messages.'.$type, $message);
    }

    public function getMessages()
    {
        return session()->pull('laravel-messages', []);
    }

    public function hasMessages()
    {
        return session()->has('laravel-messages');
    }


//    public function render() {
//
//        if ( ! $this->hasMessages() )
//        {
//            return;
//        }
//
//        return view('flasher::alert');
//    }

}