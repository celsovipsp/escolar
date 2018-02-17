<?php
/**
 * Created by PhpStorm.
 * User: 27834372874
 * Date: 16/02/2018
 * Time: 19:54
 */

namespace Vendas;


class Venda
{
    private $id;
    private $data;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param mixed $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }
}