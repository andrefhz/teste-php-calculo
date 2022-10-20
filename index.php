<?php


class Calculo
{

    public float $numFormated = 0;
    public float $result = 0;

    public function __construct(public string $num2)
    {
    }


    public function toFloat()
    {
        $number2 = $this->num2;

        $numtest = str_replace(".", "", $this->num2);
        $numtest = str_replace(",", ".", $numtest);
        $this->numFormated = floatval($numtest);
        return $this->numFormated;
    }

    public function add($num1)
    {
        $this->result = $num1 + $this->numFormated;
        return $this->result;
    }

    public function showValueFormated()
    {
        return 'R$ ' . number_format($this->result, 2, ",", ".");
    }
}

$test = new Calculo('1.234,56');
$test->toFloat();
$test->add(1.50);
echo $test->showValueFormated();
