<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PdfReport;
use PDF;
use App;
use App\Spendings;

class ReportsController extends Controller
{
    public function index(){
        return view('Reports.create');
    }
    //generating reports

public function displayReport(Request $request)
{
    $fromDate = $request->input('from_date');
    $toDate = $request->input('to_date');
    $title=$request->input('title');

 //$title = 'Registered User Report'; // Report title

    $meta = [ // For displaying filters description on header
        'Registered on' => $fromDate . ' To ' . $toDate
    ];

    $queryBuilder = Spendings::select(['expense_name', 'purpose', 'person_given','expense_amount','closing_balance','created_at']) // Do some querying..
                        ->whereBetween('created_at', [$fromDate, $toDate])->get();
                        

    $columns = [ // Set Column to be displayed
        'Name' => 'expense_name',
        'Purpose'=>'purpose', // if no column_name specified, this will automatically seach for snake_case of column name (will be registered_at) column from query result
        'Person given'=>'person_given',
        'Expense Amount'=>'expense_amount',
        'Closing Balance' => 'closing_balance'
    ];

    // Generate Report with flexibility to manipulate column class even manipulate column value (using Carbon, etc).
    
    return PdfReport::of($title, $meta, $queryBuilder, $columns)
                  ->editColumn('Registered At', [ // Change column class or manipulate its data for displaying to report
                      'displayAs' => function($result) {
                          return $result->created_at->format('M d Y');
                      },
                      'class' => 'left'
                  ])
                  ->editColumns(['Expense Amount', 'Closing Balance'], [ // Mass edit column
                      'class' => 'right bold'
                  ])
                  ->showTotal([ // Used to sum all value on specified column on the last table (except using groupBy method). 'point' is a type for displaying total with a thousand separator
                      'Expense Amount' => 'point' // if you want to show dollar sign ($) then use 'Total Balance' => '$'
                  ])
                  ->limit(20) // Limit record to be showed
                  ->stream(); // other available method: download('filename') to download pdf / make() that will producing DomPDF / SnappyPdf instance so you could do any other DomPDF / snappyPdf method such as stream() or download()
//return $print->download('filename');
                 
               //return PDF::loadHTML($print)->setPaper('a4')->setOrientation('landscape')->setOption('margin-bottom', 0)->save('myfile.pdf');
//   $snappy = App::make('snappy.pdf');
///To file
//html = '<h1>Bill</h1><p>You owe me money, dude.</p>';
//snappy->generateFromHtml($html, '/tmp/bill-123.pdf');
//snappy->generate('http://www.github.com', '/tmp/github.pdf');
///Or output:
//return new Response(
//   $snappy->getOutputFromHtml($html),
//   200,
//   array(
//       'Content-Type'          => 'application/pdf',
//       'Content-Disposition'   => 'attachment; filename="file.pdf"'
//   )
//);                
}
}
