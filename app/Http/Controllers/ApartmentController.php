<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Apartment;
use App;
use Image;
use Gd;
use File;


class ApartmentController extends Controller
{

    public function __construct()
    {
//        $lang = session()->get('lang');
//        App::setLocale($lang);
        $this->middleware('auth', ['except' => 'show']);

    }

    public function show($lang, $url) {
        if( $lang === null ){
            App::setLocale('lt');
        }else{
            App::setLocale($lang);
        }

        //$url
        $apartment = Apartment::where('url', $url)->first();

        //jeigu neranda id su video metam 404 klaida
        if(!isset($apartment)){
            abort(404);
        }

        $allapartments = Apartment::all();
        $feature = explode('|', $apartment->features);

        $data = ['apartment' => $apartment, 'allapartments' => $allapartments, 'feature' => $feature];

        return view('pages.apartment')->with($data);
    }


    public function create()
    {
        return view('posts.upload');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'cover_image' => 'image|nullable|max:1999',
            'source' => 'required|max:1000000'
        ]);

        if($request->hasFile('cover_image')){
            $fullfilename = $request->file('cover_image')->getClientOriginalName();
            $filename = pathinfo($fullfilename, PATHINFO_FILENAME);
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            $storefilename = $filename.'_'.time().'.'.$extension;
            $path = $request->file('cover_image')->storeAs('public/cover_images', $storefilename);
        }else{
            $storefilename = 'noimage.jpg';
        }

        if($request->hasFile('source')){
            $fullfilename = $request->file('source')->getClientOriginalName();
            $filename = pathinfo($fullfilename, PATHINFO_FILENAME);
            $extension = $request->file('source')->getClientOriginalExtension();
            $storevideoname = $filename.'_'.time().'.'.$extension;
            $path = $request->file('source')->storeAs('public/video', $storevideoname);
        }else{
            return redirect('/posts')->with('error', 'Video must added');
        }

        $post = new Post;
        $post->title = $request->input('title');
        $post->description = $request->input('description');
        //$post->password = $request->input('password');
        $post->password = 0;
        $post->views = 0;
        $post->user_id = auth()->user()->id;
        $post->source = $storevideoname;
        $post->cover_image = $storefilename;
        $post->save();

        return redirect('/posts')->with('success', 'Video upladed');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
