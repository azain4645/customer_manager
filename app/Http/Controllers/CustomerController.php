<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Customer;
use Illuminate\Support\Facades\DB;
use App\Services\CheckFormData;
use App\Http\Requests\StroeCustomerForm;
use App\Http\Requests\StoreCustomerForm;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = DB::table('customers')
        ->select('id', 'name','gender','email','created_at')
        ->orderBy('created_at', 'desc')
        ->get();
        //dd($customers);

        return view('customer.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCustomerForm $request)
    {
        $customer = new Customer;

        $customer->name = $request->input('name');
        $customer->address = $request->input('address');
        $customer->tel = $request->input('tel');
        $customer->email = $request->input('email');
        $customer->gender = $request->input('gender');
        $customer->comment = $request->input('comment');

        $customer->save();

        return redirect('customer/index');
      }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customer = Customer::find($id);

        $gender = CheckFormData::checkGender($customer);

        //dd($customer);
        return view('customer.show', compact('customer', 'gender'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $customer = Customer::find($id);

      return view('customer.edit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $customer = Customer::find($id);

      $customer->name = $request->input('name');
      $customer->address = $request->input('address');
      $customer->tel = $request->input('tel');
      $customer->email = $request->input('email');
      $customer->gender = $request->input('gender');
      $customer->comment = $request->input('comment');

      $customer->save();

      return redirect('customer/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $customer = Customer::find($id);
      $customer->delete();

      return redirect('customer/index');
    }
}
