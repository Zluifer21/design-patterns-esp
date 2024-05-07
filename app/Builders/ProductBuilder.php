<?php

namespace App\Builders;

class ProductBuilder
{
    protected $product;

    public function __construct()
    {
        $this->product = new Product();
    }

    public function setType($type)
    {
        $this->product->type_id = $type->id;
        return $this;
    }

    public function setName($name)
    {
        $this->product->name = $name;
        return $this;
    }

    public function setDescription($description)
    {
        $this->product->description = $description;
        return $this;
    }

    public function setPrice($price)
    {
        $this->product->price = $price;
        return $this;
    }

    public function setImage($image)
    {
        $this->product->image = $image;
        return $this;
    }

    public function setBrand($brand)
    {
        $this->product->brand = $brand;
        return $this;
    }

    public function setModel($model)
    {
        $this->product->model = $model;
        return $this;
    }

    public function setYear($year)
    {
        $this->product->year = $year;
        return $this;
    }

    public function setLocation($location)
    {
        $this->product->location = $location;
        return $this;
    }

    public function setRooms($rooms)
    {
        $this->product->rooms = $rooms;
        return $this;
    }

    public function setBathrooms($bathrooms)
    {
        $this->product->bathrooms = $bathrooms;
        return $this;
    }


    public function setLength($length)
    {
        $this->product->length = $length;
        return $this;
    }

    public function setCapacity($capacity)
    {
        $this->product->capacity = $capacity;
        return $this;
    }

    public function build()
    {
        return $this->product;
    }
}
