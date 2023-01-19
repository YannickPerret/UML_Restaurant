<?php

class Customer{

    private Table $table;

    public function book(Table $table){
        $this->table = $table;
    }

    public function pay(Bill $bill){
        
    }

    public function evaluate(){

        return "Vous avez donnez 3 étoiles";
    }
}