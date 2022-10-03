<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Hotel;
use App\Models\Building;
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
use App\Models\Ghat;
use App\Models\Advertise;
use App\Models\Picnic_Spot;
use Carbon\Carbon;
use Image;

class DashboardController extends Controller
{
    //
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    function admin_index()
    {
        $user = User::all()->count();
        return view('Dashboard.admin_index', compact('user'));
    }


    function add_hotel()
    {
        return view('Dashboard.hotel.add_hotel');
    }

    //ghat
    function post_ghat_rented(Request $request)
    {

        $ghat = Ghat::create([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'price' => $request->price,
            'description' => $request->description,
            'address' => $request->address,
            'toilet' => $request->toilet,
            'parking' => $request->parking,
            'photo' => $request->photo,
            'photo1' => $request->photo1,
            'photo2' => $request->photo2,
            'photo3' => $request->photo3,
            'photo4' => $request->photo4,
            'photo5' => $request->photo5,
            'photo6' => $request->photo6,
            'video' => $request->video,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);
        if ($request->file('photo')) {
            $file = $request->file('photo');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/ghats/'), $filename);
            $ghat['photo'] = $filename;
        }
        $ghat->save();
        if ($request->file('photo1')) {
            $file = $request->file('photo1');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/ghats/'), $filename);
            $ghat['photo1'] = $filename;
        }
        $ghat->save();
        if ($request->file('photo2')) {
            $file = $request->file('photo2');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/ghats/'), $filename);
            $ghat['photo2'] = $filename;
        }
        $ghat->save();
        if ($request->file('photo3')) {
            $file = $request->file('photo3');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/ghats/'), $filename);
            $ghat['photo3'] = $filename;
        }
        $ghat->save();
        if ($request->file('photo4')) {
            $file = $request->file('photo4');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/ghats/'), $filename);
            $ghat['photo4'] = $filename;
        }
        $ghat->save();
        if ($request->file('photo5')) {
            $file = $request->file('photo5');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/ghats/'), $filename);
            $ghat['photo5'] = $filename;
        }
        $ghat->save();
        if ($request->file('photo6')) {
            $file = $request->file('photo6');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/ghats/'), $filename);
            $ghat['photo6'] = $filename;
        }
        $ghat->save();
        if ($request->file('video')) {
            $file = $request->file('video');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/ghats/videos'), $filename);
            $ghat['video'] = $filename;
        }
        $ghat->save();
        return back()->with('success', 'Ghat information have been successfully Added.');
    }


    function post_ghat_wanted(Request $request)
    {

        $ghat = Ghat::create([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'price' => $request->price,
            'description' => $request->description,
            'address' => $request->address,
            'toilet' => $request->toilet,
            'parking' => $request->parking,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);

        return back()->with('success', 'Ghat information have been successfully Added.');
    }

    //end ghat

    //picnic
    function post_picnic_rented(Request $request)
    {

        $picnic = Picnic_Spot::create([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'address'=>$request->address,
            'description' => $request->description,
            'land_area'=>$request->land_area,
            'price'=>$request->price,
            'generator'=>$request->generator,
            'electricity' => $request->electricity,
            'gas' => $request->gas,
            'water' => $request->water,
            'shed' => $request->shed,
            'dining' => $request->dining,
            'toilet' => $request->toilet,
            'lift' => $request->lift,
            'parking' => $request->parking,
            'change_room' => $request->change_room,
            'photo' => $request->photo,
            'photo1' => $request->photo1,
            'photo2' => $request->photo2,
            'photo3' => $request->photo3,
            'photo4' => $request->photo4,
            'photo5' => $request->photo5,
            'photo6' => $request->photo6,
            'video' => $request->video,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);
        if ($request->file('photo')) {
            $file = $request->file('photo');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/picnics/'), $filename);
            $picnic['photo'] = $filename;
        }
        $picnic->save();
        if ($request->file('photo1')) {
            $file = $request->file('photo1');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/picnics/'), $filename);
            $picnic['photo1'] = $filename;
        }
        $picnic->save();
        if ($request->file('photo2')) {
            $file = $request->file('photo2');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/picnics/'), $filename);
            $picnic['photo2'] = $filename;
        }
        $picnic->save();
        if ($request->file('photo3')) {
            $file = $request->file('photo3');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/picnics/'), $filename);
            $picnic['photo3'] = $filename;
        }
        $picnic->save();
        if ($request->file('photo4')) {
            $file = $request->file('photo4');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/picnics/'), $filename);
            $picnic['photo4'] = $filename;
        }
        $picnic->save();
        if ($request->file('photo5')) {
            $file = $request->file('photo5');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/picnics/'), $filename);
            $picnic['photo5'] = $filename;
        }
        $picnic->save();
        if ($request->file('photo6')) {
            $file = $request->file('photo6');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/picnics/'), $filename);
            $picnic['photo6'] = $filename;
        }
        $picnic->save();
        if ($request->file('video')) {
            $file = $request->file('video');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/picnics/videos'), $filename);
            $picnic['video'] = $filename;
        }
        $picnic->save();
        return back()->with('success', 'Picnic information have been successfully Added.');
    }


    function post_picnic_wanted(Request $request)
    {

        $picnic = Picnic_Spot::create([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'address'=>$request->address,
            'description' => $request->description,
            'land_area'=>$request->land_area,
            'generator'=>$request->generator,
            'price'=>$request->price,
            'electricity' => $request->electricity,
            'gas' => $request->gas,
            'water' => $request->water,
            'shed' => $request->shed,
            'dining' => $request->dining,
            'toilet' => $request->toilet,
            'lift' => $request->lift,
            'parking' => $request->parking,
            'change_room' => $request->change_room,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);

        return back()->with('success', 'Picnic information have been successfully Added.');
    }
    //end picnic

    //building
    function post_building_rented(Request $request)
    {

        $building = Building::create([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'date' => $request->date,
            'phone' => $request->phone,
            'price' => $request->price,
            'building_name' => $request->building_name,
            'building_size' => $request->building_size,
            'floor' => $request->floor,
            'floor_size' => $request->floor_size,
            's_charge' => $request->s_charge,
            'generator'=>$request->generator,
            'road_width' => $request->road_width,
            'description' => $request->description,
            't_build' => $request->t_build,
            'address' => $request->address,
            'gas' => $request->gas,
            'water' => $request->water,
            'electricity' => $request->electricity,
            'lift' => $request->lift,
            'parking' => $request->parking,
            'fire_exit' => $request->fire_exit,
            'address' => $request->address,
            'photo' => $request->photo,
            'photo1' => $request->photo1,
            'photo2' => $request->photo2,
            'photo3' => $request->photo3,
            'photo4' => $request->photo4,
            'photo5' => $request->photo5,
            'photo6' => $request->photo6,
            'video' => $request->video,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);
        if ($request->file('photo')) {
            $file = $request->file('photo');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/buildings/'), $filename);
            $building['photo'] = $filename;
        }
        $building->save();
        if ($request->file('photo1')) {
            $file = $request->file('photo1');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/buildings/'), $filename);
            $building['photo1'] = $filename;
        }
        $building->save();
        if ($request->file('photo2')) {
            $file = $request->file('photo2');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/buildings/'), $filename);
            $building['photo2'] = $filename;
        }
        $building->save();
        if ($request->file('photo3')) {
            $file = $request->file('photo3');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/buildings/'), $filename);
            $building['photo3'] = $filename;
        }
        $building->save();
        if ($request->file('photo4')) {
            $file = $request->file('photo4');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/buildings/'), $filename);
            $building['photo4'] = $filename;
        }
        $building->save();
        if ($request->file('photo5')) {
            $file = $request->file('photo5');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/buildings/'), $filename);
            $building['photo5'] = $filename;
        }
        $building->save();
        if ($request->file('photo6')) {
            $file = $request->file('photo6');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/buildings/'), $filename);
            $building['photo6'] = $filename;
        }
        $building->save();
        if ($request->file('video')) {
            $file = $request->file('video');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/buildings/videos'), $filename);
            $building['video'] = $filename;
        }
        $building->save();
        return back()->with('success', 'Building information have been successfully Added.');
    }

    function post_building_wanted(Request $request)
    {

        $building = Building::create([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'date' => $request->date,
            'phone' => $request->phone,
            'price' => $request->price,
            'building_name' => $request->building_name,
            'building_size' => $request->building_size,
            'floor' => $request->floor,
            'floor_size' => $request->floor_size,
            's_charge' => $request->s_charge,
            't_build' => $request->t_build,
            'generator'=>$request->generator,
            'road_width' => $request->road_width,
            'description' => $request->description,
            'address' => $request->address,
            'gas' => $request->gas,
            'water' => $request->water,
            'electricity' => $request->electricity,
            'lift' => $request->lift,
            'parking' => $request->parking,
            'fire_exit' => $request->fire_exit,
            'address' => $request->address,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);

        return back()->with('success', 'Building Wanted post successfully Added.');
    }
    function building_update(Request $request)
    {

        $building = Building::findOrFail($request->id)->update([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'building_name' => $request->building_name,
            'building_size' => $request->building_size,
            'description' => $request->description,
            'type' => $request->type,
            'address' => $request->address,
            'size' => $request->size,
            'hieght' => $request->hieght,
            'electricity' => $request->electricity,
            'lift' => $request->lift,
            'parking' => $request->parking,
            'gas' => $request->gas,
            'water' => $request->water,
            'price' => $request->price,
        ]);


        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photoName = date('YmdHi') . 'photo' . '.' . $photo->getClientOriginalExtension();
            if (Bilboard::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/buildings/" . $photoName), 100);
                Bilboard::findOrFail($request->id)->update([
                    'photo' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/buildings/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/buildings/" . $photoName), 100);
            }
        }


        if ($request->hasFile('photo1')) {
            $photo = $request->file('photo1');
            $photoName = date('YmdHi') . 'photo1' . '.' . $photo->getClientOriginalExtension();
            if (Bilboard::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/buildings/" . $photoName), 100);
                Bilboard::findOrFail($request->id)->update([
                    'photo1' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/buildings/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/buildings/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo2')) {
            $photo = $request->file('photo2');

            $photoName = date('YmdHi') . 'photo2' . '.' . $photo->getClientOriginalExtension();
            if (Bilboard::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/buildings/" . $photoName), 100);
                Bilboard::findOrFail($request->id)->update([
                    'photo2' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/buildings/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/buildings/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo3')) {
            $photo = $request->file('photo3');
            $photoName = date('YmdHi') . 'photo3' . '.' . $photo->getClientOriginalExtension();
            if (Bilboard::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/buildings/" . $photoName), 100);
                Bilboard::findOrFail($request->id)->update([
                    'photo3' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/buildings/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/buildings/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo4')) {
            $photo = $request->file('photo4');
            $photoName = date('YmdHi') . 'photo4' . '.' . $photo->getClientOriginalExtension();
            if (Bilboard::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/buildings/" . $photoName), 100);
                Bilboard::findOrFail($request->id)->update([
                    'photo4' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/buildings/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/buildings/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo5')) {
            $photo = $request->file('photo5');
            $photoName = date('YmdHi') . 'photo5' . '.' . $photo->getClientOriginalExtension();
            if (Bilboard::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/buildings/" . $photoName), 100);
                Bilboard::findOrFail($request->id)->update([
                    'photo5' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/buildings/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/buildings/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo6')) {
            $photo = $request->file('photo6');
            $photoName = date('YmdHi') . 'photo6' . '.' . $photo->getClientOriginalExtension();
            if (Bilboard::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/buildings/" . $photoName), 100);
                Bilboard::findOrFail($request->id)->update([
                    'photo6' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/buildings/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/buildings/" . $photoName), 100);
            }
        }

        return back()->with('success', 'Building information have been successfully Updated.');
    }

    //end building
    function post_hotel_rented(Request $request)
    {

        $hotel = Hotel::create([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'date' => $request->date,
            'phone' => $request->phone,
            's_charge' => $request->s_charge,
            'description' => $request->description,
            'hotel_name' => $request->hotel_name,
            'location' => $request->location,
            'room_type' => $request->room_type,
            'wifi' => $request->wifi,
            'lift' => $request->lift,
            'generator'=>$request->generator,
            'parking' => $request->parking,
            'ac' => $request->ac,
            'laundry' => $request->laundry,
            'price' => $request->price,
            'gym' => $request->gym,
            'sports' => $request->sports,
            'dining' => $request->dining,
            'fire_exit' => $request->fire_exit,
            'photo' => $request->photo,
            'photo1' => $request->photo1,
            'photo2' => $request->photo2,
            'photo3' => $request->photo3,
            'photo4' => $request->photo4,
            'photo5' => $request->photo5,
            'photo6' => $request->photo6,
            'video' => $request->video,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);
        if ($request->file('photo')) {
            $file = $request->file('photo');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/hotels/'), $filename);
            $hotel['photo'] = $filename;
        }
        $hotel->save();
        if ($request->file('photo1')) {
            $file = $request->file('photo1');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/hotels/'), $filename);
            $hotel['photo1'] = $filename;
        }
        $hotel->save();
        if ($request->file('photo2')) {
            $file = $request->file('photo2');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/hotels/'), $filename);
            $hotel['photo2'] = $filename;
        }
        $hotel->save();
        if ($request->file('photo3')) {
            $file = $request->file('photo3');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/hotels/'), $filename);
            $hotel['photo3'] = $filename;
        }
        $hotel->save();
        if ($request->file('photo4')) {
            $file = $request->file('photo4');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/hotels/'), $filename);
            $hotel['photo4'] = $filename;
        }
        $hotel->save();
        if ($request->file('photo5')) {
            $file = $request->file('photo5');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/hotels/'), $filename);
            $hotel['photo5'] = $filename;
        }
        $hotel->save();
        if ($request->file('photo6')) {
            $file = $request->file('photo6');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/hotels/'), $filename);
            $hotel['photo6'] = $filename;
        }
        $hotel->save();
        if ($request->file('video')) {
            $file = $request->file('video');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/hotels/videos'), $filename);
            $hotel['video'] = $filename;
        }
        $hotel->save();
        return back()->with('success', 'Hotel information have been successfully Added.');
    }

    function post_hotel_wanted(Request $request)
    {

        $hotel = Hotel::create([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'date' => $request->date,
            'phone' => $request->phone,
            's_charge' => $request->s_charge,
            'description' => $request->description,
            'hotel_name' => $request->hotel_name,
            'location' => $request->location,
            'generator'=>$request->generator,
            'room_type' => $request->room_type,
            'wifi' => $request->wifi,
            'lift' => $request->lift,
            'parking' => $request->parking,
            'ac' => $request->ac,
            'laundry' => $request->laundry,
            'price' => $request->price,
            'gym' => $request->gym,
            'sports' => $request->sports,
            'dining' => $request->dining,
            'fire_exit' => $request->fire_exit,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);

        return back()->with('success', 'Hotel information have been successfully Added.');
    }

    function list_hotel()
    {
        $lists = Hotel::all();
        $trashed_lists = Hotel::onlyTrashed()->get();
        return view('Dashboard.hotel.list_hotel', compact('lists', 'trashed_lists'));
    }


    function hotel_update(Request $request)
    {

        $hotel = Hotel::findOrFail($request->id)->update([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'hotel_name' => $request->hotel_name,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'description' => $request->description,
            'location' => $request->location,
            'wifi' => $request->wifi,
            'bathroom' => $request->bathroom,
            'cctv' => $request->cctv,
            'lift' => $request->lift,
            'furnished' => $request->furnished,
            'security' => $request->security,
            'parking' => $request->parking,
            'price' => $request->price,
            'guest_count' => $request->guest_count,

        ]);


        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photoName = date('YmdHi') . 'photo' . '.' . $photo->getClientOriginalExtension();
            if (Hotel::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(1000, 1000)->save(base_path("public/uploads/hotels/" . $photoName), 100);
                Hotel::findOrFail($request->id)->update([
                    'photo' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/hotels/" . $photoName));
                Image::make($photo->getRealPath())->resize(1000, 1000)->save(base_path("public/uploads/hotels/" . $photoName), 100);
            }
        }


        if ($request->hasFile('photo1')) {
            $photo = $request->file('photo1');
            $photoName = date('YmdHi') . 'photo1' . '.' . $photo->getClientOriginalExtension();
            if (Hotel::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(1000, 1000)->save(base_path("public/uploads/hotels/" . $photoName), 100);
                Hotel::findOrFail($request->id)->update([
                    'photo1' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/hotels/" . $photoName));
                Image::make($photo->getRealPath())->resize(1000, 1000)->save(base_path("public/uploads/hotels/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo2')) {
            $photo = $request->file('photo2');

            $photoName = date('YmdHi') . 'photo2' . '.' . $photo->getClientOriginalExtension();
            if (Hotel::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(1000, 1000)->save(base_path("public/uploads/hotels/" . $photoName), 100);
                Hotel::findOrFail($request->id)->update([
                    'photo2' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/hotels/" . $photoName));
                Image::make($photo->getRealPath())->resize(1000, 1000)->save(base_path("public/uploads/hotels/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo3')) {
            $photo = $request->file('photo3');
            $photoName = date('YmdHi') . 'photo3' . '.' . $photo->getClientOriginalExtension();
            if (Hotel::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(1000, 1000)->save(base_path("public/uploads/hotels/" . $photoName), 100);
                Hotel::findOrFail($request->id)->update([
                    'photo3' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/hotels/" . $photoName));
                Image::make($photo->getRealPath())->resize(1000, 1000)->save(base_path("public/uploads/hotels/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo4')) {
            $photo = $request->file('photo4');
            $photoName = date('YmdHi') . 'photo4' . '.' . $photo->getClientOriginalExtension();
            if (Hotel::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(1000, 1000)->save(base_path("public/uploads/hotels/" . $photoName), 100);
                Hotel::findOrFail($request->id)->update([
                    'photo4' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/hotels/" . $photoName));
                Image::make($photo->getRealPath())->resize(1000, 1000)->save(base_path("public/uploads/hotels/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo5')) {
            $photo = $request->file('photo5');
            $photoName = date('YmdHi') . 'photo5' . '.' . $photo->getClientOriginalExtension();
            if (Hotel::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(1000, 1000)->save(base_path("public/uploads/hotels/" . $photoName), 100);
                Hotel::findOrFail($request->id)->update([
                    'photo5' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/hotels/" . $photoName));
                Image::make($photo->getRealPath())->resize(1000, 1000)->save(base_path("public/uploads/hotels/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo6')) {
            $photo = $request->file('photo6');
            $photoName = date('YmdHi') . 'photo6' . '.' . $photo->getClientOriginalExtension();
            if (Hotel::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(1000, 1000)->save(base_path("public/uploads/hotels/" . $photoName), 100);
                Hotel::findOrFail($request->id)->update([
                    'photo6' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/hotels/" . $photoName));
                Image::make($photo->getRealPath())->resize(1000, 1000)->save(base_path("public/uploads/hotels/" . $photoName), 100);
            }
        }
        return back()->with('success', 'Hotel information have been successfully Updated.');
    }

    function hotel_delete($id)
    {
        $list = Hotel::findOrFail($id)->delete();
        return back();
    }

    function hotel_restore($id)
    {
        Hotel::onlyTrashed()->findOrFail($id)->restore();
        return back();
    }

    //begin room

    function list_room()
    {
        $lists = Room::all();
        $trashed_lists = Room::onlyTrashed()->get();
        return view('Dashboard.room.list_room', compact('lists', 'trashed_lists'));
    }


    function room_update(Request $request)
    {
        // dd($request->all());
        $room = Room::findOrFail($request->id)->update([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'description' => $request->description,
            'address' => $request->address,
            'price' => $request->price,
            's_charge' => $request->s_charge,
            'room_size' => $request->room_size,
            'furnished'=> $request->furnished,
            'electricity'=> $request->electricity,
            'gas'=> $request->gas,
            'water'=> $request->water,
            'attached_toilet'=> $request->attached_toilet,
            'hot_water'=> $request->hot_water,
            'generator'=>$request->generator,
            'ac'=> $request->ac,
            'wifi'=> $request->wifi,
            'cable_tv'=> $request->cable_tv,
            'lift'=> $request->lift,
            'parking'=> $request->parking,
            'video' => $request->video,



        ]);

        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photoName = date('YmdHi') . 'photo' . '.' . $photo->getClientOriginalExtension();
            if (Room::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(1000, 1000)->save(base_path("public/uploads/rooms/" . $photoName), 100);
                Room::findOrFail($request->id)->update([
                    'photo' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/rooms/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/rooms/" . $photoName), 100);
            }
        }


        if ($request->hasFile('photo1')) {
            $photo = $request->file('photo1');
            $photoName = date('YmdHi') . 'photo1' . '.' . $photo->getClientOriginalExtension();
            if (Room::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/rooms/" . $photoName), 100);
                Room::findOrFail($request->id)->update([
                    'photo1' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/rooms/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/rooms/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo2')) {
            $photo = $request->file('photo2');

            $photoName = date('YmdHi') . 'photo2' . '.' . $photo->getClientOriginalExtension();
            if (Room::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/rooms/" . $photoName), 100);
                Room::findOrFail($request->id)->update([
                    'photo2' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/rooms/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/rooms/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo3')) {
            $photo = $request->file('photo3');
            $photoName = date('YmdHi') . 'photo3' . '.' . $photo->getClientOriginalExtension();
            if (Room::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/rooms/" . $photoName), 100);
                Room::findOrFail($request->id)->update([
                    'photo3' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/rooms/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/rooms/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo4')) {
            $photo = $request->file('photo4');
            $photoName = date('YmdHi') . 'photo4' . '.' . $photo->getClientOriginalExtension();
            if (Room::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/rooms/" . $photoName), 100);
                Room::findOrFail($request->id)->update([
                    'photo4' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/rooms/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/rooms/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo5')) {
            $photo = $request->file('photo5');
            $photoName = date('YmdHi') . 'photo5' . '.' . $photo->getClientOriginalExtension();
            if (Room::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/rooms/" . $photoName), 100);
                Room::findOrFail($request->id)->update([
                    'photo5' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/rooms/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/rooms/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo6')) {
            $photo = $request->file('photo6');
            $photoName = date('YmdHi') . 'photo6' . '.' . $photo->getClientOriginalExtension();
            if (Room::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/rooms/" . $photoName), 100);
                Room::findOrFail($request->id)->update([
                    'photo6' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/rooms/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/rooms/" . $photoName), 100);
            }
        }
        return back()->with('success', 'Room information have been successfully Updated.');
    }


    function room_delete($id)
    {
        $list = Room::findOrFail($id)->delete();
        return back();
    }

    function room_restore($id)
    {
        Room::onlyTrashed()->findOrFail($id)->restore();
        return back();
    }

    //end room

    //begin flat
    function add_flat()
    {
        return view('Dashboard.flat.add_flat');
    }

    function post_flat_rented(Request $request)
    {

        $flat = Flat::create([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            's_charge' => $request->s_charge,
            'description' => $request->description,
            'address' => $request->address,
            'flat_size' => $request->flat_size,
            'floor_level' => $request->floor_level,
            'bedrooms' => $request->bedrooms,
            'fire_exit' => $request->fire_exit,
            'description' => $request->description,
            'generator'=>$request->generator,
            'drawing'=>$request->drawing,
            'dining'=>$request->dining,
            'attached_toilet' => $request->attached_toilet,
            'hot_water' => $request->hot_water,
            'laundry' => $request->laundry,
            'ac' => $request->ac,
            'cable_tv' => $request->cable_tv,
            'kitchen'=>$request->kicthen,
            'wifi' => $request->wifi,
            'lift' => $request->lift,
            'furnished' => $request->furnished,
            'parking' => $request->parking,
            'gas' => $request->gas,
            'water' => $request->water,
            'electricity' => $request->electricity,
            'price' => $request->price,
            'photo' => $request->photo,
            'photo1' => $request->photo1,
            'photo2' => $request->photo2,
            'photo3' => $request->photo3,
            'photo4' => $request->photo4,
            'photo5' => $request->photo5,
            'photo6' => $request->photo6,
            'video' => $request->video,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);
        if ($request->file('photo')) {
            $file = $request->file('photo');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/flats/'), $filename);
            $flat['photo'] = $filename;
        }
        $flat->save();
        if ($request->file('photo1')) {
            $file = $request->file('photo1');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/flats/'), $filename);
            $flat['photo1'] = $filename;
        }
        $flat->save();
        if ($request->file('photo2')) {
            $file = $request->file('photo2');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/flats/'), $filename);
            $flat['photo2'] = $filename;
        }
        $flat->save();
        if ($request->file('photo3')) {
            $file = $request->file('photo3');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/flats/'), $filename);
            $flat['photo3'] = $filename;
        }
        $flat->save();
        if ($request->file('photo4')) {
            $file = $request->file('photo4');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/flats/'), $filename);
            $flat['photo4'] = $filename;
        }
        $flat->save();
        if ($request->file('photo5')) {
            $file = $request->file('photo5');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/flats/'), $filename);
            $flat['photo5'] = $filename;
        }
        $flat->save();
        if ($request->file('photo6')) {
            $file = $request->file('photo6');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/flats/'), $filename);
            $flat['photo6'] = $filename;
        }
        $flat->save();
        if ($request->file('video')) {
            $file = $request->file('video');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/flats/videos'), $filename);
            $flat['video'] = $filename;
        }
        $flat->save();

        return back()->with('success', 'Flat information have been successfully Added.');
    }
    function post_flat_wanted(Request $request)
    {

        $flat = Flat::create([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            's_charge' => $request->s_charge,
            'description' => $request->description,
            'address' => $request->address,
            'flat_size' => $request->flat_size,
            'floor_level' => $request->floor_level,
            'bedrooms' => $request->bedrooms,
            'fire_exit' => $request->fire_exit,
            'description' => $request->description,
            'generator'=>$request->generator,
            'drawing'=>$request->drawing,
            'dining'=>$request->dining,
            'varanda'=>$request->dining,
            'attached_toilet' => $request->attached_toilet,
            'hot_water' => $request->hot_water,
            'laundry' => $request->laundry,
            'ac' => $request->ac,
            'cable_tv' => $request->cable_tv,
            'kitchen'=>$request->kicthen,
            'wifi' => $request->wifi,
            'lift' => $request->lift,
            'furnished' => $request->furnished,
            'parking' => $request->parking,
            'gas' => $request->gas,
            'water' => $request->water,
            'electricity' => $request->electricity,
            'price' => $request->price,
            'active' => 1,
            'created_at' => Carbon::now()
        ]);
        return back()->with('success', 'Flat information have been successfully Added.');
    }

    function list_flat()
    {
        $lists = Flat::all();
        $trashed_lists = Flat::onlyTrashed()->get();
        return view('Dashboard.flat.list_flat', compact('lists', 'trashed_lists'));
    }



    function flat_update(Request $request)
    {

        $flat = Flat::findOrFail($request->id)->update([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            's_charge' => $request->s_charge,
            'description' => $request->description,
            'address' => $request->address,
            'flat_size' => $request->flat_size,
            'description' => $request->description,
            'attached_toilet' => $request->attached_toilet,
            'utilities' => $request->utilities,
            'attached_varanda' => $request->attached_varanda,
            'hot_water' => $request->hot_water,
            'laundry' => $request->laundry,
            'ac' => $request->ac,
            'cable_tv' => $request->cable_tv,
            'wifi' => $request->wifi,
            'lift' => $request->lift,
            'furnished' => $request->furnished,
            'parking' => $request->parking,
            'price' => $request->price,
        ]);


        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photoName = date('YmdHi') . 'photo' . '.' . $photo->getClientOriginalExtension();
            if (Flat::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/flats/" . $photoName), 100);
                Flat::findOrFail($request->id)->update([
                    'photo' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/flats/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/flats/" . $photoName), 100);
            }
        }


        if ($request->hasFile('photo1')) {
            $photo = $request->file('photo1');
            $photoName = date('YmdHi') . 'photo1' . '.' . $photo->getClientOriginalExtension();
            if (Flat::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/flats/" . $photoName), 100);
                Flat::findOrFail($request->id)->update([
                    'photo1' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/flats/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/flats/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo2')) {
            $photo = $request->file('photo2');
            $photoName = date('YmdHi') . 'photo2' . '.' . $photo->getClientOriginalExtension();
            if (Flat::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/flats/" . $photoName), 100);
                Flat::findOrFail($request->id)->update([
                    'photo2' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/flats/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/flats/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo3')) {
            $photo = $request->file('photo3');
            $photoName = date('YmdHi') . 'photo3' . '.' . $photo->getClientOriginalExtension();
            if (Flat::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/flats/" . $photoName), 100);
                Flat::findOrFail($request->id)->update([
                    'photo3' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/flats/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/flats/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo4')) {
            $photo = $request->file('photo4');
            $photoName = date('YmdHi') . 'photo4' . '.' . $photo->getClientOriginalExtension();
            if (Flat::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/flats/" . $photoName), 100);
                Flat::findOrFail($request->id)->update([
                    'photo4' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/flats/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/flats/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo5')) {
            $photo = $request->file('photo5');
            $photoName = date('YmdHi') . 'photo5' . '.' . $photo->getClientOriginalExtension();
            if (Flat::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/flats/" . $photoName), 100);
                Flat::findOrFail($request->id)->update([
                    'photo5' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/flats/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/flats/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo6')) {
            $photo = $request->file('photo6');
            $photoName = date('YmdHi') . 'photo6' . '.' . $photo->getClientOriginalExtension();
            if (Flat::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/flats/" . $photoName), 100);
                Flat::findOrFail($request->id)->update([
                    'photo6' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/flats/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/flats/" . $photoName), 100);
            }
        }
        return back()->with('success', 'Flat information have been successfully Updated.');
    }

    function flat_delete($id)
    {
        $list = Flat::findOrFail($id)->delete();
        return back();
    }
    function flat_restore($id)
    {
        Flat::onlyTrashed()->findOrFail($id)->restore();
        return back();
    }
    //end flat

    //begin parking spot
    function add_parking_spot()
    {
        return view('Dashboard.parking_spot.add_parking');
    }
    function post_parking_spot_rented(Request $request)
    {
        $parking = Parking_Spot::create([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'description' => $request->description,
            'address' => $request->address,
            'price' => $request->price,
            'floor_level' => $request->floor_level,
            'floor_height' => $request->floor_height,
            'vehicle_type' => $request->vehicle_type,
            'photo' => $request->photo,
            'photo1' => $request->photo1,
            'photo2' => $request->photo2,
            'photo3' => $request->photo3,
            'photo4' => $request->photo4,
            'photo5' => $request->photo5,
            'photo6' => $request->photo6,
            'video' => $request->video,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);
        if ($request->file('photo')) {
            $file = $request->file('photo');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/garages/'), $filename);
            $parking['photo'] = $filename;
        }
        $parking->save();
        if ($request->file('photo1')) {
            $file = $request->file('photo1');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/garages/'), $filename);
            $parking['photo1'] = $filename;
        }
        $parking->save();
        if ($request->file('photo2')) {
            $file = $request->file('photo2');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/garages/'), $filename);
            $parking['photo2'] = $filename;
        }
        $parking->save();
        if ($request->file('photo3')) {
            $file = $request->file('photo3');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/garages/'), $filename);
            $parking['photo3'] = $filename;
        }
        $parking->save();
        if ($request->file('photo4')) {
            $file = $request->file('photo4');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/garages/'), $filename);
            $parking['photo4'] = $filename;
        }
        $parking->save();
        if ($request->file('photo5')) {
            $file = $request->file('photo5');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/garages/'), $filename);
            $parking['photo5'] = $filename;
        }
        $parking->save();
        if ($request->file('photo6')) {
            $file = $request->file('photo6');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/garages/'), $filename);
            $parking['photo6'] = $filename;
        }
        $parking->save();
        if ($request->file('video')) {
            $file = $request->file('video');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/garages/videos'), $filename);
            $parking['video'] = $filename;
        }
        $parking->save();
        return back()->with('success', 'Garage information have been successfully Added.');
    }

    function post_room_rented(Request $request)
    {
        $parking = Room::create([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'description' => $request->description,
            'address' => $request->address,
            'price' => $request->price,
            's_charge' => $request->s_charge,
            'room_size' => $request->room_size,
            'furnished'=> $request->furnished,
            'electricity'=> $request->electricity,
            'gas'=> $request->gas,
            'water'=> $request->water,
            'attached_toilet'=> $request->attached_toilet,
            'hot_water'=> $request->hot_water,
            'generator'=>$request->generator,
            'ac'=> $request->ac,
            'wifi'=> $request->wifi,
            'cable_tv'=> $request->cable_tv,
            'lift'=> $request->lift,
            'parking'=> $request->parking,
            'photo' => $request->photo,
            'photo1' => $request->photo1,
            'photo2' => $request->photo2,
            'photo3' => $request->photo3,
            'photo4' => $request->photo4,
            'photo5' => $request->photo5,
            'photo6' => $request->photo6,
            'video' => $request->video,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);
        if ($request->file('photo')) {
            $file = $request->file('photo');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/rooms/'), $filename);
            $parking['photo'] = $filename;
        }
        $parking->save();
        if ($request->file('photo1')) {
            $file = $request->file('photo1');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/rooms/'), $filename);
            $parking['photo1'] = $filename;
        }
        $parking->save();
        if ($request->file('photo2')) {
            $file = $request->file('photo2');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/rooms/'), $filename);
            $parking['photo2'] = $filename;
        }
        $parking->save();
        if ($request->file('photo3')) {
            $file = $request->file('photo3');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/rooms/'), $filename);
            $parking['photo3'] = $filename;
        }
        $parking->save();
        if ($request->file('photo4')) {
            $file = $request->file('photo4');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/rooms/'), $filename);
            $parking['photo4'] = $filename;
        }
        $parking->save();
        if ($request->file('photo5')) {
            $file = $request->file('photo5');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/rooms/'), $filename);
            $parking['photo5'] = $filename;
        }
        $parking->save();
        if ($request->file('photo6')) {
            $file = $request->file('photo6');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/rooms/'), $filename);
            $parking['photo6'] = $filename;
        }
        $parking->save();
        if ($request->file('video')) {
            $file = $request->file('video');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/rooms/videos'), $filename);
            $parking['video'] = $filename;
        }
        $parking->save();
        return back()->with('success', 'Room information have been successfully Added.');
    }


    function post_room_wanted(Request $request)
    {
        $parking = Room::create([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'description' => $request->description,
            'address' => $request->address,
            'price' => $request->price,
            's_charge' => $request->s_charge,
            'room_size' => $request->room_size,
            'furnished'=> $request->furnished,
            'electricity'=> $request->electricity,
            'gas'=> $request->gas,
            'water'=> $request->water,
            'attached_toilet'=> $request->attached_toilet,
            'hot_water'=> $request->hot_water,
            'generator'=>$request->generator,
            'ac'=> $request->ac,
            'wifi'=> $request->wifi,
            'cable_tv'=> $request->cable_tv,
            'lift'=> $request->lift,
            'parking'=> $request->parking,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);

        return back()->with('success', 'Room information have been successfully Added.');
    }




    function post_parking_spot_wanted(Request $request)
    {
        $parking = Parking_Spot::create([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'description' => $request->description,
            'address' => $request->address,
            'price' => $request->price,
            'floor_level' => $request->floor_level,
            'floor_height' => $request->floor_height,
            'vehicle_type' => $request->vehicle_type,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);
        return back()->with('success', 'Garage information have been successfully Added.');
    }
    function list_parking_spot()
    {
        $lists = Parking_Spot::all();
        $trashed_lists = Parking_Spot::onlyTrashed()->get();
        return view('Dashboard.parking_spot.list_parking', compact('lists', 'trashed_lists'));
    }


    function parking_spot_update(Request $request)
    {

        $parking = Parking_Spot::findOrFail($request->id)->update([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'description' => $request->description,

            'address' => $request->address,
            'price' => $request->price,
            'floor_level' => $request->floor_level,
            'floor_height' => $request->floor_height,
            'vehicle_type' => $request->vehicle_type,
            'description' => $request->description,
            'video' => $request->video,

        ]);


        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photoName = date('YmdHi') . 'photo' . '.' . $photo->getClientOriginalExtension();
            if (Parking_Spot::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/parkings/" . $photoName), 100);
                Parking_Spot::findOrFail($request->id)->update([
                    'photo' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/parkings/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/parkings/" . $photoName), 100);
            }
        }


        if ($request->hasFile('photo1')) {
            $photo = $request->file('photo1');
            $photoName = date('YmdHi') . 'photo1' . '.' . $photo->getClientOriginalExtension();
            if (Parking_Spot::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/parkings/" . $photoName), 100);
                Parking_Spot::findOrFail($request->id)->update([
                    'photo1' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/parkings/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/parkings/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo2')) {
            $photo = $request->file('photo2');

            $photoName = date('YmdHi') . 'photo2' . '.' . $photo->getClientOriginalExtension();
            if (Parking_Spot::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/parkings/" . $photoName), 100);
                Parking_Spot::findOrFail($request->id)->update([
                    'photo2' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/parkings/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/parkings/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo3')) {
            $photo = $request->file('photo3');
            $photoName = date('YmdHi') . 'photo3' . '.' . $photo->getClientOriginalExtension();
            if (Parking_Spot::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/parkings/" . $photoName), 100);
                Parking_Spot::findOrFail($request->id)->update([
                    'photo3' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/parkings/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/parkings/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo4')) {
            $photo = $request->file('photo4');
            $photoName = date('YmdHi') . 'photo4' . '.' . $photo->getClientOriginalExtension();
            if (Parking_Spot::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/parkings/" . $photoName), 100);
                Parking_Spot::findOrFail($request->id)->update([
                    'photo4' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/parkings/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/parkings/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo5')) {
            $photo = $request->file('photo5');
            $photoName = date('YmdHi') . 'photo5' . '.' . $photo->getClientOriginalExtension();
            if (Parking_Spot::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/parkings/" . $photoName), 100);
                Parking_Spot::findOrFail($request->id)->update([
                    'photo5' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/parkings/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/parkings/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo6')) {
            $photo = $request->file('photo6');
            $photoName = date('YmdHi') . 'photo6' . '.' . $photo->getClientOriginalExtension();
            if (Parking_Spot::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/parkings/" . $photoName), 100);
                Parking_Spot::findOrFail($request->id)->update([
                    'photo6' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/parkings/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/parkings/" . $photoName), 100);
            }
        }
        return back()->with('success', 'Parking Spot information have been successfully Updated.');
    }

    function parking_spot_delete($id)
    {
        $list = Parking_Spot::findOrFail($id)->delete();
        return back();
    }

    function parking_spot_restore($id)
    {
        Parking_Spot::onlyTrashed()->findOrFail($id)->restore();
        return back();
    }
    //end parking spot





    //begin hostel


    function add_hostel()
    {
        return view('Dashboard.hostel.add_hostel');
    }

    function list_hostel()
    {
        $lists = Hostel::all();
        $trashed_lists = Hostel::onlyTrashed()->get();
        return view('Dashboard.hostel.list_hostel', compact('lists', 'trashed_lists'));
    }
    function post_hostel_rented(Request $request)
    {

        $hostel = Hostel::create([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'date' => $request->date,
            'phone' => $request->phone,
            'description' => $request->description,
            'hostel_name' => $request->hostel_name,
            'address' => $request->address,
            'room_size' => $request->room_size,
            'room_type' => $request->room_type,
            'generator'=>$request->generator,
            'attached_toilet' => $request->attached_toilet,
            'hot_water' => $request->hot_water,
            'laundry' => $request->laundry,
            'ac' => $request->ac,
            'pool' => $request->pool,
            'wifi' => $request->wifi,
            'lift' => $request->lift,
            'spa' => $request->spa,
            'furnished' => $request->furnished,
            'parking' => $request->parking,
            'gym' => $request->gym,
            'sports' => $request->sports,
            'dining' => $request->dining,
            'price' => $request->price,
            's_charge' => $request->s_charge,
            'photo' => $request->photo,
            'photo1' => $request->photo1,
            'photo2' => $request->photo2,
            'photo3' => $request->photo3,
            'photo4' => $request->photo4,
            'photo5' => $request->photo5,
            'photo6' => $request->photo6,
            'video' => $request->video,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);
        if ($request->file('photo')) {
            $file = $request->file('photo');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            //Image::make($file)->resize(452,510)->save(base_path('public/uploads/hostels/'.$filename),100);
            $file->move(public_path('public/uploads/hostels/'), $filename);
            $hostel['photo'] = $filename;
        }
        $hostel->save();
        if ($request->file('photo1')) {
            $file = $request->file('photo1');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/hostels/'), $filename);
            $hostel['photo1'] = $filename;
        }
        $hostel->save();
        if ($request->file('photo2')) {
            $file = $request->file('photo2');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/hostels/'), $filename);
            $hostel['photo2'] = $filename;
        }
        $hostel->save();
        if ($request->file('photo3')) {
            $file = $request->file('photo3');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/hostels/'), $filename);
            $hostel['photo3'] = $filename;
        }
        $hostel->save();
        if ($request->file('photo4')) {
            $file = $request->file('photo4');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/hostels/'), $filename);
            $hostel['photo4'] = $filename;
        }
        $hostel->save();
        if ($request->file('photo5')) {
            $file = $request->file('photo5');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/hostels/'), $filename);
            $hostel['photo5'] = $filename;
        }
        $hostel->save();
        if ($request->file('photo6')) {
            $file = $request->file('photo6');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/hostels/'), $filename);
            $hostel['photo6'] = $filename;
        }
        $hostel->save();
        if ($request->file('video')) {
            $file = $request->file('video');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/hostels/videos'), $filename);
            $hostel['video'] = $filename;
        }
        $hostel->save();

        return back()->with('success', 'Hostel Rented post successfully Added.');
    }
    public function post_hostel_wanted(Request $request)
    {
        $hostel = Hostel::create([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'date' => $request->date,
            'phone' => $request->phone,
            'description' => $request->description,
            'hostel_name' => $request->hostel_name,
            'address' => $request->address,
            'room_size' => $request->room_size,
            'room_type' => $request->room_type,
            'generator'=>$request->generator,
            'attached_toilet' => $request->attached_toilet,
            'hot_water' => $request->hot_water,
            'laundry' => $request->laundry,
            'ac' => $request->ac,
            'pool' => $request->pool,
            'wifi' => $request->wifi,
            'lift' => $request->lift,
            'spa' => $request->spa,
            'furnished' => $request->furnished,
            'parking' => $request->parking,
            'gym' => $request->gym,
            'sports' => $request->sports,
            'dining' => $request->dining,
            'price' => $request->price,
            's_charge' => $request->s_charge,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);
        return back()->with('success', 'Hostel Wanted post successfully Added.');
    }


    function hostel_update(Request $request)
    {

        $hostel = Hostel::findOrFail($request->id)->update([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'description' => $request->description,
            'hostel_name' => $request->hostel_name,
            'address' => $request->address,
            'room_size' => $request->room_size,
            'room_type' => $request->room_type,
            'attached_toilet' => $request->attached_toilet,
            'utilities' => $request->utilities,
            'attached_varanda' => $request->attached_varanda,
            'hot_water' => $request->hot_water,
            'laundry' => $request->laundry,
            'ac' => $request->ac,
            'cable_tv' => $request->cable_tv,
            'wifi' => $request->wifi,
            'lift' => $request->lift,
            'furnished' => $request->furnished,
            'parking' => $request->parking,
            'price' => $request->price,

        ]);


        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photoName = date('YmdHi') . 'photo' . '.' . $photo->getClientOriginalExtension();
            if (Hostel::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/hostels/" . $photoName), 100);
                Hostel::findOrFail($request->id)->update([
                    'photo' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/hostels/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/hostels/" . $photoName), 100);
            }
        }


        if ($request->hasFile('photo1')) {
            $photo = $request->file('photo1');
            $photoName = date('YmdHi') . 'photo1' . '.' . $photo->getClientOriginalExtension();
            if (Hostel::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/hostels/" . $photoName), 100);
                Hostel::findOrFail($request->id)->update([
                    'photo1' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/hostels/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/hostels/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo2')) {
            $photo = $request->file('photo2');

            $photoName = date('YmdHi') . 'photo2' . '.' . $photo->getClientOriginalExtension();
            if (Hostel::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/hostels/" . $photoName), 100);
                Hostel::findOrFail($request->id)->update([
                    'photo2' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/hostels/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/hostels/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo3')) {
            $photo = $request->file('photo3');
            $photoName = date('YmdHi') . 'photo3' . '.' . $photo->getClientOriginalExtension();
            if (Hostel::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/hostels/" . $photoName), 100);
                Hostel::findOrFail($request->id)->update([
                    'photo3' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/hostels/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/hostels/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo4')) {
            $photo = $request->file('photo4');
            $photoName = date('YmdHi') . 'photo4' . '.' . $photo->getClientOriginalExtension();
            if (Hostel::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/hostels/" . $photoName), 100);
                Hostel::findOrFail($request->id)->update([
                    'photo4' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/hostels/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/hostels/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo5')) {
            $photo = $request->file('photo5');
            $photoName = date('YmdHi') . 'photo5' . '.' . $photo->getClientOriginalExtension();
            if (Hostel::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/hostels/" . $photoName), 100);
                Hostel::findOrFail($request->id)->update([
                    'photo5' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/hostels/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/hostels/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo6')) {
            $photo = $request->file('photo6');
            $photoName = date('YmdHi') . 'photo6' . '.' . $photo->getClientOriginalExtension();
            if (Hostel::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/hostels/" . $photoName), 100);
                Hostel::findOrFail($request->id)->update([
                    'photo6' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/hostels/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/hostels/" . $photoName), 100);
            }
        }
        return back()->with('success', 'hostel information have been successfully Updated.');
    }

    function hostel_delete($id)
    {
        $list = Hostel::findOrFail($id)->delete();
        return back();
    }

    //end hostel







    //begin office
    function add_office()
    {
        return view('Dashboard.office.add_office');
    }

    function post_office_rented(Request $request)
    {

        $office = Office::create([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'description' => $request->description,
            'address' => $request->address,
            'floor_level' => $request->floor_level,
            'floor_size' => $request->floor_size,
            'road_width' => $request->road_width,
            'interior_condition' => $request->interior_condition,
            'fire_safety' => $request->fire_safety,
            'generator'=>$request->generator,
            's_charge'=>$request->s_charge,
            'lift' => $request->lift,
            'parking' => $request->parking,
            'electricity' => $request->electricity,
            'gas' => $request->gas,
            'water' => $request->water,
            'price' => $request->price,
            'post_type' => $request->post_type,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'description' => $request->description,
            'address' => $request->address,
            'floor_level' => $request->floor_level,
            'floor_size' => $request->floor_size,
            'road_width' => $request->road_width,
            'interior_condition' => $request->interior_condition,
            'fire_safety' => $request->fire_safety,
            'lift' => $request->lift,
            'parking' => $request->parking,
            'electricity' => $request->electricity,
            'gas' => $request->gas,
            'water' => $request->water,
            'price' => $request->price,
            'photo' => $request->photo,
            'photo1' => $request->photo1,
            'photo2' => $request->photo2,
            'photo3' => $request->photo3,
            'photo4' => $request->photo4,
            'photo5' => $request->photo5,
            'photo6' => $request->photo6,
            'video' => $request->video,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);
        if ($request->file('photo')) {
            $file = $request->file('photo');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/offices/'), $filename);
            $office['photo'] = $filename;
        }
        $office->save();
        if ($request->file('photo1')) {
            $file = $request->file('photo1');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/offices/'), $filename);
            $office['photo1'] = $filename;
        }
        $office->save();
        if ($request->file('photo2')) {
            $file = $request->file('photo2');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/offices/'), $filename);
            $office['photo2'] = $filename;
        }
        $office->save();
        if ($request->file('photo3')) {
            $file = $request->file('photo3');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/offices/'), $filename);
            $office['photo3'] = $filename;
        }
        $office->save();
        if ($request->file('photo4')) {
            $file = $request->file('photo4');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/offices/'), $filename);
            $office['photo4'] = $filename;
        }
        $office->save();
        if ($request->file('photo5')) {
            $file = $request->file('photo5');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/offices/'), $filename);
            $office['photo5'] = $filename;
        }
        $office->save();
        if ($request->file('photo6')) {
            $file = $request->file('photo6');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/offices/'), $filename);
            $office['photo6'] = $filename;
        }
        $office->save();
        if ($request->file('video')) {
            $file = $request->file('video');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/offices/videos'), $filename);
            $office['video'] = $filename;
        }
        $office->save();

        return back()->with('success', 'office information have been successfully Added.');
    }

    function post_office_wanted(Request $request)
    {

        $office = Office::create([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'description' => $request->description,
            'address' => $request->address,
            'floor_level' => $request->floor_level,
            'floor_size' => $request->floor_size,
            'road_width' => $request->road_width,
            's_charge'=>$request->s_charge,
            'generator'=>$request->generator,
            'interior_condition' => $request->interior_condition,
            'fire_safety' => $request->fire_safety,
            'lift' => $request->lift,
            'parking' => $request->parking,
            'electricity' => $request->electricity,
            'gas' => $request->gas,
            'water' => $request->water,
            'price' => $request->price,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);

        return back()->with('success', 'office information have been successfully Added.');
    }

    function list_office()
    {
        $lists = Office::all();
        $trashed_lists = Office::onlyTrashed()->get();
        return view('Dashboard.office.list_office', compact('lists', 'trashed_lists'));
    }



    function office_update(Request $request)
    {

        $office = Office::findOrFail($request->id)->update([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'description' => $request->description,
            'address' => $request->address,
            'floor_level' => $request->floor_level,
            'floor_size' => $request->floor_size,
            'road_width' => $request->road_width,
            'utilities' => $request->utilities,
            'interior_condition' => $request->interior_condition,
            'fire_safety' => $request->fire_safety,
            'lift' => $request->lift,
            'emergency_lift' => $request->emergency_lift,
            'parking' => $request->parking,
            'price' => $request->price,


        ]);


        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photoName = date('YmdHi') . 'photo' . '.' . $photo->getClientOriginalExtension();
            if (Office::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/offices/" . $photoName), 100);
                Office::findOrFail($request->id)->update([
                    'photo' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/offices/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/offices/" . $photoName), 100);
            }
        }


        if ($request->hasFile('photo1')) {
            $photo = $request->file('photo1');
            $photoName = date('YmdHi') . 'photo1' . '.' . $photo->getClientOriginalExtension();
            if (Office::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/offices/" . $photoName), 100);
                Office::findOrFail($request->id)->update([
                    'photo1' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/offices/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/offices/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo2')) {
            $photo = $request->file('photo2');

            $photoName = date('YmdHi') . 'photo2' . '.' . $photo->getClientOriginalExtension();
            if (Office::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/offices/" . $photoName), 100);
                Office::findOrFail($request->id)->update([
                    'photo2' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/offices/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/offices/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo3')) {
            $photo = $request->file('photo3');
            $photoName = date('YmdHi') . 'photo3' . '.' . $photo->getClientOriginalExtension();
            if (Office::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/offices/" . $photoName), 100);
                Office::findOrFail($request->id)->update([
                    'photo3' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/offices/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/offices/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo4')) {
            $photo = $request->file('photo4');
            $photoName = date('YmdHi') . 'photo4' . '.' . $photo->getClientOriginalExtension();
            if (Office::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/offices/" . $photoName), 100);
                Office::findOrFail($request->id)->update([
                    'photo4' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/offices/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/offices/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo5')) {
            $photo = $request->file('photo5');
            $photoName = date('YmdHi') . 'photo5' . '.' . $photo->getClientOriginalExtension();
            if (Office::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/offices/" . $photoName), 100);
                Office::findOrFail($request->id)->update([
                    'photo5' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/offices/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/offices/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo6')) {
            $photo = $request->file('photo6');
            $photoName = date('YmdHi') . 'photo6' . '.' . $photo->getClientOriginalExtension();
            if (Office::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/offices/" . $photoName), 100);
                Office::findOrFail($request->id)->update([
                    'photo6' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/offices/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/offices/" . $photoName), 100);
            }
        }
        return back()->with('success', 'office information have been successfully Updated.');
    }

    function office_delete($id)
    {
        $list = Office::findOrFail($id)->delete();
        return back();
    }

    function office_restore($id)
    {
        Office::onlyTrashed()->findOrFail($id)->restore();
        return back();
    }
    //end office





    //begin Land
    function add_land()
    {
        return view('Dashboard.land.add_land');
    }

    function post_land_rented(Request $request)
    {

        $land = Land::create([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'description' => $request->description,
            'address' => $request->address,
            'land_area' => $request->land_area,
            'land_height' => $request->land_height,
            'electricity' => $request->electricity,
            'gas' => $request->gas,
            'water' => $request->water,
            'y_price' => $request->y_price,
            'drainage_system' => $request->drainage_system,
            'parking' => $request->parking,
            'road_width' => $request->road_width,
            'price' => $request->price,
            'photo' => $request->photo,
            'photo1' => $request->photo1,
            'photo2' => $request->photo2,
            'photo3' => $request->photo3,
            'photo4' => $request->photo4,
            'photo5' => $request->photo5,
            'photo6' => $request->photo6,
            'video' => $request->video,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);
        if ($request->file('photo')) {
            $file = $request->file('photo');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/lands/'), $filename);
            $land['photo'] = $filename;
        }
        $land->save();
        if ($request->file('photo1')) {
            $file = $request->file('photo1');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/lands/'), $filename);
            $land['photo1'] = $filename;
        }
        $land->save();
        if ($request->file('photo2')) {
            $file = $request->file('photo2');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/lands/'), $filename);
            $land['photo2'] = $filename;
        }
        $land->save();
        if ($request->file('photo3')) {
            $file = $request->file('photo3');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/lands/'), $filename);
            $land['photo3'] = $filename;
        }
        $land->save();
        if ($request->file('photo4')) {
            $file = $request->file('photo4');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/lands/'), $filename);
            $land['photo4'] = $filename;
        }
        $land->save();
        if ($request->file('photo5')) {
            $file = $request->file('photo5');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/lands/'), $filename);
            $land['photo5'] = $filename;
        }
        $land->save();
        if ($request->file('photo6')) {
            $file = $request->file('photo6');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/lands/'), $filename);
            $land['photo6'] = $filename;
        }
        $land->save();
        if ($request->file('video')) {
            $file = $request->file('video');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/lands/videos'), $filename);
            $land['video'] = $filename;
        }
        $land->save();

        return back()->with('success', 'Land information have been successfully Added.');
    }


    function post_land_wanted(Request $request)
    {
        $land = Land::create([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'description' => $request->description,
            'address' => $request->address,
            'land_area' => $request->land_area,
            'land_height' => $request->land_height,
            'electricity' => $request->electricity,
            'gas' => $request->gas,
            'y_price' => $request->y_price,
            'water' => $request->water,
            'drainage_system' => $request->drainage_system,
            'parking' => $request->parking,
            'road_width' => $request->road_width,
            'price' => $request->price,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);

        return back()->with('success', 'Land information have been successfully Added.');
    }
    function list_land()
    {
        $lists = Land::all();
        $trashed_lists = Land::onlyTrashed()->get();
        return view('Dashboard.land.list_land', compact('lists', 'trashed_lists'));
    }



    function land_update(Request $request)
    {

        $land = Land::findOrFail($request->id)->update([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'description' => $request->description,
            'address' => $request->address,
            'land_area' => $request->land_area,
            'vegetations' => $request->vegetations,
            'road_width' => $request->road_width,
            'price' => $request->price,



        ]);


        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photoName = date('YmdHi') . 'photo' . '.' . $photo->getClientOriginalExtension();
            if (Land::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/lands/" . $photoName), 100);
                Land::findOrFail($request->id)->update([
                    'photo' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/lands/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/lands/" . $photoName), 100);
            }
        }


        if ($request->hasFile('photo1')) {
            $photo = $request->file('photo1');
            $photoName = date('YmdHi') . 'photo1' . '.' . $photo->getClientOriginalExtension();
            if (Land::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/lands/" . $photoName), 100);
                Land::findOrFail($request->id)->update([
                    'photo1' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/lands/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/lands/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo2')) {
            $photo = $request->file('photo2');

            $photoName = date('YmdHi') . 'photo2' . '.' . $photo->getClientOriginalExtension();
            if (Land::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/lands/" . $photoName), 100);
                Land::findOrFail($request->id)->update([
                    'photo2' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/lands/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/lands/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo3')) {
            $photo = $request->file('photo3');
            $photoName = date('YmdHi') . 'photo3' . '.' . $photo->getClientOriginalExtension();
            if (Land::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/lands/" . $photoName), 100);
                Land::findOrFail($request->id)->update([
                    'photo3' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/lands/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/lands/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo4')) {
            $photo = $request->file('photo4');
            $photoName = date('YmdHi') . 'photo4' . '.' . $photo->getClientOriginalExtension();
            if (Land::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/lands/" . $photoName), 100);
                Land::findOrFail($request->id)->update([
                    'photo4' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/lands/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/lands/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo5')) {
            $photo = $request->file('photo5');
            $photoName = date('YmdHi') . 'photo5' . '.' . $photo->getClientOriginalExtension();
            if (Land::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/lands/" . $photoName), 100);
                Land::findOrFail($request->id)->update([
                    'photo5' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/lands/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/lands/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo6')) {
            $photo = $request->file('photo6');
            $photoName = date('YmdHi') . 'photo6' . '.' . $photo->getClientOriginalExtension();
            if (Land::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/lands/" . $photoName), 100);
                Land::findOrFail($request->id)->update([
                    'photo6' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/lands/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/lands/" . $photoName), 100);
            }
        }
        return back()->with('success', 'land information have been successfully Updated.');
    }

    function land_delete($id)
    {
        $list = Land::findOrFail($id)->delete();
        return back();
    }

    function land_restore($id)
    {
        Land::onlyTrashed()->findOrFail($id)->restore();
        return back();
    }
    //end Land




    //begin community center
    function add_community()
    {
        return view('Dashboard.community_center.add_community_center');
    }

    function post_community_rented(Request $request)
    {

        $community = Community_Center::create([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'description' => $request->description,
            'address' => $request->address,
            'floor_level' => $request->floor_level,
            'floor_size' => $request->floor_size,
            'road_width' => $request->road_width,
            'generator'=>$request->generator,
            'seat' => $request->seat,
            'interior_condition' => $request->interior_condition,
            'fire_safety' => $request->fire_safety,
            'lift' => $request->lift,
            'wifi' => $request->wifi,
            'parking' => $request->parking,
            'gas' => $request->gas,
            'water' => $request->water,
            'electricity' => $request->electricity,
            'ac' => $request->ac,
            'price' => $request->price,
            's_charge' => $request->s_charge,
            'photo' => $request->photo,
            'photo1' => $request->photo1,
            'photo2' => $request->photo2,
            'photo3' => $request->photo3,
            'photo4' => $request->photo4,
            'photo5' => $request->photo5,
            'photo6' => $request->photo6,
            'video' => $request->video,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);
        if ($request->file('photo')) {
            $file = $request->file('photo');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/communities/'), $filename);
            $community['photo'] = $filename;
        }
        $community->save();
        if ($request->file('photo1')) {
            $file = $request->file('photo1');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/communities/'), $filename);
            $community['photo1'] = $filename;
        }
        $community->save();
        if ($request->file('photo2')) {
            $file = $request->file('photo2');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/communities/'), $filename);
            $community['photo2'] = $filename;
        }
        $community->save();
        if ($request->file('photo3')) {
            $file = $request->file('photo3');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/communities/'), $filename);
            $community['photo3'] = $filename;
        }
        $community->save();
        if ($request->file('photo4')) {
            $file = $request->file('photo4');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/communities/'), $filename);
            $community['photo4'] = $filename;
        }
        $community->save();
        if ($request->file('photo5')) {
            $file = $request->file('photo5');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/communities/'), $filename);
            $community['photo5'] = $filename;
        }
        $community->save();
        if ($request->file('photo6')) {
            $file = $request->file('photo6');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/communities/'), $filename);
            $community['photo6'] = $filename;
        }
        $community->save();
        if ($request->file('video')) {
            $file = $request->file('video');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/communities/videos'), $filename);
            $community['video'] = $filename;
        }
        $community->save();

        return back()->with('success', 'Community Center information have been successfully Added.');
    }

    function post_community_wanted(Request $request)
    {

        $community = Community_Center::create([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'description' => $request->description,
            'address' => $request->address,
            'floor_level' => $request->floor_level,
            'floor_size' => $request->floor_size,
            'road_width' => $request->road_width,
            'seat' => $request->seat,
            'interior_condition' => $request->interior_condition,
            'fire_safety' => $request->fire_safety,
            'generator'=>$request->generator,
            'lift' => $request->lift,
            'wifi' => $request->wifi,
            'parking' => $request->parking,
            'gas' => $request->gas,
            'water' => $request->water,
            'electricity' => $request->electricity,
            'ac' => $request->ac,
            'price' => $request->price,
            's_charge' => $request->s_charge,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);

        return back()->with('success', 'Community Center information have been successfully Added.');
    }

    function list_community()
    {
        $lists = Community_Center::all();
        $trashed_lists = Community_Center::onlyTrashed()->get();
        return view('Dashboard.community_center.list_community_center', compact('lists', 'trashed_lists'));
    }



    function community_update(Request $request)
    {

        $community = Community_Center::findOrFail($request->id)->update([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'description' => $request->description,
            'community_name' => $request->community_name,
            'address' => $request->address,
            'floor_level' => $request->floor_level,
            'floor_size' => $request->floor_size,
            'road_width' => $request->road_width,
            'utilities' => $request->utilities,
            'interior_condition' => $request->interior_condition,
            'fire_safety' => $request->fire_safety,
            'lift' => $request->lift,
            'wifi' => $request->wifi,
            'garden' => $request->garden,
            'cooking' => $request->cooking,
            'sitting' => $request->sitting,
            'parking' => $request->parking,
            'price' => $request->price,



        ]);


        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photoName = date('YmdHi') . 'photo' . '.' . $photo->getClientOriginalExtension();
            if (Community_Center::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/communities/" . $photoName), 100);
                Community_Center::findOrFail($request->id)->update([
                    'photo' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/communities/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/communities/" . $photoName), 100);
            }
        }


        if ($request->hasFile('photo1')) {
            $photo = $request->file('photo1');
            $photoName = date('YmdHi') . 'photo1' . '.' . $photo->getClientOriginalExtension();
            if (Community_Center::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/communities/" . $photoName), 100);
                Community_Center::findOrFail($request->id)->update([
                    'photo1' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/communities/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/communities/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo2')) {
            $photo = $request->file('photo2');

            $photoName = date('YmdHi') . 'photo2' . '.' . $photo->getClientOriginalExtension();
            if (Community_Center::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/communities/" . $photoName), 100);
                Community_Center::findOrFail($request->id)->update([
                    'photo2' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/communities/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/communities/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo3')) {
            $photo = $request->file('photo3');
            $photoName = date('YmdHi') . 'photo3' . '.' . $photo->getClientOriginalExtension();
            if (Community_Center::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/communities/" . $photoName), 100);
                Community_Center::findOrFail($request->id)->update([
                    'photo3' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/communities/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/communities/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo4')) {
            $photo = $request->file('photo4');
            $photoName = date('YmdHi') . 'photo4' . '.' . $photo->getClientOriginalExtension();
            if (Community_Center::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/communities/" . $photoName), 100);
                Community_Center::findOrFail($request->id)->update([
                    'photo4' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/communities/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/communities/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo5')) {
            $photo = $request->file('photo5');
            $photoName = date('YmdHi') . 'photo5' . '.' . $photo->getClientOriginalExtension();
            if (Community_Center::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/communities/" . $photoName), 100);
                Community_Center::findOrFail($request->id)->update([
                    'photo5' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/communities/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/communities/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo6')) {
            $photo = $request->file('photo6');
            $photoName = date('YmdHi') . 'photo6' . '.' . $photo->getClientOriginalExtension();
            if (Community_Center::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/communities/" . $photoName), 100);
                Community_Center::findOrFail($request->id)->update([
                    'photo6' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/communities/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/communities/" . $photoName), 100);
            }
        }
        return back()->with('success', 'community center information have been successfully Updated.');
    }

    function community_delete($id)
    {
        $list = Community_Center::findOrFail($id)->delete();
        return back();
    }

    function community_restore($id)
    {
        Community_Center::onlyTrashed()->findOrFail($id)->restore();
        return back();
    }
    //end community center



    //begin shooting spot
    function add_shooting()
    {
        return view('Dashboard.shooting_spot.add_shooting');
    }

    function post_shooting_rented(Request $request)
    {

        $shooting = Shooting_Spot::create([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'description' => $request->description,
            'address' => $request->address,
            'floor_area' => $request->floor_area,
            'road_width' => $request->road_width,
            'dining' => $request->dining,
            'water' => $request->water,
            'lift' => $request->lift,
            'generator'=>$request->generator,
            'gas' => $request->gas,
            'electricity' => $request->electricity,
            'change_room' => $request->change_room,
            'parking' => $request->parking,
            'price' => $request->price,
            'photo' => $request->photo,
            'photo1' => $request->photo1,
            'photo2' => $request->photo2,
            'photo3' => $request->photo3,
            'photo4' => $request->photo4,
            'photo5' => $request->photo5,
            'photo6' => $request->photo6,
            'video' => $request->video,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);
        if ($request->file('photo')) {
            $file = $request->file('photo');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/shootings/'), $filename);
            $shooting['photo'] = $filename;
        }
        $shooting->save();
        if ($request->file('photo1')) {
            $file = $request->file('photo1');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/shootings/'), $filename);
            $shooting['photo1'] = $filename;
        }
        $shooting->save();
        if ($request->file('photo2')) {
            $file = $request->file('photo2');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/shootings/'), $filename);
            $shooting['photo2'] = $filename;
        }
        $shooting->save();
        if ($request->file('photo3')) {
            $file = $request->file('photo3');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/shootings/'), $filename);
            $shooting['photo3'] = $filename;
        }
        $shooting->save();
        if ($request->file('photo4')) {
            $file = $request->file('photo4');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/shootings/'), $filename);
            $shooting['photo4'] = $filename;
        }
        $shooting->save();
        if ($request->file('photo5')) {
            $file = $request->file('photo5');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/shootings/'), $filename);
            $shooting['photo5'] = $filename;
        }
        $shooting->save();
        if ($request->file('photo6')) {
            $file = $request->file('photo6');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/shootings/'), $filename);
            $shooting['photo6'] = $filename;
        }
        $shooting->save();
        if ($request->file('video')) {
            $file = $request->file('video');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/shootings/videos'), $filename);
            $shooting['video'] = $filename;
        }
        $shooting->save();

        return back()->with('success', 'Shooting Spot information have been successfully Added.');
    }



    function post_shooting_wanted(Request $request)
    {

        $shooting = Shooting_Spot::create([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'description' => $request->description,
            'address' => $request->address,
            'floor_area' => $request->floor_area,
            'generator'=>$request->generator,
            'road_width' => $request->road_width,
            'dining' => $request->dining,
            'water' => $request->water,
            'lift' => $request->lift,
            'gas' => $request->gas,
            'electricity' => $request->electricity,
            'change_room' => $request->change_room,
            'parking' => $request->parking,
            'price' => $request->price,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);

        return back()->with('success', 'Shooting Spot information have been successfully Added.');
    }
    function list_shooting()
    {
        $lists = Shooting_Spot::all();
        $trashed_lists = Shooting_Spot::onlyTrashed()->get();
        return view('Dashboard.shooting_spot.list_shooting', compact('lists', 'trashed_lists'));
    }



    function shooting_update(Request $request)
    {

        $shooting = Shooting_Spot::findOrFail($request->id)->update([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'description' => $request->description,
            'shooting_name' => $request->shooting_name,
            'address' => $request->address,
            'floor_level' => $request->floor_level,
            'floor_size' => $request->floor_size,
            'road_width' => $request->road_width,
            'utilities' => $request->utilities,
            'building_condition' => $request->building_condition,
            'fire_safety' => $request->fire_safety,
            'lift' => $request->lift,
            'wifi' => $request->wifi,
            'garden' => $request->garden,
            'cooking' => $request->cooking,
            'sitting' => $request->sitting,
            'parking' => $request->parking,
            'vegetations' => $request->vegetations,
            'price' => $request->price,



        ]);


        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photoName = date('YmdHi') . 'photo' . '.' . $photo->getClientOriginalExtension();
            if (Shooting_Spot::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/shootings/" . $photoName), 100);
                Shooting_Spot::findOrFail($request->id)->update([
                    'photo' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/shootings/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/shootings/" . $photoName), 100);
            }
        }


        if ($request->hasFile('photo1')) {
            $photo = $request->file('photo1');
            $photoName = date('YmdHi') . 'photo1' . '.' . $photo->getClientOriginalExtension();
            if (Shooting_Spot::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/shootings/" . $photoName), 100);
                Shooting_Spot::findOrFail($request->id)->update([
                    'photo1' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/shootings/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/shootings/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo2')) {
            $photo = $request->file('photo2');

            $photoName = date('YmdHi') . 'photo2' . '.' . $photo->getClientOriginalExtension();
            if (Shooting_Spot::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/shootings/" . $photoName), 100);
                Shooting_Spot::findOrFail($request->id)->update([
                    'photo2' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/shootings/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/shootings/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo3')) {
            $photo = $request->file('photo3');
            $photoName = date('YmdHi') . 'photo3' . '.' . $photo->getClientOriginalExtension();
            if (Shooting_Spot::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/shootings/" . $photoName), 100);
                Shooting_Spot::findOrFail($request->id)->update([
                    'photo3' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/shootings/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/shootings/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo4')) {
            $photo = $request->file('photo4');
            $photoName = date('YmdHi') . 'photo4' . '.' . $photo->getClientOriginalExtension();
            if (Shooting_Spot::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/shootings/" . $photoName), 100);
                Shooting_Spot::findOrFail($request->id)->update([
                    'photo4' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/shootings/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/shootings/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo5')) {
            $photo = $request->file('photo5');
            $photoName = date('YmdHi') . 'photo5' . '.' . $photo->getClientOriginalExtension();
            if (Shooting_Spot::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/shootings/" . $photoName), 100);
                Shooting_Spot::findOrFail($request->id)->update([
                    'photo5' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/shootings/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/shootings/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo6')) {
            $photo = $request->file('photo6');
            $photoName = date('YmdHi') . 'photo6' . '.' . $photo->getClientOriginalExtension();
            if (Shooting_Spot::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/shootings/" . $photoName), 100);
                Shooting_Spot::findOrFail($request->id)->update([
                    'photo6' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/shootings/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/shootings/" . $photoName), 100);
            }
        }
        return back()->with('success', 'Shooting Spot information have been successfully Updated.');
    }

    function shooting_delete($id)
    {
        $list = Shooting_Spot::findOrFail($id)->delete();
        return back();
    }

    function shooting_restore($id)
    {
        Shooting_Spot::onlyTrashed()->findOrFail($id)->restore();
        return back();
    }
    //end shooting spot



    //begin shop
    function add_shop()
    {
        return view('Dashboard.shop.add_shop');
    }

    function post_shop_rented(Request $request)
    {

        $shop = Shop::create([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'description' => $request->description,
            'address' => $request->address,
            'floor_level' => $request->floor_level,
            'floor_size' => $request->floor_size,
            'road_width' => $request->road_width,
            'fire_safety' => $request->fire_safety,
            'generator'=>$request->generator,
            'lift' => $request->lift,
            'parking' => $request->parking,
            'electricity' => $request->electricity,
            'gas' => $request->gas,
            'water' => $request->water,
            'price' => $request->price,
            'photo' => $request->photo,
            'photo1' => $request->photo1,
            'photo2' => $request->photo2,
            'photo3' => $request->photo3,
            'photo4' => $request->photo4,
            'photo5' => $request->photo5,
            'photo6' => $request->photo6,
            'video' => $request->video,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);
        if ($request->file('photo')) {
            $file = $request->file('photo');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/shops/'), $filename);
            $shop['photo'] = $filename;
        }
        $shop->save();
        if ($request->file('photo1')) {
            $file = $request->file('photo1');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/shops/'), $filename);
            $shop['photo1'] = $filename;
        }
        $shop->save();
        if ($request->file('photo2')) {
            $file = $request->file('photo2');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/shops/'), $filename);
            $shop['photo2'] = $filename;
        }
        $shop->save();
        if ($request->file('photo3')) {
            $file = $request->file('photo3');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/shops/'), $filename);
            $shop['photo3'] = $filename;
        }
        $shop->save();
        if ($request->file('photo4')) {
            $file = $request->file('photo4');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/shops/'), $filename);
            $shop['photo4'] = $filename;
        }
        $shop->save();
        if ($request->file('photo5')) {
            $file = $request->file('photo5');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/shops/'), $filename);
            $shop['photo5'] = $filename;
        }
        $shop->save();
        if ($request->file('photo6')) {
            $file = $request->file('photo6');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/shops/'), $filename);
            $shop['photo6'] = $filename;
        }
        $shop->save();
        if ($request->file('video')) {
            $file = $request->file('video');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/shops/videos'), $filename);
            $shop['video'] = $filename;
        }
        $shop->save();

        return back()->with('success', 'Shop information have been successfully Added.');
    }
    function post_shop_wanted(Request $request)
    {
        $shop = Shop::create([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'description' => $request->description,
            'address' => $request->address,
            'floor_level' => $request->floor_level,
            'floor_size' => $request->floor_size,
            'generator'=>$request->generator,
            'road_width' => $request->road_width,
            'fire_safety' => $request->fire_safety,
            'lift' => $request->lift,
            'parking' => $request->parking,
            'electricity' => $request->electricity,
            'gas' => $request->gas,
            'water' => $request->water,
            'price' => $request->price,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);


        return back()->with('success', 'Shop information have been successfully Added.');
    }

    function list_shop()
    {
        $lists = Shop::all();
        $trashed_lists = Shop::onlyTrashed()->get();
        return view('Dashboard.shop.list_shop', compact('lists', 'trashed_lists'));
    }



    function shop_update(Request $request)
    {

        $shop = Shop::findOrFail($request->id)->update([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'description' => $request->description,
            'address' => $request->address,
            'floor_level' => $request->floor_level,
            'floor_size' => $request->floor_size,
            'road_width' => $request->road_width,
            'utilities' => $request->utilities,
            'building_condition' => $request->building_condition,
            'fire_safety' => $request->fire_safety,
            'lift' => $request->lift,
            'interior_condition' => $request->interior_condition,
            'parking' => $request->parking,
            'price' => $request->price,

        ]);


        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photoName = date('YmdHi') . 'photo' . '.' . $photo->getClientOriginalExtension();
            if (Shop::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/shops/" . $photoName), 100);
                Shop::findOrFail($request->id)->update([
                    'photo' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/shops/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/shops/" . $photoName), 100);
            }
        }


        if ($request->hasFile('photo1')) {
            $photo = $request->file('photo1');
            $photoName = date('YmdHi') . 'photo1' . '.' . $photo->getClientOriginalExtension();
            if (Shop::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/shops/" . $photoName), 100);
                Shop::findOrFail($request->id)->update([
                    'photo1' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/shops/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/shops/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo2')) {
            $photo = $request->file('photo2');

            $photoName = date('YmdHi') . 'photo2' . '.' . $photo->getClientOriginalExtension();
            if (Shop::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/shops/" . $photoName), 100);
                Shop::findOrFail($request->id)->update([
                    'photo2' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/shops/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/shops/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo3')) {
            $photo = $request->file('photo3');
            $photoName = date('YmdHi') . 'photo3' . '.' . $photo->getClientOriginalExtension();
            if (Shop::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/shops/" . $photoName), 100);
                Shop::findOrFail($request->id)->update([
                    'photo3' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/shops/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/shops/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo4')) {
            $photo = $request->file('photo4');
            $photoName = date('YmdHi') . 'photo4' . '.' . $photo->getClientOriginalExtension();
            if (Shop::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/shops/" . $photoName), 100);
                Shop::findOrFail($request->id)->update([
                    'photo4' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/shops/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/shops/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo5')) {
            $photo = $request->file('photo5');
            $photoName = date('YmdHi') . 'photo5' . '.' . $photo->getClientOriginalExtension();
            if (Shop::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/shops/" . $photoName), 100);
                Shop::findOrFail($request->id)->update([
                    'photo5' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/shops/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/shops/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo6')) {
            $photo = $request->file('photo6');
            $photoName = date('YmdHi') . 'photo6' . '.' . $photo->getClientOriginalExtension();
            if (Shop::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/shops/" . $photoName), 100);
                Shop::findOrFail($request->id)->update([
                    'photo6' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/shops/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/shops/" . $photoName), 100);
            }
        }
        return back()->with('success', 'Shop information have been successfully Updated.');
    }

    function shop_delete($id)
    {
        $list = Shop::findOrFail($id)->delete();
        return back();
    }

    function shop_restore($id)
    {
        Shop::onlyTrashed()->findOrFail($id)->restore();
        return back();
    }
    //end shop



    //begin factory
    function add_factory()
    {
        return view('Dashboard.factory.add_factory');
    }

    function post_factory_rented(Request $request)
    {

        $factory = Factory::create([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'description' => $request->description,
            'address' => $request->address,
            'floor_level' => $request->floor_level,
            'floor_size' => $request->floor_size,
            'road_width' => $request->road_width,
            'generator'=>$request->generator,
            'fire_safety' => $request->fire_safety,
            'electricity' => $request->electricity,
            'gas' => $request->gas,
            'water' => $request->water,
            'lift' => $request->lift,
            'drainage_system' => $request->drainage_system,
            'parking' => $request->parking,
            'price' => $request->price,
            'photo' => $request->photo,
            'photo1' => $request->photo1,
            'photo2' => $request->photo2,
            'photo3' => $request->photo3,
            'photo4' => $request->photo4,
            'photo5' => $request->photo5,
            'photo6' => $request->photo6,
            'video' => $request->video,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);
        if ($request->file('photo')) {
            $file = $request->file('photo');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/factories/'), $filename);
            $factory['photo'] = $filename;
        }
        $factory->save();
        if ($request->file('photo1')) {
            $file = $request->file('photo1');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/factories/'), $filename);
            $factory['photo1'] = $filename;
        }
        $factory->save();
        if ($request->file('photo2')) {
            $file = $request->file('photo2');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/factories/'), $filename);
            $factory['photo2'] = $filename;
        }
        $factory->save();
        if ($request->file('photo3')) {
            $file = $request->file('photo3');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/factories/'), $filename);
            $factory['photo3'] = $filename;
        }
        $factory->save();
        if ($request->file('photo4')) {
            $file = $request->file('photo4');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/factories/'), $filename);
            $factory['photo4'] = $filename;
        }
        $factory->save();
        if ($request->file('photo5')) {
            $file = $request->file('photo5');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/factories/'), $filename);
            $factory['photo5'] = $filename;
        }
        $factory->save();
        if ($request->file('photo6')) {
            $file = $request->file('photo6');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/factories/'), $filename);
            $factory['photo6'] = $filename;
        }
        $factory->save();
        if ($request->file('video')) {
            $file = $request->file('video');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/factories/videos'), $filename);
            $factory['video'] = $filename;
        }
        $factory->save();

        return back()->with('success', 'Factory information have been successfully Added.');
    }

    function post_factory_wanted(Request $request)
    {

        $factory = Factory::create([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'description' => $request->description,
            'address' => $request->address,
            'floor_level' => $request->floor_level,
            'floor_size' => $request->floor_size,
            'road_width' => $request->road_width,
            'generator'=>$request->generator,
            'fire_safety' => $request->fire_safety,
            'electricity' => $request->electricity,
            'gas' => $request->gas,
            'water' => $request->water,
            'lift' => $request->lift,
            'drainage_system' => $request->drainage_system,
            'parking' => $request->parking,
            'price' => $request->price,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);

        return back()->with('success', 'Factory information have been successfully Added.');
    }

    function list_factory()
    {
        $lists = Factory::all();
        $trashed_lists = Factory::onlyTrashed()->get();
        return view('Dashboard.factory.list_factory', compact('lists', 'trashed_lists'));
    }



    function factory_update(Request $request)
    {

        $factory = Factory::findOrFail($request->id)->update([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'description' => $request->description,
            'factory_name' => $request->factory_name,
            'address' => $request->address,
            'floor_level' => $request->floor_level,
            'floor_size' => $request->floor_size,
            'road_width' => $request->road_width,
            'utilities' => $request->utilities,
            'building_condition' => $request->building_condition,
            'fire_safety' => $request->fire_safety,
            'lift' => $request->lift,
            'interior_condition' => $request->interior_condition,
            'drainage_system' => $request->drainage_system,
            'parking' => $request->parking,
            'price' => $request->price,



        ]);


        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photoName = date('YmdHi') . 'photo' . '.' . $photo->getClientOriginalExtension();
            if (Factory::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/factories/" . $photoName), 100);
                Factory::findOrFail($request->id)->update([
                    'photo' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/factories/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/factories/" . $photoName), 100);
            }
        }


        if ($request->hasFile('photo1')) {
            $photo = $request->file('photo1');
            $photoName = date('YmdHi') . 'photo1' . '.' . $photo->getClientOriginalExtension();
            if (Factory::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/factories/" . $photoName), 100);
                Factory::findOrFail($request->id)->update([
                    'photo1' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/factories/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/factories/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo2')) {
            $photo = $request->file('photo2');

            $photoName = date('YmdHi') . 'photo2' . '.' . $photo->getClientOriginalExtension();
            if (Factory::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/factories/" . $photoName), 100);
                Factory::findOrFail($request->id)->update([
                    'photo2' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/factories/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/factories/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo3')) {
            $photo = $request->file('photo3');
            $photoName = date('YmdHi') . 'photo3' . '.' . $photo->getClientOriginalExtension();
            if (Factory::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/factories/" . $photoName), 100);
                Factory::findOrFail($request->id)->update([
                    'photo3' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/factories/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/factories/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo4')) {
            $photo = $request->file('photo4');
            $photoName = date('YmdHi') . 'photo4' . '.' . $photo->getClientOriginalExtension();
            if (Factory::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/factories/" . $photoName), 100);
                Factory::findOrFail($request->id)->update([
                    'photo4' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/factories/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/factories/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo5')) {
            $photo = $request->file('photo5');
            $photoName = date('YmdHi') . 'photo5' . '.' . $photo->getClientOriginalExtension();
            if (Factory::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/factories/" . $photoName), 100);
                Factory::findOrFail($request->id)->update([
                    'photo5' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/factories/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/factories/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo6')) {
            $photo = $request->file('photo6');
            $photoName = date('YmdHi') . 'photo6' . '.' . $photo->getClientOriginalExtension();
            if (Factory::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/factories/" . $photoName), 100);
                Factory::findOrFail($request->id)->update([
                    'photo6' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/factories/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/factories/" . $photoName), 100);
            }
        }
        return back()->with('success', 'factory information have been successfully Updated.');
    }

    function factory_delete($id)
    {
        $list = Factory::findOrFail($id)->delete();
        return back();
    }

    function factory_restore($id)
    {
        Factory::onlyTrashed()->findOrFail($id)->restore();
        return back();
    }
    //end factory




    //begin warehouse
    function add_warehouse()
    {
        return view('Dashboard.warehouse.add_warehouse');
    }

    function post_warehouse_rented(Request $request)
    {

        $warehouse = Warehouse::create([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'electricity' => $request->electricity,
            'gas' => $request->gas,
            'water' => $request->water,
            'description' => $request->description,
            'type' => $request->type,
            'generator'=>$request->generator,
            'address' => $request->address,
            'floor_level' => $request->floor_level,
            'floor_size' => $request->floor_size,
            'road_width' => $request->road_width,
            'building_condition' => $request->building_condition,
            'fire_safety' => $request->fire_safety,
            'lift' => $request->lift,
            'drainage_system' => $request->drainage_system,
            'parking' => $request->parking,
            'price' => $request->price,
            'photo' => $request->photo,
            'photo1' => $request->photo1,
            'photo2' => $request->photo2,
            'photo3' => $request->photo3,
            'photo4' => $request->photo4,
            'photo5' => $request->photo5,
            'photo6' => $request->photo6,
            'video' => $request->video,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);
        if ($request->file('photo')) {
            $file = $request->file('photo');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/warehouses/'), $filename);
            $warehouse['photo'] = $filename;
        }
        $warehouse->save();
        if ($request->file('photo1')) {
            $file = $request->file('photo1');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/warehouses/'), $filename);
            $warehouse['photo1'] = $filename;
        }
        $warehouse->save();
        if ($request->file('photo2')) {
            $file = $request->file('photo2');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/warehouses/'), $filename);
            $warehouse['photo2'] = $filename;
        }
        $warehouse->save();
        if ($request->file('photo3')) {
            $file = $request->file('photo3');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/warehouses/'), $filename);
            $warehouse['photo3'] = $filename;
        }
        $warehouse->save();
        if ($request->file('photo4')) {
            $file = $request->file('photo4');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/warehouses/'), $filename);
            $warehouse['photo4'] = $filename;
        }
        $warehouse->save();
        if ($request->file('photo5')) {
            $file = $request->file('photo5');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/warehouses/'), $filename);
            $warehouse['photo5'] = $filename;
        }
        $warehouse->save();
        if ($request->file('photo6')) {
            $file = $request->file('photo6');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/warehouses/'), $filename);
            $warehouse['photo6'] = $filename;
        }
        $warehouse->save();
        if ($request->file('video')) {
            $file = $request->file('video');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/warehouses/videos'), $filename);
            $warehouse['video'] = $filename;
        }
        $warehouse->save();

        return back()->with('success', 'warehouse Rent Post successfully Added.');
    }
    function post_warehouse_wanted(Request $request)
    {

        $warehouse = Warehouse::create([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'electricity' => $request->electricity,
            'gas' => $request->gas,
            'water' => $request->water,
            'description' => $request->description,
            'type' => $request->type,
            'generator'=>$request->generator,
            'address' => $request->address,
            'floor_level' => $request->floor_level,
            'floor_size' => $request->floor_size,
            'road_width' => $request->road_width,
            'building_condition' => $request->building_condition,
            'fire_safety' => $request->fire_safety,
            'lift' => $request->lift,
            'drainage_system' => $request->drainage_system,
            'parking' => $request->parking,
            'price' => $request->price,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);

        return back()->with('success', 'warehouse Wanted Post successfully Added.');
    }

    function list_warehouse()
    {
        $lists = Warehouse::all();
        $trashed_lists = Factory::onlyTrashed()->get();
        return view('Dashboard.warehouse.list_warehouse', compact('lists', 'trashed_lists'));
    }



    function warehouse_update(Request $request)
    {

        $warehouse = Warehouse::findOrFail($request->id)->update([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'description' => $request->description,
            'type' => $request->type,
            'address' => $request->address,
            'floor_level' => $request->floor_level,
            'floor_size' => $request->floor_size,
            'road_width' => $request->road_width,
            'utilities' => $request->utilities,
            'building_condition' => $request->building_condition,
            'fire_safety' => $request->fire_safety,
            'lift' => $request->lift,
            'interior_condition' => $request->interior_condition,
            'drainage_system' => $request->drainage_system,
            'parking' => $request->parking,
            'price' => $request->price,



        ]);


        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photoName = date('YmdHi') . 'photo' . '.' . $photo->getClientOriginalExtension();
            if (Warehouse::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/warehouses/" . $photoName), 100);
                Warehouse::findOrFail($request->id)->update([
                    'photo' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/warehouses/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/warehouses/" . $photoName), 100);
            }
        }


        if ($request->hasFile('photo1')) {
            $photo = $request->file('photo1');
            $photoName = date('YmdHi') . 'photo1' . '.' . $photo->getClientOriginalExtension();
            if (Warehouse::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/warehouses/" . $photoName), 100);
                Warehouse::findOrFail($request->id)->update([
                    'photo1' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/warehouses/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/warehouses/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo2')) {
            $photo = $request->file('photo2');

            $photoName = date('YmdHi') . 'photo2' . '.' . $photo->getClientOriginalExtension();
            if (Warehouse::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/warehouses/" . $photoName), 100);
                Warehouse::findOrFail($request->id)->update([
                    'photo2' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/warehouses/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/warehouses/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo3')) {
            $photo = $request->file('photo3');
            $photoName = date('YmdHi') . 'photo3' . '.' . $photo->getClientOriginalExtension();
            if (Warehouse::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/warehouses/" . $photoName), 100);
                Warehouse::findOrFail($request->id)->update([
                    'photo3' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/warehouses/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/warehouses/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo4')) {
            $photo = $request->file('photo4');
            $photoName = date('YmdHi') . 'photo4' . '.' . $photo->getClientOriginalExtension();
            if (Warehouse::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/warehouses/" . $photoName), 100);
                Warehouse::findOrFail($request->id)->update([
                    'photo4' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/warehouses/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/warehouses/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo5')) {
            $photo = $request->file('photo5');
            $photoName = date('YmdHi') . 'photo5' . '.' . $photo->getClientOriginalExtension();
            if (Warehouse::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/warehouses/" . $photoName), 100);
                Warehouse::findOrFail($request->id)->update([
                    'photo5' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/warehouses/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/warehouses/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo6')) {
            $photo = $request->file('photo6');
            $photoName = date('YmdHi') . 'photo6' . '.' . $photo->getClientOriginalExtension();
            if (Warehouse::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/warehouses/" . $photoName), 100);
                Warehouse::findOrFail($request->id)->update([
                    'photo6' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/warehouses/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/warehouses/" . $photoName), 100);
            }
        }
        return back()->with('success', 'Warehouse information have been successfully Updated.');
    }

    function warehouse_delete($id)
    {
        $list = Warehouse::findOrFail($id)->delete();
        return back();
    }

    function warehouse_restore($id)
    {
        Warehouse::onlyTrashed()->findOrFail($id)->restore();
        return back();
    }
    //end warehouse



    //begin pond
    function add_pond()
    {
        return view('Dashboard.pond.add_pond');
    }

    function post_pond_rented(Request $request)
    {

        $pond = Pond::create([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'description' => $request->description,
            'address' => $request->address,
            'pond_area' => $request->pond_area,
            'water_level' => $request->water_level,
            'road_width' => $request->road_width,
            'drainage_system' => $request->drainage_system,
            'price' => $request->price,
            'photo' => $request->photo,
            'photo1' => $request->photo1,
            'photo2' => $request->photo2,
            'photo3' => $request->photo3,
            'photo4' => $request->photo4,
            'photo5' => $request->photo5,
            'photo6' => $request->photo6,
            'video' => $request->video,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);
        if ($request->file('photo')) {
            $file = $request->file('photo');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/ponds/'), $filename);
            $pond['photo'] = $filename;
        }
        $pond->save();
        if ($request->file('photo1')) {
            $file = $request->file('photo1');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/ponds/'), $filename);
            $pond['photo1'] = $filename;
        }
        $pond->save();
        if ($request->file('photo2')) {
            $file = $request->file('photo2');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/ponds/'), $filename);
            $pond['photo2'] = $filename;
        }
        $pond->save();
        if ($request->file('photo3')) {
            $file = $request->file('photo3');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/ponds/'), $filename);
            $pond['photo3'] = $filename;
        }
        $pond->save();
        if ($request->file('photo4')) {
            $file = $request->file('photo4');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/ponds/'), $filename);
            $pond['photo4'] = $filename;
        }
        $pond->save();
        if ($request->file('photo5')) {
            $file = $request->file('photo5');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/ponds/'), $filename);
            $pond['photo5'] = $filename;
        }
        $pond->save();
        if ($request->file('photo6')) {
            $file = $request->file('photo6');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/ponds/'), $filename);
            $pond['photo6'] = $filename;
        }
        $pond->save();
        if ($request->file('video')) {
            $file = $request->file('video');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/ponds/videos'), $filename);
            $pond['video'] = $filename;
        }
        $pond->save();

        return back()->with('success', 'Pond information have been successfully Added.');
    }

    function post_pond_wanted(Request $request)
    {

        $pond = Pond::create([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'description' => $request->description,
            'address' => $request->address,
            'pond_area' => $request->pond_area,
            'water_level' => $request->water_level,
            'road_width' => $request->road_width,
            'drainage_system' => $request->drainage_system,
            'price' => $request->price,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);

        return back()->with('success', 'Pond information have been successfully Added.');
    }

    function list_pond()
    {
        $lists = Pond::all();
        $trashed_lists = Pond::onlyTrashed()->get();
        return view('Dashboard.pond.list_pond', compact('lists', 'trashed_lists'));
    }



    function pond_update(Request $request)
    {

        $pond = Pond::findOrFail($request->id)->update([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'description' => $request->description,
            'address' => $request->address,
            'purpose' => $request->purpose,
            'pond_area' => $request->pond_area,
            'water_level' => $request->water_level,
            'road_width' => $request->road_width,
            'drainage_system' => $request->drainage_system,
            'price' => $request->price,

        ]);


        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photoName = date('YmdHi') . 'photo' . '.' . $photo->getClientOriginalExtension();
            if (Pond::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/ponds/" . $photoName), 100);
                Pond::findOrFail($request->id)->update([
                    'photo' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/ponds/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/ponds/" . $photoName), 100);
            }
        }


        if ($request->hasFile('photo1')) {
            $photo = $request->file('photo1');
            $photoName = date('YmdHi') . 'photo1' . '.' . $photo->getClientOriginalExtension();
            if (Pond::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/ponds/" . $photoName), 100);
                Pond::findOrFail($request->id)->update([
                    'photo1' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/ponds/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/ponds/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo2')) {
            $photo = $request->file('photo2');

            $photoName = date('YmdHi') . 'photo2' . '.' . $photo->getClientOriginalExtension();
            if (Pond::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/ponds/" . $photoName), 100);
                Pond::findOrFail($request->id)->update([
                    'photo2' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/ponds/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/ponds/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo3')) {
            $photo = $request->file('photo3');
            $photoName = date('YmdHi') . 'photo3' . '.' . $photo->getClientOriginalExtension();
            if (Pond::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/ponds/" . $photoName), 100);
                Pond::findOrFail($request->id)->update([
                    'photo3' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/ponds/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/ponds/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo4')) {
            $photo = $request->file('photo4');
            $photoName = date('YmdHi') . 'photo4' . '.' . $photo->getClientOriginalExtension();
            if (Pond::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/ponds/" . $photoName), 100);
                Pond::findOrFail($request->id)->update([
                    'photo4' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/ponds/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/ponds/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo5')) {
            $photo = $request->file('photo5');
            $photoName = date('YmdHi') . 'photo5' . '.' . $photo->getClientOriginalExtension();
            if (Pond::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/ponds/" . $photoName), 100);
                Pond::findOrFail($request->id)->update([
                    'photo5' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/ponds/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/ponds/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo6')) {
            $photo = $request->file('photo6');
            $photoName = date('YmdHi') . 'photo6' . '.' . $photo->getClientOriginalExtension();
            if (Pond::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/ponds/" . $photoName), 100);
                Pond::findOrFail($request->id)->update([
                    'photo6' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/ponds/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/ponds/" . $photoName), 100);
            }
        }
        return back()->with('success', 'Pond information have been successfully Updated.');
    }

    function pond_delete($id)
    {
        $list = Pond::findOrFail($id)->delete();
        return back();
    }

    function pond_restore($id)
    {
        Pond::onlyTrashed()->findOrFail($id)->restore();
        return back();
    }
    //end pond



    //begin swimmingpool
    function add_swimmingpool()
    {
        return view('Dashboard.swimmingpool.add_swimmingpool');
    }

    function post_swimmingpool_rented(Request $request)
    {

        $swimmingpool = Swimming_Pool::create([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'description' => $request->description,
            'type' => $request->type,
            'address' => $request->address,
            'size' => $request->size,
            'toilet' => $request->toilet,
            'wifi' => $request->wifi,
            'shed' => $request->shed,
            'generator'=>$request->generator,
            'laundry' => $request->laundry,
            'change_room' => $request->change_room,
            'parking' => $request->parking,
            'laundry' => $request->laundry,
            'price' => $request->price,
            'photo' => $request->photo,
            'photo1' => $request->photo1,
            'photo2' => $request->photo2,
            'photo3' => $request->photo3,
            'photo4' => $request->photo4,
            'photo5' => $request->photo5,
            'photo6' => $request->photo6,
            'video' => $request->video,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);
        if ($request->file('photo')) {
            $file = $request->file('photo');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/swimmingpools/'), $filename);
            $swimmingpool['photo'] = $filename;
        }
        $swimmingpool->save();
        if ($request->file('photo1')) {
            $file = $request->file('photo1');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/swimmingpools/'), $filename);
            $swimmingpool['photo1'] = $filename;
        }
        $swimmingpool->save();
        if ($request->file('photo2')) {
            $file = $request->file('photo2');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/swimmingpools/'), $filename);
            $swimmingpool['photo2'] = $filename;
        }
        $swimmingpool->save();
        if ($request->file('photo3')) {
            $file = $request->file('photo3');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/swimmingpools/'), $filename);
            $swimmingpool['photo3'] = $filename;
        }
        $swimmingpool->save();
        if ($request->file('photo4')) {
            $file = $request->file('photo4');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/swimmingpools/'), $filename);
            $swimmingpool['photo4'] = $filename;
        }
        $swimmingpool->save();
        if ($request->file('photo5')) {
            $file = $request->file('photo5');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/swimmingpools/'), $filename);
            $swimmingpool['photo5'] = $filename;
        }
        $swimmingpool->save();
        if ($request->file('photo6')) {
            $file = $request->file('photo6');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/swimmingpools/'), $filename);
            $swimmingpool['photo6'] = $filename;
        }
        $swimmingpool->save();
        if ($request->file('video')) {
            $file = $request->file('video');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/swimmingpools/videos'), $filename);
            $swimmingpool['video'] = $filename;
        }
        $swimmingpool->save();

        return back()->with('success', 'swimmingpool Rented successfully Added.');
    }
    public function post_swimmingpool_wanted(Request $request)
    {

        $swimmingpool = Swimming_Pool::create([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'description' => $request->description,
            'type' => $request->type,
            'address' => $request->address,
            'size' => $request->size,
            'generator'=>$request->generator,
            'toilet' => $request->toilet,
            'wifi' => $request->wifi,
            'shed' => $request->shed,
            'laundry' => $request->laundry,
            'change_room' => $request->change_room,
            'parking' => $request->parking,
            'laundry' => $request->laundry,
            'price' => $request->price,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);
        return back()->with('success', 'swimmingpool Wanted Post successfully Added.');
    }
    function list_swimmingpool()
    {
        $lists = Swimming_Pool::all();
        $trashed_lists = Swimming_Pool::onlyTrashed()->get();
        return view('Dashboard.swimmingpool.list_swimmingpool', compact('lists', 'trashed_lists'));
    }


    function swimmingpool_update(Request $request)
    {

        $swimmingpool = Swimming_Pool::findOrFail($request->id)->update([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'description' => $request->description,
            'type' => $request->type,
            'address' => $request->address,
            'size' => $request->size,
            'toilet' => $request->toilet,
            'wifi' => $request->wifi,
            'laundry' => $request->laundry,
            'change_room' => $request->change_room,
            'parking' => $request->parking,
            'laundry' => $request->laundry,
            'price' => $request->price
        ]);


        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photoName = date('YmdHi') . 'photo' . '.' . $photo->getClientOriginalExtension();
            if (Swimming_Pool::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/swimmingpools/" . $photoName), 100);
                Swimming_Pool::findOrFail($request->id)->update([
                    'photo' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/swimmingpools/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/swimmingpools/" . $photoName), 100);
            }
        }


        if ($request->hasFile('photo1')) {
            $photo = $request->file('photo1');
            $photoName = date('YmdHi') . 'photo1' . '.' . $photo->getClientOriginalExtension();
            if (Swimming_Pool::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/swimmingpools/" . $photoName), 100);
                Swimming_Pool::findOrFail($request->id)->update([
                    'photo1' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/swimmingpools/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/swimmingpools/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo2')) {
            $photo = $request->file('photo2');

            $photoName = date('YmdHi') . 'photo2' . '.' . $photo->getClientOriginalExtension();
            if (Swimming_Pool::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/swimmingpools/" . $photoName), 100);
                Swimming_Pool::findOrFail($request->id)->update([
                    'photo2' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/swimmingpools/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/swimmingpools/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo3')) {
            $photo = $request->file('photo3');
            $photoName = date('YmdHi') . 'photo3' . '.' . $photo->getClientOriginalExtension();
            if (Swimming_Pool::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/swimmingpools/" . $photoName), 100);
                Swimming_Pool::findOrFail($request->id)->update([
                    'photo3' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/swimmingpools/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/swimmingpools/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo4')) {
            $photo = $request->file('photo4');
            $photoName = date('YmdHi') . 'photo4' . '.' . $photo->getClientOriginalExtension();
            if (Swimming_Pool::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/swimmingpools/" . $photoName), 100);
                Swimming_Pool::findOrFail($request->id)->update([
                    'photo4' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/swimmingpools/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/swimmingpools/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo5')) {
            $photo = $request->file('photo5');
            $photoName = date('YmdHi') . 'photo5' . '.' . $photo->getClientOriginalExtension();
            if (Swimming_Pool::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/swimmingpools/" . $photoName), 100);
                Swimming_Pool::findOrFail($request->id)->update([
                    'photo5' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/swimmingpools/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/swimmingpools/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo6')) {
            $photo = $request->file('photo6');
            $photoName = date('YmdHi') . 'photo6' . '.' . $photo->getClientOriginalExtension();
            if (Swimming_Pool::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/swimmingpools/" . $photoName), 100);
                Swimming_Pool::findOrFail($request->id)->update([
                    'photo6' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/swimmingpools/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/swimmingpools/" . $photoName), 100);
            }
        }
        return back()->with('success', 'swimmingpool information have been successfully Updated.');
    }

    function swimmingpool_delete($id)
    {
        $list = Swimming_Pool::findOrFail($id)->delete();
        return back();
    }

    function swimmingpool_restore($id)
    {
        Swimming_Pool::onlyTrashed()->findOrFail($id)->restore();
        return back();
    }
    //end swimmingpool




    //begin billboard
    function add_bilboard()
    {
        return view('Dashboard.bilboard.add_bilboard');
    }

    function post_bilboard_rented(Request $request)
    {

        $bilboard = Bilboard::create([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'description' => $request->description,
            'type' => $request->type,
            'address' => $request->address,
            'size' => $request->size,
            'hieght' => $request->hieght,
            'electricity' => $request->electricity,
            'price' => $request->price,
            'photo' => $request->photo,
            'photo1' => $request->photo1,
            'photo2' => $request->photo2,
            'photo3' => $request->photo3,
            'photo4' => $request->photo4,
            'photo5' => $request->photo5,
            'photo6' => $request->photo6,
            'video' => $request->video,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);
        if ($request->file('photo')) {
            $file = $request->file('photo');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/billboards/'), $filename);
            $bilboard['photo'] = $filename;
        }
        $bilboard->save();
        if ($request->file('photo1')) {
            $file = $request->file('photo1');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/billboards/'), $filename);
            $bilboard['photo1'] = $filename;
        }
        $bilboard->save();
        if ($request->file('photo2')) {
            $file = $request->file('photo2');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/billboards/'), $filename);
            $bilboard['photo2'] = $filename;
        }
        $bilboard->save();
        if ($request->file('photo3')) {
            $file = $request->file('photo3');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/billboards/'), $filename);
            $bilboard['photo3'] = $filename;
        }
        $bilboard->save();
        if ($request->file('photo4')) {
            $file = $request->file('photo4');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/billboards/'), $filename);
            $bilboard['photo4'] = $filename;
        }
        $bilboard->save();
        if ($request->file('photo5')) {
            $file = $request->file('photo5');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/billboards/'), $filename);
            $bilboard['photo5'] = $filename;
        }
        $bilboard->save();
        if ($request->file('photo6')) {
            $file = $request->file('photo6');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/billboards/'), $filename);
            $bilboard['photo6'] = $filename;
        }
        $bilboard->save();
        if ($request->file('video')) {
            $file = $request->file('video');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/billboards/videos'), $filename);
            $bilboard['video'] = $filename;
        }
        $bilboard->save();

        return back()->with('success', 'Billboard rented Post successfully Added.');
    }
    public function post_bilboard_wanted(Request $request)
    {

        $bilboard = Bilboard::create([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'description' => $request->description,
            'type' => $request->type,
            'address' => $request->address,
            'size' => $request->size,
            'hieght' => $request->hieght,
            'electricity' => $request->electricity,
            'price' => $request->price,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);
        return back()->with('success', 'Billboard Wanted Post successfully Added.');
    }
    function list_bilboard()
    {
        $lists = Bilboard::all();
        $trashed_lists = Bilboard::onlyTrashed()->get();
        return view('Dashboard.bilboard.list_bilboard', compact('lists', 'trashed_lists'));
    }



    function bilboard_update(Request $request)
    {

        $bilboard = Bilboard::findOrFail($request->id)->update([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'description' => $request->description,
            'type' => $request->type,
            'address' => $request->address,
            'size' => $request->size,
            'hieght' => $request->hieght,
            'electricity' => $request->electricity,
            'price' => $request->price,



        ]);


        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photoName = date('YmdHi') . 'photo' . '.' . $photo->getClientOriginalExtension();
            if (Bilboard::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/billboards/" . $photoName), 100);
                Bilboard::findOrFail($request->id)->update([
                    'photo' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/billboards/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/billboards/" . $photoName), 100);
            }
        }


        if ($request->hasFile('photo1')) {
            $photo = $request->file('photo1');
            $photoName = date('YmdHi') . 'photo1' . '.' . $photo->getClientOriginalExtension();
            if (Bilboard::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/billboards/" . $photoName), 100);
                Bilboard::findOrFail($request->id)->update([
                    'photo1' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/billboards/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/billboards/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo2')) {
            $photo = $request->file('photo2');

            $photoName = date('YmdHi') . 'photo2' . '.' . $photo->getClientOriginalExtension();
            if (Bilboard::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/billboards/" . $photoName), 100);
                Bilboard::findOrFail($request->id)->update([
                    'photo2' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/billboards/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/billboards/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo3')) {
            $photo = $request->file('photo3');
            $photoName = date('YmdHi') . 'photo3' . '.' . $photo->getClientOriginalExtension();
            if (Bilboard::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/billboards/" . $photoName), 100);
                Bilboard::findOrFail($request->id)->update([
                    'photo3' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/billboards/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/billboards/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo4')) {
            $photo = $request->file('photo4');
            $photoName = date('YmdHi') . 'photo4' . '.' . $photo->getClientOriginalExtension();
            if (Bilboard::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/billboards/" . $photoName), 100);
                Bilboard::findOrFail($request->id)->update([
                    'photo4' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/billboards/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/billboards/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo5')) {
            $photo = $request->file('photo5');
            $photoName = date('YmdHi') . 'photo5' . '.' . $photo->getClientOriginalExtension();
            if (Bilboard::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/billboards/" . $photoName), 100);
                Bilboard::findOrFail($request->id)->update([
                    'photo5' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/billboards/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/billboards/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo6')) {
            $photo = $request->file('photo6');
            $photoName = date('YmdHi') . 'photo6' . '.' . $photo->getClientOriginalExtension();
            if (Bilboard::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/billboards/" . $photoName), 100);
                Bilboard::findOrFail($request->id)->update([
                    'photo6' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/billboards/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/billboards/" . $photoName), 100);
            }
        }
        return back()->with('success', 'Billboard information have been successfully Updated.');
    }

    function bilboard_delete($id)
    {
        $list = Bilboard::findOrFail($id)->delete();
        return back();
    }

    function bilboard_restore($id)
    {
        Bilboard::onlyTrashed()->findOrFail($id)->restore();
        return back();
    }
    //end billboard




    //begin Rooftop
    function add_rooftop()
    {
        return view('Dashboard.rooftop.add_rooftop');
    }

    function post_rooftop_rented(Request $request)
    {

        $rooftop = Rooftop::create([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'description' => $request->description,
            'address' => $request->address,
            'floor_area' => $request->floor_area,
            'generator'=>$request->generator,
            'toilet' => $request->toilet,
            'shed' => $request->shed,
            'p_protection' => $request->p_protection,
            'lift' => $request->lift,
            'water' => $request->water,
            'electricity' => $request->electricity,
            'parking' => $request->parking,
            'price' => $request->price,
            'photo' => $request->photo,
            'photo1' => $request->photo1,
            'photo2' => $request->photo2,
            'photo3' => $request->photo3,
            'photo4' => $request->photo4,
            'photo5' => $request->photo5,
            'photo6' => $request->photo6,
            'video' => $request->video,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);
        if ($request->file('photo')) {
            $file = $request->file('photo');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/rooftops/'), $filename);
            $rooftop['photo'] = $filename;
        }
        $rooftop->save();
        if ($request->file('photo1')) {
            $file = $request->file('photo1');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/rooftops/'), $filename);
            $rooftop['photo1'] = $filename;
        }
        $rooftop->save();
        if ($request->file('photo2')) {
            $file = $request->file('photo2');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/rooftops/'), $filename);
            $rooftop['photo2'] = $filename;
        }
        $rooftop->save();
        if ($request->file('photo3')) {
            $file = $request->file('photo3');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/rooftops/'), $filename);
            $rooftop['photo3'] = $filename;
        }
        $rooftop->save();
        if ($request->file('photo4')) {
            $file = $request->file('photo4');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/rooftops/'), $filename);
            $rooftop['photo4'] = $filename;
        }
        $rooftop->save();
        if ($request->file('photo5')) {
            $file = $request->file('photo5');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/rooftops/'), $filename);
            $rooftop['photo5'] = $filename;
        }
        $rooftop->save();
        if ($request->file('photo6')) {
            $file = $request->file('photo6');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/rooftops/'), $filename);
            $rooftop['photo6'] = $filename;
        }
        $rooftop->save();
        if ($request->file('video')) {
            $file = $request->file('video');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/rooftops/videos'), $filename);
            $rooftop['video'] = $filename;
        }
        $rooftop->save();


        return back()->with('success', 'Rooftop information have been successfully Added.');
    }

    function post_rooftop_wanted(Request $request)
    {

        $rooftop = Rooftop::create([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'description' => $request->description,
            'generator'=>$request->generator,
            'address' => $request->address,
            'floor_area' => $request->floor_area,
            'toilet' => $request->toilet,
            'shed' => $request->shed,
            'p_protection' => $request->p_protection,
            'lift' => $request->lift,
            'water' => $request->water,
            'electricity' => $request->electricity,
            'parking' => $request->parking,
            'price' => $request->price,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);

        return back()->with('success', 'Rooftop information have been successfully Added.');
    }

    function list_rooftop()
    {
        $lists = Rooftop::all();
        $trashed_lists = Rooftop::onlyTrashed()->get();
        return view('Dashboard.rooftop.list_rooftop', compact('lists', 'trashed_lists'));
    }



    function rooftop_update(Request $request)
    {

        $rooftop = Rooftop::findOrFail($request->id)->update([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'description' => $request->description,
            'address' => $request->address,
            'floor_area' => $request->floor_area,
            'utilities' => $request->utilities,
            'shed' => $request->shed,
            'protection' => $request->protection,
            'lift' => $request->lift,
            'interior_condition' => $request->interior_condition,
            'parking' => $request->parking,
            'price' => $request->price,

        ]);


        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photoName = date('YmdHi') . 'photo' . '.' . $photo->getClientOriginalExtension();
            if (Rooftop::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/rooftops/" . $photoName), 100);
                Rooftop::findOrFail($request->id)->update([
                    'photo' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/rooftops/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/rooftops/" . $photoName), 100);
            }
        }


        if ($request->hasFile('photo1')) {
            $photo = $request->file('photo1');
            $photoName = date('YmdHi') . 'photo1' . '.' . $photo->getClientOriginalExtension();
            if (Rooftop::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/rooftops/" . $photoName), 100);
                Rooftop::findOrFail($request->id)->update([
                    'photo1' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/rooftops/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/rooftops/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo2')) {
            $photo = $request->file('photo2');

            $photoName = date('YmdHi') . 'photo2' . '.' . $photo->getClientOriginalExtension();
            if (Rooftop::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/rooftops/" . $photoName), 100);
                Rooftop::findOrFail($request->id)->update([
                    'photo2' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/rooftops/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/rooftops/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo3')) {
            $photo = $request->file('photo3');
            $photoName = date('YmdHi') . 'photo3' . '.' . $photo->getClientOriginalExtension();
            if (Rooftop::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/rooftops/" . $photoName), 100);
                Rooftop::findOrFail($request->id)->update([
                    'photo3' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/rooftops/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/rooftops/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo4')) {
            $photo = $request->file('photo4');
            $photoName = date('YmdHi') . 'photo4' . '.' . $photo->getClientOriginalExtension();
            if (Rooftop::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/rooftops/" . $photoName), 100);
                Rooftop::findOrFail($request->id)->update([
                    'photo4' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/rooftops/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/rooftops/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo5')) {
            $photo = $request->file('photo5');
            $photoName = date('YmdHi') . 'photo5' . '.' . $photo->getClientOriginalExtension();
            if (Rooftop::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/rooftops/" . $photoName), 100);
                Rooftop::findOrFail($request->id)->update([
                    'photo5' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/rooftops/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/rooftops/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo6')) {
            $photo = $request->file('photo6');
            $photoName = date('YmdHi') . 'photo6' . '.' . $photo->getClientOriginalExtension();
            if (Rooftop::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/rooftops/" . $photoName), 100);
                Rooftop::findOrFail($request->id)->update([
                    'photo6' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/rooftops/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/rooftops/" . $photoName), 100);
            }
        }
        return back()->with('success', 'Rooftop information have been successfully Updated.');
    }

    function rooftop_delete($id)
    {
        $list = Rooftop::findOrFail($id)->delete();
        return back();
    }

    function rooftop_restore($id)
    {
        Rooftop::onlyTrashed()->findOrFail($id)->restore();
        return back();
    }
    //end Rooftop




    //begin Restaurant
    function add_restuarant()
    {
        return view('Dashboard.restaurant.add_restaurant');
    }

    function post_restuarant_rented(Request $request)
    {

        $restaurant = Restaurant::create([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'date' => $request->date,
            'phone' => $request->phone,
            'description' => $request->description,
            'resort_name' => $request->resort_name,
            'address' => $request->address,
            'room_type' => $request->room_type,
            'attached_toilet' => $request->attached_toilet,
            'hot_water' => $request->hot_water,
            'generator'=>$request->generator,
            'laundry' => $request->laundry,
            'ac' => $request->ac,
            'wifi' => $request->wifi,
            'lift' => $request->lift,
            'parking' => $request->parking,
            'dining' => $request->dining,
            'sports' => $request->sports,
            'gym' => $request->gym,
            'spa' => $request->spa,
            'swimmingpool' => $request->swimmingpool,
            'price' => $request->price,
            's_charge' => $request->s_charge,
            'photo' => $request->photo,
            'photo1' => $request->photo1,
            'photo2' => $request->photo2,
            'photo3' => $request->photo3,
            'photo4' => $request->photo4,
            'photo5' => $request->photo5,
            'photo6' => $request->photo6,
            'video' => $request->video,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);
        return back()->with('success', 'Resort information have been successfully Added.');
    }



    function post_restuarant_wanted(Request $request)
    {

        $restaurant = Restaurant::create([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'date' => $request->date,
            'phone' => $request->phone,
            'description' => $request->description,
            'resort_name' => $request->resort_name,
            'address' => $request->address,
            'room_type' => $request->room_type,
            'generator'=>$request->generator,
            'attached_toilet' => $request->attached_toilet,
            'hot_water' => $request->hot_water,
            'laundry' => $request->laundry,
            'ac' => $request->ac,
            'wifi' => $request->wifi,
            'lift' => $request->lift,
            'parking' => $request->parking,
            'dining' => $request->dining,
            'sports' => $request->sports,
            'gym' => $request->gym,
            'spa' => $request->spa,
            'swimmingpool' => $request->swimmingpool,
            'price' => $request->price,
            's_charge' => $request->s_charge,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);

        return back()->with('success', 'Resort information have been successfully Added.');
    }

    function list_restuarant()
    {
        $lists = Restaurant::all();
        $trashed_lists = Restaurant::onlyTrashed()->get();
        return view('Dashboard.restaurant.list_restaurant', compact('lists', 'trashed_lists'));
    }



    function restuarant_update(Request $request)
    {

        $restaurant = Restaurant::findOrFail($request->id)->update([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'description' => $request->description,
            'resort_name' => $request->resort_name,
            'address' => $request->address,
            'room_size' => $request->room_size,
            'room_type' => $request->room_type,
            'star_rating' => $request->star_rating,
            'attached_toilet' => $request->attached_toilet,
            'utilities' => $request->utilities,
            'attached_varanda' => $request->attached_varanda,
            'hot_water' => $request->hot_water,
            'laundry' => $request->laundry,
            'ac' => $request->ac,
            'cable_tv' => $request->cable_tv,
            'wifi' => $request->wifi,
            'lift' => $request->lift,
            'furnished' => $request->furnished,
            'parking' => $request->parking,
            'dining' => $request->dining,
            'sports' => $request->sports,
            'gym' => $request->gym,
            'spa' => $request->spa,
            'swimmingpool' => $request->swimmingpool,
            'price' => $request->price,
        ]);


        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photoName = date('YmdHi') . 'photo' . '.' . $photo->getClientOriginalExtension();
            if (Restaurant::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/restaurants/" . $photoName), 100);
                Restaurant::findOrFail($request->id)->update([
                    'photo' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/restaurants/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/restaurants/" . $photoName), 100);
            }
        }


        if ($request->hasFile('photo1')) {
            $photo = $request->file('photo1');
            $photoName = date('YmdHi') . 'photo1' . '.' . $photo->getClientOriginalExtension();
            if (Restaurant::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/restaurants/" . $photoName), 100);
                Restaurant::findOrFail($request->id)->update([
                    'photo1' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/restaurants/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/restaurants/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo2')) {
            $photo = $request->file('photo2');

            $photoName = date('YmdHi') . 'photo2' . '.' . $photo->getClientOriginalExtension();
            if (Restaurant::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/restaurants/" . $photoName), 100);
                Restaurant::findOrFail($request->id)->update([
                    'photo2' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/restaurants/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/restaurants/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo3')) {
            $photo = $request->file('photo3');
            $photoName = date('YmdHi') . 'photo3' . '.' . $photo->getClientOriginalExtension();
            if (Restaurant::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/restaurants/" . $photoName), 100);
                Restaurant::findOrFail($request->id)->update([
                    'photo3' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/restaurants/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/restaurants/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo4')) {
            $photo = $request->file('photo4');
            $photoName = date('YmdHi') . 'photo4' . '.' . $photo->getClientOriginalExtension();
            if (Restaurant::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/restaurants/" . $photoName), 100);
                Restaurant::findOrFail($request->id)->update([
                    'photo4' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/restaurants/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/restaurants/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo5')) {
            $photo = $request->file('photo5');
            $photoName = date('YmdHi') . 'photo5' . '.' . $photo->getClientOriginalExtension();
            if (Restaurant::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/restaurants/" . $photoName), 100);
                Restaurant::findOrFail($request->id)->update([
                    'photo5' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/restaurants/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/restaurants/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo6')) {
            $photo = $request->file('photo6');
            $photoName = date('YmdHi') . 'photo6' . '.' . $photo->getClientOriginalExtension();
            if (Restaurant::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/restaurants/" . $photoName), 100);
                Restaurant::findOrFail($request->id)->update([
                    'photo6' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/restaurants/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/restaurants/" . $photoName), 100);
            }
        }
        return back()->with('success', 'restaurant information have been successfully Updated.');
    }

    function restuarant_delete($id)
    {
        $list = Restaurant::findOrFail($id)->delete();
        return back();
    }

    function restuarant_restore($id)
    {
        Restaurant::onlyTrashed()->findOrFail($id)->restore();
        return back();
    }
    //end Restaurant




    //begin Exibution Center
    function add_exibution_center()
    {
        return view('Dashboard.exibution_center.add_exibution_center');
    }

    function post_exibution_center_rented(Request $request)
    {

        $exibution_center = Exibution_Center::create([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'description' => $request->description,
            'address' => $request->address,
            'interior_condition'=>$request->interior_condition,
            'room_size' => $request->room_size,
            'room_type' => $request->room_type,
            'generator'=>$request->generator,
            'floor_level'=>$request->floor_level,
            'toilet' => $request->toilet,
            'lift' => $request->lift,
            'fire_exit' => $request->fire_exit,
            'parking' => $request->parking,
            'price' => $request->price,
            'photo' => $request->photo,
            'photo1' => $request->photo1,
            'photo2' => $request->photo2,
            'photo3' => $request->photo3,
            'photo4' => $request->photo4,
            'photo5' => $request->photo5,
            'photo6' => $request->photo6,
            'video' => $request->video,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);
        if ($request->file('photo')) {
            $file = $request->file('photo');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/exhibutions/'), $filename);
            $exibution_center['photo'] = $filename;
        }
        $exibution_center->save();
        if ($request->file('photo1')) {
            $file = $request->file('photo1');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/exhibutions/'), $filename);
            $exibution_center['photo1'] = $filename;
        }
        $exibution_center->save();
        if ($request->file('photo2')) {
            $file = $request->file('photo2');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/exhibutions/'), $filename);
            $exibution_center['photo2'] = $filename;
        }
        $exibution_center->save();
        if ($request->file('photo3')) {
            $file = $request->file('photo3');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/exhibutions/'), $filename);
            $exibution_center['photo3'] = $filename;
        }
        $exibution_center->save();
        if ($request->file('photo4')) {
            $file = $request->file('photo4');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/exhibutions/'), $filename);
            $exibution_center['photo4'] = $filename;
        }
        $exibution_center->save();
        if ($request->file('photo5')) {
            $file = $request->file('photo5');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/exhibutions/'), $filename);
            $exibution_center['photo5'] = $filename;
        }
        $exibution_center->save();
        if ($request->file('photo6')) {
            $file = $request->file('photo6');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/exhibutions/'), $filename);
            $exibution_center['photo6'] = $filename;
        }
        $exibution_center->save();
        if ($request->file('video')) {
            $file = $request->file('video');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/exhibutions/videos'), $filename);
            $exibution_center['video'] = $filename;
        }
        $exibution_center->save();

        return back()->with('success', 'exibution_center information have been successfully Added.');
    }

    function post_exibution_center_wanted(Request $request)
    {

        $exibution_center = Exibution_Center::create([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'description' => $request->description,
            'address' => $request->address,
            'generator'=>$request->generator,
            'interior_condition'=>$request->interior_condition,
            'room_size' => $request->room_size,
            'room_type' => $request->room_type,
            'floor_level'=>$request->floor_level,
            'toilet' => $request->toilet,
            'lift' => $request->lift,
            'fire_exit' => $request->fire_exit,
            'parking' => $request->parking,
            'price' => $request->price,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);

        return back()->with('success', 'exibution_center information have been successfully Added.');
    }

    function list_exibution_center()
    {
        $lists = Exibution_Center::all();
        $trashed_lists = Exibution_Center::onlyTrashed()->get();
        return view('Dashboard.exibution_center.list_exibution_center', compact('lists', 'trashed_lists'));
    }

    function exibution_center_update(Request $request)
    {

        $exibution_center = Exibution_Center::findOrFail($request->id)->update([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'description' => $request->description,
            'exibution_center_name' => $request->exibution_center_name,
            'address' => $request->address,
            'room_size' => $request->room_size,
            'room_type' => $request->room_type,
            'attached_toilet' => $request->attached_toilet,
            'utilities' => $request->utilities,
            'attached_varanda' => $request->attached_varanda,
            'hot_water' => $request->hot_water,
            'laundry' => $request->laundry,
            'ac' => $request->ac,
            'cable_tv' => $request->cable_tv,
            'wifi' => $request->wifi,
            'lift' => $request->lift,
            'furnished' => $request->furnished,
            'parking' => $request->parking,
            'dining' => $request->dining,
            'sports' => $request->sports,
            'gym' => $request->gym,
            'spa' => $request->spa,
            'swimmingpool' => $request->swimmingpool,
            'price' => $request->price,

        ]);


        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photoName = date('YmdHi') . 'photo' . '.' . $photo->getClientOriginalExtension();
            if (Exibution_Center::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/exhibutions/" . $photoName), 100);
                Exibution_Center::findOrFail($request->id)->update([
                    'photo' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/exhibutions/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/exhibutions/" . $photoName), 100);
            }
        }


        if ($request->hasFile('photo1')) {
            $photo = $request->file('photo1');
            $photoName = date('YmdHi') . 'photo1' . '.' . $photo->getClientOriginalExtension();
            if (Exibution_Center::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/exhibutions/" . $photoName), 100);
                Exibution_Center::findOrFail($request->id)->update([
                    'photo1' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/exhibutions/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/exhibutions/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo2')) {
            $photo = $request->file('photo2');

            $photoName = date('YmdHi') . 'photo2' . '.' . $photo->getClientOriginalExtension();
            if (Exibution_Center::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/exhibutions/" . $photoName), 100);
                Exibution_Center::findOrFail($request->id)->update([
                    'photo2' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/exhibutions/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/exhibutions/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo3')) {
            $photo = $request->file('photo3');
            $photoName = date('YmdHi') . 'photo3' . '.' . $photo->getClientOriginalExtension();
            if (Exibution_Center::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/exhibutions/" . $photoName), 100);
                Exibution_Center::findOrFail($request->id)->update([
                    'photo3' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/exhibutions/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/exhibutions/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo4')) {
            $photo = $request->file('photo4');
            $photoName = date('YmdHi') . 'photo4' . '.' . $photo->getClientOriginalExtension();
            if (Exibution_Center::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/exhibutions/" . $photoName), 100);
                Exibution_Center::findOrFail($request->id)->update([
                    'photo4' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/exhibutions/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/exhibutions/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo5')) {
            $photo = $request->file('photo5');
            $photoName = date('YmdHi') . 'photo5' . '.' . $photo->getClientOriginalExtension();
            if (Exibution_Center::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/exhibutions/" . $photoName), 100);
                Exibution_Center::findOrFail($request->id)->update([
                    'photo5' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/exhibutions/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/exhibutions/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo6')) {
            $photo = $request->file('photo6');
            $photoName = date('YmdHi') . 'photo6' . '.' . $photo->getClientOriginalExtension();
            if (Exibution_Center::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/exhibutions/" . $photoName), 100);
                Exibution_Center::findOrFail($request->id)->update([
                    'photo6' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/exhibutions/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/exhibutions/" . $photoName), 100);
            }
        }
        return back()->with('success', 'exibution_center information have been successfully Updated.');
    }

    function exibution_center_delete($id)
    {
        $list = Exibution_Center::findOrFail($id)->delete();
        return back();
    }

    function exibution_center_restore($id)
    {
        Exibution_Center::onlyTrashed()->findOrFail($id)->restore();
        return back();
    }
    //end Exibution Center






    //begin play ground
    function add_playground()
    {
        return view('Dashboard.play_ground.add_playground');
    }

    function post_playground_rented(Request $request)
    {

        $playground = Play_ground::create([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'area' => $request->area,
            'description' => $request->description,
            'address' => $request->address,
            'shed' => $request->utilities,
            'generator'=>$request->generator,
            'toilet' => $request->laundry,
            'change_room' => $request->changing_room,
            'gym' => $request->gym,
            'parking' => $request->parking,
            'sports' => $request->sports,
            'price' => $request->price,
            'photo' => $request->photo,
            'photo1' => $request->photo1,
            'photo2' => $request->photo2,
            'photo3' => $request->photo3,
            'photo4' => $request->photo4,
            'photo5' => $request->photo5,
            'photo6' => $request->photo6,
            'video' => $request->video,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);
        if ($request->file('photo')) {
            $file = $request->file('photo');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/playgrounds/'), $filename);
            $playground['photo'] = $filename;
        }
        $playground->save();
        if ($request->file('photo1')) {
            $file = $request->file('photo1');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/playgrounds/'), $filename);
            $playground['photo1'] = $filename;
        }
        $playground->save();
        if ($request->file('photo2')) {
            $file = $request->file('photo2');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/playgrounds/'), $filename);
            $playground['photo2'] = $filename;
        }
        $playground->save();
        if ($request->file('photo3')) {
            $file = $request->file('photo3');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/playgrounds/'), $filename);
            $playground['photo3'] = $filename;
        }
        $playground->save();
        if ($request->file('photo4')) {
            $file = $request->file('photo4');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/playgrounds/'), $filename);
            $playground['photo4'] = $filename;
        }
        $playground->save();
        if ($request->file('photo5')) {
            $file = $request->file('photo5');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/playgrounds/'), $filename);
            $playground['photo5'] = $filename;
        }
        $playground->save();
        if ($request->file('photo6')) {
            $file = $request->file('photo6');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/playgrounds/'), $filename);
            $playground['photo6'] = $filename;
        }
        $playground->save();
        if ($request->file('video')) {
            $file = $request->file('video');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/playgrounds/videos'), $filename);
            $playground['video'] = $filename;
        }
        $playground->save();

        return back()->with('success', 'Camp Site information have been successfully Added.');
    }

    function post_playground_wanted(Request $request)
    {

        $playground = Play_ground::create([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'area' => $request->area,
            'description' => $request->description,
            'generator'=>$request->generator,
            'address' => $request->address,
            'shed' => $request->utilities,
            'toilet' => $request->laundry,
            'change_room' => $request->changing_room,
            'gym' => $request->gym,
            'parking' => $request->parking,
            'sports' => $request->sports,
            'price' => $request->price,
            'active' => 1,
            'created_at'   => Carbon::now()
        ]);

        return back()->with('success', 'Camp Site information have been successfully Added.');
    }

    function list_playground()
    {
        $lists = Play_ground::all();
        $trashed_lists = Play_ground::onlyTrashed()->get();
        return view('Dashboard.play_ground.list_playground', compact('lists', 'trashed_lists'));
    }



    function playground_update(Request $request)
    {

        $playground = Play_ground::findOrFail($request->id)->update([
            'user_id' => $request->user_id,
            'post_type' => $request->post_type,
            'title' => $request->title,
            'date' => $request->date,
            'phone' => $request->phone,
            'description' => $request->description,
            'address' => $request->address,
            'type' => $request->type,
            'shed' => $request->utilities,
            'toilet' => $request->laundry,
            'changing_room' => $request->changing_room,
            'gym' => $request->gym,
            'parking' => $request->parking,
            'sports' => $request->sports,
            'price' => $request->price,

        ]);


        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photoName = date('YmdHi') . 'photo' . '.' . $photo->getClientOriginalExtension();
            if (Play_ground::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/playgrounds/" . $photoName), 100);
                Play_ground::findOrFail($request->id)->update([
                    'photo' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/playgrounds/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/playgrounds/" . $photoName), 100);
            }
        }


        if ($request->hasFile('photo1')) {
            $photo = $request->file('photo1');
            $photoName = date('YmdHi') . 'photo1' . '.' . $photo->getClientOriginalExtension();
            if (Play_ground::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/playgrounds/" . $photoName), 100);
                Play_ground::findOrFail($request->id)->update([
                    'photo1' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/playgrounds/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/playgrounds/" . $photoName), 100);
            }
        }

        if ($request->hasFile('photo2')) {
            $photo = $request->file('photo2');

            $photoName = date('YmdHi') . 'photo2' . '.' . $photo->getClientOriginalExtension();
            if (Play_ground::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/playgrounds/" . $photoName), 100);
                Play_ground::findOrFail($request->id)->update([
                    'photo2' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/playgrounds/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/playgrounds/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo3')) {
            $photo = $request->file('photo3');
            $photoName = date('YmdHi') . 'photo3' . '.' . $photo->getClientOriginalExtension();
            if (Play_ground::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/playgrounds/" . $photoName), 100);
                Play_ground::findOrFail($request->id)->update([
                    'photo3' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/playgrounds/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/playgrounds/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo4')) {
            $photo = $request->file('photo4');
            $photoName = date('YmdHi') . 'photo4' . '.' . $photo->getClientOriginalExtension();
            if (Play_ground::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/playgrounds/" . $photoName), 100);
                Play_ground::findOrFail($request->id)->update([
                    'photo4' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/playgrounds/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/playgrounds/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo5')) {
            $photo = $request->file('photo5');
            $photoName = date('YmdHi') . 'photo5' . '.' . $photo->getClientOriginalExtension();
            if (Play_ground::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/playgrounds/" . $photoName), 100);
                Play_ground::findOrFail($request->id)->update([
                    'photo5' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/playgrounds/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/playgrounds/" . $photoName), 100);
            }
        }
        if ($request->hasFile('photo6')) {
            $photo = $request->file('photo6');
            $photoName = date('YmdHi') . 'photo6' . '.' . $photo->getClientOriginalExtension();
            if (Play_ground::findOrFail($request->id)) {
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/playgrounds/" . $photoName), 100);
                Play_ground::findOrFail($request->id)->update([
                    'photo6' => $photoName,
                ]);
            } else {
                unlink(base_path("public/uploads/playgrounds/" . $photoName));
                Image::make($photo->getRealPath())->resize(800, 800)->save(base_path("public/uploads/playgrounds/" . $photoName), 100);
            }
        }
        return back()->with('success', 'Play ground information have been successfully Updated.');
    }

    function playground_delete($id)
    {
        $list = Play_ground::findOrFail($id)->delete();
        return back();
    }

    function playground_restore($id)
    {
        Play_ground::onlyTrashed()->findOrFail($id)->restore();
        return back();
    }
    //end play ground
}
