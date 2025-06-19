<?php

class Category_model extends Database
{
    private $table = "categories";

    public function __construct()
    {
        parent::__construct();
    }

    public function getAllData()
    {
        $this->query("SELECT * FROM $this->table");
        return $this->resultSet();
    }

    public function addData($data)
    {
        $this->query("INSERT INTO $this->table (name, description, status, image) VALUES (:name, :description, :status, :image)");

        $this->bind(':name', $data['name']);
        $this->bind(':description', $data['description']);
        $this->bind(':status', $data['status']);
        $this->bind(':image', $data['image'] ?? ''); // Handle image being null

        return $this->execute();
    }

    public function updateData($id, $data)
    {
        $this->query("UPDATE $this->table SET name = :name, description = :description, status = :status, image = :image WHERE id = :id");

        $this->bind(':name', $data['name']);
        $this->bind(':description', $data['description']);
        $this->bind(':status', $data['status']);
        $this->bind(':image', $data['image'] ?? ''); // Handle image being null
        $this->bind(':id', $id);

        return $this->execute();
    }


    public function getById($id)
    {
        $this->query("SELECT * FROM $this->table WHERE id = :id");
        $this->bind(':id', $id);
        return $this->single();
    }

    public function deleteData($id)
    {
        $category = $this->getById($id);
        if ($category && $category['image']) {
            $imagePath = imageUrl("categories/") . $category['image'];
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        $this->query("DELETE FROM $this->table WHERE id = :id");
        $this->bind(':id', $id);

        return $this->execute();
    }

    public function updateStatus($id, $status)
    {
        $this->query("UPDATE $this->table SET status = :status WHERE id = :id");

        $this->bind(':status', $status);
        $this->bind(':id', $id);

        return $this->execute();
    }
}
