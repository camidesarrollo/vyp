<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Email extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $data;
    public $excel;
    public function __construct($data, $excel = null)
    {
        $this->data =$data;
        $this->excel = $excel;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {   
        if($this->excel != null){
            return $this->from("camila.zaragoza.villaseca@gmail.com", env('MAIL_FROM_NAME'))
            ->view('emailCotizacion')
            ->subject('Cotización de productos')
            ->with($this->data)
            ->attach($this->excel, [
                'as' => 'Cotización.xlsx',
                'mime' => 'application/xlsx',
            ]);
        }else{
            return $this->from("camila.zaragoza.villaseca@gmail.com", env('MAIL_FROM_NAME'))
            ->view('emailContacto')
            ->subject('Información para contacto')
            ->with($this->data);
        }
        
        // ->attach(Excel::downlod(new export class name(),filename)->getFile());
 
        //sdsdsds
    }
}
