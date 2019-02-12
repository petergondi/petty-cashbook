<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Topup;
use App\Spendings;
class TopupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $total_topup=Topup::sum('topup');
        $topups=Topup::paginate(2);
        return view('Top-up.view')->with(compact('topups','total_topup'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $total_topup=Topup::sum('topup');
        $total_expense=Spendings::sum('expense_amount');
        $balance=$total_topup-$total_expense;
        return view('Top-up.make')->with(compact('balance'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'account'=>'required',
            'topup'=>'required',
             'petty_cashier'=>'required',
        ]);
       
        $post=new Topup;
        $post->account_type=$request->input('account');
        $post->topup=$request->input('topup');
        $post->petty_cashier=$request->input('petty_cashier');
        $post->save();
        return redirect('/topup/view')->with('success','You made a topup');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
