<?php

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

// use Illuminate\Routing\Route;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\WebsiteController;


Route::get('command', function () {
    \Illuminate\Support\Facades\Artisan::call('app:rets-images');
});



Route::get('update/image/status', function () {
    $properties = \App\Models\Property::whereIn('listing_numeric_key', ["58696631", "68587219", "68688644", "68750943", "75313463", "77205904", "78715490", "79112772", "79158300", "79382221", "79477538", "79607186", "79651959", "79687804", "79796765", "79874390", "80031682", "80090904", "80119988", "80354259", "80370475", "80567737", "80703144", "80769460", "80784868", "80796110", "80812722", "80850657", "80879315", "80912101", "80995924", "81008390", "81082360", "81094063", "81214088", "81223594", "81260891", "81281510", "81308101", "81311861", "81436583", "81470434", "81628260", "81693759", "81695367", "81798186", "81808689", "82013528", "82070356", "82086987", "82119991", "82202467", "82306508", "82315501", "82434602", "82435123", "82478645", "82494062", "82561679", "82597303", "82609057", "82612486", "82648660", "83453672", "83460651", "83478610", "83484011", "83521398", "83565964", "83570202", "83626048", "83635038", "83643736", "83644777", "83658680", "83680740", "83694389", "83805155", "83822370", "83863961", "83870165", "83893186", "83893509", "83975573", "84042508", "84068350", "84072416", "84173374", "84189509", "84193513", "84194191", "84238464", "84244210", "84283903", "84383861", "84411064", "84448586", "84451271", "84483509", "84535955", "84600916", "84606504", "84644607", "84669522", "84670995", "84701997", "84735569", "84743668", "84802161", "84828267", "84828688", "84831106", "84925655", "84978051", "84998539", "85049940", "85053799", "85079908", "85097818", "85145476", "85148690", "85149861", "85206012", "85210307", "85210309", "85216014", "85218101", "85264859", "85283131", "85291703", "85347281", "85356447", "85384302", "85400984", "85409649", "85441564", "85442537", "85450151", "85464434", "85472547", "85494413", "85525618", "85546578", "85554293", "85557300", "85568672", "85580621", "85590439", "85609584", "85609801", "85610636", "85617473", "85624569", "85624947", "85640773", "85642592", "85670368", "85681517", "85704373", "85704726", "85732377", "85740096", "85745190", "85754971", "85755959", "85761129", "85766474", "85773493", "85773840", "85782883", "85787101", "85788878", "85796137", "85798630", "85804596", "85814039", "85818276", "85820444", "85838199", "85838201", "85838436", "85845558", "85851667", "85874817", "85876243", "85884505", "85893866", "85895810", "85906189", "85906517", "85906794", "85915240", "85935208", "85941891", "85948279", "85962212", "85969002", "85969519", "85970665", "85974355", "85986979", "85992985", "85999937", "86016189", "86024734", "86025284", "86030310", "86032075", "86035373", "86036084", "86038009", "86042450", "86057185", "86061025", "86064208", "86065243", "86080847", "86089893", "86091031", "86094950", "86097251", "86105382", "86108637", "86116597", "86116970", "86128318", "86128540", "86133580", "86140477", "86154157", "86162231", "86169768", "86175495", "86178318", "86188638", "86189550", "86195414", "86202615", "86216611", "86220272", "86220274", "86221663", "86221722", "86250983", "86261675", "86273278", "86278619", "86288811", "86290681", "86305302", "86306835", "86307391", "86308928", "86312956", "86314212", "86328289", "86343242", "86346871", "86348546", "86350937", "86360623", "86361456", "86361890", "86361892", "86369376", "86379901", "86383217", "86392815", "86392948", "86401196", "86402294", "86403563", "86404741", "86416695", "86429914", "86431941", "86432758", "86442075", "86444681", "86451667", "86451915", "86457459", "86457690", "86460552", "86460755", "86462265", "86470853", "86472107", "86498103", "86511435", "86518524", "86519068", "86521804", "86521893", "86525646", "86525858", "86532305", "86534258", "86535606", "86541225", "86554789", "86556634", "86556961", "86561128", "86577630", "86577737", "86577738", "86584792", "86598194", "86620908", "86675936", "86685340", "86693124", "86696251", "86704916", "86712681", "86742889", "86757955", "86789448", "86803438", "86918434", "86922965", "86959491", "87117807", "86973614", "87418897", "87405455", "87310461", "87480257", "87567170", "87595315"])->update(['image_status' => 0]);
    dd('done');
});






