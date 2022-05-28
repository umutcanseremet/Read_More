<?php

namespace App\Http\Controllers;
use App\Models\Veriler;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Array_;

class MainController extends Controller
{
    public function index(){
        $topics=Veriler::all();
        foreach ($topics as $item)
        $data[]=array(
            'id'=>$item->id,
            'slug'=>$item->slug,
            'topic'=>$item->topic,
            'writer' => Str::words($item->writer, 30, '...'),
            'image' => asset($item->image),
        );
        return view('index', ['topics' => $data]);
    }
    public  function show($id,$slug){
        $deneme = Veriler::findOrFail($id);
        $topic[] = array(
            'topic' => $deneme->topic,
            'writer' => $deneme->writer,
            'image' => asset($deneme->image),
        );
        return view('show',compact('topic'));
    }
    public function add_text(){
        return view('add_text');
    }
    public function store(Request $request)
    {

        $save = new Veriler();
        $save->topic = $request->topic;
        $save->writer = $request->writer;
        $save->slug = Str::slug($save->topic, '-');
        $imageName = time().'.'.$request->image->extension();
        $save->image = $request->image->move('images', $imageName);

        if ($save->save()) {

            return back()->with('success', 'Resim Başarıyla Eklendi 🙂');

        }

        return back()->withErrors('fail', 'Resim Eklenirken Hata Oluştu!');

    }
}
