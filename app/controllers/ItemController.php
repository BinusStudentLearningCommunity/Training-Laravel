<?php

class ItemController extends BaseController
{
	public function index()
	{
		$items = Item::all(); //gather all data from DB
		//return dd($items); //cek object items
		//var_dump($items);
		return View::make('items.index') //file html app/views/items/index.blade.php
			->with('items', $items);
	}

	public function create()
	{
		return View::make('items.create'); //redirect ke Views/items/create.blade.php
	}

	public function postItem()
	{
		$rules = array('name' => 'required', 'price' => 'required | integer');
		$validator = Validator::make(Input::all(), $rules);

		if($validator->fails() )
		{
			return View::make('items.create');
		}
		else
		{
			$item = new Item();
			$item->name = Input::get('name');
			$item->price = Input::get('price');
			$item->save();
			Session::flash('message', 'Item berhasil disimpen');

			return Redirect::route('items.index');
		}
	}

	public function update($id) //menuju form update
	{
		$item = Item::find($id);
		return View::make('items.update') 
			->with('item', $item);
	}

	public function edit() //edit item di dalam database
	{
		$item = Item::find(Input::get('id'));
		$item->name = Input::get('name');
		$item->price = Input::get('price');
		$item->save();
		return Redirect::route('items.index');
	}

	public function destroy($id)
	{
		$item = Item::find($id);
		$item->delete();
		Session::flash('message', 'Data sudah terhapus');
		return Redirect::route('items.index');
	}
}