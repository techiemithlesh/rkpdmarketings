<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Company;
use App\Models\Work;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.pages.dashboard');
    }

    public function companyList()
    {
        $companies = Company::paginate(10);
        return view('admin.pages.company.list', compact('companies'));
    }

    public function companyCreate()
    {
        return view('admin.pages.company.create');
    }

    public function companyStore(Request $request)
    {
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

    public function listCategory()
    {

        $categories = Category::paginate(10);
        // dd($categories);

        return view('admin.pages.category.list', compact('categories'));
    }

    public function createCategory()
    {
        return view('admin.pages.category.create');
    }

    public function categoryStore(Request $request)
    {
        $request->validate([
            'category_name' => 'string|required'
        ]);

        Category::create([
            'category_name' => $request->category_name,
        ]);

        return redirect()->back()->with('message', 'Category Addded Successfully !');
    }

    public function categoryEdit($id)
    {
        $category = Category::findOrFail($id);

        return view('admin.pages.category.edit', compact('category'));
    }

    public function categoryUpdate(Request $request, $id)
    {

        $request->validate([
            'category_name' => 'string|required'
        ]);

        $category = Category::findOrFail($id);

        if (!$category) {
            return redirect()->back()->with('message', 'Category Not Available');
        }

        $category->update([
            'category_name' => $request->category_name
        ]);


        return redirect()->back()->with('message', 'Category Addded Successfully !');
    }

    public function categoryDelete(Request $request, $id)
    {

        $category = Category::findOrFail($id);

        $category->delete();

        return redirect()->route('category.list')->with('message', 'Category Deleted Successfully !');
    }

    // WORK

    public function portfolioList()
    {

        $portfolios = Work::with('category')->paginate(10);

        return view('admin.pages.portfolio.list', compact('portfolios'));
    }

    public function portfolioCreate()
    {
        $categories = Category::all();

        // dd($categories);

        return view('admin.pages.portfolio.create', compact('categories'));
    }


    public function portfolioStore(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'required|exists:tbl_work_categories,id',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048|dimensions:width=1500,height=1915',
            'live_url' => 'nullable|url',
        ], [
            'image.dimensions' => 'The image must be exactly 1500 pixels wide and 1915 pixels tall.',
        ]);

        // Initialize image name
        $imageName = '';

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/images/portfolios'), $imageName);
        }

        // Create a new portfolio entry
        $portfolio = new Work();
        $portfolio->title = $request->input('title');
        $portfolio->category_id = $request->input('category_id');
        $portfolio->description = $request->input('description');

        // Only set the image path if an image was uploaded
        if ($imageName) {
            $portfolio->image = 'uploads/images/portfolios/' . $imageName;
        }

        $portfolio->live_url = $request->input('live_url');

        // Save the portfolio
        $portfolio->save();

        return redirect()->route('portfolio.list')->with('success', 'Portfolio created successfully!');
    }


    public function portfolioEdit($id)
    {
        $portfolio = Work::with('category')->findOrFail($id);
        // return $portfolio;

        $categories = Category::all();

        return view('admin.pages.portfolio.edit', compact('portfolio', 'categories'));
    }

    public function portfolioUpdate(Request $request, $id)
    {
        // Validate incoming request
        $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'required|exists:tbl_work_categories,id',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048|dimensions:width=1500,height=1915',
            'live_url' => 'nullable|url',
        ], [
            'image.dimensions' => 'The image must be exactly 1500 pixels wide and 1915 pixels tall.',
        ]);

        // Find the portfolio entry
        $portfolio = Work::findOrFail($id);

        // If a new image is uploaded
        if ($request->hasFile('image')) {
            // Unlink the previous image if it exists
            if ($portfolio->image) {
                $existingImagePath = public_path($portfolio->image);
                if (file_exists($existingImagePath)) {
                    unlink($existingImagePath);
                }
            }

            // Store the new image
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/images/portfolios'), $imageName);
            $portfolio->image = 'uploads/images/portfolios/' . $imageName; // Update the image path
        }

        // Update other fields
        $portfolio->title = $request->input('title');
        $portfolio->category_id = $request->input('category_id');
        $portfolio->description = $request->input('description');
        $portfolio->live_url = $request->input('live_url');

        // Save the updated portfolio entry
        $portfolio->save();

        return redirect()->route('portfolio.list')->with('success', 'Portfolio updated successfully!');
    }

    public function portfolioDelete($id)
    {
        // Find the portfolio entry
        $portfolio = Work::findOrFail($id);

        // Check if the portfolio has an existing image
        if ($portfolio->image) {
            $existingImagePath = public_path($portfolio->image);
            // Unlink the image if it exists
            if (file_exists($existingImagePath)) {
                unlink($existingImagePath);
            }
        }

        // Delete the portfolio entry
        $portfolio->delete();

        return redirect()->route('portfolio.list')->with('success', 'Portfolio deleted successfully!');
    }
}