Route::get('rooms/details', function () {
    $config = new \PHRETS\Configuration;
    $config->setLoginUrl('https://matrixrets.pillarnine.com/rets/login.ashx')
        ->setUsername('RKHEMKAPR')
        ->setPassword('_pY2.dxKxu')
        ->setRetsVersion('1.7.2');
    $rets = new \PHRETS\Session($config);
    $connect = $rets->Login();
    $properties = \App\Models\Property::select('listing_numeric_key')->get();
    foreach ($properties as $k => $property) {
        $result = $rets->Search('PropertyRooms', 'PropertyRooms', '(ListingKeyNumeric=' . $property->listing_numeric_key . ')', ['Select' => '*']);
        $propertyRoomDetails = new \App\Models\PropertyRoomDetail;
        $propertyRoomDetails->property_numeric_key = $property->listing_numeric_key;
        $propertyRoomDetails->description = $result->toJSON();
        $propertyRoomDetails->save();
    }
    dd('done');
});




Route::get('rets', function () {
    $config = new \PHRETS\Configuration;
    $config->setLoginUrl('https://matrixrets.pillarnine.com/rets/login.ashx')
        ->setUsername('RKHEMKAPR')
        ->setPassword('_pY2.dxKxu')
        ->setRetsVersion('1.7.2');
    $rets = new \PHRETS\Session($config);
    $connect = $rets->Login();
    //    $result = $rets->Search('Property','Property','(PropertyType=RESI) AND (City=0046)',['Select' => '*']);
    $result = $rets->Search('Property', 'Property', '(PropertyType=RESI) AND (StateOrProvince=AB) AND (MlsStatus=A)', ['Select' => '*', 'Limit' => 1000, 'Offset' => 1]);
    dd($result->first()->toArray());
    //    $result = $rets->Search('Media','Media','(ListingKeyNumeric=68688644,75313463)',['Select' => '*','Limit'=>100,'Offset'=>1]);
    //    $result = $rets->Search('PropertyRooms','PropertyRooms','(ListingKeyNumeric=68688644)',['Select' => '*','Limit'=>1000,'Offset'=>1]);
    foreach ($result as $k => $singleResult) {
        try {
            $singlePropertyArray = collect(array_change_key_case($singleResult->toArray(), CASE_LOWER))
                ->map(function ($value) {
                    return $value === "" ? null : $value;
                })->all();
            $propertyModel = \Modules\Admin\Entities\Property::firstOrNew(['listing_id' => $singlePropertyArray['listingkeynumeric']]);
            $propertyModel->listing_numeric_key = $singlePropertyArray['listingkeynumeric'];
            $propertyModel->accessibility_features = $singlePropertyArray['accessibilityfeatures'];
            $propertyModel->accessto_property = $singlePropertyArray['accesstoproperty'];
            $propertyModel->acreage_yn = $singlePropertyArray['acreageyn'];
            $propertyModel->acres_fenced = $singlePropertyArray['acresfenced'];
            $propertyModel->acres_pasture = $singlePropertyArray['acrespasture'];
            $propertyModel->additional_cost_amount = $singlePropertyArray['additionalcostamount'];
            $propertyModel->additional_parcels_yn = $singlePropertyArray['additionalparcelsyn'];
            $propertyModel->addl_costs_payment_freq = $singlePropertyArray['addlcostspaymentfreq'];
            $propertyModel->appliances = $singlePropertyArray['appliances'];
            $propertyModel->architectural_style = $singlePropertyArray['architecturalstyle'];
            $propertyModel->association2_yn = $singlePropertyArray['association2yn'];
            $propertyModel->association_amenities = $singlePropertyArray['associationamenities'];
            $propertyModel->association_fee = $singlePropertyArray['associationfee'];
            $propertyModel->association_fee2 = $singlePropertyArray['associationfee2'];
            $propertyModel->association_fee2_frequency = $singlePropertyArray['associationfee2frequency'];
            $propertyModel->association_fee_frequency = $singlePropertyArray['associationfeefrequency'];
            $propertyModel->association_fee_includes = $singlePropertyArray['associationfeeincludes'];
            $propertyModel->association_yn = $singlePropertyArray['associationyn'];
            $propertyModel->availability_date = \Carbon\Carbon::parse($singlePropertyArray['availabilitydate'])->format('Y-m-d H:i:s');
            $propertyModel->based_on_year = $singlePropertyArray['basedonyear'];
            $propertyModel->basement = $singlePropertyArray['basement'];
            $propertyModel->bathrooms_full = $singlePropertyArray['bathroomsfull'];
            $propertyModel->bathrooms_half = $singlePropertyArray['bathroomshalf'];
            $propertyModel->bathrooms_total_integer = $singlePropertyArray['bathroomstotalinteger'];
            $propertyModel->bedrms_above_grade = $singlePropertyArray['bedrmsabovegrade'];
            $propertyModel->bedrooms_below_grade = $singlePropertyArray['bedroomsbelowgrade'];
            $propertyModel->bedrooms_total = $singlePropertyArray['bedroomstotal'];
            $propertyModel->below_grade_finished_area = $singlePropertyArray['belowgradefinishedarea'];
            $propertyModel->below_grade_finished_area_units = $singlePropertyArray['belowgradefinishedareaunits'];
            $propertyModel->builder_name = $singlePropertyArray['buildername'];
            $propertyModel->building_area_total = $singlePropertyArray['buildingareatotal'];
            $propertyModel->building_area_total_metres = $singlePropertyArray['buildingareatotalmetres'];
            $propertyModel->building_area_total_sf = $singlePropertyArray['buildingareatotalsf'];
            $propertyModel->building_name = $singlePropertyArray['buildingname'];
            $propertyModel->building_type = $singlePropertyArray['buildingtype'];
            $propertyModel->buildings_list = $singlePropertyArray['buildingslist'];
            $propertyModel->business_name = $singlePropertyArray['businessname'];
            $propertyModel->business_price_includes = $singlePropertyArray['businesspriceincludes'];
            $propertyModel->business_type = $singlePropertyArray['businesstype'];
            $propertyModel->business_yn = $singlePropertyArray['businessyn'];
            $propertyModel->buyer_office_aor = $singlePropertyArray['buyerofficeaor'];
            $propertyModel->carport_spaces = $singlePropertyArray['carportspaces'];
            $propertyModel->city = $singlePropertyArray['city'];
            $propertyModel->clear_ceiling_ht_feet = $singlePropertyArray['clearceilinghtfeet'];
            $propertyModel->co_buyer_office_aor = $singlePropertyArray['cobuyerofficeaor'];
            $propertyModel->co_list_agent_direct_phone = $singlePropertyArray['colistagentdirectphone'];
            $propertyModel->co_list_agent_email = $singlePropertyArray['colistagentemail'];
            $propertyModel->co_list_agent_full_name = $singlePropertyArray['colistagentfullname'];
            $propertyModel->co_list_agent_key_numeric = $singlePropertyArray['colistagentkeynumeric'];
            $propertyModel->co_list_agent_mls_id = $singlePropertyArray['colistagentmlsid'];
            $propertyModel->co_list_agent_mobile_phone = $singlePropertyArray['colistagentmobilephone'];
            $propertyModel->co_list_agent_national_association_id = $singlePropertyArray['colistagentnationalassociationid'];
            $propertyModel->co_list_office_aor = $singlePropertyArray['colistofficeaor'];
            $propertyModel->co_list_office_email = $singlePropertyArray['colistofficeemail'];
            $propertyModel->co_list_office_key_numeric = $singlePropertyArray['colistofficekeynumeric'];
            $propertyModel->co_list_office_mls_id = $singlePropertyArray['colistofficemlsid'];
            $propertyModel->co_list_office_name = $singlePropertyArray['colistofficename'];
            $propertyModel->co_list_office_national_association_id = $singlePropertyArray['colistofficenationalassociationid'];
            $propertyModel->co_list_office_phone = $singlePropertyArray['colistofficephone'];
            $propertyModel->co_list_office_phone_ext = $singlePropertyArray['colistofficephoneext'];
            $propertyModel->commercial_amenities = $singlePropertyArray['commercialamenities'];
            $propertyModel->common_walls = $singlePropertyArray['commonwalls'];
            $propertyModel->community_features = $singlePropertyArray['communityfeatures'];
            $propertyModel->complex_name = $singlePropertyArray['complexname'];
            $propertyModel->condo_name = $singlePropertyArray['condoname'];
            $propertyModel->condotype = $singlePropertyArray['condotype'];
            $propertyModel->construction_materials = $singlePropertyArray['constructionmaterials'];
            $propertyModel->cooling = $singlePropertyArray['cooling'];
            $propertyModel->county_or_parish = $singlePropertyArray['countyorparish'];
            $propertyModel->current_use = $singlePropertyArray['currentuse'];
            $propertyModel->days_on_market = $singlePropertyArray['daysonmarket'];
            $propertyModel->direction_faces = $singlePropertyArray['directionfaces'];
            $propertyModel->district = $singlePropertyArray['district'];
            $propertyModel->dom_date = \Carbon\Carbon::parse($singlePropertyArray['domdate'])->format('Y-m-d H:i:s');
            $propertyModel->dom_incrementing = $singlePropertyArray['domincrementing'];
            $propertyModel->electric = $singlePropertyArray['electric'];
            $propertyModel->elementary_school_district = $singlePropertyArray['elementaryschooldistrict'];
            $propertyModel->ensuite_yn = $singlePropertyArray['ensuiteyn'];
            $propertyModel->entry_level = $singlePropertyArray['entrylevel'];
            $propertyModel->exterior_features = $singlePropertyArray['exteriorfeatures'];
            $propertyModel->fencing = $singlePropertyArray['fencing'];
            $propertyModel->fireplace_features = $singlePropertyArray['fireplacefeatures'];
            $propertyModel->fireplaces_total = $singlePropertyArray['fireplacestotal'];
            $propertyModel->five_piece_bath = $singlePropertyArray['fivepiecebath'];
            $propertyModel->five_piece_ensuite_bath = $singlePropertyArray['fivepieceensuitebath'];
            $propertyModel->floor_location = $singlePropertyArray['floorlocation'];
            $propertyModel->flooring = $singlePropertyArray['flooring'];
            $propertyModel->footprint_sqft = $singlePropertyArray['footprintsqft'];
            $propertyModel->foundation_details = $singlePropertyArray['foundationdetails'];
            $propertyModel->four_piece_bath = $singlePropertyArray['fourpiecebath'];
            $propertyModel->four_piece_ensuite_bath = $singlePropertyArray['fourpieceensuitebath'];
            $propertyModel->frontage_ft = $singlePropertyArray['frontageft'];
            $propertyModel->frontage_length = $singlePropertyArray['frontagelength'];
            $propertyModel->furnished = $singlePropertyArray['furnished'];
            $propertyModel->garage_spaces = $singlePropertyArray['garagespaces'];
            $propertyModel->garage_yn = $singlePropertyArray['garageyn'];
            $propertyModel->gross_margin = $singlePropertyArray['grossmargin'];
            $propertyModel->heating = $singlePropertyArray['heating'];
            $propertyModel->heating_expense = $singlePropertyArray['heatingexpense'];
            $propertyModel->high_school_district = $singlePropertyArray['highschooldistrict'];
            $propertyModel->idx_opt_in_yn = $singlePropertyArray['idxoptinyn'];
            $propertyModel->inclusions = $singlePropertyArray['inclusions'];
            $propertyModel->interior_features = $singlePropertyArray['interiorfeatures'];
            $propertyModel->internet_entire_listing_display_yn = $singlePropertyArray['internetentirelistingdisplayyn'];
            $propertyModel->land_lease_amount = $singlePropertyArray['landleaseamount'];
            $propertyModel->latitude = $singlePropertyArray['latitude'];
            $propertyModel->laundry_features = $singlePropertyArray['laundryfeatures'];
            $propertyModel->laundry_income = $singlePropertyArray['laundryincome'];
            $propertyModel->lease_amount = $singlePropertyArray['leaseamount'];
            $propertyModel->lease_amount_frequency = $singlePropertyArray['leaseamountfrequency'];
            $propertyModel->lease_count = $singlePropertyArray['leasecount'];
            $propertyModel->lease_measure = $singlePropertyArray['leasemeasure'];
            $propertyModel->lease_measure_type = $singlePropertyArray['leasemeasuretype'];
            $propertyModel->lease_rate_sq_meter = $singlePropertyArray['leaseratesqmeter'];
            $propertyModel->lease_sub_lease_yn = $singlePropertyArray['leasesubleaseyn'];
            $propertyModel->lease_term = $singlePropertyArray['leaseterm'];
            $propertyModel->lease_term_remaining_months = $singlePropertyArray['leasetermremainingmonths'];
            $propertyModel->legal_plan = $singlePropertyArray['legalplan'];
            $propertyModel->legal_unit_number = $singlePropertyArray['legalunitnumber'];
            $propertyModel->levels = $singlePropertyArray['levels'];
            $propertyModel->list_agent_direct_phone = $singlePropertyArray['listagentdirectphone'];
            $propertyModel->list_agent_email = $singlePropertyArray['listagentemail'];
            $propertyModel->list_agent_full_name = $singlePropertyArray['listagentfullname'];
            $propertyModel->list_agent_key_numeric = $singlePropertyArray['listagentkeynumeric'];
            $propertyModel->list_agent_mls_id = $singlePropertyArray['listagentmlsid'];
            $propertyModel->list_aor = $singlePropertyArray['listaor'];
            $propertyModel->list_office_aor = $singlePropertyArray['listofficeaor'];
            $propertyModel->list_office_key_numeric = $singlePropertyArray['listofficekeynumeric'];
            $propertyModel->list_office_mls_id = $singlePropertyArray['listofficemlsid'];
            $propertyModel->list_office_name = $singlePropertyArray['listofficename'];
            $propertyModel->list_office_phone = $singlePropertyArray['listofficephone'];
            $propertyModel->list_office_phone_ext = $singlePropertyArray['listofficephoneext'];
            $propertyModel->list_price = $singlePropertyArray['listprice'];
            $propertyModel->list_price_square_foot = $singlePropertyArray['listpricesquarefoot'];
            $propertyModel->listing_contract_date = \Carbon\Carbon::parse($singlePropertyArray['listingcontractdate'])->format('Y-m-d H:i:s');
            $propertyModel->listing_id = $singlePropertyArray['listingid'];
            $propertyModel->listing_key_numeric = $singlePropertyArray['listingkeynumeric'];
            $propertyModel->listing_service = $singlePropertyArray['listingservice'];
            $propertyModel->living_area_metres = $singlePropertyArray['livingareametres'];
            $propertyModel->living_area_sf = $singlePropertyArray['livingareasf'];
            $propertyModel->longitude = $singlePropertyArray['longitude'];
            $propertyModel->lot_features = $singlePropertyArray['lotfeatures'];
            $propertyModel->lot_size_acres = $singlePropertyArray['lotsizeacres'];
            $propertyModel->lot_size_dimensions = $singlePropertyArray['lotsizedimensions'];
            $propertyModel->lot_size_not_cultivated = $singlePropertyArray['lotsizenotcultivated'];
            $propertyModel->lot_size_seeded = $singlePropertyArray['lotsizeseeded'];
            $propertyModel->lot_size_square_feet = $singlePropertyArray['lotsizesquarefeet'];
            $propertyModel->lot_size_tame_hay = $singlePropertyArray['lotsizetamehay'];
            $propertyModel->lot_size_treed = $singlePropertyArray['lotsizetreed'];
            $propertyModel->main_level_finished_area = $singlePropertyArray['mainlevelfinishedarea'];
            $propertyModel->main_level_finished_area_metres = $singlePropertyArray['mainlevelfinishedareametres'];
            $propertyModel->main_level_finished_area_sf = $singlePropertyArray['mainlevelfinishedareasf'];
            $propertyModel->main_level_finished_area_srch_sq_ft = $singlePropertyArray['mainlevelfinishedareasrchsqft'];
            $propertyModel->main_level_finished_area_units = $singlePropertyArray['mainlevelfinishedareaunits'];
            $propertyModel->major_change_timestamp = $singlePropertyArray['majorchangetimestamp'];
            $propertyModel->major_change_type = $singlePropertyArray['majorchangetype'];
            $propertyModel->major_use_description = $singlePropertyArray['majorusedescription'];
            $propertyModel->map_url = $singlePropertyArray['mapurl'];
            $propertyModel->mezzanine_sqft = $singlePropertyArray['mezzaninesqft'];
            $propertyModel->mls_status = $singlePropertyArray['mlsstatus'];
            $propertyModel->mobile_length = $singlePropertyArray['mobilelength'];
            $propertyModel->mobile_width = $singlePropertyArray['mobilewidth'];
            $propertyModel->modification_timestamp = $singlePropertyArray['modificationtimestamp'];
            $propertyModel->monthly_rent = $singlePropertyArray['monthlyrent'];
            $propertyModel->multi_family_type = $singlePropertyArray['multifamilytype'];
            $propertyModel->nearest_town = $singlePropertyArray['nearesttown'];
            $propertyModel->new_construction_yn = $singlePropertyArray['newconstructionyn'];
            $propertyModel->nine_one_one_address = $singlePropertyArray['nineoneoneaddress'];
            $propertyModel->occupancy_costs = $singlePropertyArray['occupancycosts'];
            $propertyModel->one_piece_bath = $singlePropertyArray['onepiecebath'];
            $propertyModel->open_house_count = $singlePropertyArray['openhousecount'];
            $propertyModel->originating_system_name = $singlePropertyArray['originatingsystemname'];
            $propertyModel->outbuildings = $singlePropertyArray['outbuildings'];
            $propertyModel->outbuildings_desc = $singlePropertyArray['outbuildingsdesc'];
            $propertyModel->owner_pays = $singlePropertyArray['ownerpays'];
            $propertyModel->parking_assigned = $singlePropertyArray['parkingassigned'];
            $propertyModel->parking_common_spaces = $singlePropertyArray['parkingcommonspaces'];
            $propertyModel->parking_enclosed = $singlePropertyArray['parkingenclosed'];
            $propertyModel->parking_energized = $singlePropertyArray['parkingenergized'];
            $propertyModel->parking_features = $singlePropertyArray['parkingfeatures'];
            $propertyModel->parking_plan_type = $singlePropertyArray['parkingplantype'];
            $propertyModel->parking_total = $singlePropertyArray['parkingtotal'];
            $propertyModel->patio_and_porch_features = $singlePropertyArray['patioandporchfeatures'];
            $propertyModel->pets_allowed = $singlePropertyArray['petsallowed'];
            $propertyModel->photos_change_timestamp = $singlePropertyArray['photoschangetimestamp'];
            $propertyModel->photos_count = $singlePropertyArray['photoscount'];
            $propertyModel->pool_features = $singlePropertyArray['poolfeatures'];
            $propertyModel->postal_code = $singlePropertyArray['postalcode'];
            $propertyModel->property_sub_type = $singlePropertyArray['propertysubtype'];
            $propertyModel->property_type = $singlePropertyArray['propertytype'];
            $propertyModel->public_remarks = $singlePropertyArray['publicremarks'];
            $propertyModel->quarter = $singlePropertyArray['quarter'];
            $propertyModel->range = $singlePropertyArray['range'];
            $propertyModel->rent_includes = $singlePropertyArray['rentincludes'];
            $propertyModel->rental_type = $singlePropertyArray['rentaltype'];
            $propertyModel->restrictions = $singlePropertyArray['restrictions'];
            $propertyModel->roof = $singlePropertyArray['roof'];
            $propertyModel->rooms_above_grade = $singlePropertyArray['roomsabovegrade'];
            $propertyModel->rooms_total = $singlePropertyArray['roomstotal'];
            $propertyModel->school_bus_service_yn = $singlePropertyArray['schoolbusserviceyn'];
            $propertyModel->section = $singlePropertyArray['section'];
            $propertyModel->security_deposit_yn = $singlePropertyArray['securitydeposityn'];
            $propertyModel->sewer = $singlePropertyArray['sewer'];
            $propertyModel->six_piece_bath = $singlePropertyArray['sixpiecebath'];
            $propertyModel->six_piece_ensuite_bath = $singlePropertyArray['sixpieceensuitebath'];
            $propertyModel->soil_type = $singlePropertyArray['soiltype'];
            $propertyModel->special_listing_conditions = $singlePropertyArray['speciallistingconditions'];
            $propertyModel->sqft_other = $singlePropertyArray['sqftother'];
            $propertyModel->sqft_retail = $singlePropertyArray['sqftretail'];
            $propertyModel->sqft_warehouse = $singlePropertyArray['sqftwarehouse'];
            $propertyModel->sqft_office = $singlePropertyArray['sqftoffice'];
            $propertyModel->sqft_old = $singlePropertyArray['sqftold'];
            $propertyModel->standard_status = $singlePropertyArray['standardstatus'];
            $propertyModel->state_or_province = $singlePropertyArray['stateorprovince'];
            $propertyModel->stories_total = $singlePropertyArray['storiestotal'];
            $propertyModel->street_dir_prefix = $singlePropertyArray['streetdirprefix'];
            $propertyModel->street_dir_suffix = $singlePropertyArray['streetdirsuffix'];
            $propertyModel->street_direction = $singlePropertyArray['streetdirection'];
            $propertyModel->street_name = $singlePropertyArray['streetname'];
            $propertyModel->street_number = $singlePropertyArray['streetnumber'];
            $propertyModel->street_suffix = $singlePropertyArray['streetsuffix'];
            $propertyModel->structure_type = $singlePropertyArray['structuretype'];
            $propertyModel->subdivision_name = $singlePropertyArray['subdivisionname'];
            $propertyModel->suite = $singlePropertyArray['suite'];
            $propertyModel->tax_block = $singlePropertyArray['taxblock'];
            $propertyModel->tax_key_numeric = $singlePropertyArray['taxkeynumeric'];
            $propertyModel->tax_legal_description = $singlePropertyArray['taxlegaldescription'];
            $propertyModel->tax_lot = $singlePropertyArray['taxlot'];
            $propertyModel->tenant_pays = $singlePropertyArray['tenantpays'];
            $propertyModel->three_piece_bath = $singlePropertyArray['threepiecebath'];
            $propertyModel->three_piece_ensuite_bath = $singlePropertyArray['threepieceensuitebath'];
            $propertyModel->title_land = $singlePropertyArray['titleland'];
            $propertyModel->township = $singlePropertyArray['township'];
            $propertyModel->transaction_type = $singlePropertyArray['transactiontype'];
            $propertyModel->two_piece_bath = $singlePropertyArray['twopiecebath'];
            $propertyModel->two_piece_ensuite_bath = $singlePropertyArray['twopieceensuitebath'];
            $propertyModel->unit_exposure = $singlePropertyArray['unitexposure'];
            $propertyModel->unit_number = $singlePropertyArray['unitnumber'];
            $propertyModel->units_count = $singlePropertyArray['unitscount'];
            $propertyModel->unparsed_address = $singlePropertyArray['unparsedaddress'];
            $propertyModel->upper_level_finished_area = $singlePropertyArray['upperlevelfinishedarea'];
            $propertyModel->upper_level_finished_area_metres = $singlePropertyArray['upperlevelfinishedareametres'];
            $propertyModel->upper_level_finished_area_sf = $singlePropertyArray['upperlevelfinishedareasf'];
            $propertyModel->upper_level_finished_area_srch_sq_ft = $singlePropertyArray['upperlevelfinishedareasrchsqft'];
            $propertyModel->upper_level_finished_area_units = $singlePropertyArray['upperlevelfinishedareaunits'];
            $propertyModel->url_3d_image = $singlePropertyArray['url3dimage'];
            $propertyModel->url_additional_images = $singlePropertyArray['urladditionalimages'];
            $propertyModel->url_alternate_feature_sheet = $singlePropertyArray['urlalternatefeaturesheet'];
            $propertyModel->url_brochure = $singlePropertyArray['urlbrochure'];
            $propertyModel->url_sound_byte = $singlePropertyArray['urlsoundbyte'];
            $propertyModel->utilities = $singlePropertyArray['utilities'];
            $propertyModel->virtual_tour_url_branded = $singlePropertyArray['virtualtoururlbranded'];
            $propertyModel->virtual_tour_url_unbranded = $singlePropertyArray['virtualtoururlunbranded'];
            $propertyModel->water_source = $singlePropertyArray['watersource'];
            $propertyModel->waterfront_features = $singlePropertyArray['waterfrontfeatures'];
            $propertyModel->west_meridian = $singlePropertyArray['westmeridian'];
            $propertyModel->yard_faces = $singlePropertyArray['yardfaces'];
            $propertyModel->yard_size = $singlePropertyArray['yardsize'];
            $propertyModel->year_built = $singlePropertyArray['yearbuilt'];
            $propertyModel->year_built_exception = $singlePropertyArray['yearbuiltexception'];
            $propertyModel->year_established = $singlePropertyArray['yearestablished'];
            $propertyModel->zoning = $singlePropertyArray['zoning'];
            $propertyModel->save();
        } catch (\Exception $e) {
            dd($singlePropertyArray, $e->getMessage());
        }
        //        $images = $rets->GetObject('Property','Photo',$singleResult->toArray()['ListingKeyNumeric'],"*");
    }
    dd('Done');
});

