<?php

#[Attribute(Attribute::TARGET_PROPERTY | Attribute::TARGET_PARAMETER)]
class NotBlank{

}

#[Attribute(Attribute::TARGET_PROPERTY)]
class Length{
    public int $min;
    public int $max;

    public function __construct(int $min, int $max){
        $this->min = $min;
        $this->max = $max;
    }
}

class LoginRequest{
    #[Length(min: 4, max:10)]
    #[Notblank]
    public string $username;


    #[Length(min: 8, max:10)]
    #[NotBlank]
    public string $password;
}

function validate(object $object){
    $class = new ReflectionClass($object);
    $properties = $class->getProperties();
    foreach ($properties as $property){
        validateNotBlank($property, $object);
    }
}

function validateNotBlank(ReflectionProperty $property, object $object): void{
    $attributes = $property->getAttributes(NotBlank::class);
    if(count($attributes)>0){
        if(!$property->isInitialized($object)){
            throw new Exception("Property $property->name is null");
        }
        if($property->getValue($object) == null){
            throw new Exception("Property $property->name is null");
        }
    }
}

$request = new LoginRequest();
$request->username = "kousaka";
$request->password = "kitabisa";
validate($request);