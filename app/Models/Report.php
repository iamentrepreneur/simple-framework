<?php

namespace App\Models;

use App\Application\Database\Connection;

class Report extends Connection
{
    protected int $id;
    protected string $email;
    protected string $subject;

    protected string $message;
    protected string $created_at;
    protected string $updated_at;

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getSubject(): string
    {
        return $this->subject;
    }

    /**
     * @param string $subject
     */
    public function setSubject(string $subject): void
    {
        $this->subject = $subject;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @param string $message
     */
    public function setMessage(string $message): void
    {
        $this->message = $message;
    }

    public function store(): void
    {
        $query = "INSERT INTO framework.reports (email, subject, message) VALUES (:email, :subject, :message)";
        $stmt = $this->connect()->prepare($query);
        $stmt->execute([
            'email' => $this->email,
            'subject' => $this->subject,
            'message' => $this->message
        ]);

    }
}