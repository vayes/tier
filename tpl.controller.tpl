<?php

namespace Prime\Controller\app;

use Prime\Controller\AppController;
use Prime\Model\@tierModel;
use Prime\Service\Vayes\Prime\CrudControllerTrait;

class @tierController extends AppController
{
    use CrudControllerTrait {
        applyChanges as protected traitApplyChanges;
    }

    /** @var @tierModel */
    protected $model;

    public function __construct()
    {
        parent::__construct();

        $this->model =& model(@tierModel::class);
    }

    public function index($id = null)
    {
        $this->delegateCrudAction($id);

        loadPrimeHelper('PrimeForm');

        return $this->render('@viewFolder/index.html.twig', [
            // 'route' => localized_uri($this->getLocale(), 'app_@viewFolder')
            'route' => localized_uri($this->getLocale(), 'app/@tier/index')
        ]);
    }

    protected function applyChanges($id = null, ?array $data = array())
    {
        $data = $this->setData($id);

        return $this->traitApplyChanges($id, $data, []);
    }
}
