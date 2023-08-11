<?php
namespace App\Repositories;

interface RepositoryInterface
{
    public function getById($id);
    public function getAll();
    public function delete($id);
    public function update($id, $data);
    public function create($data);
}
