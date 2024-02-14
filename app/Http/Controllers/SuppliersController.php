<?php

namespace App\Http\Controllers;

use App\Supplier;
use App\Product;
use Illuminate\Http\Request;

class SuppliersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get all the suppliers
        $suppliers = Supplier::all();

        // Return the index view
        return view('suppliers.index')->with('suppliers', $suppliers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Return the create view
        return view('suppliers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the user input
        $this->validate($request, [
            'name' => 'required|min:3|max:50|unique:suppliers',
            'contact_person' => 'required|min:3|max:255|',
            'email' => 'required|min:3|max:150|email',
            'phone' => 'required|min:3|max:150',
            'mobile' => 'required|min:3|max:150',
            'fax' => 'required|min:3|max:150',
            'street' => 'required|min:3|max:150',
            'house_number' => 'required|min:1|max:150',
            'postal' => 'required|min:1|max:150',
            'state_province_county' => 'required|min:3|max:150',
            'country' => 'required|min:3|max:150',
            'website' => 'required|min:3|max:150|starts_with:http,https'
        ]);

        dd($request);
        // Create new instance of the model
        $supplier = new Supplier;

        $supplier->name = $request->input('name');
        $supplier->contact_person = $request->input('contact_person');
        $supplier->email = $request->input('email');
        $supplier->phone = $request->input('phone');
        $supplier->mobile = $request->input('mobile');
        $supplier->fax = $request->input('fax');
        $supplier->street = $request->input('street');
        $supplier->house_number = $request->input('house_number');
        $supplier->postal = $request->input('postal');
        $supplier->state_province_county = $request->input('state_province_county');
        $supplier->country = $request->input('country');
        $supplier->website = $request->input('website');

        // Save the new model
        $supplier->save();

        // Return to index with success message
        return redirect('/suppliers')->with('success', 'Supplier has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function show($supplier_id)
    {
        // get supplier and products
        $supplier = Supplier::find($supplier_id);
        $products = Product::where([
          ['supplier_id', '=', $supplier_id],
        ])->get();

        // return view
        return view('suppliers.show')->with('supplier', $supplier)->with('products', $products);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function edit($supplier)
    {
        // Get the supplier to edit
        $supplier = Supplier::find($supplier);

//        dd($supplier);
        // Return the edit view
        return view('suppliers.edit')->with('supplier', $supplier);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $supplier)
    {
        // Get the supplier
        $supplier = Supplier::find($supplier);

        // Validate the user input
        $this->validate($request, [
            'name' => 'required|min:3|max:50|unique:suppliers,name,'.$supplier->id,
            'contact_person' => 'required|min:3|max:255|',
            'email' => 'required|min:3|max:150|email',
            'phone' => 'required|min:3|max:150',
            'mobile' => 'required|min:3|max:150',
            'fax' => 'required|min:3|max:150',
            'street' => 'required|min:3|max:150',
            'house_number' => 'required|min:1|max:150',
            'postal' => 'required|min:1|max:150',
            'state_province_county' => 'required|min:3|max:150',
            'country' => 'required|min:3|max:150',
            'website' => 'required|min:3|max:150|starts_with:http,https'
        ]);

        // Edit the supplier
        $supplier->name = $request->input('name');
        $supplier->contact_person = $request->input('contact_person');
        $supplier->email = $request->input('email');
        $supplier->phone = $request->input('phone');
        $supplier->mobile = $request->input('mobile');
        $supplier->fax = $request->input('fax');
        $supplier->street = $request->input('street');
        $supplier->house_number = $request->input('house_number');
        $supplier->postal = $request->input('postal');
        $supplier->state_province_county = $request->input('state_province_county');
        $supplier->country = $request->input('country');
        $supplier->website = $request->input('website');

        // Save the changes
        $supplier->save();

        // Return to index page with success message
        return redirect('/suppliers')->with('success', 'Supplier has been edited and changes were saved!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supplier $supplier)
    {
        //
    }
}
