<?php

/**
 * Created by PhpStorm.
 * User: jhonnymatracas
 * Date: 1/01/17
 * Time: 15:56
 */
class Memory extends Session
{

    public static function delInput($value)
    {
        parent::set('');
    }
    public static function keep($name,$value)
    {
        parent::addOne('input_value',$name,$value);
    }

    public static function getValue($a)
    {
        if (parent::getOne('input_value',$a))
            return parent::getOne('input_value',$a);
    }

    public static function keepAllPost()
    {
        foreach($_POST as $nombre_campo => $valor){
            $valor = Validate::clean($valor);
            parent::addOne('input_value',$nombre_campo,$valor);
        }

    }

}