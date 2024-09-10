<?php

namespace App\Http\Controllers;

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
}