Route::get('rets/images', function () {
    $config = new \PHRETS\Configuration;
    $config->setLoginUrl('https://matrixrets.pillarnine.com/rets/login.ashx')
        ->setUsername('RKHEMKAPR')
        ->setPassword('_pY2.dxKxu')
        ->setRetsVersion('1.7.2');
    $rets = new \PHRETS\Session($config);
    $connect = $rets->Login();
    $dataArray = [];
    //    $ids = ["87119640"];
    $ids = \App\Models\Property::select('listing_numeric_key')->limit(10)->offset(1)->get();
    //    $ids = ["58696631","68587219","68688644","68750943","75313463","77205904","78715490","79112772","79158300","79382221","79477538","79607186","79651959","79687804","79796765","79874390","80031682","80090904","80119988","80354259","80370475","80567737","80703144","80769460","80784868","80796110","80812722","80850657","80879315","80912101","80995924","81008390","81082360","81094063","81214088","81223594","81260891","81281510","81308101","81311861","81436583","81470434","81628260","81693759","81695367","81798186","81808689","82013528","82070356","82086987","82119991","82202467","82306508","82315501","82434602","82435123","82478645","82494062","82561679","82597303","82609057","82612486","82648660","83453672","83460651","83478610","83484011","83521398","83565964","83570202","83626048","83635038","83643736","83644777","83658680","83680740","83694389","83805155","83822370","83863961","83870165","83893186","83893509","83975573","84042508","84068350","84072416","84173374","84189509","84193513","84194191","84238464","84244210","84283903","84383861"];
    foreach ($ids as $k => $singleRecord) {
        $images = $rets->GetObject('Property', 'Photo', $singleRecord->listing_numeric_key, '*', 1);
        dd($images);
        if ($images->count() == 0 || $images->count() == 1) {
            $dataArray[] = $singleRecord;
        }
        foreach ($images as $k => $singleImage) {
            $blobContent = $singleImage->getContent();
            @mkdir('properties/images/missing/1/' . $singleRecord, 0777, true);
            $filePath = 'properties/images/missing/1/' . $singleRecord . '/' . $singleImage->getObjectId() . '-' . $singleImage->getContentId() . '.jpeg';
            file_put_contents($filePath, $blobContent);
        }
    }
    dd($dataArray);
});

