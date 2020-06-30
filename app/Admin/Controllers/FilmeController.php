<?php

namespace App\Admin\Controllers;

use App\Filme;
use App\Genero;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class FilmeController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Filme';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Filme());

        $grid->column('id', __('Id'));
        $grid->column('poster')->image();
        $grid->column('titulo', __('TÍtulo'));
        $grid->column('direcao', __('Direção'));
        $grid->column('duracao', __('Duração'))->display(function () {
            return $this->duracao . 'min';
        })->filter('range');
        $grid->column('lancamento', __('Lançamento'))->date('d/m/Y');
        $grid->column('classificacao', __('Classificação'));
        $grid->column('genero.nome', __('Gênero'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Filme::findOrFail($id));

        $show->poster()->image();
        $show->field('id', __('Id'));
        $show->field('titulo', __('Título'));
        $show->field('direcao', __('Direção'));
        $show->field('duracao', __('Duração'));
        $show->field('classificacao', __('Classificação'));
        $show->field('sinopse', __('Sinopse'));
        $show->field('lancamento', __('Lançamento'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        $show->genero('Gênero', function ($genero) {
            $genero->setResource('/admin/generos');
            $genero->id();
            $genero->nome();
        });

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Filme());

        $form->text('titulo', __('Título'));
        $form->text('direcao', __('Direção'));
        $form->number('duracao', __('Duração'))->help('Duração do filme em minutos.');
        $form->text('classificacao', __('Classificação'))->help('Classificação indicativa do filme.');
        $form->select('genero_id', __('Gênero'))->options(Genero::all()->pluck('nome', 'id'));
        $form->textarea('sinopse', __('Sinopse'));
        $form->date('lancamento', __('Lançamento'));
        $form->image('poster', __('Poster'))->name(function ($file) {
            return 'poster_' . round(microtime(true) * 1000) . '.' . $file->guessExtension();
        })->removable();

        return $form;
    }
}
