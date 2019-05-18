<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class SubcategoryProduct extends Model
{
    protected $table = 'subcategories_product';
    protected $fillable = ['product_id', 'subcategory_id'];
}
