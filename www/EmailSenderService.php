<?php
class EmailSenderService
{
    public function send(User $user)
    {
        if($user->isValid()){
            // send email
            echo "Email sent to " . $user->getEmail();
        }
    }

}
