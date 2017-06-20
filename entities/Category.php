<?php

/**
 * Created by PhpStorm.
 * User: Career 2
 * Date: 17.06.2017
 * Time: 19:19
 */
class Category
{

    private $id;
    private $name;
    private $subCategoryId;

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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getSubCategoryId()
    {
        return $this->subCategoryId;
    }

    /**
     * @param mixed $subCategoryId
     */
    public function setSubCategoryId($subCategoryId)
    {
        $this->subCategoryId = $subCategoryId;
    }

}