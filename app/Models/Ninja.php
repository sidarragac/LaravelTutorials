<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Ninja extends Model
{
    /**
     * NINJA ATTRIBUTES
     * $this->attributes['id'] - int - contains the ninjas primary key (id)
     * $this->attributes['name'] - string - contains the ninja's name
     * $this->attributes['village'] - string - contains the ninja's village
     * $this->attributes['chakra'] - int - contains the ninja's chakra integer
     * $this->attributes['created_at'] - timestamp - contains the ninja's creation timestamp
     * $this->attributes['updated_at'] - timestamp - contains the ninja's last update timestamp
     */
    protected $fillable = ['name', 'village', 'chakra'];

    public static function validate(Request $request): void
    {
        $request->validate([
            'name' => 'required',
            'village' => 'required|in:Hoja,Niebla',
            'chakra' => 'required|numeric',
        ]);
    }

    public function getId(): int
    {
        return $this->attributes['id'];
    }

    public function getName(): string
    {
        return $this->attributes['name'];
    }

    public function setName(string $name): void
    {
        $this->attributes['name'] = $name;
    }

    public function getVillage(): string
    {
        return $this->attributes['village'];
    }

    public function setVillage(string $village): void
    {
        $this->attributes['village'] = $village;
    }

    public function getChakra(): int
    {
        return $this->attributes['chakra'];
    }

    public function setChakra(int $chakra): void
    {
        $this->attributes['chakra'] = $chakra;
    }

    #This 2 functions doesn't have return type to prevent errors.
    public function getCreatedAt()
    {
        return $this->attributes['created_at'];
    }

    public function getUpdatedAt()
    {
        return $this->attributes['updated_at'];
    }
}