Route::get('/', [WebsiteController::class, 'index'])->name('home');
Route::get('about-us', [WebsiteController::class, 'about'])->name('about');
// [WebsiteController::class, 'contact'])->name('contact');
Route::get('why-rep', [WebsiteController::class, 'whyRep'])->name('why-rep');
Route::get('views', [WebsiteController::class, 'allviews'])->name('api-views');
Route::get('join-rep', [WebsiteController::class, 'joinRep'])->name('join-rep');

Route::get('our-professionals', [WebsiteController::class, 'ourProfessional'])->name('our-professionals');


Route::get('our-professionals/details/{key}', [WebsiteController::class, 'professionalDetails'])->name('professional-details');
Route::get('contact', [WebsiteController::class, 'contact'])->name('contact');
Route::get('home-evaluation', [WebsiteController::class, 'homeEvaluation'])->name('home-evaluation');

Route::get('privacy-policy', [WebsiteController::class, 'privacy'])->name('privacy');
Route::get('terms-and-conditions', [WebsiteController::class, 'terms'])->name('terms');
Route::get('backtologin', [LoginController::class, 'backtologin'])->name('backtologin');


Route::post('favorite/save', [WebsiteController::class, 'saveFavorite'])->name('save.favorite');

Route::post('sell/save', [WebsiteController::class, 'saveSellSubscriber'])->name('save.sell');

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'login'])->name('login.post');
Route::post('leadlogin', [LoginController::class, 'leadslogin'])->name('leads.login');
Route::post('leadsignup', [LoginController::class, 'leadssignup'])->name('leads.signup');
Route::get('destroy', [LoginController::class, 'leadslogout'])->name('leads.destroy');
Route::delete('deleteSearch/{id}', [LoginController::class, 'deletesearch'])->name('deletesearch');

