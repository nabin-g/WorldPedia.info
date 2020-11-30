<?php

namespace App\Http\Controllers\Frontend;


use App\Models\Comment;
use App\Http\Controllers\FrontendController;
use App\Models\About;
use App\Models\Bigyapan;
use App\Models\Category;

use App\Models\Contact;
use App\Models\Gallery;
use App\Models\Info;
use App\Models\Post;
use App\Models\Video;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class HomeController extends FrontendController
{
    public function __construct()
    {
        $this->_datas ['info'] = Info::orderBy('id', 'desc')->first();
        $this->_datas ['categories'] = Category::all();
        $this->_datas['search'] = '';
    }

    public function index()
    {

            $this->_datas['info'] = Info::orderBy('id', 'desc')->first();
            $this->_datas['technology'] = Category::where('id',1)->get()[0];
            $this->_datas['education'] = Category::where('id',3)->get()[0];
            $this->_datas['billionaire'] = Category::where('id',4)->get()[0];
            $this->_datas['travel'] = Category::where('id',5)->get()[0];
            $this->_datas['entertainment'] = Category::where('id',6)->get()[0];
            $this->_datas['newsUpdate'] = Category::where('id',12)->get()[0];
            $this->_datas['celebrity'] = Category::where('id',7)->get()[0];
            $this->_datas['politic'] = Category::where('id',8)->get()[0];
            $this->_datas['business'] = Category::where('id',2)->get()[0];
            $this->_datas['other'] = Category::where('id',11)->get()[0];
            $this->_datas['popularPosts'] = Post::where('status',1)->orderBy('view','desc')->limit(9)->get();


            return view($this->pages . 'index', $this->_datas);
    }

    public function listing(String $slug)
    {
//        dd('testins..g');
        try {
            $this->_datas ['cat'] = Category::where(['slug' => $slug])->first();
            $this->_datas ['ads'] = Bigyapan::orderBy('id', 'desc')->get();
//            $this->_datas ['posts'] = Post::orderBy('id', 'desc')->paginate(10);
            $this->_datas ['posts'] = Post::select('posts.*', 'C.order as c_order', 'C.name as c_name', 'C.slug as c_slug')
                ->join('category_post as CP', 'posts.id', '=', 'CP.post_id')
                ->join('categories as C', 'C.id', '=', 'CP.category_id')
                ->orderBy('created_at', 'desc')
                ->where('C.slug', $slug)
                ->paginate(15);
//            dd( $this->_datas ['posts']->toArray());

            $this->_datas ['popularPosts'] = Post::select('posts.*', 'C.order as c_order', 'C.name as c_name', 'C.slug as c_slug')
                ->join('category_post as CP', 'posts.id', '=', 'CP.post_id')
                ->join('categories as C', 'C.id', '=', 'CP.category_id')
                ->orderBy('created_at', 'desc')
                ->limit(10)->get();
            return view($this->pages . 'listing', $this->_datas);
        } catch (QueryException $e) {
        } catch (\Exception $e) {
            return view($this->pages . 'error', ['error' => $e->getMessage()]);
        }
    }

    public function details(String $slug)
    {
        try {

//            dd($slug);
            $post = Post::where(['slug' => $slug])->first();
            $this->_datas ['post'] = $post;
            $post->view = (int)$post->view + 1;
            $post->save();

            $this->_datas ['popularPosts'] = Post::select('posts.*', 'C.order as c_order', 'C.name as c_name', 'C.slug as c_slug')
                ->join('category_post as CP', 'posts.id', '=', 'CP.post_id')
                ->join('categories as C', 'C.id', '=', 'CP.category_id')
                ->orderBy('created_at', 'desc')
                ->limit(10)->get();
            return view($this->pages . 'details', $this->_datas);
        } catch (QueryException $e) {
            return view($this->pages . 'error', ['error' => $e->getMessage()]);
        } catch (\Exception $e) {
            return view($this->pages . 'error', ['error' => $e->getMessage()]);
        }
    }

    public function about()
    {
        try {
            $this->_datas ['abouts'] = About::orderBy('id', 'desc')->first();
            return view($this->pages . 'about', $this->_datas);
        } catch (\Exception $e) {
            return view($this->pages . 'error', ['error' => $e->getMessage()]);
        }
    }

    public function comment(Request $request)
    {
        $post_id = (int)$request->post_id;

        $this->validate($request, [
            'post_id' => 'required',
            'name' => 'required',
            'email' => 'required',
            'comment' => 'required',
        ]);

        try {

            Comment::create([
                'name' => $request->name,
                'email' => $request->email,
                'comment' => $request->comment,
//                'subject' => $request->subject,
                'post_id' => $request->post_id,
            ]);
            return redirect()->back()->with('success', 'Comment sent successfully !!');

            /* } catch (QueryException $e) {
                 return view($this->pages . 'error', ['error' => $e->getMessage()]);
            */
        } catch (\Exception $e) {
//            return redirect()->back()->with('error', $e->getMessage());
//            return view($this->_pages . 'error', ['error', $e->getMessage()]);

            return $e->getMessage();
        }
    }


    public function contacts(Request $request)
    {
        try {
            return view($this->pages . 'contact',$this->_datas);
        } catch (\Exception $e) {
            return view($this->pages . 'error', ['error' => $e->getmessage()]);
        }
    }

    public function contactAction(Request $request)
    {

        try {

            Contact::create([
                'name' => ucwords($request->name),
                'email' => $request->email,
                'subject' => $request->subject,
                'details' => $request->comment,
            ]);

            return redirect()->back()->with('success', "Thank you,We Will Contact You Soon!!!");

        } catch (\Exception $e) {

            return view($this->_pages . 'error', ['error', $e->getMessage()]);
        }


    }
    public function search(Request $request) {
        $this->_datas ['ads'] = Bigyapan::orderBy('id', 'desc')->get();
        $this->_datas ['posts'] = Post::select('posts.*', 'C.order as c_order', 'C.name as c_name', 'C.slug as c_slug')
            ->join('category_post as CP', 'posts.id', '=', 'CP.post_id')
            ->join('categories as C', 'C.id', '=', 'CP.category_id')
            ->orderBy('created_at', 'desc')
            ->where('posts.title', 'like', '%'.$request->search.'%')
            ->orWhere('posts.details', 'like', '%'.$request->search.'%')
            ->paginate(10);
        $this->_datas['search'] = $request->search;

        return view($this->pages . 'search',$this->_datas);
    }



}
