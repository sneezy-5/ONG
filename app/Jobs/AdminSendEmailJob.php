<?php

namespace App\Jobs;

use App\Models\Newsletter;
use App\Mail\AdminSendEmail;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use App\Notifications\AdminSendEmailNotification;

class AdminSendEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(private $subject, private $message, private $picture=null)
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $newsletters = Newsletter::all();
        //$data = ['subject'=>$this->subject,'message'=>$this->message,'picture'=>$this->picture];

        $data = array('name'=>'Ogbonna Vitalis(sender_name)', 'body' => 'A test mail');
        foreach($newsletters as $key=>$newletter){
          
            $to_name = $newletter->email;
            $to_email = $newletter->email;

            Mail::to($to_email)->send(new AdminSendEmail($this->subject, $this->message));
            // Mail::send('template.email.adminemail', $data, function($message) use ($to_name, $to_email) {
            //     $message->to($to_email, $to_name)
            //     ->subject($this->subject);
            //     $message->from("adingranarcisse2@gmail.com",'sddsf');
            //     });
            #$newletter->email->notify(new AdminSendEmailNotification($this->subject,  $this->message, $this->picture));
        }
      
    }
}


