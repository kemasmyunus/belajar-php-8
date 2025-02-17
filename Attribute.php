<?php

#[Attribute]
class NotBlank{

}

class LoginRequest{
    #[Notblank]
    public string $username;

    #[NotBlank]
    public string $password;
}