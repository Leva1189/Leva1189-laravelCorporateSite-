<?php

namespace Corp\Http\Controllers;

use Config;
use Corp\Menu;
use Corp\Repositories\MenusRepository;

use Illuminate\Http\Request;

use Corp\Http\Requests;
use Corp\Repositories\SlidersRepository;

class IndexController extends SiteController
{
    public function __construct(SlidersRepository $s_rep) {
       parent::__construct(new MenusRepository(new Menu()));

       $this->s_rep = $s_rep;

       $this->bar = 'right';
       $this->template = env('THEME').'.index';

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $sliderItems = $this->getSliders();

       // dd($sliderItems);

        $sliders = view(env('THEME').'.slider')->with('sliders', $sliderItems)->render();
        $this->vars = array_add($this->vars, 'sliders', $sliders);


        return $this->renderOutput();
    }

    public function getSliders(){
        $sliders = $this->s_rep->get();

        //isEmpty() - Laravel метод с колекцие. Вернет истину если коллекция пуста
        if ($sliders->isEmpty()){
            return FALSE;
        }

        $sliders->transform(function ($item, $key){
            $item->img = Config::get('settings.slider_path').'/'.$item->img;
            return $item;
        });
       // dd($sliders);
            return $sliders;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
