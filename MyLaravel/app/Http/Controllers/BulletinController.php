<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bulletin;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class BulletinController extends Controller
{
	public function index() {
	   $items = DB::table('bulletins')->simplePaginate(7);
	   return view('bulletin.index', ['items' => $items]);
	}
	// 表示
	public function view(Request $request) {
		$item = Bulletin::find($request->id);
	   	return view('bulletin.view', ['item' => $item]);
	}
	// 削除
	public function delete(Request $request) {
		$item = Bulletin::find($request->id);
		return view('bulletin.delete', ['item' => $item]);
	}
	public function remove(Request $request) {
		Bulletin::find($request->id)->delete();
		return redirect('/bulletin');
	}
	// 新規作成
	public function add() {
   		return view('bulletin.add');
	}
	public function create(Request $request) {
		$this->validate($request, Bulletin::$rules);
		$bulletin = new Bulletin;
		$form = $request->all();
		unset($form['_token']);
		$bulletin->fill($form)->save();
		return redirect('/bulletin');
	}
	// 更新
	public function edit(Request $request) {
		$item = Bulletin::find($request->id);
   		return view('bulletin.edit', ['item' => $item]);
	}
	public function update(Request $request) {
		$this->validate($request, Bulletin::$rules);
		$bulletin = Bulletin::find($request->id);
		$form = $request->all();
		unset($form['_token']);
		$bulletin->fill($form)->save();
		return redirect('/bulletin');
	}
}