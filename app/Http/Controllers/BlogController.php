<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{

    private $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function doIncrementNote()
    {
        $title = $this->request->input('noteTitle');
        $content = $this->request->input('content');

        $noteId = DB::table('note')
            ->insertGetId([
                'title' => $title,
                'created_at' => Carbon::now()->toDateTimeString()
            ]);

        DB::table('content')->insert([
            'note_id' => $noteId,
            'created_at' => Carbon::now()->toDateTimeString(),
            'content' => $content
        ]);

        return response()->json([
            'result' => 'success'
        ]);
    }

    public function doIncrementContent()
    {
        $noteId = $this->request->input('noteId');
        $content = $this->request->input('content');

        DB::table('content')->insert([
            'note_id' => $noteId,
            'created_at' => Carbon::now()->toDateTimeString(),
            'content' => $content
        ]);

        return response()->json([
            'result' => 'success'
        ]);
    }

    public function getNoteList()
    {
        return DB::table('note')
            ->get();
    }


    public function increment()
    {
        return view('blog.increment', [
            'notes' => $this->getNoteList()
        ]);
    }

    public function index()
    {
        $lists = DB::table('note')
            ->orderBy('created_at', 'DESC')
            ->get();

        return view('blog.index', [
            'notes' => $lists
        ]);
    }

    public function getContentList()
    {
        $noteId = $this->request->input('noteId');

        $contents = DB::table('content')
            ->where('note_id', $noteId)
            ->get()
            ->toArray();

        return response()->json([
            'content' => $contents
        ]);
    }
}