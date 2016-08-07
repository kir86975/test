<?php

/**
 * Created by PhpStorm.
 * User: prg
 * Date: 05.08.2016
 * Time: 15:21
 */
class PageController extends Controller
{
    /**
     * PageController constructor.
     */
    public function __construct()
    {
        $this->model = new Page();
        parent::__construct();
    }

    public function actionIndex()
    {
        $this->view->generate('page');
    }

    public function actionTags()
    {
        $this->view->generate('tags');
    }

    public function actionKeys()
    {
        $this->view->generate('keys');
    }

    public function actionTree()
    {
        $this->view->generate('tree');
    }

    public function actionRepeatingNumbers()
    {
        $this->view->generate('repeating_numbers');
    }

    public function actionTwoDimensionalArray()
    {
        $this->view->generate('two_dimensional_array');
    }
}