<?php
namespace App\Models;
use APP\Models\Simple\JSONModel;

/*
 * Mock travel destination data.
 * Note that we don't have to extend CodeIgniter's model for now
 */

class Places extends Simple\JSONModel {
    protected $origin = WRITEPATH.'data/placesData.json';
    protected $keyField = 'id';
    protected $validationRules = [];

}
