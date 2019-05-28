<?php
class Chest {
        protected $materials;
        protected $gold;
        protected $item;

        public function __construct($materials, $gold, $item)
        {
            $this->materials = $materials;
            $this->item = $item;
            $this->gold = $gold;
        }

        public function openChest ($coefficient = 1) {
            echo $this->materials[rand(0,count($this->materials) - 1)] . ": " . rand(20, 40) * $coefficient . "<br>";
            echo "Золота: " . rand($this->gold,$this->gold * 1.5) * $coefficient . "<br>";
            echo "Снаряжение: " . $this->item[rand(0,count($this->item) - 1)] . "<br>";
        }
}

class SilverChest extends Chest {
    protected $coefficient;
    protected $silverItem;

    public function __construct($materials, $gold, $item, $coefficient, $silverItem)
    {
        $this->coefficient = $coefficient;
        $this->silverItem = $silverItem;
        parent::__construct($materials, $gold, $item);
    }

    public function openChest($coefficient = 1)
    {
        parent::openChest($this->coefficient);
        $chineseRand = rand(0, 5);
        if ($chineseRand == 3) {
            echo "Снаряжение: " . $this->silverItem[rand(0,count($this->silverItem) - 1)];
        }
    }
}

class GoldenChest extends SilverChest {
    protected $goldItem;

    public function __construct($materials, $gold, $item, $coefficient, $silverItem, $goldItem)
    {
        $this->goldItem = $goldItem;
        parent::__construct($materials, $gold, $item, $coefficient, $silverItem);
    }

    public function openChest($coefficient = 1)
    {
        parent::openChest($this->coefficient);
        $chineseRandGold = rand(0, 10);
        if ($chineseRandGold == 3) {
            echo "Снаряжение: " . $this->goldItem[rand(0,count($this->goldItem) - 1)];
        }
    }
}

$materials = ["Дерево", "Известняк", "Медь"];
$gold = 400;
$item = ["Меч", "Шлем", "Щит", "Сапоги", "Перчатки", "Кираса"];
$silverItem = ["Серебрянный меч",
                "Серебрянный шлем",
                "Серебрянный щит",
                "Серебрянные сапоги",
                "Серебрянные перчатки",
                "Серебрянная кираса"];
$goldItem = ["Золотой меч",
    "Золотой шлем",
    "Золотой щит",
    "Золотые сапоги",
    "Золотые перчатки",
    "Золотая кираса"];

$woodChest = new Chest($materials, $gold, $item);
$silverChest = new SilverChest($materials, $gold, $item,3, $silverItem);
$goldChest = new GoldenChest($materials, $gold, $item,6, $silverItem, $goldItem);


echo "Деревянный сундук <br>";
$woodChest->openChest();

echo "<hr>";

echo "Серебрянный сундук <br>";
$silverChest->openChest();

echo "<hr>";

echo "Золотой сундук <br>";
$goldChest->openChest();

echo "<hr>";

class A {
    public function foo() {
        static $x = 0;
        echo ++$x . "<br>";
    }
}
$a1 = new A();
$a2 = new A();
$a1->foo();
$a2->foo();
$a1->foo();
$a2->foo();

echo "\$x статическая переменная она не умирает после выполнения функции а живет до тех пор пока будет нужна функция
где она инициировалась";

echo "<hr>";

class С {
    public function foo() {
        static $x = 0;
        echo ++$x . "<br>";
    }
}
class B extends С {
}
$a1 = new С();
$b1 = new B();
$a1->foo();
$b1->foo();
$a1->foo();
$b1->foo();

echo "Класс В экземпляр класса С поэтому функции у них разные(точнее они используют разные ячейки памяти) наверно так)";

echo "<hr>";

class D {
    public function foo() {
        static $x = 0;
        echo ++$x . "<br>";
    }
}
class E extends D {
}
$a1 = new D;
$b1 = new E;
$a1->foo();
$b1->foo();
$a1->foo();
$b1->foo();

echo "Ничего не изменится скобки можно опустить если в конструктор ничего не передаем.";