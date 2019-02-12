<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Accounts;
use App\Spendings;
use Carbon\Carbon;
use App\Topup;
use Illuminate\Support\Facades\Input;


class SpendingsController extends Controller
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
        $total_expense=Spendings::sum('expense_amount');
        $balance=$total_topup-$total_expense;
        $spendings=Spendings::paginate(10);
        return view('Spendings.view')->with(compact('spendings','balance','total_expense'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
       $now =Carbon::now()->format('m-d-Y');
        $weekMap = [
            0 => 'Sunday',
            1 => 'Monday',
            2 => 'Tuesday',
            3 => 'Wednesday',
            4 => 'Thursday',
            5 => 'Friday',
            6 => 'Saturday',
        ];

        $dayOfTheWeek = Carbon::now()->dayOfWeek;
        $weekday = $weekMap[$dayOfTheWeek];
        $total_topup=Topup::sum('topup');
        $total_expense=Spendings::sum('expense_amount');
        $balance=$total_topup-$total_expense;
        $expense_accounts=Accounts::All();
        $count= $expense_accounts->count();
        return view('Spendings.base')->with(compact('expense_accounts','total_topup','weekday','now','balance'));
       
    }
    public function ReadData(){
        $total_topup=Topup::sum('topup');
        $total_expense=Spendings::sum('expense_amount');
        $balance=$total_topup-$total_expense;
        return response($balance);
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
        $expense_accounts=Accounts::All();
        $data = array();
        $now = Carbon::now();
        $now->format('d/m/Y');
        $total_topup=Topup::sum('topup');
        $total_expense=Spendings::sum('expense_amount');
        $balance=$total_topup-$total_expense;
     foreach($request->account as $key=>$account)
        {
            //$this->validate($request,[
            //    'expense_name'=>'required',
            //]);
           
           $data[] =[
                     'expense_name' =>  $account,
                     'purpose'=>$request->purpose[$key],
                     'person_given'=>$request->person[$key],
                     'expense_amount'=>$request->amount[$key],
                     'closing_balance'=>$balance-array_sum($request->amount),
                     'created_at'=>$now,
                     'updated_at'=>$now,

                    ];    
                }            
 
        Spendings::insert($data);
       // if (Spendings::insert($data)) {
       //     return response([
       //         'status'     => 'success',
       //         'expense_name' =>  $account,
       //         'expense_amount'=>$request->amount[$key],
       //         ]);
       // } else {
       //     return response([
       //         'status' => 'error']);
       // }
        return redirect('/spendings/view')->with('success','Cost Expense Added');
    
}
//live search data
public function search(Request $request)
 
{
 
if($request->ajax())
 
{
 
$output="";
 
$expenses=Spendings::where('expense_name','LIKE','%'.$request->search."%")->orWhere('person_given','LIKE','%'.$request->search."%")->orWhere('created_at','LIKE','%'.$request->search."%")->get();
if($expenses)
{
    $output.='<tr>
    <th>Expense Name</th>
    <th>Date</th>
    <th>Person Given.</th>
    <th>Purpose</th>
    <th>Amount Given(ksh.)</th>
    <th>Closing Balance</th>
    <th>Setting</th>
</tr>';
 
foreach ($expenses as $key => $expense) {
 
$output.='<tr>'.
 
'<td>'.$expense->expense_name.'</td>'.
'<td>'.$expense->created_at->format('d/m/Y').'</td>'.
 
'<td>'.$expense->purpose.'</td>'.
 
'<td>'.$expense->person_given.'</td>'.
 
'<td>'.$expense->expense_amount.'</td>'.
'<td>'.$expense->closing_balance.'</td>'.
'<td>'.
    '<button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true">'.'</i></button>'.
    '<button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true">'.'</i>'.'</button>'
.'</td>'.
 
'</tr>';
 
}
return Response($output);
   }
   else{
    $output.='<tr>
    <td align="center" colspan="5">No Data matches your Search</td>
</tr>';
return Response($output);
   }
  
}
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
