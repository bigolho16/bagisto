<?php

namespace ACME\HelloWorld\Models;

use Illuminate\Database\Eloquent\Model;

class SupExp extends Model
{ // nome da class supermercado de exemplo
    protected $table = "sup_exps";
    protected $fillable = ["nome", "endereco"];
}