//    public function show($id)
//    {
//        $post = Post::find($id);
//
//        //jeigu neranda id su video metam 404 klaida
//        if(!isset($post)){
//            abort(404);
//        }
//
//        //add count
//        $count = $post->views;
//        $post->views = $count+1;
//        $post->save();
//
//        $posts = Post::orderBy('id', 'desc')->get();
//
//        $data = ['post' => $post, 'posts' => $posts];
//
//        return view('posts.show')->with($data);
//
//
//    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($lang, $id)
    {
        $post = Apartment::find($id);

//        if(auth()->user()->id !== $post->user_id){
//            return redirect('/posts')->with('error', 'Unauthorized accsess');
//        }

        return view('pages.editapartment')->with('apartment', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($lang, Request $request, $id)
    {
        $this->validate($request, [
            'active' => 'required',
            'title' => 'required',
            'url' => 'required',
            'seima' => 'required',
            'nerukantis' => 'required',
            'wifi' => 'required',
            'dusas' => 'required',
            'vonia' => 'required',
            'tv' => 'required',
            'panorama' => 'required',
            'terasa' => 'required',
            'kondicionerius' => 'required',
            'parkavimas' => 'required',
            'balkonas' => 'required',
            'virtuve' => 'required',
            'wc' => 'required',
            'jacuzzi' => 'required',
            'gyvunai' => 'required',
            'iejimas' => 'required',
            'address' => 'required',
            'departuretime' => 'required',
            'arrivetime' => 'required',
            'flore' => 'required',
            'minperiod' => 'required',
            'area' => 'required',
            'room' => 'required',
            'maxhuman' => 'required',
            'bedcount' => 'required',
            'pricefrom' => 'required',
            'priceuntil' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'description' => 'required',
            'descen' => 'required',
            'descru' => 'required',
            'map' => 'required',
        ]);

        $post = Apartment::findOrFail($id);
        $post->active = $request->input('active');
        $post->title = $request->input('title');
        $post->url = $request->input('url');
        $post->features = $request->input('seima')."|".$request->input('nerukantis')."|".$request->input('wifi')."|".$request->input('dusas')."|".$request->input('vonia')."|".$request->input('tv')."|".$request->input('panorama')."|".$request->input('terasa')."|".$request->input('kondicionerius')."|".$request->input('parkavimas')."|".$request->input('balkonas')."|".$request->input('virtuve')."|".$request->input('wc')."|".$request->input('jacuzzi')."|".$request->input('gyvunai')."|".$request->input('iejimas');
        $post->minperiod = $request->input('minperiod');
        if (empty($request->input('youtubeurl'))) {
            $post->youtubeurl = null;
        }else{
            $post->youtubeurl = $request->input('youtubeurl');
        }
        $post->address = $request->input('address');
        $post->departuretime = $request->input('departuretime');
        $post->arrivetime = $request->input('arrivetime');
        $post->flore = $request->input('flore');
        $post->area = $request->input('area');
        $post->room = $request->input('room');
        $post->maxhuman = $request->input('maxhuman');
        $post->bedcount = $request->input('bedcount');
        $post->pricefrom = $request->input('pricefrom');
        $post->priceuntil = $request->input('priceuntil');
        $post->phone = $request->input('phone');
        $post->email = $request->input('email');
        $post->description = $request->input('description');
        $post->descen = $request->input('descen');
        $post->descru = $request->input('descru');
        $post->map = $request->input('map');
        $post->save();

        //return var_dump($this);
        return redirect('/dashboard')->with('success', 'Apgyvendinimas atnaujintas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $apartment = Post::findOrFail($id);

//        if(auth()->user()->id !== $apartment->user_id){
//            return redirect('/dashboard')->with('error', 'Neautorizuota prieiga');
//        }

        //rodom ka turim
        //$files = Storage::allFiles("/");
        //return $files;

        //trinam foto ir video
//        $s = "public/cover_images/".$post->cover_image;
//        $v = "public/video/".$post->source;
//        Storage::delete([$s, $v]);

        $apartment->delete();

        return redirect('/dashboard')->with('success', 'Apgyvendinimas ištrintas');
    }

    public function uploadslide($id){
        $apartment = Apartment::findOrFail($id);

        return view('pages.addslide')->with('apartment', $apartment);
    }

    public function storeslide(Request $request){

        $id = $request->input('id');
        $slaidonr = $request->input('slaidonr');

        $this->validate($request, [
            'slide' => 'image|nullable|max:1999',
        ]);

        if($request->hasFile('slide')){
            $fullfilename = $request->file('slide')->getClientOriginalName();
            $filename = pathinfo($fullfilename, PATHINFO_FILENAME);
            $extension = $request->file('slide')->getClientOriginalExtension();
            $storefilename = $filename.'_'.time().'.'.$extension;

            $image = $request->file('slide');
            $image->move(public_path('temp'),$fullfilename);

            $img = Image::make(public_path('/temp/'. $fullfilename));
            $img->insert(public_path('watermark.png'), 'bottom-right', 10, 10);
            //$img->save(public_path('/temp/'. $fullfilename));
            $img->save(public_path('/storage/img/apgyvendinimas/'.$id.'/'. $storefilename));
            File::delete(public_path('/temp/'. $fullfilename));
        }else{
            $storefilename = 'noimage.jpg';
        }

        $post = Apartment::findOrFail($id);
        $post->$slaidonr = $storefilename;
        $post->save();

        return redirect("/addslide/$id")->with('success', 'Slide info atnaujinta');
    }

}
