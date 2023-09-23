<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\RequestedNumber;
use Illuminate\Http\Request;
use Inertia\Inertia;
use GuzzleHttp\Client;
class RequestedNumberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function showNumber ()
    {
        return Inertia::render('User/Numbers/GetNumber', []);
    }

    /**
     * Store a newly created resource in storage.
     */

     public function submitMultiStepForm(Request $request)
     {
         try {
             // You can add validation logic here if needed
             // Example: $this->validate($request, ['field' => 'required']);
            //  $formData = $request->all();

            $formData = $request->all();

             // Process the form data or store it in the database, if needed
             return response()->json(['message' => 'Form data submitted successfully', 'data' => $formData], 200);




         } catch (Exception $e) {
             return response()->json(['error' => $e->getMessage()], 500);
         }
     }


     public function fetchNumber(Request $request)
     {
         try {
             $client = new Client();
 
             $areaCode = $request->input('area_code');
             if($areaCode != ""){
                 $response = $client->request('GET', 'https://api.telnyx.com/v2/available_phone_numbers', [
                     'headers' => [
                         'Accept' => 'application/json',
                         'Authorization' => 'Bearer KEY01857DD896838C8A75B0A887F46B90BE_nZVtg3gyIAsear9RVW9q98',
                     ],
                     'query' => [
                         'filter[national_destination_code][]' => $areaCode,
                     ],
                 ]);
         
                 $responseData = json_decode($response->getBody(), true);
                 $phoneNumbersArray = [];
                 // Extract phone numbers from the response data
                 foreach ($responseData['data'] as $item) {
                     if (isset($item['phone_number'])) {
                         $phoneNumbersArray[] = $item['phone_number'];
                     }
                 }
     
                 return response()->json(['status' => true, 'message' => 'Numbers fetched successfully', 'data' => $phoneNumbersArray, 'code' => 200]);
             }else{
                 return response()->json(['status' => false, 'message' => 'Number not found', 'error' => "Please write down area code", 'code'=> 404]);
             }
             
         } catch (Exception $e) {
             return response()->json(['status' => false, 'message' => 'Something went wrong', 'error' => $e->getMessage(), 'code'=> 500]);
         }
     }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(RequestedNumber $requestedNumber)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RequestedNumber $requestedNumber)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RequestedNumber $requestedNumber)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RequestedNumber $requestedNumber)
    {
        //
    }
}
