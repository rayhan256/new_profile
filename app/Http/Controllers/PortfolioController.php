<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Portfolio;
use App\Models\PortfolioImage;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    //
    function index() {
        $portfolio = Portfolio::all();
        return view('cms.portfolio.index', ['data' => $portfolio]);
    }

    function add() {
        $category = Category::all();
        return view('cms.portfolio.add', ['categories' => $category]);
    }

    function post(Request $request) {
        $data = $request->all();
        $image = $request->file('thumbnail');
        $base_64 = base64_encode(file_get_contents($image));
        $portfolio = new Portfolio();
        $portfolio->name = $data['name'];
        $portfolio->client = $data['client'];
        $portfolio->project_date = $data['project_date'];
        $portfolio->url = $data['url'];
        $portfolio->desc = $data['desc'];
        $portfolio->thumbnail = $base_64;
        $portfolio->category_id = $data['category_id'];

        $portfolio->save();
        return redirect('/cms/portfolio');
    }

    function view($id) {
        $portfolio = Portfolio::query()->with('gallery')->with('category')->where('id', $id)->first();
        return view('cms.portfolio.view', ['data' => $portfolio]);
    }

    function add_image(Request $request) {
        $id = $request->input('portfolio_id');
        $image = $request->file('image');
        $base_64 = base64_encode(file_get_contents($image));

        $db = new PortfolioImage();
        $db->portfolio_id = $id;
        $db->image = $base_64;

        $db->save();
        return redirect()->back();
    }

    function destroy($id) {
        $portfolio = Portfolio::find($id);
        $portfolio->delete();
        return redirect()->back();
    }
}
