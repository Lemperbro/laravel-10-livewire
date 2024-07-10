<?php

namespace App\Livewire\Admin\Dashboard;

use Livewire\Component;

class Dashboard extends Component
{
    public $sortField = 'nama_produk';
    public $sortDirection = 'asc';
    public $products;
    public function mount()
    {
        $this->products = collect([
            ['nama_produk' => 'Sepatu', 'stock' => 22, 'harga_satuan' => 10000, 'harga_total' => 220000],
            ['nama_produk' => 'Baju', 'stock' => 10, 'harga_satuan' => 20000, 'harga_total' => 200000],
            ['nama_produk' => 'Celana', 'stock' => 15, 'harga_satuan' => 15000, 'harga_total' => 225000],
            ['nama_produk' => 'Jaket', 'stock' => 5, 'harga_satuan' => 10000, 'harga_total' => 50000],
        ]);
    }
    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortField = $field;
            $this->sortDirection = 'asc';
        }

        $this->products = $this->products->sortBy([
            [$this->sortField, $this->sortDirection === 'asc' ? 'asc' : 'desc'],
        ]);
    }
    public function render()
    {
        return view('livewire.admin.dashboard.dashboard');
    }
}
