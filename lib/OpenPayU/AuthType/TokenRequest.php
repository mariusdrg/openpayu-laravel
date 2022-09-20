<?php

namespace OpenPayU\AuthType;

class AuthType_TokenRequest implements AuthType
{

    public function getHeaders()
    {
        return array(
            'Content-Type: application/x-www-form-urlencoded',
            'Accept: */*'
        );
    }

}