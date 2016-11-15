<?php
/**
 * Created by PhpStorm.
 * User: xeltr_000
 * Date: 28/10/2016
 * Time: 17:27
 */

namespace AppBundle\Service;


class Calculator
{
    /**
     * @var int
     */
    private $op1;
    /**
     * @var int
     */
    private $op2;
    /**
     * @var int
     */
    private $resultado;

    public function __construct($op1, $op2){

        $this
            ->setOp1($op1)
            ->setOp2($op2)
            ;
    }

    /**
     * @param int $op1
     */
    public function setOp1($op1)
    {
        $this->op1 = (int) $op1;
        return $this;
    }

    /**
     * @param int $op2
     */
    public function setOp2($op2)
    {
        $this->op2 = (int)$op2;
        return $this;
    }

    /**
     * @param int $resultado
     */
    public function setResultado($resultado)
    {
        $this->resultado = (int) $resultado;
        return $this;
    }

    /**
     * @return int
     */

    public function getOp1()
    {
        return $this->op1;
    }

    /**
     * @return int
     */
    public function getOp2()
    {
        return $this->op2;
    }

    /**
     * @return int
     */
    public function getResultado()
    {
        return $this->resultado;
    }
    public function sumar(){

        $this->setResultado($this->getOp1() + $this->getOp2());
    }
    public function multiplicar(){

        $this->setResultado($this->getOp1() * $this->getOp2());
    }
    public function restar(){

        $this->setResultado($this->getOp1() - $this->getOp2());
    }

    public function __toString()
    {
        return "Num1: " . $this->op1 . "Num2: " . $this->op2 . "Resultado: " . $this->resultado;
    }
}