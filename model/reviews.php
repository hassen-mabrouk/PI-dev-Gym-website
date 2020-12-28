<?php

class review
{
    private $nomReview;
    private $emailReview;
    private $websiteReview;
    private $ratingReview;
    private $messageReview;
   



    public function getidReview()
    {
        return $this->idReview;
    }

    public function getnomReview()
    {
        return $this->nomReview;
    }
    public function getemailReview()
    {
        return $this->emailReview;
    }
    public function getwebsiteReview()
    {
        return $this->websiteReview;
    }
    public function getratingReview()
    {
        return $this->ratingReview;
    }
    public function getmessageReview()
    {
        return $this->messageReview;
    }
   


    public function setnomReview($nomReview)
    {
        $this->nomReview = $nomReview;
    }
    public function setemailReview($emailReview)
    {
        $this->emailReview = $emailReview;
    }
    public function setwebsiteReview($websiteReview)
    {
        $this->websiteReview = $websiteReview;
    }
    public function setratingReview($ratingReview)
    {
        $this->ratingReview = $ratingReview;
    }
    public function setmessageReview($messageReview)
    {
        $this->messageReview = $messageReview;
    }
    

    public function __construct($nomReview, $emailReview, $websiteReview, $ratingReview, $messageReview)
    {
        $this->nomReview = $nomReview;
        $this->emailReview = $emailReview;
        $this->websiteReview = $websiteReview;
        $this->ratingReview = $ratingReview;
        $this->messageReview = $messageReview;
        

    }
}
