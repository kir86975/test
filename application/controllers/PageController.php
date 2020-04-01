<?php

/**
 * Created by PhpStorm.
 * User: prg
 * Date: 05.08.2016
 * Time: 15:21
 */
class PageController extends Controller
{
    public function actionIndex()
    {
        $this->view->generate('home');
    }

    public function actionTags()
    {
        if (isset($_POST['taggedText'])) {
            $model = new Tags();
            $data = $model->getData($_POST['taggedText']);
        } else {
            $data = [];
        }

        $this->view->generate('tags', 'main', $data);
    }

    public function actionKeys()
    {
        if (isset($_POST['textWithKeys'])) {
            $model = new Keys();
            $data = $model->getData($_POST['textWithKeys']);
        } else {
            $data = [];
        }

        $this->view->generate('keys', 'main', $data);
    }

    public function actionTree()
    {
        $model = new Tree();
        $data = $model->getData();
        $this->view->generate('tree', 'main', $data);
    }

    public function actionRepeatingNumbers()
    {
        if (isset($_POST['numbersArray'])) {
            $model = new RepeatingNumbers();
            $data = $model->getData($_POST['numbersArray']);
        } else {
            $data = [];
        }

        $this->view->generate('repeating_numbers', 'main', $data);
    }

    public function actionTwoDimensionalArray()
    {
        if (isset($_POST['twoDimensionalArray'])) {
            $model = new TwoDimensionalArray();
            $data = $model->getData($_POST['twoDimensionalArray']);
        } else {
            $data = [];
        }

        $this->view->generate('two_dimensional_array', 'main', $data);
    }

    public function actionDownloadFile()
    {
        if (isset($_GET['fileName'])) {
            $filename = $_GET['fileName'];
            header("Cache-control: private");
            header("Content-type: application/force-download");
            header("Content-Length: ".filesize($filename));
            header("Content-Disposition: filename=".$filename);
            readfile($filename);
        }
    }

    public function actionPageNotFound()
    {
        $this->view->generate('page_not_found');
    }
}