Route::get('register', [LoginController::class, 'register'])->name('register');
Route::post('register', [LoginController::class, 'registerNow'])->name('register.post');
Route::get('profiles', [LoginController::class, 'userprofile'])->name('user.profile');
Route::get('/forgot-password', [LoginController::class, 'forgotpasswordview'])->name('forgotpassword');
Route::post('login/leads', [WebsiteController::class, 'login'])->name('request.login');
Route::post('register/leads', [WebsiteController::class, 'register'])->name('request.register');
Route::get('auth/google',  [LoginController::class, 'callgoogleAPI'])->name('callgoogleAPI');
Route::get('google/callback', [LoginController::class, 'handlegoogleCallback'])->name('handlegoogleCallback');
Route::get('auth/facebook',  [LoginController::class, 'callfacebookAPI'])->name('callfacebookAPI');

Route::get('facebook/callback', [LoginController::class, 'handlefacebookCallback'])->name('handlefacebookCallback');
//Property Listing
Route::get('listing', [WebsiteController::class, 'listings'])->name('listing');
Route::get('listing/type/{type}', [WebsiteController::class, 'typeProperties'])->name('listing.type');
Route::get('listing/results', [WebsiteController::class, 'listingResults'])->name('listing.results');
Route::get('listing/{id}', [WebsiteController::class, 'listingView'])->name('listing.show');
Route::post('add-to-favorites', [LoginController::class, 'addToFavorites'])->name('add_to_favorites');
Route::get('get-fav', [LoginController::class, 'getfavproperty'])->name('get_fav');
Route::get('get-listings', [LoginController::class, 'getpropertylistings'])->name('get-listings');
// Route::get('profile', [LoginController::class, 'profile'])->name('profile');
Route::get('search/{cityName?}/{communityName?}', [WebsiteController::class, 'advanceFilter'])->name('advance-filter');

