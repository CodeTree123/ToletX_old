    <?php

    use App\Http\Controllers\AdvertiseController;
    use App\Http\Controllers\Auth\LoginController;
    use App\Http\Controllers\ChangePasswordController;
    use App\Http\Controllers\CustomSearchController;
    use App\Http\Controllers\DashboardController;
    use App\Http\Controllers\FrontendController;
    use App\Http\Controllers\TestController;
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\UserinformationController;
    use App\Http\Controllers\UserWantedController;
    use Illuminate\Support\Facades\Auth;
    use App\Models\Room;
    use Illuminate\Support\Facades\Artisan;
    /*
    |--------------------------------------------------------------------------
    | Web Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register web routes for your application. These
    | routes are loaded by the RouteServiceProvider within a group which
    | contains the "web" middleware group. Now create something great!
    |
    */
    Route::get('/clear', function () {
        Artisan::call('cache:clear');
    });
    Route::get('/links', function () {
        Artisan::call('storage:link');
    });
    Route::get('/optimize', function () {
        Artisan::call('optimize:clear');
    });
    // login
    Route::post('login_new',  [UserinformationController::class, 'login_new'])->name('newlogin');
    //otp login
    Route::post('loginWithOtp', [UserinformationController::class, 'loginWithOtp'])->name('loginWithOtp');
    Route::get('loginWithOtp', [UserinformationController::class, 'indexotp'])->name('loginotp');
    Route::post('newregister', [UserinformationController::class, 'register'])->name('newregister');
    Route::post('sendOtp', [UserinformationController::class, 'sendOtp'])->name('send.otp');
    Route::get('/logout', [UserinformationController::class, 'logout'])->name('logout');
    //end otp login

    // Google login
    Route::get('login/google', [LoginController::class, 'redirectToGoogle'])->name('login.google');
    Route::get('login/google/callback', [LoginController::class, 'callbackFromGoogle'])->name('google.calback');

    // Facebook login
    Route::get('login/facebook', [LoginController::class, 'redirectToFacebook'])->name('login.facebook');
    Route::get('people/auth/facebook/callback', [LoginController::class, 'handleFacebookCallback']);

    //privacy route
    Route::get('/privacy', [UserinformationController::class, 'privacy'])->name('privacy');
    Route::get('/terms', [UserinformationController::class, 'terms'])->name('terms');
    Route::get('/check', [UserinformationController::class, 'check'])->name('check');
    Route::get('/verify/otp', [UserinformationController::class, 'verifyOtp'])->name('verify.otp');
    Route::get('admin/veriy/{id}', [UserinformationController::class, 'admin_verify'])->name('admin_verify');
    Route::get('delete/user/{id}', [UserinformationController::class, 'delete_user'])->name('delete.user');

    //advertise
    Route::post('advertise', [AdvertiseController::class, 'advertise'])->name('advertise');
    Route::get('get/advertise', [AdvertiseController::class, 'get_add'])->name('get_add');
    //end advertise

    Route::get('autocomplete-search', [CustomSearchController::class, 'autocompleteSearch'])->name('autocomplete');
    Route::get('change-password', [ChangePasswordController::class, 'index'])->name('change_password_form');
    Route::post('change-password', [ChangePasswordController::class, 'store'])->name('change_password');

    //user Rented and wanted post
    Route::get('/post/ghat', [UserWantedController::class, 'post_ghat'])->name('post_ghat'); //modify
    Route::get('/post/picnic', [UserWantedController::class, 'post_picnic'])->name('post_picnic');
    Route::get('/post/bilboard', [UserWantedController::class, 'post_bilboard'])->name('post_bilboard');
    Route::get('/post/hostel', [UserWantedController::class, 'post_hostel'])->name('post_hostel');
    Route::get('/post/office', [UserWantedController::class, 'post_office'])->name('post_office');
    Route::get('/post/resort', [UserWantedController::class, 'post_resort'])->name('post_resort');
    Route::get('/post/community', [UserWantedController::class, 'post_community'])->name('post_community');
    Route::get('/post/shop', [UserWantedController::class, 'post_shop'])->name('post_shop');
    Route::get('/post/factory', [UserWantedController::class, 'post_factory'])->name('post_factory');
    Route::get('/post/warehouse', [UserWantedController::class, 'post_warehouse'])->name('post_warehouse');
    Route::get('/post/land', [UserWantedController::class, 'post_land'])->name('post_land');
    Route::get('/post/pond', [UserWantedController::class, 'post_pond'])->name('post_pond');
    Route::get('/post/swimmingpool', [UserWantedController::class, 'post_swimmingpool'])->name('post_swimmingpool');
    Route::get('/post/playground', [UserWantedController::class, 'post_playground'])->name('post_playground');
    Route::get('/post/shooting', [UserWantedController::class, 'post_shooting'])->name('post_shooting');
    Route::get('/post/exhibution', [UserWantedController::class, 'post_exhibution'])->name('post_exhibution');
    Route::get('/post/rooftop', [UserWantedController::class, 'post_rooftop'])->name('post_rooftop');

    //end Rented and wanted post user


    //begin All Search
    Route::get('/search', [TestController::class, 'search'])->name('search');

    //hostel search
    Route::get('/hostel/details/{id}', [TestController::class, 'hostel_details'])->name('hostel_details');
    Route::get('/hostel/custom/search', [CustomSearchController::class, 'hostel_search'])->name('hostel_search');
    Route::get('/hostel/custom/search/details/{id}', [CustomSearchController::class, 'hostel_custom_details'])->name('hostel_custom_details');
    //end hostel
    Route::get('/bilboard/details/{id}', [TestController::class, 'bilboard_details'])->name('bilboard_details');
    Route::get('/bilboard/custom/search', [CustomSearchController::class, 'bilboard_search'])->name('bilboard_search');
    Route::get('/bilboard/custom/search/details/{id}', [CustomSearchController::class, 'bilboard_custom_details'])->name('bilboard_custom_details');
    //community center search
    Route::get('/community/details/{id}', [TestController::class, 'community_details'])->name('community_details');
    Route::get('/community/custom/search', [CustomSearchController::class, 'community_search'])->name('community_search');
    Route::get('/community/custom/search/details/{id}', [CustomSearchController::class, 'community_custom_details'])->name('community_custom_details');
    //end community center
    Route::get('/factory/custom/search', [CustomSearchController::class, 'factory_search'])->name('factory_search');
    Route::get('/factory/details/{id}', [TestController::class, 'factory_details'])->name('factory_details');


    //land search
    Route::get('/land/details/{id}', [TestController::class, 'land_details'])->name('land_details');
    Route::get('/land/custom/search', [CustomSearchController::class, 'land_search'])->name('land_search');
    Route::get('/land/custom/search/details/{id}', [CustomSearchController::class, 'land_custom_details'])->name('land_custom_details');
    //end land

    //office search
    Route::get('/office/details/{id}', [TestController::class, 'office_details'])->name('office_details');
    Route::get('/office/custom/search', [CustomSearchController::class, 'office_search'])->name('office_search');
    Route::get('/office/custom/search/details/{id}', [CustomSearchController::class, 'office_custom_details'])->name('office_custom_details');
    //end office



    //playground search
    Route::get('/playground/details/{id}', [TestController::class, 'playground_details'])->name('playground_details');
    Route::get('/playground/custom/search', [CustomSearchController::class, 'playground_search'])->name('playground_search');
    Route::get('/playground/custom/search/details/{id}', [CustomSearchController::class, 'playground_custom_details'])->name('playground_custom_details');
    //end playground

    //restaurant search
    Route::get('/restaurant/details/{id}', [TestController::class, 'restaurant_details'])->name('restaurant_details');
    Route::get('/restaurant/custom/search', [CustomSearchController::class, 'restaurant_search'])->name('restaurant_search');
    Route::get('/restaurant/custom/search/details/{id}', [CustomSearchController::class, 'restaurant_custom_details'])->name('restaurant_custom_details');
    //end restaurant

    //rooftop search
    Route::get('/rooftop/details/{id}', [TestController::class, 'rooftop_details'])->name('rooftop_details');
    Route::get('/rooftop/custom/search', [CustomSearchController::class, 'rooftop_search'])->name('rooftop_search');
    Route::get('/rooftop/custom/search/details/{id}', [CustomSearchController::class, 'rooftop_custom_details'])->name('rooftop_custom_details');
    //end rooftop




    //picnic search
    Route::get('/picnic/details/{id}', [TestController::class, 'picnic_details'])->name('picnic_details');
    Route::get('/picnic/custom/search', [CustomSearchController::class, 'picnic_search'])->name('picnic_search');
    Route::get('/picnic/custom/search/details/{id}', [CustomSearchController::class, 'picnic_custom_details'])->name('picnic_custom_details');
    //end picnic

    //picnic search
    Route::get('/ghat/details/{id}', [TestController::class, 'ghat_details'])->name('ghat_details');
    Route::get('/ghat/custom/search', [CustomSearchController::class, 'ghat_search'])->name('ghat_search');
    Route::get('/ghat/custom/search/details/{id}', [CustomSearchController::class, 'ghat_custom_details'])->name('ghat_custom_details');
    //end picnic

    //shooting search
    Route::get('/shooting/details/{id}', [TestController::class, 'shooting_details'])->name('shooting_details');
    Route::get('/shootingspot/custom/search', [CustomSearchController::class, 'shootingspot_search'])->name('shootingspot_search');
    Route::get('/shootingspot/custom/search/details/{id}', [CustomSearchController::class, 'shootingspot_custom_details'])->name('shootingspot_custom_details');
    //end shooting
    //shop search
    Route::get('/shop/details/{id}', [TestController::class, 'shop_details'])->name('shop_details');
    Route::get('/shop/custom/search', [CustomSearchController::class, 'shop_search'])->name('shop_search');
    Route::get('/shop/custom/search/details/{id}', [CustomSearchController::class, 'shop_custom_details'])->name('shop_custom_details');
    //end shop

    //swimmingpool search
    Route::get('/swimmingpool/details/{id}', [TestController::class, 'swimmingpool_details'])->name('swimmingpool_details');
    Route::get('/swimmingpool/custom/search', [CustomSearchController::class, 'swimmingpool_search'])->name('swimmingpool_search');
    Route::get('/swimmingpool/custom/search/details/{id}', [CustomSearchController::class, 'swimmingpool_custom_details'])->name('swimmingpool_custom_details');
    //end swimmingpool

    //warehouse search
    Route::get('/warehouse/details/{id}', [TestController::class, 'warehouse_details'])->name('warehouse_details');
    Route::get('/warehouse/custom/search', [CustomSearchController::class, 'warehouse_search'])->name('warehouse_search');
    Route::get('/warehouse/custom/search/details/{id}', [CustomSearchController::class, 'warehouse_custom_details'])->name('warehouse_custom_details');
    //end warehouse

    //pond search
    Route::get('/pond/details/{id}', [TestController::class, 'pond_details'])->name('pond_details');
    Route::get('/pond/custom/search', [CustomSearchController::class, 'pond_search'])->name('pond_search');
    Route::get('/pond/custom/search/details/{id}', [CustomSearchController::class, 'pond_custom_details'])->name('pond_custom_details');
    //end pond

    //Exibution search
    Route::get('/exibution/details/{id}', [TestController::class, 'exibution_details'])->name('exibution_details');
    Route::get('/exibution/custom/search', [CustomSearchController::class, 'exibution_search'])->name('exibution_search');
    Route::get('/exibution/custom/search/details/{id}', [CustomSearchController::class, 'exibution_custom_details'])->name('exibution_custom_details');
    //end Exibution

    //billboard search
    Route::get('/billboard/details/{id}', [TestController::class, 'billboard_details'])->name('billboard_details');
    Route::get('/billboard/custom/search', [CustomSearchController::class, 'billboard_search'])->name('billboard_search');
    // Route::get('/billboard/custom/search/details/{id}',[CustomSearchController::class, 'exibution_custom_details'])->name('exibution_custom_details');
    //end billboard search

    //end All Search


    Auth::routes(["verify" => true]);





    //begin admin Dashboard
    Route::get('/admin/index', [DashboardController::class, 'admin_index'])->name('admin_index');
    //user profile update
    Route::get('/list/user', [UserinformationController::class, 'list_user'])->name('list_user');
    Route::get('/user/edit/{id}', [UserinformationController::class, 'user_edit'])->name('user_edit');
    Route::post('/user/update', [UserinformationController::class, 'user_update'])->name('user_update');
    Route::get('user/bilboard/edit/{id}', [FrontendController::class, 'user_bilboard_edit'])->name('user_bilboard_edit');
    Route::get('user/community/edit/{id}', [FrontendController::class, 'user_community_edit'])->name('user_community_edit');
    Route::get('user/exibution/edit/{id}', [FrontendController::class, 'user_exhibution_edit'])->name('user_exhibution_edit');
    Route::get('user/factory/edit/{id}', [FrontendController::class, 'user_factory_edit'])->name('user_factory_edit');
    Route::get('user/hostel/edit/{id}', [FrontendController::class, 'user_hostel_edit'])->name('user_hostel_edit');
    Route::get('user/office/edit/{id}', [FrontendController::class, 'user_office_edit'])->name('user_office_edit');
    Route::get('user/playground/edit/{id}', [FrontendController::class, 'user_playground_edit'])->name('user_playground_edit');
    Route::get('user/pond/edit/{id}', [FrontendController::class, 'user_pond_edit'])->name('user_pond_edit');
    Route::get('user/resort/edit/{id}', [FrontendController::class, 'user_resort_edit'])->name('user_resort_edit');
    Route::get('user/rooftop/edit/{id}', [FrontendController::class, 'user_rooftop_edit'])->name('user_rooftop_edit');
    Route::get('user/shooting/edit/{id}', [FrontendController::class, 'user_shooting_edit'])->name('user_shooting_edit');
    Route::get('user/shop/edit/{id}', [FrontendController::class, 'user_shop_edit'])->name('user_shop_edit');
    Route::get('user/swimming/edit/{id}', [FrontendController::class, 'user_swimming_edit'])->name('user_swimming_edit');
    Route::get('user/land/edit/{id}', [FrontendController::class, 'user_land_edit'])->name('user_land_edit');
    Route::get('user/warehouse/edit/{id}', [FrontendController::class, 'user_warehouse_edit'])->name('user_warehouse_edit');
    //end
    //begin hotel
    Route::get('/hotel', [FrontendController::class, 'hotel'])->name('hotel');
    Route::get('/post/hotel', [UserWantedController::class, 'post_hotel'])->name('post_hotel');
    Route::get('/hotel/details/{id}', [TestController::class, 'hotel_details'])->name('hotel_details');
    Route::get('/hotel/custom/search', [CustomSearchController::class, 'hotel_search'])->name('hotel_search');
    Route::get('/hotel/custom/search/details/{id}', [CustomSearchController::class, 'hotel_custom_details'])->name('hotel_custom_details');
    Route::get('user/hotel/edit/{id}', [FrontendController::class, 'user_hotel_edit'])->name('user_hotel_edit');
    Route::post('/post/hotel/rented', [DashboardController::class, 'post_hotel_rented'])->name('post_hotel_rented');
    Route::post('/post/hotel/wanted', [DashboardController::class, 'post_hotel_wanted'])->name('post_hotel_wanted');
    Route::get('/list/hotel', [DashboardController::class, 'list_hotel'])->name('list_hotel');
    Route::post('/hotel/update', [DashboardController::class, 'hotel_update'])->name('hotel_update');
    Route::get('/hotel/delete/{id}', [DashboardController::class, 'hotel_delete'])->name('hotel_delete');
    Route::get('/hotel/restore/{id}', [DashboardController::class, 'hotel_restore'])->name('hotel_restore');
    //end hotel

    //begin room
    Route::get('/room', [FrontendController::class, 'room'])->name('room');
    Route::get('/room/custom/search', [CustomSearchController::class, 'room_search'])->name('room_search');
    Route::get('/room/custom/search/details/{id}', [CustomSearchController::class, 'room_custom_details'])->name('room_custom_details');
    Route::get('/post/room', [UserWantedController::class, 'post_room'])->name('post_room'); //m
    Route::post('/post/room/rented', [DashboardController::class, 'post_room_rented'])->name('post_room_rented');
    Route::post('/post/room/wanted', [DashboardController::class, 'post_room_wanted'])->name('post_room_wanted');
    Route::get('/room/details/{id}', [TestController::class, 'room_details'])->name('room_details');
    Route::get('user/room/edit/{id}', [FrontendController::class, 'user_room_edit'])->name('user_room_edit');
    Route::get('/list/room', [DashboardController::class, 'list_room'])->name('list_room');
    Route::post('/room/update', [DashboardController::class, 'room_update'])->name('room_update');
    Route::get('/room/delete/{id}', [DashboardController::class, 'room_delete'])->name('room_delete');
    Route::get('/room/restore/{id}', [DashboardController::class, 'room_restore'])->name('room_restore');

    //end room


    //begin flat
    Route::get('/list/flat', [DashboardController::class, 'list_flat'])->name('list_flat');
    Route::post('/post/flat/rented', [DashboardController::class, 'post_flat_rented'])->name('post_flat_rented');
    Route::post('/post/flat/wanted', [DashboardController::class, 'post_flat_wanted'])->name('post_flat_wanted');
    Route::get('/flat/details/{id}', [TestController::class, 'flat_details'])->name('flat_details');
    Route::get('/flat/custom/search', [CustomSearchController::class, 'flat_search'])->name('flat_search');
    Route::get('/flat/custom/search/details/{id}', [CustomSearchController::class, 'flat_custom_details'])->name('flat_custom_details');
    Route::get('/post/flat', [UserWantedController::class, 'post_flat'])->name('post_flat'); //modify
    Route::get('/flat', [FrontendController::class, 'flat'])->name('flat');
    Route::post('/flat/update', [DashboardController::class, 'flat_update'])->name('flat_update');
    Route::get('/flat/delete/{id}', [DashboardController::class, 'flat_delete'])->name('flat_delete');
    Route::get('/flat/restore/{id}', [DashboardController::class, 'flat_restore'])->name('flat_restore');
    Route::get('user/flat/edit/{id}', [FrontendController::class, 'user_flat_edit'])->name('user_flat_edit');
    //end flat

    //begin ghat
    Route::get('/add/ghat', [DashboardController::class, 'add_ghat'])->name('add_ghat');
    Route::get('/list/ghat', [DashboardController::class, 'list_ghat'])->name('list_ghat');
    Route::post('/post/ghat/rented', [DashboardController::class, 'post_ghat_rented'])->name('post_ghat_rented');
    Route::post('/post/ghat/wanted', [DashboardController::class, 'post_ghat_wanted'])->name('post_ghat_wanted');

    Route::post('/ghat/update', [DashboardController::class, 'ghat_update'])->name('ghat_update');
    Route::get('/ghat/delete/{id}', [DashboardController::class, 'ghat_delete'])->name('ghat_delete');
    Route::get('/ghat/restore/{id}', [DashboardController::class, 'ghat_restore'])->name('ghat_restore');
    //end ghat

    //begin picnic
    Route::get('/add/picnic', [DashboardController::class, 'add_picnic'])->name('add_picnic');
    Route::get('/list/picnic', [DashboardController::class, 'list_picnic'])->name('list_picnic');
    Route::post('/post/picnic/rented', [DashboardController::class, 'post_picnic_rented'])->name('post_picnic_rented');
    Route::post('/post/picnic/wanted', [DashboardController::class, 'post_picnic_wanted'])->name('post_picnic_wanted');
    Route::post('/picnic/update', [DashboardController::class, 'picnic_update'])->name('picnic_update');
    Route::get('/picnic/delete/{id}', [DashboardController::class, 'picnic_delete'])->name('picnic_delete');
    Route::get('/picnic/restore/{id}', [DashboardController::class, 'picnic_restore'])->name('picnic_restore');
    //end picnic

    //begin building
    Route::get('/list/building', [DashboardController::class, 'list_buildingt'])->name('list_building');
    Route::post('/post/building/rented', [DashboardController::class, 'post_building_rented'])->name('post_building_rented');
    Route::post('/post/building/wanted', [DashboardController::class, 'post_building_wanted'])->name('post_building_wanted');
    Route::post('/building/update', [DashboardController::class, 'building_update'])->name('building_update');
    Route::get('/building/delete/{id}', [DashboardController::class, 'building_delete'])->name('building_delete');
    Route::get('/building/restore/{id}', [DashboardController::class, 'building_restore'])->name('building_restore');
    Route::get('/post/building', [UserWantedController::class, 'post_building'])->name('post_building');
    Route::get('/building', [FrontendController::class, 'building'])->name('building');
    Route::get('/building/details/{id}', [TestController::class, 'building_details'])->name('building_details');
    Route::get('/building/custom/search', [CustomSearchController::class, 'building_search'])->name('building_search');
    Route::get('/building/custom/search/details/{id}', [CustomSearchController::class, 'building_custom_details'])->name('building_custom_details');
    Route::get('user/building/edit/{id}', [FrontendController::class, 'user_building_edit'])->name('user_building_edit');
    //end

    //begin parking spot
    Route::get('/list/parking', [DashboardController::class, 'list_parking_spot'])->name('list_parking_spot');
    Route::post('/post/parking/rented', [DashboardController::class, 'post_parking_spot_rented'])->name('post_parking_spot_rented');
    Route::post('/post/parking/wanted', [DashboardController::class, 'post_parking_spot_wanted'])->name('post_parking_spot_wanted');
    Route::post('/parking/update', [DashboardController::class, 'parking_spot_update'])->name('parking_spot_update');
    Route::get('/parking/delete/{id}', [DashboardController::class, 'parking_spot_delete'])->name('parking_spot_delete');
    Route::get('/parking/restore/{id}', [DashboardController::class, 'parking_spot_restore'])->name('parking_spot_restore');
    Route::get('/post/parking', [UserWantedController::class, 'post_parking_spot'])->name('post_parking_spot');
    Route::get('/parking/details/{id}', [TestController::class, 'parking_details'])->name('parking_details');
    Route::get('/parking/custom/search', [CustomSearchController::class, 'parking_spot_search'])->name('parking_spot_search');
    Route::get('/parking/custom/search/details/{id}', [CustomSearchController::class, 'parking_spot_custom_details'])->name('parking_spot_custom_details');
    Route::get('user/parking/edit/{id}', [FrontendController::class, 'user_parking_edit'])->name('user_parking_edit');
    //end parking spot

    //begin hostel
    Route::get('/list/hostel', [DashboardController::class, 'list_hostel'])->name('list_hostel');
    Route::get('/add/hostel', [DashboardController::class, 'add_hostel'])->name('add_hostel');
    Route::post('/post/hostel/rented', [DashboardController::class, 'post_hostel_rented'])->name('post_hostel_rented');
    Route::post('/post/hostel/wented', [DashboardController::class, 'post_hostel_wanted'])->name('post_hostel_wanted');
    Route::get('/hostel/delete/{id}', [DashboardController::class, 'hostel_delete'])->name('hostel_delete');
    Route::get('/hostel/restore/{id}', [DashboardController::class, 'hostel_restore'])->name('hostel_restore');
    Route::post('/hostel/update', [DashboardController::class, 'hostel_update'])->name('hostel_update');

    //end hostel

    //begin office
    Route::get('/add/office', [DashboardController::class, 'add_office'])->name('add_office');
    Route::get('/list/office', [DashboardController::class, 'list_office'])->name('list_office');
    Route::post('/post/office/rented', [DashboardController::class, 'post_office_rented'])->name('post_office_rented');
    Route::post('/post/office/wanted', [DashboardController::class, 'post_office_wanted'])->name('post_office_wanted');
    Route::post('/office/update', [DashboardController::class, 'office_update'])->name('office_update');
    Route::get('/office/delete/{id}', [DashboardController::class, 'office_delete'])->name('office_delete');
    Route::get('/office/restore/{id}', [DashboardController::class, 'office_restore'])->name('office_restore');
    //end office

    //begin Land
    Route::get('/add/land', [DashboardController::class, 'add_land'])->name('add_land');
    Route::get('/list/land', [DashboardController::class, 'list_land'])->name('list_land');
    Route::post('/post/land/rented', [DashboardController::class, 'post_land_rented'])->name('post_land_rented');
    Route::post('/post/land/wanted', [DashboardController::class, 'post_land_wanted'])->name('post_land_wanted');
    Route::post('/land/update', [DashboardController::class, 'land_update'])->name('land_update');
    Route::get('/land/delete/{id}', [DashboardController::class, 'land_delete'])->name('land_delete');
    Route::get('/land/restore/{id}', [DashboardController::class, 'land_restore'])->name('land_restore');
    //end Land

    //begin community center
    Route::get('/add/community', [DashboardController::class, 'add_community'])->name('add_community');
    Route::get('/list/community', [DashboardController::class, 'list_community'])->name('list_community');
    Route::post('/post/community/rented', [DashboardController::class, 'post_community_rented'])->name('post_community_rented');
    Route::post('/post/community/wanted', [DashboardController::class, 'post_community_wanted'])->name('post_community_wanted');
    Route::post('/community/update', [DashboardController::class, 'community_update'])->name('community_update');
    Route::get('/community/delete/{id}', [DashboardController::class, 'community_delete'])->name('community_delete');
    Route::get('/community/restore/{id}', [DashboardController::class, 'community_restore'])->name('community_restore');
    //end community center

    //begin shooting spot
    Route::get('/add/shooting', [DashboardController::class, 'add_shooting'])->name('add_shooting');
    Route::get('/list/shooting', [DashboardController::class, 'list_shooting'])->name('list_shooting');
    Route::post('/post/shooting/rented', [DashboardController::class, 'post_shooting_rented'])->name('post_shooting_rented');
    Route::post('/post/shooting/wanted', [DashboardController::class, 'post_shooting_wanted'])->name('post_shooting_wanted');
    Route::post('/shooting/update', [DashboardController::class, 'shooting_update'])->name('shooting_update');
    Route::get('/shooting/delete/{id}', [DashboardController::class, 'shooting_delete'])->name('shooting_delete');
    Route::get('/shooting/restore/{id}', [DashboardController::class, 'shooting_restore'])->name('shooting_restore');
    //end shooting spot

    //begin shop
    Route::get('/add/shop', [DashboardController::class, 'add_shop'])->name('add_shop');
    Route::get('/list/shop', [DashboardController::class, 'list_shop'])->name('list_shop');
    Route::post('/post/shop/rented', [DashboardController::class, 'post_shop_rented'])->name('post_shop_rented');
    Route::post('/post/shop/wanted', [DashboardController::class, 'post_shop_wanted'])->name('post_shop_wanted');
    Route::post('/shop/update', [DashboardController::class, 'shop_update'])->name('shop_update');
    Route::get('/shop/delete/{id}', [DashboardController::class, 'shop_delete'])->name('shop_delete');
    Route::get('/shop/restore/{id}', [DashboardController::class, 'shop_restore'])->name('shop_restore');
    //end shop

    //begin factory
    Route::get('/add/factory', [DashboardController::class, 'add_factory'])->name('add_factory');
    Route::get('/list/factory', [DashboardController::class, 'list_factory'])->name('list_factory');
    Route::post('/post/factory/rented', [DashboardController::class, 'post_factory_rented'])->name('post_factory_rented');
    Route::post('/post/factory/wanted', [DashboardController::class, 'post_factory_wanted'])->name('post_factory_wanted');
    Route::post('/factory/update', [DashboardController::class, 'factory_update'])->name('factory_update');
    Route::get('/factory/delete/{id}', [DashboardController::class, 'factory_delete'])->name('factory_delete');
    Route::get('/factory/restore/{id}', [DashboardController::class, 'factory_restore'])->name('factory_restore');
    //end factory

    //begin warehouse
    Route::get('/add/warehouse', [DashboardController::class, 'add_warehouse'])->name('add_warehouse');
    Route::get('/list/warehouse', [DashboardController::class, 'list_warehouse'])->name('list_warehouse');
    Route::post('/post/warehouse/rented', [DashboardController::class, 'post_warehouse_rented'])->name('post_warehouse_rented');
    Route::post('/post/warehouse/wanted', [DashboardController::class, 'post_warehouse_wanted'])->name('post_warehouse_wanted');
    Route::post('/warehouse/update', [DashboardController::class, 'warehouse_update'])->name('warehouse_update');
    Route::get('/warehouse/delete/{id}', [DashboardController::class, 'warehouse_delete'])->name('warehouse_delete');
    Route::get('/warehouse/restore/{id}', [DashboardController::class, 'warehouse_restore'])->name('warehouse_restore');
    //end warehouse

    //begin pond
    Route::get('/add/pond', [DashboardController::class, 'add_pond'])->name('add_pond');
    Route::get('/list/pond', [DashboardController::class, 'list_pond'])->name('list_pond');
    Route::post('/post/pond/rented', [DashboardController::class, 'post_pond_rented'])->name('post_pond_rented');
    Route::post('/post/pond/wanted', [DashboardController::class, 'post_pond_wanted'])->name('post_pond_wanted');
    Route::post('/pond/update', [DashboardController::class, 'pond_update'])->name('pond_update');
    Route::get('/pond/delete/{id}', [DashboardController::class, 'pond_delete'])->name('pond_delete');
    Route::get('/pond/restore/{id}', [DashboardController::class, 'pond_restore'])->name('pond_restore');
    //end pond

    //begin swimmingpool
    Route::get('/add/swimmingpool', [DashboardController::class, 'add_swimmingpool'])->name('add_swimmingpool');
    Route::get('/list/swimmingpool', [DashboardController::class, 'list_swimmingpool'])->name('list_swimmingpool');
    Route::post('/post/swimmingpool/rented', [DashboardController::class, 'post_swimmingpool_rented'])->name('post_swimmingpool_rented');
    Route::post('/post/swimmingpool/wanted', [DashboardController::class, 'post_swimmingpool_wanted'])->name('post_swimmingpool_wanted');
    Route::post('/swimmingpool/update', [DashboardController::class, 'swimmingpool_update'])->name('swimmingpool_update');
    Route::get('/swimmingpool/delete/{id}', [DashboardController::class, 'swimmingpool_delete'])->name('swimmingpool_delete');
    Route::get('/swimmingpool/restore/{id}', [DashboardController::class, 'swimmingpool_restore'])->name('swimmingpool_restore');
    //end swimmingpool

    //begin Bilboard
    Route::get('/add/bilboard', [DashboardController::class, 'add_bilboard'])->name('add_bilboard');
    Route::get('/list/bilboard', [DashboardController::class, 'list_bilboard'])->name('list_bilboard');
    Route::post('/post/bilboard/rented', [DashboardController::class, 'post_bilboard_rented'])->name('post_bilboard_rented');
    Route::post('/post/bilboard/wanted', [DashboardController::class, 'post_bilboard_wanted'])->name('post_bilboard_wanted');
    Route::post('/bilboard/update', [DashboardController::class, 'bilboard_update'])->name('bilboard_update');
    Route::get('/bilboard/delete/{id}', [DashboardController::class, 'bilboard_delete'])->name('bilboard_delete');
    Route::get('/bilboard/restore/{id}', [DashboardController::class, 'bilboard_restore'])->name('bilboard_restore');
    //end bilboard

    //begin rooftop
    Route::get('/add/rooftop', [DashboardController::class, 'add_rooftop'])->name('add_rooftop');
    Route::get('/list/rooftop', [DashboardController::class, 'list_rooftop'])->name('list_rooftop');
    Route::post('/post/rooftop/rented', [DashboardController::class, 'post_rooftop_rented'])->name('post_rooftop_rented');
    Route::post('/post/rooftop/wanted', [DashboardController::class, 'post_rooftop_wanted'])->name('post_rooftop_wanted');
    Route::post('/rooftop/update', [DashboardController::class, 'rooftop_update'])->name('rooftop_update');
    Route::get('/rooftop/delete/{id}', [DashboardController::class, 'rooftop_delete'])->name('rooftop_delete');
    Route::get('/rooftop/restore/{id}', [DashboardController::class, 'rooftop_restore'])->name('rooftop_restore');
    //end rooftop

    //begin restuarant
    Route::get('/add/restuarant', [DashboardController::class, 'add_restuarant'])->name('add_restuarant');
    Route::get('/list/restuarant', [DashboardController::class, 'list_restuarant'])->name('list_restuarant');
    Route::post('/post/restuarant/rented', [DashboardController::class, 'post_restuarant_rented'])->name('post_restuarant_rented');
    Route::post('/post/restuarant/wanted', [DashboardController::class, 'post_restuarant_wanted'])->name('post_restuarant_wanted');
    Route::post('/restuarant/update', [DashboardController::class, 'restuarant_update'])->name('restuarant_update');
    Route::get('/restuarant/delete/{id}', [DashboardController::class, 'restuarant_delete'])->name('restuarant_delete');
    Route::get('/restuarant/restore/{id}', [DashboardController::class, 'restuarant_restore'])->name('restuarant_restore');
    //end restuarant

    //begin playground
    Route::get('/add/playground', [DashboardController::class, 'add_playground'])->name('add_playground');
    Route::get('/list/playground', [DashboardController::class, 'list_playground'])->name('list_playground');
    Route::post('/post/playground/rented', [DashboardController::class, 'post_playground_rented'])->name('post_playground_rented');
    Route::post('/post/playground/wanted', [DashboardController::class, 'post_playground_wanted'])->name('post_playground_wanted');
    Route::post('/playground/update', [DashboardController::class, 'playground_update'])->name('playground_update');
    Route::get('/playground/delete/{id}', [DashboardController::class, 'playground_delete'])->name('playground_delete');
    Route::get('/playground/restore/{id}', [DashboardController::class, 'playground_restore'])->name('playground_restore');
    //end playground

    //begin exibutioncenter
    Route::get('/add/exibution_center', [DashboardController::class, 'add_exibution_center'])->name('add_exibution_center');
    Route::get('/list/exibution_center', [DashboardController::class, 'list_exibution_center'])->name('list_exibution_center');
    Route::post('/post/exibution_center/wanted', [DashboardController::class, 'post_exibution_center_wanted'])->name('post_exibution_center_wanted');
    Route::post('/post/exibution_center/rented', [DashboardController::class, 'post_exibution_center_rented'])->name('post_exibution_center_rented');
    Route::post('/exibutioncenter/update', [DashboardController::class, 'exibution_center_update'])->name('exibution_center_update');
    Route::get('/exibutioncenter/delete/{id}', [DashboardController::class, 'exibution_center_delete'])->name('exibution_center_delete');
    Route::get('/exibutioncenter/restore/{id}', [DashboardController::class, 'exibution_center_restore'])->name('exibution_center_restore');
    //end exibutioncenter



    //begin Frontend

    Route::get('/', [FrontendController::class, 'index'])->name('index');
    Route::get('/registration', [FrontendController::class, 'registration'])->name('registration');
    Route::get('/single_header_added', [FrontendController::class, 'single_header_added'])->name('single_header_added');
    Route::get('/header', [FrontendController::class, 'header'])->name('header');
    Route::get('/footer', [FrontendController::class, 'footer'])->name('footer');
    Route::get('/faq', [FrontendController::class, 'faq'])->name('faq');
    Route::get('/report_contact_us', [FrontendController::class, 'report_contact_us'])->name('report_contact_us');
    Route::get('/advertise', [FrontendController::class, 'advertise'])->name('advertise');
    Route::get('/my_shortlist', [FrontendController::class, 'my_shortlist'])->Middleware('auth')->name('my_shortlist');
    Route::get('/profile', [FrontendController::class, 'profile'])->name('profile');
    Route::get('/parking', [FrontendController::class, 'parking'])->name('parking');
    Route::get('/hostel', [FrontendController::class, 'hostel'])->name('hostel');
    Route::get('/resort', [FrontendController::class, 'resort'])->name('resort');
    Route::get('/office', [FrontendController::class, 'office'])->name('office');
    Route::get('/shop', [FrontendController::class, 'shop'])->name('shop');
    Route::get('/community_hall', [FrontendController::class, 'community_hall'])->name('community_hall');
    Route::get('/factory', [FrontendController::class, 'factory'])->name('factory');
    Route::get('/warehouse', [FrontendController::class, 'warehouse'])->name('warehouse');
    Route::get('/land', [FrontendController::class, 'land'])->name('land');
    Route::get('/pond', [FrontendController::class, 'pond'])->name('pond');
    Route::get('/swimming_pool', [FrontendController::class, 'swimming_pool'])->name('swimming_pool');
    Route::get('/playground', [FrontendController::class, 'playground'])->name('playground');
    Route::get('/shooting_spot', [FrontendController::class, 'shooting_spot'])->name('shooting_spot');
    Route::get('/exhibition_center', [FrontendController::class, 'exhibition_center'])->name('exhibition_center');
    Route::get('/rooftop', [FrontendController::class, 'rooftop'])->name('rooftop');
    Route::get('/bilboard', [FrontendController::class, 'bilboard'])->name('bilboard');
    Route::get('/picnic_spot', [FrontendController::class, 'picnic_spot'])->name('picnic_spot');
    Route::get('/ghat', [FrontendController::class, 'ghat'])->name('ghat');
    Route::get('/package', [FrontendController::class, 'package'])->name('package');


    //end Frontend
    //end Ad
