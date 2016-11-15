<?php

namespace AppBundle\Controller;

use AppBundle\Service\Calculator;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CalculatorController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        // replace this example code with whatever you need
        return $this->render(':calculator:index.html.twig');
    }
    /**
     * @Route("/sum", name="src_app_controller_calculator_sum")
     *
     */
  public function sumAction()
    {

        return $this->render(':calculator:formulario.html.twig',
            [
                'action' => 'app_calculator_doSum'
            ]
        );

    }
    /**
     * @Route("/calculadora/doSum", name="app_calculator_doSum")
     * @return \Symfony\Component\HttpFoundation\Response
     */

    public function doSumAction(Request $request)
    {
        $op1 = $request->request->get('op1');
        $op2 = $request->request->get('op2');
        $calculadora = new Calculator($op1,$op2);
        $calculadora->sumar();
        $resultado = $calculadora->getResultado();

        return $this->render(':calculator:resultado.html.twig',
            [
                'resultado'       => $resultado,

                'op1'            => $op1,
                'op2'            => $op2,
                'operacion'      => '+',
            ]
        );
    }

    /**
     * (@Route="multi" name="src_app_controller_calculator_multi")
     */
    public function multAction(){
return this->

    }

    /**
     * @Route ("/calculadora/restar", name="app_calculator_rest")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function restAction()
    {
        return $this->render(':calculator:formulario.html.twig',
            [
                'action'  => 'app_calculator_doRest',

            ]
        );
    }

    /**
     * @Route ("/calculadora/doRest", name="app_calculator_doRest")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function doRestAction(Request $request)
    {
        $op1 = $request->request->get('op1');
        $op2 = $request->request->get('op2');
        $calculadora = new Calculator($op1,$op2);
        $calculadora->restar();
        $resultado = $calculadora->getResultado();

        return $this->render(':calculator:resultado.html.twig',
            [
                'resultado'       => $resultado,

                'op1'            => $op1,
                'op2'            => $op2,
                'operacion'      => '-',

            ]
        );
    }

}