Route::get('property/search', [WebsiteController::class, 'searchResults'])->name('property.search.results');

Route::post('request/save', [WebsiteController::class, 'saveRequest'])->name('request.save');
Route::post('login/leads', [WebsiteController::class, 'login'])->name('request.login');
Route::post('register/leads', [WebsiteController::class, 'register'])->name('request.register');

Route::group(['middleware' => 'client_auth', 'prefix' => 'account'], function () {
    Route::get('/', [AccountController::class, 'index'])->name('account');
    Route::get('profile', [AccountController::class, 'profile'])->name('profile');
    Route::post('profile/save', [AccountController::class, 'saveProfile'])->name('profile.save');
    Route::get('favourites', [AccountController::class, 'favorite'])->name('favorite');
    Route::get('favourites/delete/{id}', [AccountController::class, 'deleteFavorite'])->name('favorite.delete');

    Route::get('change-password', [AccountController::class, 'changePassword'])->name('change-password');
    Route::post('change-password/save', [AccountController::class, 'savePassword'])->name('change-password.save');

    Route::get('logout', [LoginController::class, 'logout'])->name('logout');
  
    
});



Route::post('save/homeEvalutaion', [WebsiteController::class, 'saveHomeEvalutaion'])->name('save.homeEvaluation');
Route::get('property-detail/{slugurl}', [WebsiteController::class, 'propetyDetails'])->name('propertiesdetails.show');
Route::get('property-filters',[WebsiteController::class,'advanceFilters'])->name('advanceFilters.show');
Route::post('/tour/submit', [WebsiteController::class, 'submitForm'])->name('tour.submit');
Route::post('/contact/submit', [WebsiteController::class, 'contactForm'])->name('contact.submit');
Route::post('/review/submit', [WebsiteController::class, 'reviewform'])->name('review.submit');
Route::post('/walkscore', [WebsiteController::class, 'getWalkScore'])->name('walkscore');
Route::get('/get-location', [WebsiteController::class, 'getlocation'])->name('get-location');

