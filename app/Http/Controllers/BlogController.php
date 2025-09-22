<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Product;
use Faker\Provider\Image;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $products = Product::all();
        $blogs = Blog::all();
        return view('admin.blog',[
            'products' => $products,
            'blogs' => $blogs
        ]);
    }
    public function edit($id){
        $blog = Blog::find($id);
        return view('admin.editBlog',[
            'blog'=>$blog
        ]);
    }
    public function eBlog(Request $request){
        $edit = Blog::find($request->id);
        $edit->title = $request->input('title');
        $edit->detail = $request->input('detail');
        $edit->link = $request->input('link');
        $edit->linkName = $request->input('linkName');
        $edit->detailOne = $request->input('detailOne');
        $edit->linkNameOne = $request->input('linkNameOne');
        $edit->linkOne = $request->input('linkOne');
        $edit->quote = $request->input('quote');
        $edit->quoteAuthor = $request->input('quoteAuthor');
        $edit->detailTwo = $request->input('detailTwo');
        $edit->linkNameTwo = $request->input('linkNameTwo');
        $edit->linkTwo = $request->input('linkTwo');
        $edit->detailThree = $request->input('detailThree');

        if ($request->image) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalName();
            $filename = time() . '.' . $extension;
            $file->move('uploads/product/', $filename);
            $edit->image = $filename;
        }

        $edit->save();


        return redirect()->back()->with('success','Blog Edited Successfully');

    }
    public function storeBlog(Request $request){
        $pictures = new Blog();
        $pictures->title = $request->input('title');
        $pictures->detail = $request->input('detail');
        $pictures->link = $request->input('link');
        $pictures->linkName = $request->input('linkName');
        $pictures->detailOne = $request->input('detailOne');
        $pictures->linkNameOne = $request->input('linkNameOne');
        $pictures->linkOne = $request->input('linkOne');
        $pictures->quote = $request->input('quote');
        $pictures->quoteAuthor = $request->input('quoteAuthor');
        $pictures->detailTwo = $request->input('detailTwo');
        $pictures->linkNameTwo = $request->input('linkNameTwo');
        $pictures->linkTwo = $request->input('linkTwo');
        $pictures->detailThree = $request->input('detailThree');

        if ($request->image) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalName();
            $filename = time() . '.' . $extension;
            $file->move('uploads/product/', $filename);
            $pictures->image = $filename;
        }

        $pictures->save();


        return redirect()->back()->with('success','Blog Added Successfully');
    }
}
