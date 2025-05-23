<?php

namespace App\Service;

class MessageGenerator
{
    public function getMessage(bool $success): string
    {
        return $success ? 'Envoi réussi !' : 'Échec de l\'envoi';
    }
}
