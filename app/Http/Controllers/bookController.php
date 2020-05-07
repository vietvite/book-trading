<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class bookController extends Controller
{
    /**
     * Display a listing of the resource for homepage
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        $categoriesShowInHomepage = ['Văn học', 'Kỹ Năng', 'Marketing', 'Quản Trị'];
        // Get list categories
        $listCategories = DB::table('categories')
        ->whereIn('categoryName', $categoriesShowInHomepage)->get();
        
        // Get list categories group
        $booksGroupByCategory = array();
        foreach ($listCategories as $category) {
            $books = DB::table('books')->where('categoryId', $category->id)->paginate(8);
            $group = ['category' => $category, 'categoryGroup' => $books];
            
            array_push($booksGroupByCategory, $group);
        }
        // For category menu
        $categories = DB::table('categories')->get();

        return view('pages.home', compact('booksGroupByCategory', 'categories'));
    }

    /**
     * Display a listing query of explore more books
     *
     * @return \Illuminate\Http\Response
     */
    public function category($categoryId)
    {
        $books = DB::table('books')->where('categoryId', $categoryId)->get();
        // For category menu
        $categories = DB::table('categories')->get();
        foreach ($categories as $value) {
            if($value->id == $categoryId) {
                $category = $value;
                break;
            }
        }
        
        return view('pages.categories', compact('books', 'categories', 'category'));
    }

    /**
     * Display a listing query of more category books
     *
     * @return \Illuminate\Http\Response
     */
    public function detail($id) {
        $bookDetail = DB::table('books')->where('id', $id)->first();

        // For category menu
        $categories = DB::table('categories')->get();

        // Breadcumb
        foreach ($categories as $value) {
            if($value->id == $bookDetail->categoryId){
                $category = $value;
                break;
            }
        }
        $category = $category ? $category : "asd";

        return view('pages.detail', compact('bookDetail', 'categories', 'category'));
    }

    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $req)
    {
        $keyword = $req->query('search');
        return view('pages.search', compact('keyword'));
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
