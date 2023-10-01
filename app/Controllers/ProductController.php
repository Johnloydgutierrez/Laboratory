<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel;
use App\Models\RegisterModel;
use App\Models\UserModel;

class ProductController extends BaseController
{
    private $product;

    public function __construct()
    {
        $this->product = new \App\Models\ProductModel(); 
        $this->crud = new ProductModel();
    }

    public function index()
    {
        return redirect()->to('/product');
    }

    public function viewAll()
    {
        $data['product'] = $this->product->findAll();
        return view('product', $data);
    }

    public function logout()
    {
        return redirect()->to('/website');
    }

    public function website()
    {
        return view('/website');
    }

    public function addForm()
    {
        $data['crud'] = $this->crud->findAll();
        return view('add', $data);
    }

    public function add()
    {
        $data = [
            'name' => $this->request->getVar('name'),
            'description' => $this->request->getVar('description'),
            'image' => $this->request->getVar('image'),
            'price' => $this->request->getVar('price'),
            'category' => $this->request->getVar('category'),
            'quantity' => $this->request->getVar('quantity'),
        ];

        $this->product->insert($data);
        return redirect()->to('/product');
    }

    public function editForm($id)
    {
        $data['product'] = $this->product->find($id);
        return view('edit', $data); 
    }

    public function edit($id)
    {
        $data = [
            'name' => $this->request->getVar('name'),
            'description' => $this->request->getVar('description'),
            'image' => $this->request->getVar('image'),
            'price' => $this->request->getVar('price'),
            'category' => $this->request->getVar('category'),
            'quantity' => $this->request->getVar('quantity'),
        ];
    
        $this->product->update($id, $data);
        return redirect()->to('/product');
    }

    public function delete($id)
    {
        $this->product->where('id', $id)->delete();      
        return redirect()->to('/product'); 
    }
}
