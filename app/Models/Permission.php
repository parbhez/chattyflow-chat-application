<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;
    public function up()
{
    Schema::create('permissions', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('slug');
        $table->timestamps();
    });
}

public function roles() {

    return $this->belongsToMany(Role::class,'roles_permissions');
        
 }
 
 public function users() {
 
    return $this->belongsToMany(User::class,'users_permissions');
        
 }
 
}
