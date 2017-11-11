<?php
namespace App\models;
use System\BaseModel;

class categoriesModel extends BaseModel
{
    public $category_id;
    public $category_name;
    public $parent_id;
}