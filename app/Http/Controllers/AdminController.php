<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Company;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.pages.dashboard');
    }

    public function companyList (){
        $companies = Company::paginate(10);
        return view('admin.pages.company.list', compact('companies'));
    }

    public function companyCreate(){
        return view('admin.pages.company.create');
    }

    public function companyStore(Request $request){
        $request->validate([
            'company_name' => 'required|string',
            'company_logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Handle the file upload
        if ($request->hasFile('company_logo')) {
            $image = $request->file('company_logo');
            $imgName = time() . '.' . $image->getClientOriginalExtension();
            $imgPath = $image->move(public_path('uploads/company'), $imgName);
        } else {
            return back()->withErrors(['company_logo' => 'Image upload failed']);
        }

        Company::create([
            'company_name' => $request->company_name,
            'company_logo' => 'uploads/company/' . $imgName,
        ]);

        return redirect()->back()->with('success', 'Company created successfully!');
    }

    // WORK

    public function listCategory(){

        $categories = Category::paginate(10);
        // dd($categories);

        return view('admin.pages.category.list', compact('categories'));
    }

    public function createCategory(){
        return view('admin.pages.category.create');
    }

    public function categoryStore(Request $request){
        $request->validate([
            'category_name' => 'string|required'
        ]);

        Category::create([
            'category_name' => $request->category_name,
        ]);

        return redirect()->back()->with('message', 'Category Addded Successfully !');
    }

    public function categoryEdit($id){
        $category = Category::findOrFail($id);

        return view('admin.pages.category.edit', compact('category'));
    }

    public function categoryUpdate(Request $request, $id){

        $request->validate([
            'category_name' => 'string|required'
        ]);

        $category = Category::findOrFail($id);

        if(!$category){
            return redirect()->back()->with('message', 'Category Not Available');
        }

        $category->update([
            'category_name' => $request->category_name
        ]);
        

        return redirect()->back()->with('message', 'Category Addded Successfully !');




        
    }

    public function categoryDelete(Request $request, $id){

        $category = Category::findOrFail($id);

        $category->delete();

        return redirect()->route('category.list')->with('message', 'Category Deleted Successfully !');

    }
}
