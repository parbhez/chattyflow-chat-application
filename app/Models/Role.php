<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;


    public function up()
{
    Schema::create('roles', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('slug');
        $table->timestamps();
    });
}

public function permissions() {

    return $this->belongsToMany(Permission::class,'roles_permissions');
        
 }
 
 public function users() {
 
    return $this->belongsToMany(User::class,'users_roles');
        
 }

}
