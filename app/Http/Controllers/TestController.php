<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Room;
use App\Models\Flat;
use App\Models\Parking_Spot;
use App\Models\Hostel;
use App\Models\Office;
use App\Models\Land;
use App\Models\Community_Center;
use App\Models\Shooting_Spot;
use App\Models\Shop;
use App\Models\Factory;
use App\Models\Warehouse;
use App\Models\Pond;
use App\Models\Swimming_Pool;
use App\Models\Bilboard;
use App\Models\Rooftop;
use App\Models\Restaurant;
use App\Models\Exibution_Center;
use App\Models\Play_ground;
use App\Models\Building;
use App\Models\Ghat;
use App\Models\Picnic_Spot;
use Illuminate\Http\Request;
use Spatie\Searchable\Search;

class TestController extends Controller
{


    public function search(Request $request)
    {
        $searchResults = (new search())
            ->registerModel(
                Hostel::class,
                'address',
                'hostel_name',
            )
            ->registerModel(
                Hotel::class,
                'hotel_name',
                'location',

            )
            ->registerModel(
                Bilboard::class,
                'address',

            )
            ->registerModel(
                Community_Center::class,
                'community_name',
                'address',
            )
            ->registerModel(
                Exibution_Center::class,
                'exibution_center_name',
                'address',

            )
            ->registerModel(
                Factory::class,
                'factory_name',
                'address',

            )
            ->registerModel(
                Flat::class,
                'address',

            )
            ->registerModel(
                Land::class,
                'address',

            )
            ->registerModel(
                Office::class,
                'address',

            )
            ->registerModel(
                Parking_Spot::class,
                'address',

            )
            ->registerModel(
                Play_ground::class,
                'address',

            )
            ->registerModel(
                Pond::class,
                'address',

            )
            ->registerModel(
                Restaurant::class,
                'resort_name',
                'address',

            )
            ->registerModel(
                Rooftop::class,
                'address',

            )
            ->registerModel(
                Room::class,
                'title',
                'address',

            )
            ->registerModel(
                Shooting_Spot::class,
                'shooting_name',
                'address',

            )
            ->registerModel(
                Shop::class,
                'address',

            )
            ->registerModel(
                Swimming_Pool::class,
                'type',
                'address',

            )
            ->registerModel(
                Warehouse::class,
                'address',

            )->registerModel(
                Pond::class,
                'address',
            )
            ->registerModel(
                Building::class,
                'address',
                'building_name',

            )
            ->registerModel(
                Picnic_Spot::class,
                'address',
            )
            ->registerModel(
                Ghat::class,
                'address',
            )
            ->perform($request->input('query'));

        return view('search', compact('searchResults'));
    }



    function room_details($id)
    {
        $list = Room::findOrFail($id);
        return view('Dashboard.search.single_room_list', compact('list'));
    }
    //end room

    function building_details($id)
    {
        $list = Building::findOrFail($id);
        return view('Dashboard.search.single_building_list', compact('list'));
    }
    //end building

    //picnic

    function picnic_details($id)
    {
        $list = Picnic_spot::findOrFail($id);
        return view('Dashboard.search.single_picnic_list', compact('list'));
    }
    //end picic

    //ghat

    function ghat_details($id)
    {
        $list = Ghat::findOrFail($id);
        return view('Dashboard.search.single_ghat_list', compact('list'));
    }
    //end ghat

    function hotel_details($id)
    {
        $list = Hotel::findOrFail($id);
        return view('Dashboard.search.single_hotel_list', compact('list'));
    }
    //end hotel

    function flat_details($id)
    {
        $list = Flat::findOrFail($id);
        return view('Dashboard.search.single_flat_list', compact('list'));
    }
    //end flat

    function parking_details($id)
    {
        $list = Parking_Spot::findOrFail($id);
        return view('Dashboard.search.single_parking_list', compact('list'));
    }
    //end parking spot

    function office_details($id)
    {
        $list = Office::findOrFail($id);
        return view('Dashboard.search.single_office_list', compact('list'));
    }
    //end office

    function community_details($id)
    {
        $list = Community_Center::findOrFail($id);
        return view('Dashboard.search.single_community_list', compact('list'));
    }
    //end community

    function factory_details($id)
    {
        $list = Factory::findOrFail($id);
        return view('Dashboard.search.single_factory_list', compact('list'));
    }
    //end factory


    function hostel_details($id)
    {
        $list = Hostel::findOrFail($id);
        return view('Dashboard.search.single_hostel_list', compact('list'));
    }
    //end hostel

    function land_details($id)
    {
        $list = Land::findOrFail($id);
        return view('Dashboard.search.single_land_list', compact('list'));
    }
    //end land

    function playground_details($id)
    {
        $list = Play_ground::findOrFail($id);
        return view('Dashboard.search.single_playground_list', compact('list'));
    }
    //end land

    function restaurant_details($id)
    {
        $list = Restaurant::findOrFail($id);
        return view('Dashboard.search.single_restaurant_list', compact('list'));
    }
    //end restaurant

    function rooftop_details($id)
    {
        $list = Rooftop::findOrFail($id);
        return view('Dashboard.search.single_rooftop_list', compact('list'));
    }
    //end rooftop

    function shooting_details($id)
    {
        $list = Shooting_Spot::findOrFail($id);
        return view('Dashboard.search.single_shooting_list', compact('list'));
    }
    //end shooting spot

    function shop_details($id)
    {
        $list = Shop::findOrFail($id);
        return view('Dashboard.search.single_shop_list', compact('list'));
    }
    //end shooting spot

    function swimmingpool_details($id)
    {
        $list = Swimming_Pool::findOrFail($id);
        return view('Dashboard.search.single_swimmingpool_list', compact('list'));
    }
    //end swimmingpool

    function warehouse_details($id)
    {
        $list = Warehouse::findOrFail($id);
        return view('Dashboard.search.single_warehouse_list', compact('list'));
    }
    //end warehouse

    function bilboard_details($id)
    {
        $list = Bilboard::findOrFail($id);
        return view('Dashboard.search.single_bilboard_list', compact('list'));
    }
    //end billboard

    function pond_details($id)
    {
        $list = Pond::findOrFail($id);
        return view('Dashboard.search.single_pond_list', compact('list'));
    }
    //end pond

    function exibution_details($id)
    {
        $list = Exibution_Center::findOrFail($id);
        return view('Dashboard.search.single_exibution_list', compact('list'));
    }
    //end exibution
    function billboard_details($id)
    {
        $list = Bilboard::findOrFail($id);
        return view('Dashboard.search.single_bilboard_list', compact('list'));
    }

    function index1()
    {
        return view('firebase');
    }
}
