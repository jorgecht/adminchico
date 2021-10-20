<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ConfirmacionMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $informacion;

    public $accion;

    public $estado;

    //public $subject;


   


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($informacion, $accion, $estado)
    {
        $this->informacion = $informacion;
        $this->accion = $accion;
        $this->estado = $estado;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        
        return $this->view('emails.confirmacion')->subject($this->accion);
    }
}
