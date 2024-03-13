<?php

class MyClass
{
    public static function build(): self
    {
        return new self();
    }
}

class MyTest {
    public function doTheAction(MyClass $example): string
    {
        switch ($example) {
            case MyClass::build():
                return 'MyClass and OtherMyClass are Equal';
                break;
            default:
                return 'MyClass and OtherMyClass are Different';
        }
    }
}

$buddy = new MyClass();
$tester = new MyTest();

$result = $tester->doTheAction($buddy);

echo $result;