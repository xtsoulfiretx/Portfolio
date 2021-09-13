<?php 

class ContactSubmission extends Formsubmit {

    public $fname;
    public $lname;
    public $email;
    public $subject;
    public $message;


    public function getFName()
    {
        return $this->fname;
    }

    public function getLName()
    {
        return $this->lname;
    }

    public function getEmail() 
    {
        return $this->email;
    }

    public function getSubject()
    {
        return $this->subject;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function __construct($contactData) {
        $this->fname = $contactData["fname"];
        $this->lname = $contactData["lname"];
        $this->email = $contactData["email"];
        $this->subject = $contactData["subject"];
        $this->message = $contactData["message"];
      }
    
    public function submitForm() {
        try {
            include_once __DIR__ . "/../src/includes/connection.php";

            $stmt = $db->prepare("INSERT INTO contact (fname, lname, email, subject, message) VALUES (:fname, :lname, :email, :subject, :message)");
            $stmt->bindValue(":fname", $this->fname, PDO::PARAM_STR);
            $stmt->bindValue(":lname", $this->lname, PDO::PARAM_STR);
            $stmt->bindValue(":email", $this->email, PDO::PARAM_STR);
            $stmt->bindValue(":subject", $this->subject, PDO::PARAM_STR);
            $stmt->bindValue(":message", $this->message, PDO::PARAM_STR);
            $stmt->execute();

        } catch (Exception $e) {
            
        }
        return true;
    }    
}