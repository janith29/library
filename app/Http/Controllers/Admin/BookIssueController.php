<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use PdfReport;
use Carbon\Carbon;
use App\Models\Auth\Role\Role;
use App\Models\Auth\User\User;
use App\Models\Member;
use App\Models\Book;
use App\Models\Book_issue;
use Ramsey\Uuid\Uuid;
use Validator;
use App;
use Barryvdh\DomPDF\Facade as PDF;
class BookIssueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Book_issues=Book_issue::all();
        return view('admin.book_issue.index', compact('Book_issues'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $members = Member::all();
        return view('admin.book_issue.indexadd', compact('members'));
    }
    public function book_issue_member(Request $request)
    {
        $members = DB::table('member')
        ->where('id', $request['search'])
        ->orWhere('name', 'like', '%' . $request['search'] . '%')
        ->orWhere('id', 'like', '%' . $request['search'] . '%')
        ->orWhere('email', 'like', '%' . $request['search'] . '%')
        ->get();
        return view('admin.book_issue.indexadd', compact('members'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function selectbook(Member $member)
    {
       $id=$member->id;
       $Books=Book::all();
        return view('admin.book_issue.indexbooks', compact('Books','id'));
    }
    public function store(Book_issue $Book_issue,Request $request)
    {
        
        $Book_issue->book_id=$request->get('bookID');
        $Book_issue->member_id=$request->get('memberID');
        $Book_issue->getdate=$request->get('getdate');
        $Book_issue->book_issued_day=$request->get('book_issued_day');
        $Book_issue->save();
        return view('admin.book_issue.success');
    }
    public function book_issue_book(Request $request)
    {
        $id=$request->get('memberID');
        $Books = DB::table('book')
        ->where('id', $request['search'])
        ->orWhere('bookname', 'like', '%' . $request['search'] . '%')
        ->orWhere('id', 'like', '%' . $request['search'] . '%')
        ->get();
        return view('admin.book_issue.indexbooks', compact('Books','id'));
    }
    
    public function book_issue_add(Request $request)
    {
        $id=$request->get('memberID');
        $Books =$request->get('bookID');
        return view('admin.book_issue.add', compact('Books','id'));
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
