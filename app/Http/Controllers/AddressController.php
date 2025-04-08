<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AddressController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'location_name' => 'required|string|max:255',
            'location_address' => 'required|string',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
        ]);

        $lastAddress = Address::orderBy('id_address', 'desc')->first();
        $lastNumber = $lastAddress ? intval(substr($lastAddress->id_address, 4)) : 0;
        $addressId = 'UAD-' . str_pad($lastNumber + 1, 4, '0', STR_PAD_LEFT);

        $address = new Address();
        $address->id_product = $addressId;
        $address->location_name = $request->location_name;
        $address->location_address = $request->location_address;
        $address->latitude = $request->latitude;
        $address->longitude = $request->longitude;
        $address->user_id = Auth::user()->id_user;

        $address->save();
        // Address::create($request->all());

        return response()->json(['success' => 'Location added successfully.']);
    }

    public function getLocations()
    {
        return Address::all();
    }

}
