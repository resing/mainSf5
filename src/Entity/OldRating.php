<?php

namespace App\Entity;

class OldRating
{
    protected $rating;
    protected $comment;
    protected $username;
    protected $productid;
    protected $date;

    public function getRating(): string
    {
        return $this->rating;
    }

    public function setRating(string $task): void
    {
        $this->rating = $rating;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function setUsername(string $task): void
    {
        $this->username = $username;
    }

    public function getComment(): string
    {
        return $this->comment;
    }

    public function setComment(string $task): void
    {
        $this->comment = $comment;
    }

    public function getProductID(): string
    {
        return $this->productid;
    }

    public function setProductID(string $task): void
    {
        $this->productid = $productid;
    }

    public function getDate(): ?\DateTime
    {
        return $this->date;
    }

    public function setDate(?\DateTime $date): void
    {
        $this->date = $date;
    }
}
