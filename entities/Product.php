<?php

/**
 * Created by PhpStorm.
 * User: Career 2
 * Date: 17.06.2017
 * Time: 19:23
 */
class Product
{
    private $id;
    private $name;
    private $cost;
    private $description;
    private $category;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }/**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }/**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }/**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }/**
     * @return mixed
     */
    public function getCost()
    {
        return $this->cost;
    }/**
     * @param mixed $cost
     */
    public function setCost($cost)
    {
        $this->cost = $cost;
    }/**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }/**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }/**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }/**
     * @param mixed $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }


}