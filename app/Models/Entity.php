<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Entity extends Model
{
    protected $primaryKey = 'entity_id';
    protected $fillable = ['entity_name', 'branch', 'fund_cluster'];

    public function receivedEquipments()
    {
        return $this->hasMany(ReceivedEquipment::class, 'entity_id');
    }

    public function inventoryCounts()
    {
        return $this->hasMany(InventoryCountForm::class, 'entity_id');
    }

    public function propertyCards()
    {
        return $this->hasMany(PropertyCard::class, 'entity_id');
    }
}
