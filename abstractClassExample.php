<?php

abstract class AbstractClass
{
    // Force Extending class to define this method
    abstract protected function getValue();

    abstract protected function prefixValue($prefix);

    // Common method
    public function printOut(): void
    {
        print $this->getValue()."\n";
    }
}

class ConcreteClass1 extends AbstractClass
{
    protected function getValue()
    {
        return "ConcreteClass1";
    }

    public function prefixValue($prefix): string
    {
        return "{$prefix}ConcreteClass1";
    }
}

$class1 = new ConcreteClass1;
$class1->printOut();
echo '<br>';
echo $class1->prefixValue('FOO_')."\n";

//class ConcreteClass2 extends AbstractClass
//{
//    public function getValue()
//    {
//        return "ConcreteClass2";
//    }
//
//    public function prefixValue($prefix)
//    {
//        return "{$prefix}ConcreteClass2";
//    }
//}
//echo '<br>';
//$class2 = new ConcreteClass2;
//echo '<br>';
//$class2->printOut();
//echo '<br>';
//echo $class2->prefixValue('FOO_')."\n";
?>