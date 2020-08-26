<?php

namespace App\Http\Controllers;

use App\Books; # otherwise Method App\Http\Controllers\Books::all does not exist.

use Storage;

use DB;

use Session;

use Illuminate\Http\Request;

class BookHouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $books = Books::all();
      return view('index',['books'=>$books,'layout'=>'index']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function file_upload_page()
     {
         return view('upload_form');
     }

     public function store (Request $request) {

         if ($request->hasFile('image') && $request->hasFile('pdf') ) {
             //  Let's do everything here
             if ($request->file('image')->isValid() && $request->file('pdf')->isValid()) {
                 //
                 $validated = $request->validate([
                     'name' => 'string|max:100',
                     'image' => 'mimes:jpeg,png|max:5120',
                     'pdf' => 'required|mimes:pdf|max:10240', // to upload file >2MB change /etc/php/7.4/cli/php.ini   memory_limit to 512M or 2048M
                     'type' => 'string|max:100'
                 ]);
                 $extension = $request->image->extension();
                 $request->image->storeAs('/public', $validated['name'].".".$extension);
                 $img_url = Storage::url($validated['name'].".".$extension);

                 $fileName = $validated['name'].'.'.$request->file('pdf')->extension();
                 $request->file('pdf')->move(public_path('uploads'), $fileName);
                 $file_url = "uploads/".$fileName;

                 print($validated['name']."  ".$img_url." | ".$fileName." ".$file_url);
                /* $file = Books::create([
                    'Book_Name' => $validated['name'],
                    'Book_Type' => 'example',
                    'Book_Link' => $url,
                 ]); */
                 DB::table('books')->insert(
                      ['Book_Name' => $validated['name'], 'Book_Type' => $validated['type'],'Book_Thumbnail' => $img_url,"Book_Link" => $file_url]
                  );
                 Session::flash('success', "Success!");
                 return \Redirect::back();
             }else{
               echo "thumbnail and image is not valid.";
             }
         }else{
           echo "select both thumbnail and pdf.";
         }
         abort(500, 'Could not upload image :(');
     }

     public function viewUploads () {
         $images = Books::all();
         return view('view_uploads')->with('images', $images);
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
