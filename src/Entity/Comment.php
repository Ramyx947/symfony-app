<?php

namespace App\Entity;
// use Symfony\Component\Validator\Constraints as Assert;

class Comment
{

    protected $comment;
    protected $name;
    protected $email;


    public function getComment()
    {
        return $this->comment;
    }

    public function setComment($comment)
    {
        $this->comment=$comment;
    }


    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
         $this->name=$name;
    }
    

    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email=$email;
    }
}