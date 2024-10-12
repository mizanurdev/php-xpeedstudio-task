<?php

class Validation
{
    public function validateAmount($amount)
    {
        return filter_var($amount, FILTER_VALIDATE_INT);
    }

    public function validateBuyer($buyer)
    {
        return strlen($buyer) <= 20 && preg_match("/^[a-zA-Z0-9\s]+$/", $buyer);
    }

    public function validateEmail($email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    public function validatePhone($phone)
    {
        return preg_match("/^\d+$/", $phone);
    }

    public function validateCity($city)
    {
        return preg_match("/^[a-zA-Z\s]+$/", $city);
    }

    public function validateNote($note)
    {
        return str_word_count($note) <= 30;
    }

    public function validateSubmission($data)
    {
        $errors = [];

        if (!$this->validateAmount($data['amount'])) {
            $errors[] = "Amount must be a number.";
        }
        if (!$this->validateBuyer($data['buyer'])) {
            $errors[] = "Buyer name must not exceed 20 characters and can only contain text, spaces, and numbers.";
        }
        if (!$this->validateEmail($data['buyer_email'])) {
            $errors[] = "Invalid email format.";
        }
        if (!$this->validatePhone($data['phone'])) {
            $errors[] = "Phone number must contain only digits.";
        }
        if (!$this->validateCity($data['city'])) {
            $errors[] = "City name can only contain letters and spaces.";
        }
        if (!$this->validateNote($data['note'])) {
            $errors[] = "Note must not exceed 30 words.";
        }

        return $errors;
    }
}
