<?php

class ContaBanco {
   public $numConta;
   protected $tipo;
   private $dono;
   private $saldo;
   private $status;
  
   //métodos especiais
   function __construct() {
       $this-> saldo = 0;
       $this-> status = false;
   }
   
   function setNumConta($numConta){
       $this-> numConta = $numConta;
   }
   function getNumConta(){
       return $this-> numConta;
   }
   function setTipo($tipo){
       $this-> tipo = $tipo;
   }
    function getTipo(){
       return $this-> tipo;
   } 
    function setDono($dono){
       $this-> dono = $dono;
   }
    function getDono(){
       return $this-> dono;
   } 
   function setSaldo($saldo){
       $this-> saldo = $saldo;
   }
   function getSaldo(){
       return $this-> saldo;
   } 
   function setStatus($status){
       $this-> status = $status;
   }
   function getStatus(){
       return $this-> status;
   }
   
   //métodos específicos
   function abrirConta($t){
       $this->setTipo($t);
       $this->setStatus(true);
        
       if ($t == "Cc"){
           $this->setSaldo(50);
       }
       elseif ($t == "Cp") {
           $this->saldo = 150;
       }
   }
   function fecharConta(){
       if($this->getSaldo() > 0){
           echo "tem dinheiro na conta!!";
       }elseif ($this->getSaldo() < 0) {
           echo "conta em débito!";    
        } else {
            $this->setStatus(false); //conta fechada!
        }
        
   }
   function depositar($v){
       if($this->getStatus()){
           $this->setSaldo($this->getSaldo() + $v);
       }else{
           echo "não é possível fazer deposito";//ué, a conta ta fechada!
       }
   }
   function sacar($v){
        if($this->getStatus()){ 
            if($this->getSaldo() > $v){
           $this->setSaldo($this->getSaldo() - $v);
            }else{
           echo "saldo insuficiente";
       }
   }else{
       echo "não posso sacar de uma conta fechada";
   }
   }
   
   function pagarMensal(){
    if($this-> getTipo() == "Cc"){
        $v = 12;
       }else if ($this->getTipo() == "Cp") {
        $v = 20;
       }
       if ($this->getStatus()){
        $this->setSaldo($this->getSaldo() - $v);
       }else{
        echo "problemas com a conta";
       }
   }
}
