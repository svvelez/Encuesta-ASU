<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class EncuestaMailable extends Mailable
{
    use Queueable, SerializesModels;
    protected $encuesta;


    public function __construct($encuesta = array())
    {
        $this->encuesta = $encuesta;
    }

    public function build()
    {
        return $this->view('asu.emails.mail_encuesta')
            ->from("soporteweb@dime.com.co")
            ->with('encuesta',$this->encuesta);;
    }
}
