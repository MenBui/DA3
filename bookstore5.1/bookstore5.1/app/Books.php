<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    protected $table = 'books';//model Books sẽ kết nối với bảng books trong CSDL
    protected $fillable = ['name','price'];// các trường thuốc tính sẽ sử dụng tới
}
