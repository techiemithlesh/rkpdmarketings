<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{

    public function testimonialList()
    {
        $testimonials = Testimonial::paginate(10);
        return view('admin.pages.testimonial.list', compact('testimonials'));
    }

    public function testimonialCreate()
    {
        $categories = Category::all();
        return view('admin.pages.testimonial.create', compact('categories'));
    }

    public function testimonialStore(Request $request)
    {

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string|max:500',
            'img' => 'nullable|image|mimes:jpg,jpeg,png|max:2048|dimensions:width=300,height=300',
            'rating_count' => 'required|integer|min:1|max:5',
            'company_name' => 'nullable|string|max:255',
            'client_name' => 'nullable|string|max:255',
            'client_position' => 'nullable|string|max:255',
            'client_contact' => 'nullable|string|max:255',
            'location' => 'nullable|string|max:255',
        ], [
            'img.dimensions' => 'The image must be exactly 300 pixels wide and 300 pixels tall.',
        ]);


        $imagePath = null;
        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $destinationPath = public_path('uploads/images/testimonials');
            $imageName = time() . '_' . $image->getClientOriginalName();

            // Move the uploaded file to the specified path
            $image->move($destinationPath, $imageName);

            // Save the relative path to store in the database
            $imagePath = 'uploads/images/testimonials/' . $imageName;
        }

        // Create a new testimonial with all attributes
        $testimonial = new Testimonial();
        $testimonial->title = $request->title;
        $testimonial->description = $request->description;
        $testimonial->img = $imagePath;
        $testimonial->rating_count = $request->rating_count;
        $testimonial->company_name = $request->company_name;
        $testimonial->client_name = $request->client_name;
        $testimonial->client_position = $request->client_position;
        $testimonial->client_contact = $request->client_contact;
        $testimonial->location = $request->location;
        $testimonial->save();

        // Redirect with success message
        return redirect()->route('testimonial.list')->with('success', 'Testimonial created successfully!');
    }

    public function testimonialEdit($id)
    {
        $categories = Category::all();

        $testimonial = Testimonial::findOrFail($id);

        return view('admin.pages.testimonial.edit', compact('categories', 'testimonial'));
    }

    public function testimonialUpdate(Request $request, $id)
    {
        // Fetch the testimonial by ID
        $testimonial = Testimonial::findOrFail($id);

        // Validate the incoming request
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string|max:500',
            'img' => 'nullable|image|mimes:jpg,jpeg,png|max:2048|dimensions:width=300,height=300',
            'rating_count' => 'required|integer|min:1|max:5'
        ], [
            'img.dimensions' => 'The image must be exactly 300 pixels wide and 300 pixels tall.',
        ]);


        $testimonial->title = $request->title;
        $testimonial->description = $request->description;
        $testimonial->rating_count = $request->rating_count;

        // Handle image upload if a new image is provided
        if ($request->hasFile('img')) {
            // Delete the old image if it exists
            if ($testimonial->img) {
                $oldImagePath = public_path($testimonial->img);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            // Upload new image
            $image = $request->file('img');
            $destinationPath = public_path('uploads/images/testimonials');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);

            // Save the new image path
            $testimonial->img = 'uploads/images/testimonials/' . $imageName;
        }

        // Save the updated testimonial
        $testimonial->save();

        // Redirect back with a success message
        return redirect()->route('testimonial.list')->with('success', 'Testimonial updated successfully!');
    }

    public function testimonialDelete($id)
    {
        
        $testimonial = Testimonial::findOrFail($id);

       
        if ($testimonial->img) {
            $imagePath = public_path($testimonial->img);
            if (file_exists($imagePath)) {
                unlink($imagePath); 
            }
        }

        
        $testimonial->delete();

       
        return redirect()->route('testimonial.list')->with('success', 'Testimonial deleted successfully!');
    }
}
