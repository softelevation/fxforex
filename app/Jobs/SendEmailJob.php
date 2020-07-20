<?php
  
namespace App\Jobs;
   
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\Mail\WelcomeMail;
use Mail;
   
class SendEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
  
    protected $details,$user,$password_decrypt; 
  
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($user,$password_decrypt,$details)
    {
        $this->details = $details;
        $this->user = $user;
        $this->password_decrypt = $password_decrypt;
    }
   
    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $email = new WelcomeMail($this->user,$this->password_decrypt);
        Mail::to($this->details['email'])->send($email);
    }
}
