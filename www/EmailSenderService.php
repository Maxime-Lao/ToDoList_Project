<?php
class EmailSenderService
{
    public function sendEmail(User $user)
    {
        if($user->isValid()){
            // send email with message
            $message = "Hello " . $user->getPrenom() . " " . $user->getNom() . "!";
            $message .= " You have 2 items left in your ToDo list";

            echo "Email sent to " . $user->getEmail() . " with message: " . $message;    
        }
    }

}
