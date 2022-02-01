<?php
namespace App\classes;
use App\classes\User;
//for using any class within other class either one(without extend keywords) where i get only public method and property


//class calculator
//{
//    public $firstNumber=10;
//    protected $secondNumber=20;
//    private $operator=30;
//    public $result;
//    public $user;
//    public function index(){
//        //echo $this->operator;
//        $this->user = new User();
//        echo $this->user->city;
//    }
//    protected function one()
//    {
//        echo 'In Two';
//    }
//    private function two()
//    {
//        echo 'In Three';
//
//    }

//for using any class within other class either this method two (using extend keywords)where i get public and protected  method
//class calculator extends User
//{
//    public $firstNumber=10;
//    protected $secondNumber=20;
//    private $operator=30;
//    public $result;
//    public $user;
//    public function index(){
//        echo $this->city.'<br/>';
//        echo $this->login().'<br/>';
//        echo $this->country.'<br/>';
//
//    }
class calculator
{
    public $firstNumber;
    protected $secondNumber;
    private $operator;
    public $result;
    Public function __construct($data)
    {
        //echo $data;
        //echo $data[3];
        //echo is_array($data) ? 'data is array' : 'data is single variable';
//        $this->firstNumber   = 10;
//        $this->secondNumber  = 20;
//        $this->operator      ='+';
        $this->firstNumber   = $data['first_number'];
        $this->secondNumber  = $data['second_number'];
        $this->operator      =$data['operator'];
    }
    public function index()
    {
        switch ($this->operator)
        {
            case '+':
                $this->result = $this->add();
                break;
            case '-':
                $this->result = $this->sub();
                break;
            case '*':
                $this->result = $this->multiplication();
                break;

        }
        return $this->result;

        //echo $this->add();

    }
    protected function add()
    {
        return $this->firstNumber + $this->secondNumber;
    }
    protected function sub()
    {
        return $this->firstNumber + $this->secondNumber;

    }
    protected  function multiplication(){
        return $this->firstNumber * $this->secondNumber;

    }


}