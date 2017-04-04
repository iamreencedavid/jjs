<?php

namespace App\Mail;

use App\Application;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendResume extends Mailable
{
    use Queueable, SerializesModels;

    protected $applicant;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($applicant)
    {
        $this->applicant = $applicant;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {   
        $resume = realpath("storage/uploads/resume/".$this->applicant->resume);

        return $this->from('iamreencedavid@yahoo.com')
                    ->attach($resume)
                    ->view('email.resume');
    }
}
