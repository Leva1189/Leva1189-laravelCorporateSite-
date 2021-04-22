<?php

namespace Corp\Http\Controllers;

use Corp\Menu;
use Corp\Repositories\ArticlesRepository;
use Corp\Repositories\MenusRepository;
use Corp\Repositories\PortfoliosRepository;
use Illuminate\Http\Request;

use Corp\Http\Requests;

class ArticleController extends SiteController
{
    //
    public function __construct(PortfoliosRepository $p_rep, ArticlesRepository $a_rep) {
        parent::__construct(new MenusRepository(new Menu()));

        $this->a_rep = $a_rep;
        $this->p_rep = $p_rep;

        $this->bar = 'right';
        $this->template = env('THEME').'.articles';

    }

    public function index()
    {
        //
        $articles = $this->getArticles();
        //dd($articles);

        $content = view(env('THEME').'.articles_content')->with('articles', $articles);
        $this->vars = array_add($this->vars, 'content', $content);

        return $this->renderOutput();
    }

    public function getArticles($alias = FALSE){

        $articles = $this->a_rep->get(['id','title', 'alias', 'created_at', 'img', 'desc', 'user_id', 'category_id'], FALSE, TRUE);

        if ($articles){
           // $articles->load('user', 'category', 'comments');
        }

        return $articles;
        //dd($articles);
    }

}
