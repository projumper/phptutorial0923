<?php

class Gott{

public $love = 100;

}

class Human extends Gott 
{
    private $sex;
    public $name;
    public $age = 0;

    public function birth()
    {
        $rand = rand(1,2);

        if ($rand == 1)
        {
            $this->setSex("male");
        }else{
            $this->setSex("famale");
        }
        
    }

    public function setSex($sex)
    {
        $this->sex = $sex;
    }

    public function whoiam()
    {
        echo $this->sex;
    }
}


class transFemale extends Human {


    public function birth()
    {
        $this->setSex("female");
    }

}

class transMale extends Human {


    public function birth()
    {
        $this->setSex("male");
    }

}



$child1 = new Human();
$child1->birth();
echo $child1->love;

$hansWurst = new transMale();
$hansWurst->birth();
echo $hansWurst->love;
?>
