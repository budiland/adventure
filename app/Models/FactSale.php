<?php

namespace App\Models;

use App\Models\Time;
use App\Models\Store;
use App\Models\Address;
use App\Models\Product;
use App\Models\Customer;
use App\Models\Employee;
use App\Models\ShipMethod;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;

class FactSale extends Model
{
    use HasFactory;

    protected $table = 'factsales';

    protected  $guarded = [
        'id',
    ];

    // belongs to
    public function time(): BelongsTo
    {
        return $this->belongsTo(Time::class, 'TimeID');
    }
    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class, 'CustomerID');
    }
    public function store(): BelongsTo
    {
        return $this->belongsTo(Store::class, 'StoreID');
    }
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'ProductID');
    }
    public function address(): BelongsTo
    {
        return $this->belongsTo(Address::class, 'AddressID');
    }
    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'EmployeeID');
    }
    public function shipmethod(): BelongsTo
    {
        return $this->belongsTo(ShipMethod::class, 'ShipMethodID');
    }

    public static function getProductData()
    {
        // ========== Original Query ==========
        // SELECT product.Name,
        // SUM(factsales.salesamt) salesamt
        // FROM factsales
        // JOIN product ON (factsales.ProductID=product.ProductID)
        // Group by product.Name
        // Order by SUM(factsales.salesamt)
        // limit 5;
        // =========================

        // select from database using raw query
        $datas = DB::table('factsales as s')
            ->select(DB::raw('p.Name, SUM(s.salesamt) salesamt'))
            ->join('product as p', 's.ProductID', '=', 'p.ProductID')
            ->groupBy('p.Name')
            ->orderBy('salesamt', 'desc')
            // limit 10 tertinggi karena chart tidak cukup untuk menampilkan semua data
            ->limit(10)
            ->get();

        // initiate array
        $salesamt = [];
        $name = [];

        foreach ($datas as $key => $data) {
            // append salesamt to array
            array_push($salesamt, $data->salesamt);
            // append name to array
            array_push($name, $data->Name);
        }
        // set array to object
        $datas->salesamt = $salesamt;
        $datas->name = $name;

        return $datas;
    }
}
