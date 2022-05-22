<?php 
class Provider extends QueryBuilder {
    
    function getAll(){
        return $this->selectAll("providers");
    }
}